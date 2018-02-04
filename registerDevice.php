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
<title> Add device </title>

</head>

<body>



<form action ="addDevice.php" method ="POST">
		<input type = "text" name="empID" placeholder="Employee ID"><br>
		<input type = "text" name="devType" placeholder="Device type"><br>

		<button type ="submit">Register Device</button>
</form>

<form action="adminDash.php">

		<button type="submit">Return to dashboard</button>

</form>





</body>




</html>