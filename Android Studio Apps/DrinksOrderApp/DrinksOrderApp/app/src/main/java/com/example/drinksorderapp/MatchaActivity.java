package com.example.drinksorderapp;

import android.app.LoaderManager;
import android.content.ContentValues;
import android.content.CursorLoader;
import android.content.Intent;
import android.content.Loader;
import android.database.Cursor;
import android.net.Uri;
import android.os.Bundle;

import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.ActionBar;
import androidx.appcompat.app.AppCompatActivity;

import com.example.drinksorderapp.Database.OrderContract;

public class MatchaActivity extends AppCompatActivity implements LoaderManager.LoaderCallbacks<Cursor> {

    // first of all we will get the views that are  present in the layout of info

    ImageView imageView;
    ImageButton plusquantity, minusquantity;
    TextView quantitynumber, drinnkName, coffeePrice;
    CheckBox addToppings, addExtraCream;
    Button addtoCart;
    int quantity;
    public Uri mCurrentCartUri;
    boolean hasAllRequiredValues = false;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        getSupportActionBar().setDisplayOptions(ActionBar.DISPLAY_SHOW_CUSTOM);

        getSupportActionBar().setCustomView(R.layout.toolbar_title_layout);

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info);

        imageView = findViewById(R.id.imageViewInfo);
        plusquantity = findViewById(R.id.addquantity);
        minusquantity  = findViewById(R.id.subquantity);
        quantitynumber = findViewById(R.id.quantity);
        drinnkName = findViewById(R.id.drinkNameinInfo);
        coffeePrice = findViewById(R.id.coffeePrice);
        addToppings = findViewById(R.id.addToppings);
        addtoCart = findViewById(R.id.addtocart);
        addExtraCream = findViewById(R.id.addCream);

        // setting the name of drink

        drinnkName.setText("Matcha");
        imageView.setImageResource(R.drawable.match);

        addtoCart.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MatchaActivity.this, SummaryActivity.class);
                startActivity(intent);
                // once this button is clicked we want to save our values in the database and send those values
                // right away to summary activity where we display the order info

                SaveCart();
            }
        });

        plusquantity.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // coffee price
                int basePrice = 5;
                quantity++;
                displayQuantity();
                int coffePrice = basePrice * quantity;
                String setnewPrice = String.valueOf(coffePrice);
                coffeePrice.setText(setnewPrice);


                // checkBoxes functionality

                int ifCheckBox = CalculatePrice(addExtraCream, addToppings);
                coffeePrice.setText("$ " + ifCheckBox);

            }
        });

        minusquantity.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                int basePrice = 5;
                // because we dont want the quantity go less than 0
                if (quantity == 0) {
                    Toast.makeText(MatchaActivity.this, "Please order more than 1 Thank you!", Toast.LENGTH_SHORT).show();
                } else {
                    quantity--;
                    displayQuantity();
                    int coffePrice = basePrice * quantity;
                    String setnewPrice = String.valueOf(coffePrice);
                    coffeePrice.setText(setnewPrice);


                    // checkBoxes functionality

                    int ifCheckBox = CalculatePrice(addExtraCream, addToppings);
                    coffeePrice.setText("$ " + ifCheckBox);
                }
            }
        });



    }

    private boolean SaveCart() {

        if (quantity <= 0){
            Toast.makeText(MatchaActivity.this, "Please order at least one or more.", Toast.LENGTH_SHORT).show();
        } else {

            // getting the values from our views
            String name = drinnkName.getText().toString();
            String price = coffeePrice.getText().toString();
            String quantity = quantitynumber.getText().toString();

            ContentValues values = new ContentValues();
            values.put(OrderContract.OrderEntry.COLUMN_NAME, name);
            values.put(OrderContract.OrderEntry.COLUMN_PRICE, price);
            values.put(OrderContract.OrderEntry.COLUMN_QUANTITY, quantity);

            if (addExtraCream.isChecked()) {
                values.put(OrderContract.OrderEntry.COLUMN_CREAM, "Has Cream: YES");
            } else {
                values.put(OrderContract.OrderEntry.COLUMN_CREAM, "Has Cream: NO");

            }

            if (addToppings.isChecked()) {
                values.put(OrderContract.OrderEntry.COLUMN_HASTOPPING, "Has Toppings: YES");
            } else {
                values.put(OrderContract.OrderEntry.COLUMN_HASTOPPING, "Has Toppings: NO");

            }

            if (mCurrentCartUri == null) {
                Uri newUri = getContentResolver().insert(OrderContract.OrderEntry.CONTENT_URI, values);
                if (newUri==null) {
                    Toast.makeText(this, "Failed to add to Cart", Toast.LENGTH_SHORT).show();
                } else {
                    Toast.makeText(this, "Success  adding to Cart", Toast.LENGTH_SHORT).show();

                }
            }

        }
        hasAllRequiredValues = true;
        return hasAllRequiredValues;

    }

    private int CalculatePrice(CheckBox addExtraCream, CheckBox addToppings) {

        int basePrice = 5;

        if (addExtraCream.isChecked()) {
            // add the cream cost $2
            basePrice = basePrice + 2;
        }

        if (addToppings.isChecked()) {
            // topping cost is $3
            basePrice = basePrice + 3;
        }

        return basePrice * quantity;
    }

    private void displayQuantity() {
        quantitynumber.setText(String.valueOf(quantity));
    }

    @Override
    public Loader<Cursor> onCreateLoader(int id, Bundle args) {
        String[] projection = {OrderContract.OrderEntry._ID,
                OrderContract.OrderEntry.COLUMN_NAME,
                OrderContract.OrderEntry.COLUMN_PRICE,
                OrderContract.OrderEntry.COLUMN_QUANTITY,
                OrderContract.OrderEntry.COLUMN_CREAM,
                OrderContract.OrderEntry.COLUMN_HASTOPPING
        };

        return new CursorLoader(this, mCurrentCartUri,
                projection,
                null,
                null,
                null);
    }

    @Override
    public void onLoadFinished(Loader<Cursor> loader, Cursor cursor) {

        if (cursor == null || cursor.getCount() < 1) {
            return;
        }

        if (cursor.moveToFirst()) {

            int name = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_NAME);
            int price = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_PRICE);
            int quantity = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_QUANTITY);
            int hasCream = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_CREAM);
            int hasTopping = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_HASTOPPING);


            String nameofdrink = cursor.getString(name);
            String priceofdrink = cursor.getString(price);
            String quantityofdrink = cursor.getString(quantity);
            String yeshasCream = cursor.getString(hasCream);
            String yeshastopping = cursor.getString(hasTopping);

            drinnkName.setText(nameofdrink);
            coffeePrice.setText(priceofdrink);
            quantitynumber.setText(quantityofdrink);
        }


    }

    @Override
    public void onLoaderReset(Loader<Cursor> loader) {


        drinnkName.setText("");
        coffeePrice.setText("");
        quantitynumber.setText("");

    }
}