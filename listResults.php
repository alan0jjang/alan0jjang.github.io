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
	<a href="test.html">Home</a>
	<a href="registerMember.html">Register page</a>
	<a href="help.html">Help</a>
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
	
	<!-- <form id="loginForm" name="loginForm" method="post" action="login-exec.php"> -->
	<?php

	// The value of the variable name is found
	echo "<h1>Hello " . $_GET["EventID"] . "</h1>";
	 
	// The value of the variable age is found
	//echo "<h1>You are " . $_GET[""] . " years old </h1>";

	?>

	
	</div>
	<!-- End of Body Content -->
	
	<!-- Start of Footer -->
	<div class="footer_spacing">
	<div class = "footer">
		Brought to you by your BooksRus staff
		<!-- By Alan Tran -->
	</div>
	</div>
	<!-- End of Footer -->
	</div>		
	</body>
	<!-- End of Html Body -->
	</html>
	