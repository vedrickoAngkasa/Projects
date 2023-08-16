package Assignment_1;
import java.util.*;
/*
 * Title : Assignment 1 ICT167
 * Author :  Vedricko Angkasa
 * Date : 26 June 2021
 * File Name : MoneyChange.java and Client.java
 * 
 */


public class Client {

static Scanner input = new Scanner(System.in);
	

	//this method is used to call other method
	public static void main(String[] args) {
		
		Client coin = new Client();
		coin.StudentInfo();
		//testing method is the method for using hardcode input
		coin.testing();
		
		//coin.takeInput();

	}
	
	
	//this method will display information documentation
	public void StudentInfo() {
		System.out.println("==============================================");
		System.out.println("Name : Vedricko Angkasa ");
		System.out.println("Student Number : 34315379");
		System.out.println("Enrolment : ICT167 ");
		System.out.println("Tutor Name : Aaron Yeo ");
		System.out.println("==============================================");
		
	}
	
	
	//this method is used to take user input and display the total amount of the coin
	//Following that it will go to menuInput() method where it will display a menu for the user to enter
	public void takeInput() {
		MoneyChange[] Array = new MoneyChange[10];
		
		char opt = 'a';
		boolean found = true;
		int totalCustomer = 0;
		System.out.println("Please enter 10 customer name with coins ");

		
		for(int i = 0 ; i < Array.length; i++) {	
	
			Array[i] = new MoneyChange();
			
				System.out.println("Please enter "+ (i+1)  +" the name of the person : ");
				String custName = input.next();
				
				System.out.println("Please enter the coin value for the person (range 5 to 200, multiple of 5): ");
				int custCoin = input.nextInt();
				
				 	for( int counter = 0; counter < totalCustomer; counter++ ){   
	                    if ( Array[counter].getName().equalsIgnoreCase(custName)){
	                        Array[counter].setChange(Array[counter].getChange() + custCoin);
	                        found = false;
	                        break;
	                    }
	                }
	             
	                
	                if(found){                    
	                    Array[totalCustomer++] = new MoneyChange(custName, custCoin);
	                }
	                
	                if( totalCustomer > 10 ){
	                    break;
	                }
	
				
	                if(custCoin < 5 || custCoin >200 || (custCoin%5)!=0) {
	                	System.out.println();
	                	System.out.println("Invalid input");
	                	break;
	                }
				
	                
				System.out.println("Do you have more person to enter (Y/N) : ");
				opt = input.next().trim().toLowerCase().charAt(0);
				System.out.println();
				
					if(opt == 'n') {
						System.out.println("Exit Program");
						System.out.println();
							for ( int counter = 0; counter < totalCustomer; counter++ ){
								System.out.println("Customer[" + (counter+1) + "] = " + Array[counter].getName() + " with coin amount " + Array[counter].getChange());
								System.out.println();  
				        }
							
							menuInput(Array);
							break;
					}
				
				
					if(opt !='y') {
						System.out.println("Invalid input");
						System.out.println();
						break;
					}
					
					
		}
						System.out.println();
						System.out.println("Exceeded the limit ");
				
					for ( int counter = 0; counter < totalCustomer; counter++ ){	
							System.out.println();
							System.out.println("Customer[" + (counter+1) + "] = " + Array[counter].getName() + " with coin amount :  " + Array[counter].getChange());
							System.out.println(); 
					}
			
			menuInput(Array);
	}
		

	//this method is used to display menu for the user to enter 
	//Using the newArray parameter, it will use the all the value that the user inputted before in the takeInput() method
	public void menuInput(MoneyChange[] newArray) {
		
		int userInput = 0;
		
		do {
			
			System.out.println("Select option 5 to exit the program ");
			System.out.println("-------------------------------------------------------------------------------------");
            System.out.println("1. Enter a name and display change to be given for each denomination ");
            System.out.println("2. Find name with smallest coin amount and display change for each denomination");
            System.out.println("3. Find name with largest coin amount and display change for each denomination");
            System.out.println("4. Calculate and display largest number of coin denomination and total number of coin");
            System.out.println("5. Exit The Program");
            System.out.println("-------------------------------------------------------------------------------------");
            
            	do {
            		
            		System.out.println("Enter a choice [1/2/3/4/5] : ");
            		userInput = input.nextInt();
            		System.out.println();
            	}while( userInput != 1 && userInput != 2 && userInput !=3 && userInput != 4 && userInput != 5);
            
            	
			
			
            		switch(userInput) {
			
            			case 1:
            				menu1(newArray);
            			break;
			
            			case 2:
            				menu2(newArray);
            				break;
			
            			case 3:
            				menu3(newArray);
            				break;
			
            			case 4:
            				menu4(newArray);
            				break;
			
            			case 5:
            				System.out.println("You have exited the menu");
            				System.out.println("Thank you for using it");
            				break;
			
            			default:
            				System.out.println("Invalid choice");
            				System.out.println();
            				break;
            		}
			
		}while(userInput!=5);
		
	}
	
	
	//this method will execute if the user put in the value 1 in the menuInput() method
	//this method will determine the change from the user input 
	public void menu1(MoneyChange[] newArray) {
		
		boolean found = false;
		
		
		System.out.println("Customer Name : ");
		String NameCust = input.next();
		
		for(int i = 0 ; i < newArray.length ; i++) {
			
			if(newArray[i].getName().equalsIgnoreCase(NameCust)) {
				
				newArray[i].ChangeMoney(newArray[i].getChange());
				
					newArray[i].displayMoneyChange();
					
					System.out.println();
					found = true;
			} 
			
		}
		
		
			if(!found) {
				System.out.println("User not found");
				System.out.println();
			}
			
			menuInput(newArray);
	}
	
		
		
	
	//this method will execute it the user enter 2 in the menuInput() method
	//this method will determine the smallest coin amount and display the change and customer name
	public void menu2(MoneyChange[] newArray) {
		
		
		int smallest = newArray[0].getChange(); 
		
		
			for(int i = 1 ; i < newArray.length ; i++) {

					if(newArray[i].getChange() < smallest) {
				
							System.out.println("Customer with smallest coin amount : ");
							System.out.println(newArray[i].getName());
							
							smallest = newArray[i].getChange();
							newArray[i].ChangeMoney(smallest);
							newArray[i].displayMoneyChange();
						
							
							
					}		
			}
		
		menuInput(newArray);
	}
	
	
	//this method will execute if the user enter 3 in the menuInput() method
	//this method will determine the largest coin amount and display the change and customer name
	public void menu3(MoneyChange[] newArray) {
		int largest = 0;
		largest = newArray[0].getChange();
	
			for(int i = 1 ; i < newArray.length ; i++) {

						if(newArray[i].getChange() > largest) {
				
							System.out.println("Customer with largest coin amount : ");
							System.out.println(newArray[i].getName());
							
							largest = newArray[i].getChange();
							newArray[i].ChangeMoney(largest);
							newArray[i].displayMoneyChange();
				
								
							
					}
			}
		menuInput(newArray);
	}

