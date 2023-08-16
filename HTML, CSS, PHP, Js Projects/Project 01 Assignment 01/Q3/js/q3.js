

var today = new Date();
var dateDay = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
var dateMonth = ["January","Febuary","March","April","May","June","July","August","September","October","November","December"];
var dateToday = today.getDay();
var dateYear = today.getFullYear();
var dateHour = today.getHours();
var dateMinutes = today.getMinutes();




function todayDate(){
    document.getElementById("day").innerHTML = "Day : " + dateDay[dateToday].fontcolor("red") ;
    document.getElementById("date").innerHTML = "Date : " +  "<span style=\"color:green\">" +dateToday+ "</span>"+" " + dateMonth[today.getMonth()].fontcolor("yellow") + " "  + "<span style=\"color:blue\">" +dateYear +"</span>";
    document.getElementById("time").innerHTML =  "Time : " + "<span style=\"color:brown\">" + +dateHour+ ":" + dateMinutes + "</span>";
}




function App(){
    document.getElementById("app").innerHTML = "Browser Application : "+(navigator.appVersion);
}

function platform(){
    document.getElementById("platform").innerHTML = "Browser Platform : "+(navigator.appName);
}

function myURL(){
    document.getElementById("url").innerHTML = "URL Page : " +(window.location);
}

function linkTotal(){
    var totallink = document.getElementsByTagName('a').length;
    return totallink;
}

function forumTotal(){
    var totalFroum = document.getElementsByTagName('form').length;
    return totalFroum;
}

$(document).ready(function(){
    todayDate();
    App();
    platform();
    myURL();
    document.getElementById("link").innerHTML = "Total links in this page are : " + linkTotal();
    document.getElementById("forms").innerHTML = "Total forms in this page are : "+ forumTotal();
});
