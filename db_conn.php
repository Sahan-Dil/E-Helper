<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "e-Helper";

// Create connection
$conn = mysqli_connect($sName, $uName, $pass, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>