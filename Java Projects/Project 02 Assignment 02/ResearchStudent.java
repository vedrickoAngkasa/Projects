package Assignment2;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

/*
 * Title : Assignment 2 ICT167
 * Author :  Vedricko Angkasa
 * Date : 31 July 2021
 * File Name : ResearchStudent.java
 * Purpose : Acts as the Child of Student Class
 * 
 */


public class ResearchStudent extends Student{

	
	//instances variables
	
	private int oral; //represents as oral Mark
	private int finalThesis; //represents as final Thesis Mark
	
	//Default Constructor that will override Parent(Student) Constructor
	//Form of Input :  it will take the values from the Parent(Student) Constructor
	//Form of Output : it will override the Parent(Student) Constructor 
	public ResearchStudent() {
		super();

	}

	//Constructor will override,set and add values to the Parent(Student) Constructor
	//Form of Input : it will take the values that has been passed in the parameter from Parent(Student) Constructor and instance variables
	//Form of Output : it will set the values of the Child(ResearchStudent) Constructor
	//and will override the Parent(Student) Constructor
	public ResearchStudent(String title, String firstName, String lastName, long id, int dbDay, int dbMonth, int dbYear,
			String type,int oral, int finalThesis) {
		super(title, firstName, lastName, id, dbDay, dbMonth, dbYear, type);
		this.oral = oral;
		this.finalThesis = finalThesis;
	}

	
	//Constructor that will override the Parent(Student) Constructor
	//Form of Input : It will take the values that has been passed in the parameter from the Parent(Student) Constructor
	//Form of Output : It will override the Parent(Student) Constructor
	//and will set the values of Child(ResearchStudent) Constructor
	public ResearchStudent(String title, String firstName, String lastName, long id, int dbDay, int dbMonth, int dbYear,
			String type) {
		super(title, firstName, lastName, id, dbDay, dbMonth, dbYear, type);
	}
	
	
	//This method is used to display the values of the the instance variables
	//Furthermore, it is a method that override from the Parent(Student) Class
	//Form of Input : it take the method values from the Parent(Student) Class 
	//and instance variables
	//Form of Output : it will display the override method values when it is called upon
	public void display() {
		super.display();
		System.out.println("Oral marks:"+ this.oral);
		System.out.println("Final Thesis marks:"+ this.finalThesis);
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
		return this.oral + "," + this.finalThesis;
	}
	
	//This method is used to Calculate the Overall Mark of a Research Student
	//It is a method that override from the Parent(Student) Class
	//Form of Input : it will override and take the value from instance variables 
	//Form of Output : it will calculate the Overall Mark and return to the Parent(Student) Class method
	public int overallMark() {
		
		super.overallMark();
		
		int twentyPercent = 0;
		int eightyPercent = 0;
		int finalMark = 0;
		
		if(this.oral>=0 && this.oral<=20) {
			twentyPercent = (20 * this.oral) / 20;
		}
		
		if(this.finalThesis>= 0 && this.finalThesis <=100) {
			eightyPercent = (80 * this.finalThesis) / 100;
		}
		
		
		finalMark = twentyPercent + eightyPercent;
		
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
	
	//This method is used to read the data from research.csv
	//and passed in that value to setData() method
	//Form of input : it will read the data from research.csv
	//Form of output : it will passed in the data to setData() method
	public void getData() {
		
		
		String fileName = "research.csv";
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
	
	//This method will set the variables values of id, oral, and finalThesis from the data in research.csv
	//It is a method that override from the Parent(Student) Class method
	//Form of Input : it will take the values from the getData() method where it reads data from the research.csv
	//Form of Output : it will set the values from the getData() method to the variables id, oral, and finalThesis
	public void setData(String line){
			
		super.setData(line);
		
		String[] data = line.split(",");

		long id = Long.parseLong(data[0]);
		this.oral = Integer.parseInt(data[1]);
		this.finalThesis = Integer.parseInt(data[2]);
	
		
	}
	

	

	
}
