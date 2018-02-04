<?php

	session_start();
	

	if (!isset($_SESSION['empID']))
	header("Location: loginpage.php");

	else
	{

	include 'dbhandler.php';

	$Username = 	$_POST['Username'];
	$Password = 	$_POST['Password'];
	$First = 		$_POST['First'];
	$Last = 		$_POST['Last'];
	$Department = 	$_POST['Department'];
	$Job = 			$_POST['Job'];


	if ($Username == null || $Password == null || $First == null || $Last == null || $Department == null || $Job == null)
		{
			echo "<CENTER><font size='12'>FORM IS INCOMPLETE</center></font>";
			header("refresh:3; registerpage.php");
		}

	else
		{


		$db = new PDO('mysql:host=localhost;dbname=rfidlogin;charset=utf8mb4', 'root','');

		$sqlcheck = "SELECT COUNT(*) from employee where empUsername='$Username'";
		$userCheck = $db->query($sqlcheck) -> fetchColumn();
			

		
		
		
			if ($userCheck >= 1)
			{
				echo "Username already exists";
			
			}
			else	
			{	
				$sql = "INSERT INTO employee(empFName,empLName,empDepartment,empJob,empUsername,empPassword) VALUES(
					'$First','$Last','$Department','$Job','$Username','$Password')";
				$result = mysqli_query($conn,$sql);
				header ("Location: adminDash.php");	
			}
			
			
		}
	}

	
	



?>