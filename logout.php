<?php
session_start();

include 'dbhandler.php';
$userOffline = "Offline";
$userID = $_SESSION['empID'];

$Offline = "UPDATE employee set status='$userOffline' where empID = '$userID'";
$result = $conn -> query($Offline);
session_destroy();



header ("Location: loginpage.php")
?>