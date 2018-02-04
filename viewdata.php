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
<title> Device Monitoring </title>

</head>

<body>

<center>

<select name="Devices" size="5">
<table cellpadding="15">
<?php

	
$db = new PDO('mysql:host=localhost;dbname=rfidlogin;charset=utf8mb4', 'root','');

foreach ($db ->query('SELECT * FROM dataview') as $row) {
	
		
	echo "<option>";
	echo "<tr><td>".$row[0]."</td>\t\t\t\t\t\t<td>".$row[1]."</td>\t\t\t\t\t\t<td>".$row[2]."</td>\t\t\t\t\t\t<td>".$row[3]."</td>\t\t\t\t\t\t<td>".$row[4]."</td>\t\t\t\t\t\t<td>".$row[5]."</td>";
	echo "</option>";

}
?>


</table>
</select>
<form action="adminDash.php">

		<button type="submit">Return to dashboard</button>

</form>





</body>




</html>