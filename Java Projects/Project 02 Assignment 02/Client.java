package Assignment2;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.InputMismatchException;
import java.util.Scanner;


/*
 * Title : Assignment 2 ICT167
 * Author :  Vedricko Angkasa
 * Date : 31 July 2021
 * File Name : Client.java
 * Purpose : Acts as the Client Interaction Class
 * 
 */

public class Client {

	//instance variables
	private ArrayList<Student> students; //represents as ArrayList of the information that is going to be store
	private String dealWithType; //represents as type of Students (Research/CourseWork) Student
	
	//Scanner to take user input
	static Scanner input = new Scanner(System.in);
	
	//main method use to run the program
	//Form of Input : it will create an object Client and call the method from there
	//Form of Output : it will display the method that has been called.
	public static void main(String[] args) {
		
		Client user = new Client();
		user.StudentInfo();
		user.Menu();

		
	}
	
	
	//This method is used to display the menu for the user to choose
	//Form of Input : it will prompt the user to enter an option between 1 - 10
	//Form of Output : it will display the option functionality by calling the method based on the user input
	public void Menu() {
		
		students = new ArrayList<Student> ();
		int userInput = 0;
		
		try {
				while(userInput != 1) {
				System.out.println();
				System.out.println("============================================");
				System.out.println("1. Quit the Program");
				System.out.println("2. Load to ArrayList between [Research/Coursework] Student from csv file");
				System.out.println("3. Delete from ArrayList based on Student ID from User Input");
				System.out.println("4. Display All Informations of [Research/Coursework] Students in ArrayList");
				System.out.println("5. Display Overall Mark and Grade of [Research/Coursework] Students");
				System.out.println("6. Determine how many students are above and below average mark");
				System.out.println("7. Display Details of [Research/Coursework] Students based on StudentID from User Input");
				System.out.println("8. Display Details of [Research/Coursework] Students based on First Name and Last Name from User Input");
				System.out.println("9. Sort the ArrayList based on Student ID from [Research/Coursework] Students");
				System.out.println("10. Output Sorted Array from Option 9 to a csv file");
				System.out.println("============================================");
				System.out.println("Enter Option [1/2/3/4/5/6/7/8/9/10] : ");
				userInput = input.nextInt(); 
			
			
				switch(userInput) {
				
				//if option 1 is chosen then if will display the following message
				case 1:
					System.out.println();
					System.out.println("============================================");
					System.out.println("You have exited the Program");
					System.out.println("============================================");
				break;
				
				case 2:
					Option2();
				break;
			
				case 3:
					Option3();
				break;
			
				case 4:
					Option4();
				break;
			
				case 5:
					Option5();
				break;
			
				case 6:
					Option6();
				break;
			
				case 7:
					Option7()  ;
				break;
			
				case 8:
					Option8();
				break;
			
				case 9:
					Option9();
				break;
			
				case 10:
					Option10();
				break;
			
				default:
					System.out.println();
					System.out.println("Invalid choice");
					System.out.println();
				break;
			
				}		
			
			}
		}catch(InputMismatchException io) {
				System.out.println("Please Do Not Enter Non Numberic Option");
				System.out.println();
		}
		
	}

	//This method is used to load to the ArrayList (Research/CourseWork) Student Details
	//Form of Input : it will execute the program if user enter  2 and will fill the 
	//ArrayList with data between (Research/CourseWork) based on user input
	//Form of Output : it will load to the ArrayList Student details based on user input
	public void Option2() {
		
		String inputOpt2 = "";
		
		System.out.println("Enter type of students to load to ArrayList [Research / CourseWork] Student : ");
		inputOpt2 = input.next();
		
		
		if(inputOpt2.equalsIgnoreCase("coursework")) {
			
			students = new ArrayList<Student> ();
			this.dealWithType = "coursework";
			readStudent();
			
		}else if(inputOpt2.equalsIgnoreCase("research")) {
			
			students = new ArrayList<Student> ();
			this.dealWithType = "research";
			readStudent();
			
		}else {
			System.out.println();
			System.out.println("Invalid Input");
			System.out.println();
		}
		
		readResult();
		checkInput(students);
		
	}
	
	//This method is used to check whether the ArrayList from Option 2 has been loaded successfully
	//Form of Input : it will take the ArrayList from Option2 and check if it is empty or not
	//Form of Output : it will display message whether the ArrayList is Empty or Not
	public void checkInput(ArrayList<Student> students) {
		
		if(students.size() != 0) {
			System.out.println();
			System.out.println("Data successfully loaded !!");
			System.out.println();
			System.out.println("============================================");
			System.out.println();
		}else {
			System.out.println();
			System.out.println("Data NOT successfully loaded !!");
			System.out.println();
			System.out.println("============================================");
			System.out.println();
		}
		
	}
	
