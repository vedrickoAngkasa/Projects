package Assignment2;

/*
 * Title : Assignment 2 ICT167
 * Author :  Vedricko Angkasa
 * Date : 31 July 2021
 * File Name : StudentNotFoundException.java
 * Purpose : Acts as the A Custom Exception 
 * 
 */

//this class is a child of parent class exception
//thus this will able us to create a custom exception
public class StudentNotFoundException extends Exception{
	
	
	//this method will display a message 
	//when an exception is thrown or catch
	public StudentNotFoundException(long id) {
		super("Student ID "+id+ " NOT Found");
	}

}
