<html>
	<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123"; // Mysql password 
	$db_name="clubresults"; // Database name 
	$tbl_name="admin_passwords"; // Table name

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	
	// username and password sent from form 
	$username=$_POST['username']; 
	$password=$_POST['password'];
	
	// To protect MySQL injection
	$myusername = stripslashes($username);
	$mypassword = stripslashes($password);
	$myusername = mysql_real_escape_string($username);
	$mypassword = mysql_real_escape_string($password);

	$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
	$result=mysql_query($sql);
	
	// Mysql_num_row is counting table row
	$num_rows=mysql_num_rows($result);
	// If result matched $username and $password, table row must be 1 row
	
	/*
	// Check if username and password are correct
	if ($_POST["username"] == "php" && $_POST["password"] == "php") {
	 
	// If correct, we set the session to YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  echo "<h1>You are now logged correctly in</h1>";
	  echo "<p><a href='document.php'>Link to protected file</a><p/>";
	 
	}
	else {
	 
	// If not correct, we set the session to NO
	  session_start();
	  $_SESSION["Login"] = "NO";
	  echo "<h1>You are NOT logged correctly in </h1>";
	  echo "<p><a href='document.php'>Link to protected file</a></p>";
	 
	}*/
	
	if($num_rows == 1){
	session_start();
	// Register $username, $password and redirect to file "login_success.php"
	$_SESSION['login']= 1;
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password; 
	//$_SESSION['loggedin'] = "YES"; // Set it so the user is logged in!
	header("location:login_success.php");
	}
	else {
	echo ("<script type='text/javascript'>alert('Wrong Username or Password');</script>"); 
	include 'admin_login.php';
	}
	?>

</html>
	