	//this method will execute if the user enter 4 in the menuInput() method
	//this method will the determine the largest coin change amount 
	public void menu4(MoneyChange[] newArray) {
		
		int sumTwoD = 0;
		int sumOneD = 0;
		int sumfifty = 0;
		int sumtwenty = 0;
		int sumtenth = 0;
		int sumfifth = 0;
		int[] ChangeDenomination = new int[6];
		int largestDenom = 0;
		largestDenom = ChangeDenomination[0];
		
		
			for(int i = 0 ; i < newArray.length ; i++) {
				
				newArray[i].ChangeMoney(newArray[i].getChange());
			
				sumTwoD += newArray[i].getTwoD();
				sumOneD += newArray[i].getOneD();
				sumfifty += newArray[i].getFifty();
				sumtwenty += newArray[i].getTwenty();
				sumtenth += newArray[i].getTenth();
				sumfifth += newArray[i].getFifth();
			
			
				ChangeDenomination[0] = sumTwoD;
				ChangeDenomination[1] = sumOneD;
				ChangeDenomination[2] = sumfifty;
				ChangeDenomination[3] = sumtwenty;
				ChangeDenomination[4] = sumtenth;
				ChangeDenomination[5] = sumfifth;
				
				newArray[i].displaySumChange(ChangeDenomination,largestDenom);
				
			
				menuInput(newArray);
			}
		
		}
		

		
	
	
	//this method is a hardcoded method that can be called in the main
	//it purpose is for testing purposes
	public void testing() {
		
		MoneyChange[] test = new MoneyChange[10];
		
			MoneyChange testing = new MoneyChange("John",50);
			test[0] = testing;
			
			test[1] = new MoneyChange();
			test[1].setName("Joselyn");
			test[1].setChange(40);
			
			MoneyChange testing3 = new MoneyChange("Jane",30);
			test[2] = testing3;
			
			test[3] = new MoneyChange();
			test[3].setName("Fred");
			test[3].setChange(90);
			
			test[4] = new MoneyChange("Bob",20);
			test[5] = new MoneyChange("William",25);
			test[6] = new MoneyChange("Chris",25);
			test[7] = new MoneyChange("Brad",10);
			test[8] = new MoneyChange("Tom",20);
			test[9] = new MoneyChange("Wick",10);
	
			
			
			addNewChange(test,"Jane",10);
			addNewChange(test,"Pogba",60);
			printAllChangeObject(test);
			menuInput(test);

		}
	
	//this method will add the coin amount to the customer that have the same name
	public static void addNewChange(MoneyChange[] changeArray, String nameToAdd,int amountToAdd) {
		
		boolean found = false;
				
		for(int i=0;i<changeArray.length;i++) {
			
			MoneyChange currentChange = changeArray[i];
			
			if(currentChange!=null) {
				
				String currentName = currentChange.getName();
				
				if(currentName.equals(nameToAdd)) {
					
					currentChange.addCoinChangeAmount(amountToAdd);
					found = true;
					
				}
				
			}
			
		}
		
		
		if(found) {
			System.out.println("Name found amount added");
		}else {
			MoneyChange newChangeObject = new MoneyChange(nameToAdd, amountToAdd);
			addNewChangeObject(changeArray,newChangeObject);
		}
		
		
		
	}
	
	//this method is used to display all the object that has been changed in the array
	private static void printAllChangeObject(MoneyChange[] changeArray) {
		
		
		System.out.println("Print All Change Objects");
		for(int i=0;i<changeArray.length;i++) {
			
			MoneyChange currentChange = changeArray[i];
			
			if(currentChange!=null) {
				
				currentChange.display();
			
			}
		}
		
		
	}
	
	//this method will add a customer and coin amount if there is a null inside the array
	private static void addNewChangeObject(MoneyChange[] changeArray, MoneyChange change) {
		
		boolean found = false;
		

		for(int i=0;i<changeArray.length;i++) {
			
			MoneyChange currentChange = changeArray[i];
			
			if(currentChange==null) {
				
				changeArray[i] = change;
				found = true;
				break;
			
			}
		}
		
		
		if(found) {
			System.out.println("New change object added");
		}else {
			System.out.println("No free slots found");
		}
		
		
	}
	


}