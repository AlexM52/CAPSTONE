function specialSelectHandler(){
	var selectBox = document.getElementById('special');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Special--'){
		document.getElementById('major1group').style.display = 'none';
	}
}

function major1SelectHandler(){
	var selectBox = document.getElementById('major1');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Major--'){
		document.getElementById('specialgroup').style.display = 'none';
		document.getElementById('major2group').style.display = "block";
		document.getElementById('minor1group').style.display = 'block';
	}
}

function major2SelectHandler(){
	var selectBox = document.getElementById('major2');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Major--'){
		document.getElementById('minor1group').style.display = 'none';
	}
}

function minor1SelectHandler(){
	var selectBox = document.getElementById('minor1');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Minor--'){
		document.getElementById('major2group').style.display = 'none';
		document.getElementById('minor2group').style.display = 'block';
	}
}

function FormValidation(){
/* 	var major1 = document.getElementById('major1');
	majorValue1 = major1.value;
	alert("start check");
	alert(majorValue1);
	var major2 = document.getElementById('major2');
	majorValue2 = major2.value; */
	
	var minor1 = document.getElementById('minor1');
	minorValue1 = minor1.value;
	//alert(minorValue1);
	var minor2 = document.getElementById('minor2');
	minorValue2 = minor2.value;
	//alert(minorValue2);
	
/* 	if ((majorValue1 == majorValue2) && (majorValue1 != "--Select Major--")){
		alert("You cannot do two same Majors.");
		return false;
	} */
	// else 
	if ((minorValue1 == minorValue2) && (minorValue1!= "--Select Minor--")){
			alert("You cannot do two same Minors.");
			return false;
	}
	else{
		return true;
	}
}