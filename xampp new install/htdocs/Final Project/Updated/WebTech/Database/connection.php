<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBNAME = "final_project";

// Create connection
$connect = new mysqli($servername, $username, $password, $DBNAME);

// Check connection
if ($connect->connect_error) {
  die("connection failed: " . $connect->connect_error);

}
?>