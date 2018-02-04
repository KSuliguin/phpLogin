<?php  
	session_start();



	include 'dbhandler.php';
	
	
	$Username = 	$_POST['Username'];
	$Password = 	$_POST['Password'];
	$sql = "SELECT * FROM employee where empUsername = '$Username' and empPassword = '$Password'";

	$result = $conn -> query($sql);
	if (!$row  = $result->fetch_assoc())
				{

					echo "Your username or password is incorrect";
					echo "<br>";
					echo "You will be redirected back to the login page in a few seconds";
					header("refresh:3; url=loginpage.php");
				}
	else
				{
					$userOnline = "Online";
					$_SESSION['empID'] = $row['empID'];
					$_SESSION['empFName'] = $row['empFName'];
					$_SESSION['empLName'] = $row['empLName'];
					$Online = "UPDATE employee set status='$userOnline' where empUsername = '$Username' and empPassword = '$Password'";
					$result = $conn -> query($Online);
					header ("Location: adminDash.php");
					
				}

	
	



?>