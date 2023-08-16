package com.example.tictactoe;

//Imports from the Android Library
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;

import android.view.View;


public class MainActivity extends AppCompatActivity {       //MainActivity class is a class that will represent the main activity of the
                                                            //Application and extends the AppCompactActivity class which is also a class
                                                            //from the Android Library

    @Override                                               //Override method from the AppCompactActivty class
    protected void onCreate(Bundle savedInstanceState) {    //onCreate method is the first method that will call when our application runs
        super.onCreate(savedInstanceState);                 //it will set the layout the the MainActivity.java and also call the method from
                                                            //the superclass AppCompactActivity

        setContentView(R.layout.activity_main);
    }

    public void buttonClickedPLayer(View view) {               //ButtonClick method is called when our Button is click and is bound by the
                                                                //onClick event from the .xml file
                                                                //It take paremeter view as a instance of the button that is being clicked
                                                                //It also will call Intent object where it is a object to help to connect to
                                                                //other activities
        Intent myIntent = new Intent(this, another_player.class);

        startActivity(myIntent);


    }

    public void buttonClickedComputer(View view) {          //ButtonClick method is called when our Button is click and is bound by the
                                                            //onClick event from the .xml file
                                                            //It take paremeter view as a instance of the button that is being clicked
                                                            //It also will call Intent object where it is a object to help to connect to
                                                            //other activities
        Intent myIntent = new Intent(this, computer.class);

        startActivity(myIntent);


    }

    public void buttonClickedInstruction(View view){

        Intent myIntent = new Intent(this, InstructionActivity.class);

        startActivity(myIntent);

    }


}