 <?php 

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123"; // Mysql password 
$db_name="clubresults"; // Database name 

//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
mysql_select_db("$db_name")or die("cannot select DB");

 //This code runs if the form has been submitted
if (isset($_POST['submit'])) { 
	$firstname=$_POST['Firstname'];
	$surname=$_POST['Surname'];
	$address=$_POST['Address'];
	$age=$_POST['Age'];
	$email=$_POST['Email'];

	// To protect MySQL injection 
	$firstname = stripslashes($firstname); 
	$surname = stripslashes($surname); 
	$address = stripslashes($address); 
	$age = stripslashes($age);
	$email = stripslashes($email); 	
	
	$firstname = mysql_real_escape_string($username); 
	$surname = mysql_real_escape_string($password); 
	$address = mysql_real_escape_string($address); 
	$age = mysql_real_escape_string($age); 
	$email = mysql_real_escape_string($email);
	
 //This makes sure they did not leave any fields blank
 if (!$_POST['Firstname'] | !$_POST['Surname'] | !$_POST['Address'] | !$_POST['Age'] | !$_POST['Email'] ) {
		include 'registerMember.inc';
		die("<script type='text/javascript'>alert('You did not complete all of the required fields');</script>");
 	}
	
 // now we insert it into the database
 	$insert = "INSERT INTO members (Firstname, Surname, Address, Age, Email)
 			VALUES ('".$_POST['Firstname']."', '".$_POST['Surname']."', '".$_POST['Address']."', '".$_POST['Age']."', '".$_POST['Email']."')";
 	$add_member = mysql_query($insert);

	header("Location:success.php"); // redirects the user to confirm that the registration was successful
	}
?>