	//This method is used to remove an Object in the ArrayList based on the Student ID
	//Form of Input : it will prompt the user to enter a StudentID and will ask to continue the process or not
	//Form of Output : it will remove Object in the ArrayList and will display message if it is successfull or not
	public void Option3() {
		
		int inputOpt3 = 0;
		String choice = " ";
		boolean notFound = true;
		
		System.out.println();
		System.out.println("Enter A Student ID to remove : ");
		inputOpt3 = input.nextInt();
		
		System.out.println();
		System.out.println("Are you sure you want to delete StudentID " + inputOpt3 + "? [y/n]");
		choice = input.next();
		System.out.println();
		
		try {
			if(choice.equalsIgnoreCase("yes") || choice.equalsIgnoreCase("y")) {
			
				for(int index = 0 ; index < students.size() ; index++) {
						if(students.get(index).getId() == inputOpt3) {
					
							students.remove(students.get(index));
							System.out.println();
							System.out.println("Student Successfully Removed !!");
							System.out.println();
							students.get(index).display();
							System.out.println();
							System.out.println("============================================");
							System.out.println();
					
							notFound = false;
			
						}else if(choice.equalsIgnoreCase("no") || choice.equalsIgnoreCase("n")) {
							System.out.println();
							System.out.println("Going Back to Menu");
							System.out.println("============================================");
							System.out.println();
							Menu();
						}	
				}
			}
		}catch(IndexOutOfBoundsException ex) {
			System.out.println("============================================");
			System.out.println();
			System.out.println("End of Array");
			System.out.println();
		}
		
		if(notFound) {
			
			System.out.println();
			System.out.println("============================================");
			System.out.println("NO Details Found for Student ID " + inputOpt3);
			System.out.println("============================================");
			System.out.println();
	
		}
		
		
	}
	
	//This method will display all information on (Research/CourseWork) Student
	//it will display information based on the information that has been loaded in the ArrayList
	//Form of Input : it call the function run(); 
	//Form of Output : it will execute the function run();
	public void Option4() {
		
		System.out.println();
		System.out.println("============================================");
		System.out.println();
		System.out.println("Infomation Details About All of the "+ dealWithType + " Students");
		System.out.println();
		System.out.println("============================================");
		run();
		
	}
	
	//This method is to determine the average overall Mark and Grade 
	//based on the information that has been loaded in the ArrayList
	//Form of Input : it will take the values object from the ArrayList
	//Form of Output : it will display the average overall Mark and Grade
	public void Option5() {
		System.out.println();
		int sum = 0;
		int avg = 0;
		String grade = " ";
		
		for(int index = 0 ; index < students.size(); index++) {	
			
				sum += students.get(index).overallMark();
				avg = (sum) / students.size();
				grade = students.get(index).computeGrade(avg);
		}
		
		System.out.println("Average Overall Mark of " + dealWithType + " Student is : " + avg);
		System.out.println("Average Grade of " + dealWithType + " Student is " + grade);
		System.out.println();
		System.out.println("============================================");
		System.out.println();
		
	}
	
	//This method is used to determine how many students have achieved higher or lower than average overall Mark
	//Form of Input : it will take values from object in the ArrayList
	//Form of Output : it will determine how many students that achieved higher or lower than average overall Mark
	public void Option6() {
		System.out.println();
		System.out.println("The total number of " + dealWithType + " Students who achieved Higher or Lower than Average Score ");
		System.out.println("============================================");
		
		int sum = 0;
		double avg = 0;
		int higher = 0;
		int lower = 0;
		
		for(int index = 0 ; index < students.size(); index++) {	
			
				sum += students.get(index).overallMark();
				avg = (double)((sum) / students.size());

		}
		
		for(int counter = 0 ; counter < students.size() ; counter++) {
			if(students.get(counter).overallMark() >= avg) {
			
				higher++;
				
			}else if(students.get(counter).overallMark() < avg ) {
				
				lower++;
				
			}
			
		}

		System.out.println();
		System.out.println("The total Number of " + dealWithType + " Students who achieved Higher than or Equal to Average Mark are : " + higher );
		System.out.println();
		System.out.println("The total Number of " + dealWithType + " Students who achieved Lower than Average Mark are : " + lower );
		System.out.println();
		System.out.println("============================================");
		System.out.println();
	}
	
