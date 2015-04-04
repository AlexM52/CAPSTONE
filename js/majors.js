function specialSelectHandler(){
	var selectBox = document.getElementById('special');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Special--'){
		document.getElementById('major1').disabled = true;
	}
}

function major1SelectHandler(){
	var selectBox = document.getElementById('major1');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Major--'){
		document.getElementById('special').disabled = true;
		document.getElementById('major2').disabled = false;
		document.getElementById('minor1').disabled = false;
	}
}

function major2SelectHandler(){
	var selectBox = document.getElementById('major2');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Major--'){
		document.getElementById('minor1').disabled = true;
	}
}

function minor1SelectHandler(){
	var selectBox = document.getElementById('minor1');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Minor--'){
		document.getElementById('major2').disabled = true;
		document.getElementById('minor2').disabled = false;
	}
}

function FormValidation(thisForm){
	alert("validate");
	document.getElementById('special').disabled = false;
	document.getElementById('major1').disabled = false;
	document.getElementById('major2').disabled = false;
	document.getElementById('minor1').disabled = false;
	document.getElementById('minor2').disabled = false;
	alert("validating");
	var allValid;
	allValid = (validateEmpty(thisForm) && validateMajors(thisForm) && (validateMinors(thisForm))
		&& (validateSpecialandStatus(thisForm))); 
	return allValid;
}


function validateMajors(thisForm){
	var majorValue1 = document.getElementById('major1').value;
	var majorValue2 = thisForm.getElementById('major2').value;

 	if ((majorValue1 == majorValue2) && (majorValue1 != "--Select Major--")){
		alert("You cannot do two same Majors.");
		return false;
	}
	return true;
}


function validateMinors(thisForm){
	var minorValue1 = document.getElementById('minor1').value;
	var minorValue2 = document.getElementById('minor2').value;

	if ((minorValue1 == minorValue2) && (minorValue1!= "--Select Minor--")){
		alert("You cannot do two same Minors.");
		return false;
	}
	return true;
}


function validateEmpty(thisForm){
	alert("reach empty");
	var specialValue = document.getElementById('special').value;
	var majorValue1 = document.getElementById('major1').value;
	var majorValue2 = document.getElementById('major2').value;
	var minorValue1 = document.getElementById('minor1').value;
	var minorValue2 = document.getElementById('minor2').value;
	var levelValue = document.getElementById('level').value;
	var statusValue = document.getElementById('status').value;

	if ((majorValue1== "--Select Major--")&&(majorValue1== "--Select Major--")
		&&(minorValue1=="--Select Minor--") && (minorValue2=="--Select Minor--")
		&& (levelValue=="--Select Year--")&& (statusValue=="--Select Status--")){
		alert("Please select a major or special.");
		return false;
	}
	return true;
}

function validateSpecialandStatus(thisForm){
	var levelValue = document.getElementById('level').value;
	var statusValue = document.getElementById('status').value;

	if (levelValue=="--Select Year--"){
		alert("Please select the year you are in.");
		return false;
	}
	else if (statusValue=="--Select Status--"){
		alert("Please select your status.");
		return false;
	}
	else{
		return true;
	}
}
