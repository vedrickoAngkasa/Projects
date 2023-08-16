package Assignment2;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

/*
 * Title : Assignment 2 ICT167
 * Author :  Vedricko Angkasa
 * Date : 31 July 2021
 * File Name : CourseWork.java
 * Purpose : Acts as the Child of Student Class
 * 
 */

public class CourseWork extends Student{
	
	//instance variable
	private int assignment1; //represents the mark of assignment 1
	private int assignment2;// represents the mark of assignment 2
	private int lab;// represents the mark of lab
	private int exam;// represents the mark of exam

	
	//Default Constructor that will override the Parent(Student) Class 
	//Form of Input : it will take the value from Parent(Student) Class Constructor
	//Form of Output : it will override the Parent(Student) Constructor
	public CourseWork() {
		super();
	}
	
	//Constructor that will override, set, and add values to the Parent(Student) Constructor
	//Form of Input : it will take the value that has been passed in the parameter from the Parent(Student) Constructor and instance variables
	//Form of Output : it will override and set the value of the Child(CourseWork) Constructor.
	public CourseWork(String title, String firstName, String lastName, long id, int dbDay, int dbMonth, int dbYear,
			String type, int assignment1, int assignment2, int lab, int exam) {
		super(title, firstName, lastName, id, dbDay, dbMonth, dbYear,type);
		this.assignment1 = assignment1;
		this.assignment2 = assignment2;
		this.lab = lab;
		this.exam = exam;
	}
	
	//Constructor that will take the value from the Parent(Student) Constructor and 
	//it will override and set the value to the Child(CourseWork) Constructor
	//Form of Input : it will take the value that has been passed in the parameter from the Parent(Student) Constructor
	//Form of Output : it will set the value of the Child(CourseWork) Constructor from Parent(Student) Constructor.
	public CourseWork(String title, String firstName, String lastName, long id, int dbDay, int dbMonth, int dbYear,
			String type) {
		super(title, firstName, lastName, id, dbDay, dbMonth, dbYear,type);
		
	}
	
	//This method is used to display the values of the the instance variables
	//Furthermore, it is a method that override from the Parent(Student) Class
	//Form of Input : it take the method values from the Parent(Student) Class 
	//and instance variables
	//Form of Output : it will display the override method values when it is called upon
	public void display() {
		super.display();
		System.out.println("Assignment 1: "+assignment1);
		System.out.println("Assignment 2: "+assignment2);
		System.out.println("Lab: "+lab);
		System.out.println("Exam: "+exam);
		System.out.println();
		System.out.println("==========================");
	}
	
	//This method is to return the value of instances variables in a specific String Format.
	//It is  method that override from the Parent(Student) Class
	//Form of Input : it will override and take the value from the Parent(Student) method and
	//the instance variables
	//Form of Output : it will return the override method values to the Parent(Student) Class method
	public String toString() {
		super.toString();
		return this.assignment1 + "," + this.assignment2 + "," + this.lab + "," + this.exam;
	}
	
	//This method is used to Calculate the Overall Mark of a Course Work Student
	//It is a method that override from the Parent(Student) Class
	//Form of Input : it will override and take the value from instance variables 
	//Form of Output : it will calculate the Overall Mark and return to the Parent(Student) Class method
	public int overallMark() {
			
		super.overallMark();
		
		int finalMark = 0;
		int twentyfivePercent1 = 0;
		int twentyfivePercent2 = 0;
		int twentyPercent = 0;
		int thirtyPercent = 0;
		
		if(this.assignment1 >=0 && this.assignment1 <=100) {
			 twentyfivePercent1 = (25 * this.assignment1) / 100;	
		}
		
		if(this.assignment2 >=0 && this.assignment2 <=100) {
			 twentyfivePercent2 = (25 * this.assignment2) / 100;	
		}
		
		if(this.lab >=0 && this.lab<= 20) {	
			twentyPercent = (20 * this.lab) / 20;
		}
		
		if(this.exam>= 0 && this.exam <= 100) {
			thirtyPercent = (30 * this.exam) /100;
		}
		
		int fiftyPercent = twentyfivePercent1 + twentyfivePercent2;
		finalMark = fiftyPercent + twentyPercent + thirtyPercent;
		
		
		if(finalMark >=0 && finalMark<=100) {
			return finalMark;
		}else {
			return -1;
		}
	}
	
	//This method will determine the Grade based on the override Overall Mark method
	//It is a method that override from the Parent(Student) Class
	//Form of Input : it will take the values from the override method overallMark()
	//Form of Output : it will display the grade based on the override method overallMark() values
	public String getGrade() {
		
		return super.computeGrade(overallMark());
		
	}
	
	//This method is used to read the data from coursework.csv
	//and passed in that value to setData() method
	//Form of input : it will read the data from coursework.csv
	//Form of output : it will passed in the data to setData() method
	public void getData() {
		
		
		String fileName = "coursework.csv";
		String line = " ";
		try{
			File file = new File(fileName);
			Scanner inputStream = new Scanner(file);
			inputStream.nextLine();
			while(inputStream.hasNextLine()){
			
				String lineFile = inputStream.nextLine();
				setData(lineFile);
			}
		}catch(FileNotFoundException e){
			System.out.println("File not found");
		}
		
	}
	
	
	//This method will set the variables values of id, assignment1, assignment2, lab, and exam from the data in coursework.csv
	//It is a method that override from the Parent(Student) Class method
	//Form of Input : it will take the values from the getData() method where it reads data from the coursework.csv
	//Form of Output : it will set the values from the getData() method to the variables id, assignment1, assignment2, lab, and exam
	public void setData(String line)
	{
		
		super.setData(line);
		

		String[] data = line.split(",");
		long id = Long.parseLong(data[0]);
		this.assignment1 = Integer.parseInt(data[1]);
		this.assignment2 = Integer.parseInt(data[2]);
		this.lab = Integer.parseInt(data[3]);
		this.exam = Integer.parseInt(data[4]);
		

		
	}
	


	
}
