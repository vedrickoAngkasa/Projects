"use strict"

const input = require('readline-sync');
const prompt = require('prompt-sync')();
const listName = new Array();
const listMark = new Array(); 
const HDnames = new Array();
const Dnames = new Array();
const Cnames = new Array();
const Pnames = new Array();
const Nnames = new Array();

var table = {};


var name;
var mark;

	
while(name != 'end' && mark != 'end'){
	name = input.question("Enter a Student's Name : ");
	mark = input.question("Enter a Student's Mark [0-100]: ");
	
	if(name != 'end' && mark != 'end'){
	
	listName.push(name);
	listMark.push(mark);
	
	}
}


	
for(let i = 0 ; i < listMark.length ; i++){


	if((listMark[i] >= 85) && (listMark[i] <= 100)){
		
	
		HDnames.push(listName[i]);	
		
		

		

	
	
	}else if((listMark[i] >= 75) && (listMark[i] <= 84)){

		
		Dnames.push(listName[i]);	

		




	
	}else if((listMark[i] >=  50) && (listMark[i] <= 74)){

		
		Cnames.push(listName[i]);


		



	
			
	}else if((listMark[i] >= 30) && (listMark[i] <= 49)){

		
		Pnames.push(listName[i]);


		



	
	
	}else if((listMark[i] >= 0) && (listMark[i] <= 29)){

		
		Nnames.push(listName[i]);


		

		


	
	}else{
	
		console.log("Invalid Mark");

	}

	

}
	var HDpercent = (HDnames.length / listName.length) *100;
	HDpercent.toFixed(2);
	var Dpercent = (Dnames.length / listName.length) *100;
	Dpercent.toFixed(2);	
	var Cpercent = (Cnames.length / listName.length) *100;
	Cpercent.toFixed(2);	
	var Ppercent = (Pnames.length / listName.length) *100;
	Ppercent.toFixed(2);	
	var Npercent = (Nnames.length / listName.length) *100;
	Npercent.toFixed(2);		

	console.log();
	var table = {};
	table.HD = {number : HDnames.length , '%' : HDpercent};
	table.D = {number : Dnames.length , '%' : Dpercent};
	table.C = {number : Cnames.length , '%' : Cpercent};
	table.P = {number : Pnames.length , '%' : Ppercent};
	table.N = {number : Nnames.length , '%' : Npercent};
	console.log(table);



	console.log();
	console.log("The number of people who got HD are " + HDnames.length + " studens, Which are : " + HDnames);
	console.log("The number of people who got D are " + Dnames.length + " studens, Which are : " + Dnames);
	console.log("The number of people who got C are " + Cnames.length + " studens, Which are : " +Cnames);
	console.log("The number of people who got P are " + Pnames.length + " studens, Which are : " +Pnames);
	console.log("The number of people who got N are " + Nnames.length + " studens, Which are : " + Nnames);
	console.log();
	console.log("The percentage result of student who are in HD are " + HDnames.length + " is : "+ HDpercent +" %");
	console.log("The percentage result of student who are in D are " + Dnames.length + " is : "+ Dpercent +" %");
	console.log("The percentage result of student who are in C are " + Cnames.length + " is : "+ Cpercent +" %");
	console.log("The percentage result of student who are in P are " + Pnames.length + " is : "+ Ppercent +" %");
	console.log("The percentage result of student who are in N are " + Nnames.length + " is : "+ Npercent +" %");



 var showBest = new Array();
 var highScore = Math.max.apply(null,listMark);
 for(let i = 0 ; i < listName.length ; i ++){
	if(listMark[i] == highScore){
		
			
			showBest.push(listName[i]);
		}
	
	}


	console.log();
	console.log("The best student is : "+ showBest +  " with " + highScore );

while(Input != "stop"){
	var Input = prompt("Enter the name of the student you want to check : ").toLowerCase();
	
	for(let index = 0 ; index < listName.length; index++){
		if(listName[index].toLowerCase().includes(Input)){
			console.log("Student " + listName[index] + " with "+ listMark[index]);
		}
	}



}
	

		