	//This method will display all information based on a Student ID from user Input 
	//Form of Input : it will take StudentID from user Input 
	//Form of Output : it will display the Student info based on StudentID from user Input
	public void Option7() {
		
		int inputOpt7 = 0;
		boolean notFound = true;
		
		System.out.println();
		System.out.println("Enter a Student ID to view the details of the Student : ");
		inputOpt7 = input.nextInt();
		
		for(int index = 0 ; index < students.size() ; index++) {
		
			if(students.get(index).getId() == inputOpt7) {

				notFound = false;
				
				System.out.println();
				System.out.println("============================================");
				System.out.println("Printing Out Details for Student ID " + inputOpt7);
				System.out.println();
				students.get(index).display();
				System.out.println();
				
				
			}
			
		}
		
		if(notFound) {
		
			System.out.println();
			System.out.println("============================================");
			System.out.println("NO Details Found for Student ID " + inputOpt7);
			System.out.println("============================================");
			System.out.println();
	
		}
		
	}
	
	//This method is used to display the Student Info based on First Name and Last Name from user input
	//Form of Input : it will take first Name and Last Name based on user Input
	//Form of Output : it will display student info based on first Name and Last Name based on user input
	public void Option8(){
		
		String firstName = 	" ";
		String lastName = " ";
		boolean notFound = true;
		
		
		System.out.println();
		System.out.println("Enter A Student First Name : ");
		firstName = input.next();
		
		System.out.println();
		System.out.println("Enter A Student Last Name : ");
		lastName = input.next();
		
		for(int index = 0; index < students.size() ; index++) {
			
			if(students.get(index).getFirstName().toUpperCase().equalsIgnoreCase(firstName) && students.get(index).getLastName().toUpperCase().equalsIgnoreCase(lastName)) {
				
				notFound = false;
				
				System.out.println();
				System.out.println("============================================");
				System.out.println("Printing Out Details for Student Name "+ firstName + " " +lastName);
				System.out.println();
				students.get(index).display();
				System.out.println();
				
				
			}
		
		}
		
		if(notFound) {
			System.out.println();
			System.out.println("============================================");
			System.out.println("NO Details Found for Student Name " + firstName + " " + lastName);
			System.out.println("============================================");
			System.out.println();
		}
	}
	
	//This method will call bubbleSort() method to sort the ArrayList based on Student ID
	//Form of Input : it will take the ArrayList and passed it into bubbleSort() method
	//Form of Output :  it will display the Sorted ArrayList based on StudentID
	public void Option9() {
		
		System.out.println();
		System.out.println("============================================");
		System.out.println("Sorted ArrayList Based on Student ID");
		
		bubbleSort(students);
		run();
		
		System.out.println();
		System.out.println("============================================");
		System.out.println();
	}
	
	//This method is used sort the ArrayList based on StudentID
	//Form of Input : it will take the ArrayList and sort it based on StudentID
	//Form of Output : it will return the Sorted ArrayList based on StudentID
	public static void bubbleSort(ArrayList<Student> students) {
		boolean swap = true;											//There are many ways to Sort ArrayList such as using insertion Sort, bubbleSort, sort(), and much more
		while(swap){													//Due to requirements in the Assignment, we are not allowed to use sort() method
			swap = false;												//Thus, bubbleSort() is used due to it is much more simple to implement and run
			for(int i=1;i<students.size();i++){
				if(students.get(i-1).getId() > students.get(i).getId()){
					Student temp = students.get(i-1);
					students.set(i-1,students.get(i));
					students.set(i, temp);
					swap = true;
				}
			}
		}
	}
	
	//This method will write to a .csv file from the sorted ArrayList based on (Research/CourseWork)
	//Form of Input : it will take the ArrayList that has been sorted
	//Form of Output : it will create a .csv file with the content of the ArrayList inside
	public void Option10()  {
		
		System.out.println();
		bubbleSort(students);
		
		System.out.println("============================================");
		System.out.println("Writting to " + dealWithType +"Output.CSV");
		
		if(dealWithType.equalsIgnoreCase("coursework")) {
			
			String fileName = "courseworkOutput.csv";
		
			PrintWriter outputStream = null; 
			String output = "";
			String outputHeader = "";
			
			try {
				File file = new File(fileName);
				outputStream = new PrintWriter(fileName);
				
				outputHeader = "Type, Student ID , First Name , Last Name, Date of Birth , Grade, Overall Mark, Assignment 1, Assignment 2, Lab, Exam"; 
			

				for(int index = 0 ; index < students.size() ; index++) {
								
					output += students.get(index).getType()+","+ students.get(index).getId()+","+
							 students.get(index).getFirstName()+","+students.get(index).getLastName()+
							 ","+ students.get(index).getDbDay()+"/"+students.get(index).getDbMonth()+"/"+students.get(index).getDbYear()
							 +","+students.get(index).getGrade()+","+students.get(index).overallMark()+","+students.get(index).toString() + "," + "\n";
					
							
				}
				
			
				outputStream.println(outputHeader);
				outputStream.println(output);
				outputStream.close();
				
			}catch( IOException io) {
				System.out.println("Error inputting to csv File");
				System.exit(0);
			}
			
		}else if(dealWithType.equalsIgnoreCase("research")) {
			
			String fileName = "researchOutput.csv";
			
			PrintWriter outputStream = null; 
			String output = "";
			String outputHeader = "";
			
			try {
				File file = new File(fileName);
				outputStream = new PrintWriter(fileName);
				
				outputHeader = "Type, Student ID , First Name , Last Name, Date of Birth , Grade, Overall Mark, Oral, Final Thesis"; 
			

				for(int index = 0 ; index < students.size() ; index++) {
								
					output += students.get(index).getType()+","+ students.get(index).getId()+","+
							 students.get(index).getFirstName()+","+students.get(index).getLastName()+
							 ","+ students.get(index).getDbDay()+"/"+students.get(index).getDbMonth()+"/"+students.get(index).getDbYear()
							 +","+students.get(index).getGrade()+","+students.get(index).overallMark()+","+students.get(index).toString() + "," + "\n";
								
				}

				outputStream.println(outputHeader);
				outputStream.println(output);
				outputStream.close();
	
			}catch( IOException io) {
				System.out.println("Error inputting to csv File");
				System.exit(0);
			}
		
		}
		
		System.out.println();
		System.out.println("Loaded Succesfull to csv file");
		System.out.println("============================================");
		
	}
	
