package com.example.tictactoe;

import java.io.Serializable;//import from the Android Library Serializeable
//Serializeable class represent the state of an element

public class MatrixLandscape implements Serializable {// the MatrixLandscape class inherit all the attribute from the super class serializable
                                                 //This class represents Matrix for the Landscape View
    private char[][] matrixLandscape;        //represents the Matrix consists of 2d array
    private int row = 5;                    //represents the row of the matrix
    private int col = 5;                    //represents the column of the matrix

    public MatrixLandscape(){       //Constructor to initialize or instanced an object MatrixLandscape
                                    //Initialize the matrixLandscape variable

        matrixLandscape = new char[row][col];
    }

    public void set(int rowIndex, int colIndex, char   data){ //This method is used to set user input (O or X) into a specific index
                                                            //in the matrixLandscape variable
        matrixLandscape[rowIndex][colIndex] = data;
    }

    public char get(int rowIndex, int colIndex){  //This method will return the item that has been set in the public void set method

        return matrixLandscape[rowIndex][colIndex];
    }

    public int getCol() {    //This method will return the column index of the matrixLandscape variable
        return col;
    }

    public int getRow() {   //This method will return the row index of the matrixLandscape variable

        return row;
    }
}
