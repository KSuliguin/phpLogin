<?php
	session_start();

	if (isset($_SESSION['empID']))
	{

	}
	else
	{
		header("Location: loginPage.php");
	}
	
?>

<html>

<head>
<title> Login Page </title>

</head>

<body>

<center>
<form action ="addemployee.php" method ="POST">
		<fieldset><input type = "text" name="Username" placeholder="Username"><br>
		<input type = "Password" name="Password" placeholder="Password"><br>

		</fieldset>

		<fieldset width="500">
		<input type = "text" name="First" placeholder="First name"><br>
		<input type = "text" name="Last" placeholder="Last name"><br>
		</fieldset>
		<input type = "text" name="Department" placeholder="Department"><br>
		<input type = "text" name="Job" placeholder="Job"><br>
		<input type = "checkbox" name="Admin" placeholder="Admin">Administrator</input><br>
		<button type ="submit">Sign up</button>

</form>

<form action="adminDash.php">

		<button type="submit">Return to dashboard</button>

</form>





</body>




</html>