	//This method will display the student Info
	public void StudentInfo() {
		System.out.println("============================================");
		System.out.println("Name : Vedricko Angkasa ");
		System.out.println("Student Number : 34315379");
		System.out.println("Enrolment : ICT167 ");
		System.out.println("Tutor Name : Aaron Yeo ");
		System.out.println("Date : 30 July 2021");
		System.out.println("============================================");
		
	}
	
	//This method will display all the Object inside the ArrayList
	//Form of Input : it will take object in the ArrayList
	//Form of Output : it will display all object in the ArrayList
	public void run() {
		for(Student s : students) {
			s.display();
			System.out.println();
		}	
	}
	
	//This method will load data to the ArrayList from the method setData() and getResultData()
	//it will load it into ArrayList
	//Form of Input : it will get Id from object in the Arraylist and call method setData to set the values
	//Form of Output : it will load to ArrayList
	private void readResult() {
				
		for(Student s : students) {
			try {
				String data = getResultData(s.getId());
				if(data.equals("")) {
					throw new StudentNotFoundException(s.getId());
				}
				s.setData(data);
			}catch(StudentNotFoundException ex){
				System.out.println(ex);
				System.out.println();
			}
		}
	}
	
	//This method is used to load StudentID from (Research/CourseWork) .csv to the ArrayList
	//Form of input : it will take data from (Research/CourseWork) .csv 
	//Form of output : it will load the data to ArrayList
	private String getResultData(long id) {
		
		String toReturnLine = "";
		try {
			Scanner file = new Scanner(new File(dealWithType+".csv"));
		
			file.nextLine();
			while (file.hasNextLine()) {
				String line = file.nextLine();
				String[] data = line.split(",");
				long studentID = Long.parseLong(data[0]);
				if(studentID == id) {
					toReturnLine = line;
					break;
				}
			}
			file.close();
		}catch(FileNotFoundException ex) {
			System.out.println("students.csv File not found");
			System.out.println();
		}
		return toReturnLine;
	}
		
	
	//This method is used to load and set data to the object in the Arraylist
	//Form of input : it will take data from students.csv
	//Form of output :  it will set the variables to object in the ArrayList
	private void readStudent(){
		
		try {
			Scanner file = new Scanner(new File("students.csv"));
	
			file.nextLine();
			
			while (file.hasNextLine()) {

				String line = file.nextLine();
				String[] data = line.split(",");
				String type = data[0];
				String title = data[1];
				String firstName = data[2];
				String lastName = data[3];
				long studentID = Long.parseLong(data[4]);
				int dbMonth = Integer.parseInt(data[5]);
				int dbDay = Integer.parseInt(data[6]);
				int dbYear = Integer.parseInt(data[7]);
				
				if(type.equals("coursework") && dealWithType.equals("coursework")) {
					CourseWork cw = new CourseWork(title, firstName, lastName, studentID, dbDay, dbMonth, dbYear,type);
					students.add(cw);
				}else if(type.equals("research") && dealWithType.equals("research")) {
					ResearchStudent r = new ResearchStudent(title, firstName, lastName, studentID, dbDay, dbMonth, dbYear,type);
					students.add(r);			
				}
			}
			
		}catch(FileNotFoundException ex) {
			System.out.println("students.csv File not found");
			System.out.println();
		}
	}
	
	


	
	
	
	
	
}
