<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "shopstore";
$database = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$database) {
  die("Connection failed: " . mysqli_connect_error());
}

?>