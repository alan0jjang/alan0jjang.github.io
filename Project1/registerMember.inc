<html>
	<head>
	<link href="mystyle.css" rel="stylesheet" type="text/css"/>
	<link href="register.css" rel="stylesheet" type="text/css"/> 
	<script type="text/javascript" src="validate.js"  language="Javascript" >

	</script>
	<title> Registration Page </title>
	</head>
	
	<!-- Start of Body html -->
	<body>
	<div class ="wrapper">
	<div class = "header">
		<h1> BooksRus </h1>	
	</div>

	<div class = "menu">
	<center> <!-- links to other pages -->
	<a href="index.php">Home</a>
	<a href="registerMember.php">Register page</a>
	<a href="help.php">Help</a>
	
	
	</center>
	<p />
	</div>
	
	<!-- Start of right column style -->
	<div class = "sidebar">
	<div class="borderbox">	
		Updates Here
	</div>
	<!-- text placed on the right sidebox for future users to see -->
	<div class="rightcol_box">
	<p /> Updates on new arrival of books/collection will be listed here.
	<p /> Those of you that have placed orders and are awaiting arrival of
	your collection, an email will be waiting about the status of your order.
	</div>
	</div>
	<!--End of Right side column -->
	
	<!-- Start of Body Content -->
	<div class = "content">
	<h5> Welcome to the Registration Page of BooksRus </h5>
	<p />
	
	<h6><font color="red">N.B: Please note that the * requires you to fill in your details. <br />
	You cannot leave it blank </h6> </font>
	
	
	<form1 action="" class="register" > <!-- This sets the format for the table -->
	<!-- Start of register detail -->
	<form name="myForm" action="checkRegister.php" onsubmit="return validateForm()" method="post">
	<fieldset class="row1">
	<legend> </legend>
	<!-- <label for="username">Username*:</label>
	<input type="username" name="username" id="username" />
	<p />
	<label for="email">Email*:</label>
	<input type="email" name="usremail" id="email" />
	<p />
	<label for="email">Confirm Email*:</label>
	<input type="email" name="usremail" id="email" />
	<p />
	<label for="password"> Password*: </label>
	<input type="password" name="password1" id="password" />
	<p />
	<label for="password"> Confirm Password*: </label>
		<input type="password" name="password2" id="password" />
	<p />
		<!-- sets the 2nd table within the 1st of the register details, for personal details -->
	<fieldset class="row2">
		<legend> Personal Details </legend>
		<p />
		
		<label for="firstname"> First Name*: </label>
		<input type="text" name="Firstname" />
		<p />
		
		<label for="surname"> Surname*: </label>
		<input type="text" id="Surname" name="Surname" />
		<p />
		
		<label for="surname"> Address*: </label>
		<input type="text" name="Address" />
		<p />
		
		<label for="firstname"> Age*: </label>
		<input type="int" name="Age" />
		<p />
		
		<label for="surname"> Email*: </label>
		<input type="email" id="Email" name="Email" />
		<p />

		<label for="phone"> (Optional) Phone: </label>
		<input type="tel" name="usrtel" />
		<p />

	</fieldset>	
		<input name="submit" type="submit" value="Submit"/>
		<input type="reset" name="Reset" value="Reset">
	</div>
	</form>
	<!-- End of Body Content -->
	
	<!-- Start of Footer -->
	<div class="footer_spacing">
	<div class = "footer">
		Brought to you by your BooksRus staff
		<!-- By Alan Tran -->
	</div>
	</div>
	<!-- End of Footer -->
	</form1>
	</div>
	</body>
	<!-- End of Html Body -->	
	</html>
	