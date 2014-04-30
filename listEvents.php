<html>
	<?php	
	session_start(); //Start the session
	if(isset($_SESSION['login'])){ //If session not registered
	
	}
	else
	die("To access this page, you need to <a href='admin_login.php'>LOGIN</a>"); // Make sure they are logged in!

	?>
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
	<h6><font color="red">N.B: Please note that EventDate that do not have a time
	indicated means that the Event goes for the entire day.
	</h6> </font>
	
	<form method="GET" action='listResults.php'>
	
	<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123"; // Mysql password 
	$db_name="clubresults"; // Database name 
	$table = 'events';
	
	//Connect to server and select database.
	mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	// sending query
	$result = mysql_query("SELECT * FROM {$table}");
	if (!$result){
    die("Query to show fields from table failed");
	}
	$fields_num = mysql_num_fields($result);
	
	//$date = 'EventDate';
	//$date("Ymd");
	
	
	//Table starting tag and header cells
	echo "<table border='1'><tr>
	<th>EventName</th>
	<th>EventDate</th>
	<th>Location</th>
	</tr>";
	
	while($row = mysql_fetch_array($result)){
	//Display the results in different cells
	echo "<tr><td>" . 
	$row['EventName'] . "</td><td>" . 
	$row['EventDate'] . "</td><td>" .	
	$row['Location'] . "</td></tr>";
	}
	 
	?>

	</div>
	<!-- End of Body Content -->
	</div>		
	</body>
	<!-- End of Html Body -->
	</html>
	