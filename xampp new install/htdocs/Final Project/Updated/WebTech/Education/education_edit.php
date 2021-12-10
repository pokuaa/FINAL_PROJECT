
<?php
    
	//include 'includes/session.php';
    include '../Database/connection.php';

	if(isset($_POST['edit'])){
		$edu_id = $_POST['edu_id'];
		$Person_id = $_POST['Person_id'];
		$Level_education = $_POST['Level_education'];
		$current_institution = $_POST['current_institution'];
        $occupation = $_POST['occupation'];
		$employment_status = $_POST['employment_status'];
		$employer = $_POST['employer'];
    
		//sql query to update Education form 
		$sql = "UPDATE Education SET edu_id = '$edu_id', Person_id = '$Person_id', Level_education = '$Level_education', current_institution = '$current_institution', occupation = '$occupation' employment_status = '$employment_status' employer = '$employer'  WHERE Person_id = '$Person_id'";
		if($connect->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
			header('Location: ../Dashboard/edu.php');
		}
		else{
			$_SESSION['error'] = $connect->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select Member to edit first';
		header('Location: edu.php');
	}

	
?>