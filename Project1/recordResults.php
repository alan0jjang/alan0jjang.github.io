<html>
	<head>
	<link href="mystyle.css" rel="stylesheet" type="text/css"/>
	<title> Home page </title>
	</head>
	
	<!-- Start of Body html -->
	<body>
	<div class ="wrapper">
	<div class = "header">
		<h1> BooksRus </h1>	
	</div>
	
	<!-- Start of menu header -->
	<div class = "menu">
	<center>
	<a href="admin_index.html">Home</a>
	<a href="logout.html">Logout</a>
	</center>
	<p />
	</div>
	<!-- End of menu header -->
	
	<!-- Start of Right Column style -->
	<div class = "sidebar">
	
	<div class="borderbox">	
		Updates Here
	</div>
	
	<div class="rightcol_box">
	<p /> Updates on new arrival of books/collection will be listed here.
	
	<p /> Those of you that have placed orders and are awaiting arrival of
	your collection, an email will be waiting about the status of your order.
	
	</div>
	</div>
	<!--End of Right side column -->
	<!-- Start of Body Content-->
	<div class = "content">
	<h4> Record Results Page! </h4>
		<form name="myForm" action="" onsubmit="" method="post">
		<fieldset class="row1">
		<legend> </legend>
		<p />
		
		<label for="EventName"> MemberID: </label>
		<input type="text" name="MemberID" />
		<p />
		
		<label for="EventDate"> Score: </label>
		<input type="date" name="Score" />
		<p />
		
		<label for="Location"> Place: </label>
		<input type="text" name="Place" />
		<p />
		<center> <input name="submit" type="submit" value="Submit"/>
		<input type="reset" name="Reset" value="Reset">
		</center>
	</fieldset>
	<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123"; // Mysql password 
	$db_name="clubresults"; // Database name 
	$table = 'results';
	
	//Connect to server and select database.
	mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	
	if (isset($_POST['submit'])) { 
	$memberID=$_POST['MemberID'];
	$score=$_POST['Score'];
	$place=$_POST['Place'];
	
	if (!$_POST['MemberID'] | !$_POST['Score'] | !$_POST['Place'] ) {
		die("<script type='text/javascript'>alert('You did not complete all of the required fields');</script>");
 	}
	
	// now we insert it into the database
 	$insert = "INSERT INTO results (MemberID, Score, Place)
		VALUES ('".$_POST['MemberID']."', '".$_POST['Score']."', '".$_POST['Place']."')";
 	$add_member = mysql_query($insert);
	echo ("<script type='text/javascript'>alert('The event has now been registered');</script>");
	}
	?>	
	
	<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123"; // Mysql password 
	$db_name="clubresults"; // Database name 
	$table = 'results';
	
	//Connect to server and select database.
	mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	// sending query
	$result = mysql_query("SELECT * FROM {$table}");
	if (!$result){
    die("Query to show fields from table failed");
	}
	$fields_num = mysql_num_fields($result);

	//Table starting tag and header cells
	echo "<table border='1'><tr>
	<th>MemberID</th>
	<th>Score</th>
	<th>Place</th>
	</tr>";
	
	while($row = mysql_fetch_array($result)){
	//Display the results in different cells
	echo "<tr><td>" . 
	$row['MemberID'] . "</td><td>" 	. 
	$row['Score'] . "</td><td>" . 
	$row['Place'] . "</td></tr>";
	}
	?>
	
	<p/>
	</div>
	<!-- End of Body Content -->
	</div>		
	</body>
	<!-- End of Html Body -->
	</html>
	