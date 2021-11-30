<?php
	session_start();
	include 'Database/connection.php';

	if(!isset($_SESSION['WebTech']) || trim($_SESSION['WebTech']) == ''){
		header('Location:index.php');
	}

	$sql = "SELECT * FROM WebTech WHERE id = '".$_SESSION['WebTech']."'";
	$query = $connect->query($sql);
	$user = $query->fetch_assoc();
	
?>
