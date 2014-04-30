	function validateForm()
	{
	// sets each of the values below to a varible
	var fname = document.forms["myForm"]["Firstname"].value;
	var sname = document.forms["myForm"]["Surname"].value;
	var address = document.forms["myForm"]["Address"].value;
	var age = document.forms["myForm"]["Age"].value;
	var email = document.forms["myForm"]["Email"].value;

	// checks whether fname or sname is empty, it will then prompt the user to fill it out
	if (fname==null || fname=="" || sname==null || sname==""){
	alert("Both first and surname must be filled in");
	return false;
	}
	// checks whether address or age is empty, it will then prompt the user to fill it out
	if (address==null || address=="" || age==null || age=="" ){
	alert("Please fill in your address and age")
	return false;
	}
	// checks whether email is empty, it will then prompt the user to fill it out
	if (email==null || email==""){
	alert('Please provide a valid email address');
	return false;
	}
	
	}