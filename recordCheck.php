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
	<h4> Record Events Page! </h4>
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

	echo "<h4>Table: {$table}</h4>";
	echo "<table border='1'><tr>";
	// printing table headers
	for($i=0; $i<$fields_num; $i++){
    $field = mysql_fetch_field($result);
	
	echo "<td>{$field->name}</td>";
	}
	echo "</tr>\n";
	// printing table rows
	while($row = mysql_fetch_row($result))
	{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";
		echo "</tr>\n";
	}
	
	mysql_free_result($result);
	?>	
	<p/>
	</div>
	<!-- End of Body Content -->
	</div>		
	</body>
	<!-- End of Html Body -->
	</html>
	