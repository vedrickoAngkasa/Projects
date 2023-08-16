package Assignment_1;


public class MoneyChange {
//instance variables
	
private String Name;// Name of the customer
private int Change;// the coin amount of the customer
private int oneD;// represents one dollar 
private int twoD;//represents two dollar
private int fifty;//represents 50 cent
private int twenty;//represents 20 cent
private int tenth;//represents 10 cent
private int fifth;//represents 5 cent
	

	//default constructor that will set the value to default value
	//Pre-Condition - the coin amount from the user input must be in the range of 5-200 and must be divisible by 5
	//Post-Condition - object is created with the value of Name and Change are null and 0
	public MoneyChange() {
		this.Name = "";
		this.Change = 0;
	}
	
	//constructor that will set value of Name and Change based on the value of parameters
	//Pre-Condition - the coin amount from the user input must be in the range of 5-200 and must be divisible by 5
	//Post-Condition - object is created with the value of Name and Change from user input
	public MoneyChange(String Name, int change) {

		
			this.Name = Name;
			this.Change = change;

		
	}
	
	
	//this method will get the value of OneD variable
	//Pre-Condition - the value of int oneD will be a default value
	//Post-Condition - will return value of int oneD that has been passed in by the setOneD() method 
	public int getOneD() {
		return oneD;
	}
	
	//this method will set the value of OneD variable
	//Pre-Condition - the value of int oneD will be a default value
	//Post-Condition - will passed in the value of int oneD by using parameters or the constructor
	public void setOneD(int oneD) {
		this.oneD = oneD;
	}
	
	//this method will get the value of TwoD variable
	//Pre-Condition - the value of int twoD will be a default value
	//Post-Condition - will return value of int twoD that has been passed in by the setwoD() method 
	public int getTwoD() {
		return twoD;
	}
	
	//this method will set the value of TwoD variable
	//Pre-Condition - the value of int twoD will be a default value
	//Post-Condition - will passed in the value of int twoD by using parameters or the constructor
	public void setTwoD(int twoD) {
		this.twoD = twoD;
	}

	//this method will get the value of fifty variable
	//Pre-Condition - the value of int fifty will be a default value
	//Post-Condition - will return value of int fifty that has been passed in by the setFifty() method 
	public int getFifty() {
		return fifty;
	}

	//this method will set the value of fifty variable
	//Pre-Condition - the value of int fifty will be a default value
	//Post-Condition - will passed in the value of int fifty by using parameters or the constructor
	public void setFifty(int fifty) {
		this.fifty = fifty;
	}

	//this method will get the value of twenty variable
	//Pre-Condition - the value of int twenty will be a default value
	//Post-Condition - will return value of int twenty that has been passed in by the setTwenty() method 
	public int getTwenty() {
		return twenty;
	}

	//this method will set the value of twenty variable
	//Pre-Condition - the value of int twenty will be a default value
	//Post-Condition - will passed in the value of int twenty by using parameters or the constructor
	public void setTwenty(int twenty) {
		this.twenty = twenty;
	}
	
	//this method will get the value of tenth variable
	//Pre-Condition - the value of int tenth will be a default value
	//Post-Condition - will return value of int tenth that has been passed in by the setTenth() method 
	public int getTenth() {
		return tenth;
	}
	
	//this method will set the value of tenth variable
	//Pre-Condition - the value of int tenth will be a default value
	//Post-Condition - will passed in the value of int tenth by using parameters or the constructor
	public void setTenth(int tenth) {
		this.tenth = tenth;
	}
	
	//this method will get the value of fifth variable
	//Pre-Condition - the value of int fifth will be a default value
	//Post-Condition - will return value of int fifth that has been passed in by the setFifth() method 
	public int getFifth() {
		return fifth;
	}
	
	//this method will set the value of fifth variable
	//Pre-Condition - the value of int fifth will be a default value
	//Post-Condition - will passed in the value of int fifth by using parameters or the constructor
	public void setFifth(int fifth) {
		this.fifth = fifth;
	}
	
	//this method will get the value of Name variable
	//Pre-Condition - the value of String Name will be a default value
	//Post-Condition - will return value of String Name that has been passed in by the setName() method 
	public String getName() {
		return this.Name;
	}
	
	//this method will set the value of Name variable
	//Pre-Condition - the value of String Name will be a default value
	//Post-Condition - will passed in the value of String Name by using parameters or the constructor
	public void setName(String name) {
		this.Name = name;
	}
	
	//this method will get the value of Change variable
	//Pre-Condition - the value of int Change will be a default value
	//Post-Condition - will return value of int Change that has been passed in by the setChange() method 
	public int getChange() {
		return this.Change;
	}
	
