<html>
<head>
<title> Admin Dashboard </title>
</head>

<body>


<?php
	session_start();

	if (isset($_SESSION['empID']))
	{

	}
	else
	{
		header("Location: loginPage.php");
	}

	$FName = $_SESSION['empFName'];
	$LName = $_SESSION['empLName'];
	echo "Hello ". $FName." ". $LName;

	//echo phpversion();

	?>

<form action="logout.php">
<button> LOG OUT</button>
</form>


<form action="registerPage.php">
<button>ADD EMPLOYEE </button>
</form>

<form action="registerDevice.php">
<button>ADD DEVICE </button>
</form>

<form action="viewdata.php">
<button>VIEW DATA</button>
</form>

</body>
</html>