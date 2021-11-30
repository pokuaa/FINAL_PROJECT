<?php
	include 'layout-static.php';
    include 'person_details/session.php';


	if(isset($_POST['delete'])){
		
		$id = $_POST['delete_id'];
		
		$sql = "DELETE FROM person WHERE Person_id='$id'";
		echo $sql;
		
		if(mysqli_query($connect, $sql)){
			$_SESSION['success'] = 'blood deleted successfully';
		}
		else{
			$_SESSION['error'] = mysqli_error($connect);
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: layout-static.php');
	
?>
