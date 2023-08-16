package com.example.tictactoe;

import java.io.Serializable; //import from the Android Library Serializeable
                            //Serializeable class represent the state of an element

public class MatrixPortrait implements Serializable {// the MatrixPortrait class inherit all the attribute from the super class serializable
                                                    //This class represents Matrix for the Portrait View
    private char[][] matrixPortrait;        //represents the Matrix consists of 2d array
    private int row = 3;                    //represents the row of the matrix
    private int col = 3;                    //represents the column of the matrix

    public MatrixPortrait(){                //Constructor to initialize or instanced an object MatrixProtrait
                                            //Initialize the matrixProtrait variable

        matrixPortrait = new char[row][col];
    }

    public void set(int rowIndex, int colIndex, char data){     //This method is used to set user input (O or X) into a specific index
                                                                //in the matrixProtrait variable
        matrixPortrait[rowIndex][colIndex] = data;
    }

    public char get(int rowIndex, int colIndex){        //This method will return the item that has been set in the public void set method

        return matrixPortrait[rowIndex][colIndex];
    }

    public int getCol() {       //This method will return the column index of the matrixProtrait variable

        return col;
    }
    public int getRow() {        //This method will return the row index of the matrixProtrait variable

        return row;
    }
}
