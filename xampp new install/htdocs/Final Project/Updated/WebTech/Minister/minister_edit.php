
<?php
    
	//include 'includes/session.php';
    include '../Database/connection.php';

	if(isset($_POST['edit'])){
    	$Person_id = $_POST['Person_id'];
		$branch_name = $_POST['branch_name'];
		$qualification = $_POST['qualification'];
        $date_joined = $_POST['date_joined'];
		$projects_taken = $_POST['projects_taken'];
    
		
		$sql = "UPDATE MINISTER SET Person_id = '$Person_id', branch_name = '$branch_name', qualification = '$qualification', date_joined = '$date_joined', projects_taken = '$projects_taken' WHERE Person_id = '$Person_id'";
		if($connect->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
			header('Location: ../Dashboard/minister.php');
		}
		else{
			$_SESSION['error'] = $connect->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select Member to edit first';
		header('Location: Minister.php');
	}

	
?>