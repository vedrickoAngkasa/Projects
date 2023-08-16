package com.example.tictactoe;
//Imports from Android Library Class
import androidx.appcompat.app.AppCompatActivity;

import android.content.res.Configuration;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

//Our class another_player extends from the super class AppCompactActivity
public class another_player extends AppCompatActivity {

    //Private global instance variable
    private MatrixPortrait cellsPortrait;   //represent the matrix for the portrait view
    private MatrixLandscape cellsLandscape; //represent the matrix for the landscape view
    private char playerTurn;            //represent the player turn
    private TextView message;           //represent the message that will display whose turn is it
    private boolean gameEnds;           //represent the condition of when the game ends
    private int round;                  //represents the how many rounds of the game

    @Override
    protected void onCreate(Bundle savedInstanceState) {         //This is an Override method from the class AppCompactActivity
                                                                //This will be the first method that will be called when this activity
                                                                //is running. It purpose is to initialize variables
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_another_player);
        cellsPortrait = new MatrixPortrait();
        cellsLandscape = new MatrixLandscape();
        message = findViewById(R.id.txtWinnerPlayer);
        round = 0;
        playerTurn = 'X';
        gameEnds = false;
        message.setText("Player X turn");
      if (savedInstanceState != null){                       //This if statement is used to store the state of the object
          cellsPortrait = (MatrixPortrait) savedInstanceState.getSerializable("CELLSPORTRAIT");
            playerTurn = savedInstanceState.getChar("PLAYER_TURN");
            round = savedInstanceState.getInt("ROUND");
            gameEnds = savedInstanceState.getBoolean("GAME_ENDS");
          message.setText(savedInstanceState.getString("MESSAGE"));
          restoreButtonText();                               //after storing the state of the object restoreButtonText will be called
        }

    }


    private void restoreButtonText(){       //This method is used to store the state of the button that has been pressed from 3x3 to5x5
        Button b1 = findViewById(R.id.button1);
        char vb1 = cellsPortrait.get(0,0);
        if(vb1!= 0) b1.setText(""+vb1);

        Button b2 = findViewById(R.id.button2);
        char vb2 = cellsPortrait.get(0,1);
        if(vb2!=0) b2.setText(vb2+"");

        Button b3 = findViewById(R.id.button3);
        char vb3=  cellsPortrait.get(0,2);
        if(vb3!=0) b3.setText(vb3+"");

        Button b4 = findViewById(R.id.button4);
        char vb4 = cellsPortrait.get(1,0);
        if(vb4!=0) b4.setText(vb4+"");

        Button b5 = findViewById(R.id.button5);
        char vb5 =cellsPortrait.get(1,1);
        if(vb5!=0) b5.setText(vb5+"");

        Button b6 = findViewById(R.id.button6);
        char vb6 = cellsPortrait.get(1,2);
        if(vb6!=0) b6.setText(vb6+"");

        Button b7 = findViewById(R.id.button7);
        char vb7 =  cellsPortrait.get(2,0);
        if(vb7!=0) b7.setText(vb7+"");

        Button b8 = findViewById(R.id.button8);
        char vb8 = cellsPortrait.get(2,1);
        if(vb8!=0) b8.setText(vb8+"");

        Button b9 = findViewById(R.id.button9);
        char vb9 = cellsPortrait.get(2,2);
        if(vb9!=0) b9.setText(vb9+"");

    }

    @Override
    public void onSaveInstanceState(Bundle savedInstanceState) {//This method is an override method from the class Serializeable
                                                               //It purpose is to declare the state object variable
        super.onSaveInstanceState(savedInstanceState);
        savedInstanceState.putSerializable("CELLSPORTRAIT",cellsPortrait);
        savedInstanceState.putChar("PLAYER_TURN",playerTurn);
      savedInstanceState.putInt("ROUND",round);
       savedInstanceState.putBoolean("GAME_ENDS",gameEnds);
        savedInstanceState.putString("MESSAGE",(String)message.getText());

     }




    public void buttonClickedGame(View view) {         //This method will execute when button is clicked
                                                        //It is bound by the onClick method from the.xml file
                                                        //It take the parameter View to represent button being clicked

        if (!gameEnds) {
                executeGame(view);
        }
    }

    private void executeGame(View view){                  //This method is used to execute the game functionality
                                                            //such as the next round, players turn, and which matrix to used
        round++;

        Button button = (Button)view;
        button.setText(""+playerTurn);
        int id = Integer.parseInt((String)view.getTag());

        int orientation = getResources().getConfiguration().orientation;

        if (orientation == Configuration.ORIENTATION_LANDSCAPE) {


            int rowIndex = (id-1)/5;
            int colIndex = (id-1)%5;
            cellsLandscape.set(rowIndex,colIndex,playerTurn);
            int winner = checkWinner();

            if(winner==1){
                message.setText("Player X wins");

                gameEnds = true;
            } else if(winner==2){
                message.setText("Player O wins");


                gameEnds = true;
            }

            if(round == 25 && winner == 0){
                message.setText("Draw!");

                gameEnds = true;
            }

            if(!gameEnds){
                if(playerTurn=='X'){
                    playerTurn='O';
                    message.setText("Player O turns");
                }else{
                    playerTurn='X';
                    message.setText("Player X turns");
                }
            }
        } else {
                    int rowIndex = (id-1)/3;
                    int colIndex = (id-1)%3;
                    cellsPortrait.set(rowIndex,colIndex,playerTurn);
                    int winner = checkWinner();

                    if(winner==1){
                        message.setText("Player X wins");

                        gameEnds = true;
                    } else if(winner==2){
                        message.setText("Player O wins");


                        gameEnds = true;
                    }

                    if(round == 9 && winner == 0){
                        message.setText("Draw!");

                        gameEnds = true;
                    }

                    if(!gameEnds){
                        if(playerTurn=='X'){
                            playerTurn='O';
                            message.setText("Player O turns");
                        }else{
                            playerTurn='X';
                            message.setText("Player X turns");
                        }

                    }

        }


    }








    //This method is used to check the winner of the game from the landscape matrix and portrait matrix
    //it will call the method checkIfWinnerLandscape and checkIfWinnerPortrait to validate the input
    private int checkWinner(){

        int winner = 0;
        if(checkIfWinnerLandscape('X') || checkIfWinnerPortrait('X')){
            winner = 1;
        }else if(checkIfWinnerLandscape('O') || checkIfWinnerPortrait('O')){
            winner = 2;
        }

        return winner;
    }

    //This method will determine the Winner for the portrait Matrix
    //it will take the playerNumber to know which player turn it is
    private boolean checkIfWinnerPortrait(char playerNumber){

        boolean win = false;
        int counterDiagonal1 = 0;
        int counterDiagonal2 = 0;


        //determine the column winner of the matrix
        for(int indexRow = 0 ; indexRow < cellsPortrait.getRow(); indexRow++){
            int counterRow = 0;
            for(int indexCol = 0 ; indexCol < cellsPortrait.getCol(); indexCol++){
                    if(cellsPortrait.get(indexRow,indexCol) == playerNumber){
                        counterRow++;
                    }
                    if(counterRow  == cellsPortrait.getRow()){
                        win = true;
                    }
            }
        }

        //Determine the diagonal matrix from left to right winner
        for(int indexRow = 0 ; indexRow < cellsPortrait.getRow(); indexRow++){
            int counterCol = 0;
            for(int indexCol = 0 ; indexCol < cellsPortrait.getCol(); indexCol++){
                if(cellsPortrait.get(indexCol,indexRow) == playerNumber){
                    counterCol++;
                }
                if(counterCol == cellsPortrait.getRow()){
                    win = true;
                }
            }
        }

        //Determine the  diagonla materix from right to left winner
        for(int indexRow = 0; indexRow < cellsPortrait.getRow() ; indexRow++){
            if (cellsPortrait.get(indexRow,cellsPortrait.getRow()- indexRow -1) == playerNumber) {
                counterDiagonal1++;
            }
        }
        if (counterDiagonal1 == cellsPortrait.getRow()) {
             win = true;
        }
        //Determine the  diagonla materix from right to left winner
        for(int indexRow = 0; indexRow < cellsPortrait.getRow() ; indexRow++){
            if (cellsPortrait.get(indexRow,indexRow ) == playerNumber) {
                counterDiagonal2++;
            }
        }
        if (counterDiagonal2 == cellsPortrait.getRow()) {
            win = true;
        }


        return win;
    }

    //This method is similar to checkIfWinnerPortrait
    //it roles is to determine the winner of the game by using the parameter playerNumber
    //so we know whose player turn is it
    private boolean checkIfWinnerLandscape(char playerNumber){

        boolean win = false;
        int counterDiagonal1 = 0;
        int counterDiagonal2 = 0;


        //determine the row winner of the matrix
        for(int indexRow = 0 ; indexRow < cellsLandscape.getRow(); indexRow++){
            int counterRow = 0;
            for(int indexCol = 0 ; indexCol < cellsLandscape.getCol(); indexCol++){
                if(cellsLandscape.get(indexRow,indexCol) == playerNumber){
                    counterRow++;
                }
                if(counterRow  == cellsLandscape.getRow()){
                    win = true;
                }
            }
        }

        //determine the column winner of the matrix
        for(int indexRow = 0 ; indexRow < cellsLandscape.getRow(); indexRow++){
            int counterCol = 0;
            for(int indexCol = 0 ; indexCol < cellsLandscape.getCol(); indexCol++){
                if(cellsLandscape.get(indexCol,indexRow) == playerNumber){
                    counterCol++;
                }
                if(counterCol == cellsLandscape.getRow()){
                    win = true;
                }
            }
        }

        //Determine the diagonal matrix from left to right winner
        for(int indexRow = 0; indexRow < cellsLandscape.getRow() ; indexRow++){
            if (cellsLandscape.get(indexRow,cellsLandscape.getRow()- indexRow -1) == playerNumber) {
                counterDiagonal1++;
            }
        }
        if (counterDiagonal1 == cellsLandscape.getRow()) {
            win = true;
        }

        //Determine the  diagonla materix from right to left winner
        for(int indexRow = 0; indexRow < cellsLandscape.getRow() ; indexRow++){
            if (cellsLandscape.get(indexRow,indexRow ) == playerNumber) {
                counterDiagonal2++;
            }
        }
        if (counterDiagonal2 == cellsLandscape.getRow()) {
            win = true;
        }


        return win;
    }




}

