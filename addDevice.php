<?php

	session_start();
	

	if (!isset($_SESSION['empID']))
	header("Location: loginpage.php");

	else
	{

	include 'dbhandler.php';

	$empID = 	$_POST['empID'];
	$devType = 	$_POST['devType'];

	

$db = new PDO('mysql:host=localhost;dbname=rfidlogin;charset=utf8mb4', 'root','');

	$sqlcheck = "SELECT COUNT(*) from employee where empID='$empID'";
	$userCheck = $db->query($sqlcheck) -> fetchColumn();



	if ($userCheck > 0)
		{
	$sql = "INSERT INTO devices(deviceType,deviceOwner) VALUES('$devType', '$empID')";
	$result = mysqli_query($conn,$sql);

	header ("Location: adminDash.php");
		}

	else
		{

			echo "Invalid ID";
			header ("refresh:3; registerdevice.php");
		}

	}

	
	



?>