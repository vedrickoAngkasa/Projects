// Generated by view binder compiler. Do not edit!
package com.example.drinksorderapp.databinding;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.RelativeLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.cardview.widget.CardView;
import androidx.viewbinding.ViewBinding;
import androidx.viewbinding.ViewBindings;
import com.example.drinksorderapp.R;
import java.lang.NullPointerException;
import java.lang.Override;
import java.lang.String;

public final class ActivityInfoBinding implements ViewBinding {
  @NonNull
  private final RelativeLayout rootView;

  @NonNull
  public final CheckBox addCream;

  @NonNull
  public final CheckBox addToppings;

  @NonNull
  public final ImageButton addquantity;

  @NonNull
  public final Button addtocart;

  @NonNull
  public final TextView coffeePrice;

  @NonNull
  public final RadioButton coldRadioButton;

  @NonNull
  public final TextView descriptioninfo;

  @NonNull
  public final TextView drinkNameinInfo;

  @NonNull
  public final CardView firstCardView;

  @NonNull
  public final RadioButton hotradioButton;

  @NonNull
  public final ImageView imageViewInfo;

  @NonNull
  public final TextView quantity;

  @NonNull
  public final RadioGroup radioGroup;

  @NonNull
  public final CardView secondCardView;

  @NonNull
  public final ImageButton subquantity;

  private ActivityInfoBinding(@NonNull RelativeLayout rootView, @NonNull CheckBox addCream,
      @NonNull CheckBox addToppings, @NonNull ImageButton addquantity, @NonNull Button addtocart,
      @NonNull TextView coffeePrice, @NonNull RadioButton coldRadioButton,
      @NonNull TextView descriptioninfo, @NonNull TextView drinkNameinInfo,
      @NonNull CardView firstCardView, @NonNull RadioButton hotradioButton,
      @NonNull ImageView imageViewInfo, @NonNull TextView quantity, @NonNull RadioGroup radioGroup,
      @NonNull CardView secondCardView, @NonNull ImageButton subquantity) {
    this.rootView = rootView;
    this.addCream = addCream;
    this.addToppings = addToppings;
    this.addquantity = addquantity;
    this.addtocart = addtocart;
    this.coffeePrice = coffeePrice;
    this.coldRadioButton = coldRadioButton;
    this.descriptioninfo = descriptioninfo;
    this.drinkNameinInfo = drinkNameinInfo;
    this.firstCardView = firstCardView;
    this.hotradioButton = hotradioButton;
    this.imageViewInfo = imageViewInfo;
    this.quantity = quantity;
    this.radioGroup = radioGroup;
    this.secondCardView = secondCardView;
    this.subquantity = subquantity;
  }

  @Override
  @NonNull
  public RelativeLayout getRoot() {
    return rootView;
  }

  @NonNull
  public static ActivityInfoBinding inflate(@NonNull LayoutInflater inflater) {
    return inflate(inflater, null, false);
  }

  @NonNull
  public static ActivityInfoBinding inflate(@NonNull LayoutInflater inflater,
      @Nullable ViewGroup parent, boolean attachToParent) {
    View root = inflater.inflate(R.layout.activity_info, parent, false);
    if (attachToParent) {
      parent.addView(root);
    }
    return bind(root);
  }

  @NonNull
  public static ActivityInfoBinding bind(@NonNull View rootView) {
    // The body of this method is generated in a way you would not otherwise write.
    // This is done to optimize the compiled bytecode for size and performance.
    int id;
    missingId: {
      id = R.id.addCream;
      CheckBox addCream = ViewBindings.findChildViewById(rootView, id);
      if (addCream == null) {
        break missingId;
      }

      id = R.id.addToppings;
      CheckBox addToppings = ViewBindings.findChildViewById(rootView, id);
      if (addToppings == null) {
        break missingId;
      }

      id = R.id.addquantity;
      ImageButton addquantity = ViewBindings.findChildViewById(rootView, id);
      if (addquantity == null) {
        break missingId;
      }

      id = R.id.addtocart;
      Button addtocart = ViewBindings.findChildViewById(rootView, id);
      if (addtocart == null) {
        break missingId;
      }

      id = R.id.coffeePrice;
      TextView coffeePrice = ViewBindings.findChildViewById(rootView, id);
      if (coffeePrice == null) {
        break missingId;
      }

      id = R.id.coldRadioButton;
      RadioButton coldRadioButton = ViewBindings.findChildViewById(rootView, id);
      if (coldRadioButton == null) {
        break missingId;
      }

      id = R.id.descriptioninfo;
      TextView descriptioninfo = ViewBindings.findChildViewById(rootView, id);
      if (descriptioninfo == null) {
        break missingId;
      }

      id = R.id.drinkNameinInfo;
      TextView drinkNameinInfo = ViewBindings.findChildViewById(rootView, id);
      if (drinkNameinInfo == null) {
        break missingId;
      }

      id = R.id.firstCardView;
      CardView firstCardView = ViewBindings.findChildViewById(rootView, id);
      if (firstCardView == null) {
        break missingId;
      }

      id = R.id.hotradioButton;
      RadioButton hotradioButton = ViewBindings.findChildViewById(rootView, id);
      if (hotradioButton == null) {
        break missingId;
      }

      id = R.id.imageViewInfo;
      ImageView imageViewInfo = ViewBindings.findChildViewById(rootView, id);
      if (imageViewInfo == null) {
        break missingId;
      }

      id = R.id.quantity;
      TextView quantity = ViewBindings.findChildViewById(rootView, id);
      if (quantity == null) {
        break missingId;
      }

      id = R.id.radioGroup;
      RadioGroup radioGroup = ViewBindings.findChildViewById(rootView, id);
      if (radioGroup == null) {
        break missingId;
      }

      id = R.id.secondCardView;
      CardView secondCardView = ViewBindings.findChildViewById(rootView, id);
      if (secondCardView == null) {
        break missingId;
      }

      id = R.id.subquantity;
      ImageButton subquantity = ViewBindings.findChildViewById(rootView, id);
      if (subquantity == null) {
        break missingId;
      }

      return new ActivityInfoBinding((RelativeLayout) rootView, addCream, addToppings, addquantity,
          addtocart, coffeePrice, coldRadioButton, descriptioninfo, drinkNameinInfo, firstCardView,
          hotradioButton, imageViewInfo, quantity, radioGroup, secondCardView, subquantity);
    }
    String missingId = rootView.getResources().getResourceName(id);
    throw new NullPointerException("Missing required view with ID: ".concat(missingId));
  }
}
