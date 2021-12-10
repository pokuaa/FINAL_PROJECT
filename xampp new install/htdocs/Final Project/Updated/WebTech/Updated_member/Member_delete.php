<?php
	include '../Database/connection.php';
    //include 'person_details/session.php';


	if(isset($_GET['id'])){
		
		$id = $_GET['id'];
		
		//sql query to delete from member table
		$sql = "DELETE FROM member WHERE Person_id='$id'";
		$res = $connect->query($sql);
		if($connect->query($sql)){
			echo ("<script> alert('Person deleted successfully'); window.location.href='../Dashboard/Member.php'; </script>");
			
		}
		else{
			$_SESSION['error'] = mysqli_error($connect);
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	
?>
