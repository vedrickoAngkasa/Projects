



"use strict";
var menu_ids = ["menu1","menu2","menu3","menu4","menu5","menu6","menu9","menu10","menu11"];
var menus = [];
var page_ids = ["page1","page2","page3","page4","page5","page6","page9","page10","page11"];
var pages = [];
var pagesLoaded = [true, false, false,false,false, false];

var activePage = 0; 


var init = function()
{
	for (var i=0;i<menu_ids.length;i++)
	{
		menus[i] = document.getElementById(menu_ids[i]);
		menus[i].style.top = (i * 2.5)+"em";
		SetupEventListener (menus[i],i); 
	}
	
	for (var i=0;i<page_ids.length;i++)
	{
		pages[i] = document.getElementById(page_ids[i]);
		pages[i].classList.add("page-inactive"); 
	}
	
	activate(activePage);
}

var SetupEventListener = function(obj, index)
{

	obj.addEventListener("click",()=>click(index)); 
}

var click = function(index)
{
	deactivate(activePage);
	activePage = index;
	activate(activePage);
}

var activate = function(index)
{
	menus[index].classList.remove("menu-active");
	menus[index].classList.add("menu-inactive");
	
	pages[index].classList.remove("page-inactive");
	pages[index].classList.add("page-active");
}

var deactivate = function(index)
{
	menus[index].classList.remove("menu-inactive");
	menus[index].classList.add("menu-active");
	
	pages[index].classList.remove("page-active");
	pages[index].classList.add("page-inactive");
}



function search(){

	var search = document.getElementById('search1').value;	
	
	console.log(search);

}



function addtoCart(){

	
}



function adminInput(){

	var data = "adminSearch=" + encodeURI(document.getElementById("adminInput").value);
	
	getAdminData(data);
}


function getAdminData(data){

	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange=function(){

		if (this.readyState==4 && this.status==200){
			adminOutput(this.responseText);

		}
	}
	xhr.open('POST', 'admin.php', true);

	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhr.send(data);

}

function adminOutput(information){

	var outputAdmin = JSON.parse(information);
	
	for(let info = 0 ; info < 6 ; info++){

		document.getElementById('adminInfo'+ (info+1)).innerHTML = outputAdmin[info];

	}



}



function getDataLogin(){
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            loginInfo(this.responseText);
        }		
    }
    
    xhr.open('get', 'loginInfo.php', true);
    xhr.send();


}

function validateForm(){

	var username = document.getElementById('usernameUpt').value;
	var password =  document.getElementById('passwordUpt').value;
	var name = document.getElementById('nameUpt').value;
	var address = document.getElementById('addressUpt').value;
	var phone =  document.getElementById('phoneUpt').value;
	var email = document.getElementById('emailUpt').value;

	if(username == "" || password == "" || name == "" || address == "" || phone == "" || email ==  ""){

		alert("Please fill up all information that has to be updated")
		return false;
	}

}

function loginInfo(info){

	var loginData = JSON.parse(info);
   	console.log(loginData[6]);
	if(role == "u1"){

		for(let  counter = 0 ; counter < 6; counter++){

		document.getElementById('accountData'+ (counter+1)).innerHTML = loginData[counter];

		}

	}
	if(role == "u2"){

		for(let counter = 0 ; counter < 6; counter++){

		document.getElementById('accountData'+ (counter+1)).innerHTML = loginData[counter+6];

		}

	}

	if(role == "u3"){

		for(let counter = 0 ; counter < 6; counter++){

		document.getElementById('accountData'+ (counter+1)).innerHTML = loginData[counter+12];

		}

	}

	if(role == "s1"){

		for(let  counter = 0 ; counter < 6; counter++){

		document.getElementById('accountData'+ (counter+1)).innerHTML = loginData[counter+18];

		}

	}
	if(role == "s2"){

		for(let counter = 0 ; counter < 6; counter++){

		document.getElementById('accountData'+ (counter+1)).innerHTML = loginData[counter+24];

		}

	}

	if(role == "s3"){

		for(let counter = 0 ; counter < 6; counter++){

		document.getElementById('accountData'+ (counter+1)).innerHTML = loginData[counter+30];

		}

	}
	
	

}



function login(){

	if(role == "u1" || role == "u2" || role == "u3" ){
		document.getElementById("menu4").style.display = "none";
		document.getElementById("menu6").style.display = "block";
	}else if(role == "s1" || role == "s2" || role == "s3"){
		document.getElementById("menu4").style.display = "none";
		document.getElementById("menu6").style.display = "block";
		document.getElementById("formContentAdmin").style.display = "block";

	}

}



function getData(){
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            processResponse(this.responseText);
        }		
    }
    
    xhr.open('get', 'data.php', true);
    xhr.send();


}

function logout(){

	document.getElementById('logoutBtn').addEventListener("click",function(){
		document.getElementById("menu4").style.display = "block";
		document.getElementById("menu6").style.display = "none";
	});

}

function validateSearch(){

	var search = document.getElementById('inputSearch').value;
	
	if(search == ""){
		alert("Please Enter A Name of Product to search");
		return false;
	}	

}

function processResponse(output){

    var info = JSON.parse(output);

	for(let index = 0 ; index < info.length ; index++){
		document.getElementById('productName'+(index+7)).innerHTML = info[(index*4)];
		document.getElementById('productDesc'+(index+7)).innerHTML = info[(index*4)+1];
  		document.getElementById('price'+(index+7)).innerHTML = info[(index*4)+2]; 
		document.getElementById('img' +(index+7)).src = info[(index*4)+3]; 

	}
	
	


}




$(document).ready(function(){

     
    init();
    getData();
	login();
	getDataLogin();
	logout();
	console.log(role);


});
    


