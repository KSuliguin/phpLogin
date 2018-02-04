
<html>

<head>
<title> Login Page </title>

</head>

<body>


<?php
		session_start();

		if (isset($_SESSION['empID']))
		{
		session_destroy();
		}
?>
<form action ="loginemployee.php" method ="POST">
		<input type = "text" name="Username" placeholder="Username"><br>
		<input type = "Password" name="Password" placeholder="Password"><br>
		<button type ="submit">Login</button>





</body>




</html>