	//this method will set the value of Change variable
	//Pre-Condition - the value of int Change will be a default value
	//Post-Condition - will passed in the value of int Change by using parameters or the constructor
	public void setChange(int change) {
		
			this.Change = change;

	}
	
	//this method will add the value of the parameter and set it to the Change variable
	//this method will set the value when call upon
	//Pre-Condition - the value of this.Change will be the same as setChange() method value or Constructor value
	//Post-Condition - will set the value of this.Change based on the value of parameter that has been passed in
	public void addCoinChangeAmount(int coinChangeAmountToAdd) {
		this.Change += coinChangeAmountToAdd;
	}
	
	
	//this method set the variables of twoD ,oneD, fifty, twenty, tenth, and fifth
	//this method will set the values when call upon
	//Pre-Condition - the value of this.twoD, this.oneD, this.fifty, this.twenty, this.tenth, this.fifth will be same as thier Setters methods and Constructors
	//Post-Condition - will set the value of this.twoD, this.oneD, this.fifty, this.twenty, this.tenth, this.fifth when method is called upon
	public void ChangeMoney(int change) {
		int remainder1 = 0;
		int remainder2 = 0;
		int remainder3 = 0;
		int remainder4 = 0;
		int remainder5 = 0;
		
		if(change >= 200) {
			this.twoD = change / 200;
		}
		
	
		
		remainder1 = change % 200;
		remainder2 = remainder1 % 100;
		remainder3 = remainder2 % 50;
		remainder4 = remainder3 % 20;
		remainder5 = remainder4 %10;
		
		this.oneD = remainder1 / 100;
		this.fifty = remainder2 /50;
		this.twenty = remainder3 /20;
		this.tenth = remainder4/10;
		this.fifth = remainder5/5;
		
		
	
	}
	
	//this method will display largest change coin amount denominations
	//this method will display when call upon
	//Pre-Condition - it will display the largest change denomination with default value
	//Post-Condition - when method is called it will display value of the largest coin change denomination
	public void displaySumChange(int[] ChangeDenomination, int largestDenomination ) {
		
		for(int index = 0 ; index < ChangeDenomination.length; index++) {
			
			if(ChangeDenomination[index] > largestDenomination) {
				System.out.println();
				largestDenomination = ChangeDenomination[index];
			
					if(largestDenomination == ChangeDenomination[0]) {
						System.out.println("The largest denom is $2 with a total of :" + ChangeDenomination[0]);
					}
					
					if(largestDenomination == ChangeDenomination[1]) {
						System.out.println("The largest denom is $1 with a total of :" + ChangeDenomination[1]);
					}
						
					if(largestDenomination == ChangeDenomination[2]) {
						System.out.println("The largest denom is 50 cent with a total of :" + ChangeDenomination[2]);
					}
					
					if(largestDenomination == ChangeDenomination[3]) {
						System.out.println("The largest denom is 20 with a total of :" + ChangeDenomination[3]);
					}
					
					if(largestDenomination == ChangeDenomination[4]) {
						System.out.println("The largest denom is 10 with a total of :" + ChangeDenomination[4]);
					}
					
					if(largestDenomination == ChangeDenomination[5]) {
						System.out.println("The largest denom is 5 with a total of :" + ChangeDenomination[5]);
					}
					
			}
		}
		
		
		
		
	}
	
	//this method will display the change from the coin amount
	//this method will display when the method is call upon
	//Pre-Condition - will display the default values of this.twoD, this.oneD, this.fifty, this.twenty, this.tenth, this.fifth
	//Post-Condition - will display the values of this.twoD, this.oneD, this.fifty, this.twenty, this.tenth, this.fifth that has been passed in using 
	//Setters method or Constructors when method is called upon
	public void displayMoneyChange() {
		
		if(getTwoD()>0) {
			System.out.println("$2 : " + getTwoD());
		}
	
		if(getOneD()>0) {
			System.out.println("$1 : " + getOneD());
		}
	
		if(getFifty()>0) {
			System.out.println("50 cent "+ getFifty());
		}
	
		if(getTwenty()>0) {
			System.out.println("20 cent : "+ getTwenty());
		}
	
		if(getTenth()>0) {
			System.out.println("10 cent : "+getTenth());
		}
	
		if(getFifth()>0) {
			System.out.println("5 cent : " + getFifth());
		}
		
	}
	
	//this method will display the name and coin amount
	//this method will display when call upon
	//Pre-Condition - will display the default value of Name and Change variables
	//Post-Condition - will display the values that has been passed in by using Constructors or Setters methods when method is called upon
	public void display() {
		System.out.println("Name:"+Name);
		System.out.println("CoinChangeAmount:"+Change);
		System.out.println();
	}
	

	


}
