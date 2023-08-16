"use strict";

function validateForm() {
  let studentID = $("#studentID").val();
  let firstName = $("#firstName").val();
  let lastName = $("#lastName").val();
  let age = $("#age").val();
  let gender;
  let degree = $("#degree").val();
  let hiddenValue = $('input[type=file]').val().split('\\').pop();	
  let image = $('input[type=file]').val();	
  $("#hiddenValue").val(hiddenValue);
  let test =  $("#hiddenValue").val(hiddenValue);
  if ($("#male").is(":checked")) {
    gender = $("#male").val();
  } else if ($("#female").is(":checked")) {
    gender = $("#female").val();
  }
	

  if (studentID == "") {
    $("#errorStudentID").show();
    return false;
  } else if (firstName == "") {
    $("#errorStudentID").hide();
    $("#errorFirstName").show();
    return false;
  } else if (lastName == "") {
    $("#errorFirstName").hide();
    $("#errorLastName").show();
    return false;
  } else if (age == "" || age < 0) {
    $("#errorLastName").hide();
    $("#errorAge").show();
	e.preventDefault();
    return false;
  } else if ($("input[name='genderOption']:checked").length == 0) {
    $("#errorAge").hide();
    $("#errorGender").show();
	e.preventDefault();
    return false;
  } else if (degree == "") {
    $("#errorGender").hide();
    $("#errorDegree").show();
	e.preventDefault();
    return false;
    }else {
	$("#errorDegree").hide();

	return true;
  }

}

