package Assignment2;
/*
 * Title : Assignment 2 ICT167
 * Author :  Vedricko Angkasa
 * Date : 31 July 2021
 * File Name : Student.java
 * Purpose : Acts as the Parent Class
 * 
 */
public class Student {
	
	//instance variables
	private String type; //represents as type of students
	private String title; //represents as Mr or Ms
	private String firstName; //represents as Student First Name
	private String lastName; //represents as Student Last Name
	private long id;// represents as Student ID
	private int dbDay; // represents as day of birth
	private int dbMonth; // represents as month of birth
	private int dbYear; // represents as year of birth
	
	//Default Constructor that acts as dummy constructor for Child(Research/CourseWork) Class to use
	//It won't set anything as there is not data inside the Constructor
	//Form of Input : null
	//Form of Output : null
	public Student() {
		
	}
	
	//Constructor that will set the values of the instance variables type, title, firstName, lastName, id, dbDay, dbMonth, and dbYear
	//It is also Constructor that has been overridden by Child(Research/CourseWork) Class
	//Form of Input : it will take instance variables title, firstName, lastName, id, dbDay, dbMonth, dbYear, and type.
	//Form of Output : it will set the instance variables values title, firstName, lastName, id, dbDay, dbMonth, dbYear, and type
	public Student(String title, String firstName, String lastName, long id, int dbDay, int dbMonth, int dbYear, String type) {
		this.title = title;
		this.firstName = firstName;
		this.lastName = lastName;
		this.id = id;
		this.dbDay = dbDay;
		this.dbMonth = dbMonth;
		this.dbYear = dbYear;
		this.type = type;
	}
	
	//This method is used to display the details of (Research/CourseWork) Student
	//It is also a method that has been overridden by Child(Research/CourseWork) Class
	//Form of Input : it will take the values of instance variables that has been set by Constructor or Setters
	//Form of Output : it will display the values of type, id , firstName, lastName, dbDay, dbMonth, dbYear, getGrade, overallMark
	//and it will display the method that has been overridden by Child(Research/CourseWork) Class
	public void display() {
		System.out.println("Type: "+type);
		System.out.println("ID: "+id);
		System.out.println("First Name : " + firstName);
		System.out.println("Last Name : " + lastName);
		System.out.println("Date of Birth : " + dbDay +"/"+ dbMonth +"/"+  dbYear);
		System.out.println();
		System.out.println("--------------------------");
		System.out.println("Grade : " + getGrade());
		System.out.println("Overall Marks : " + overallMark());
		System.out.println("--------------------------");
	}
	
	//This method is used to display a String in a Specific String format
	//This method has been overridden by Child(Research/CourseWork) Class
	//Form of Input : it will take the values from getGrade() method and overallMark() method.
	//it will also take the values that has been overridden in the Child(Research/CourseWork) Class.
	//Form of Output : it will display the String values in a specific String
	//format from getGrade() method and overallMark() method.
	//it will also display the values that has been overridden in the Child(Research/CourseWork) Class.
	public String toString() {
		
		return getGrade()+ "," + overallMark();
	}
	
	//This method is used to calculate the Grade of (Research/CourseWork) Student
	//It is called in the Child(Research/CourseWork) Class to calculate the Grade for (Research/CourseWork) Student.
	//Form of Input : it will take the overallMark method values from Child(Research/CourseWork) Class.
	//Form of Output : it will calculate Grade based on overallMark method values from Child(Research/CourseWork) Class.
	public static String computeGrade(int finalMark) {
		
		String grade = " ";
		
		if(finalMark >=80 && finalMark <= 100) {
		
			 grade = "HD";
			
			
		}else if(finalMark >=70 && finalMark < 80 ) {
			
			grade = "D";
					
		
		}else if(finalMark >=60 && finalMark < 70) {
			
			grade = "C";
			
		}else if(finalMark >= 50 && finalMark < 60) {
			
			grade = "P";
			
		}else if(finalMark >= 0 && finalMark <50 ) {
			
			grade = "N";
			
		}
		
		return grade;
	}
	
	//This method is used to find the overallMark of (Research/CourseWork) Student.
	//It has been overridden by Child(Research/CourseWork) Class.
	//Form of Input : it will take the values of instance variables from Child(Research/CourseWork) Class.
	//Form of Output : it will display the overallMark of (Research/CourseWork) Student.
	public int overallMark() {
		return 0;
	}
	
	//This method is used to get the Grade of computeGrade method.
	//It has been overridden by Child(Research/CourseWork) Class.
	//Form of Input: it will take the values of computeGrade.
	//Form of Output :  it will return the Grade of computeGrade.
	public String getGrade() {
		return " ";
	}
	
	//This method is used to set the instance variables of Child(Research/CourseWork) Class.
	//This method has been overridden in Child(Research/CourseWork) Class.
	//Form of Input : it will read data from a csv file.
	//Form of Output : it will set the values of instances variables based on data in the csv file.
	public void setData(String data) {
		
	}
	
	//This method is used to find if a StudentID is the same with other StudentID
	//Form of Input : it will take two StudentID and compare it.
	//Form of Output : it will return true if StudentIDs are the same and 
	//will return false if its not.
	public boolean isEqual(int student) {
		
		long otherID = getId();
		
		if(otherID == getId()) {
			return true;
		}else {
			return false;
		}
		
	}
	
	//This method is used to set the ID of the Student
	//Form of Input : it will take the instances variables Id
	//Form of Output : it will set the instances variables id.
	public void setId(long id) {
		this.id = id;
	}
	
	//This method will get the value of Id that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of id
	//Form of Output: it will display the value of Id.
	public long getId() {
		return id;
	}

	//This method will get the value of firstName that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of firstName
	//Form of Output: it will display the value of firstName.
	public String getFirstName() {
		return firstName;
	}

	//This method will get the value of lastName that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of lastName
	//Form of Output: it will display the value of lastName.
	public String getLastName() {
		return lastName;
	}
	
	//This method will get the value of type that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of type
	//Form of Output: it will display the value of type.
	public String getType() {
		return type;
	}

	//This method will get the value of title that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of title
	//Form of Output: it will display the value of title.
	public String getTitle() {
		return title;
	}

	//This method will get the value of dbDay that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of dbDay
	//Form of Output: it will display the value of dbDay.
	public int getDbDay() {
		return dbDay;
	}

	//This method will get the value of dbMonth that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of dbMonth
	//Form of Output: it will display the value of dbMonth.
	public int getDbMonth() {
		return dbMonth;
	}

	//This method will get the value of dbYear that has been set by Setters or Constructor
	//Form of Input : it will take the initial value of dbYear
	//Form of Output: it will display the value of dbYear.
	public int getDbYear() {
		return dbYear;
	}
	

}
