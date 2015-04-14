
var alphabet = /[a-zA-Z]/;
var numericExpression = /^[0-9]+$/;
var emailExpression = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

function signupValidation(thisForm){
	var allValid;
	allValid =(checkFirstname(thisForm) && checkLastname(thisForm) && checkStudentID(thisForm) 
		&& checkFaculty(thisForm) && checkStatus(thisForm) && checkLevel(thisForm) 
		&& checkEmail(thisForm) && checkPassword(thisForm) && checkPasswordConfirmation(thisForm));
	return allValid;
}

function checkFirstname(thisForm){	
	if(thisForm.first_name.value==''){
		alert("You did not enter your first name.");
		return false;
	}
	else{
		return true;
	}
}

function checkLastname(thisForm){	
	if(thisForm.last_name.value==''){
		alert("You did not enter your last name.");
		return false;
	}
	else{
		return true;
	}
}

function checkStudentID(thisForm){	
	if(thisForm.studentid.value==''){
		alert("You did not enter your ID number.");
		return false;
	}
	else{
		return true;
	}
}

function checkFaculty(thisForm){
	var selectBox = document.getElementById('faculty');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue == '----Select Faculty-----'){
		alert("You did not select a faculty.");
		return false;
	}
	else{
		return true;
	}
}

function checkStatus(thisForm){
	var selectBox = document.getElementById('status');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue == '-----Select Status--------'){
		alert("You did not select a your status.");
		return false;
	}
	else{
		return true;
	}
}

function checkLevel(thisForm){
	var selectBox = document.getElementById('level');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue == '----Select Level-----'){
		alert("You did not select a level.");
		return false;
	}
	else{
		return true;
	}
}

function checkEmail(thisForm){
	var selectBox = document.getElementById('email');
	if(selectBox.value==''){
		alert("You did not enter your email.");
		return false;
	}
	else if(!(selectBox.value.match(emailExpression))){
		alert("Invalid email.");
		return false;
	}
	else{
		return true;
	}
}

function checkPassword(thisForm){	
	if(thisForm.password.value==''){
		alert("Please enter your password.");
		return false;
	}
	else{
		return true;
	}
}

function checkPasswordConfirmation(thisForm){	
	if(thisForm.password_confirmation.value==''){
		alert("Please confirm your password.");
		return false;
	}
	else if(thisForm.password_confirmation.value!= thisForm.password.value){
		alert("Password confirmation does not match your password.");
		return false;
	}
	else{
		return true;
	}
}