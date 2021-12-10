
<?php
    
	//include 'includes/session.php';
    include '../Database/connection.php';

	if(isset($_POST['edit'])){
    	$Person_id = $_POST['Person_id'];
		$salary = $_POST['salary'];
		$employment_date = $_POST['employment_date'];
        

		//sql query to update Employee table
		$sql = "UPDATE Employee SET salary = '$salary', employment_date = '$employment_date' where Person_id = '$Person_id' ";

			if($connect->query($sql)){
			$_SESSION['success'] = 'Employee updated successfully';
			header('Location: ../Dashboard/employee.php');
		}
		else{
			$_SESSION['error'] = $connect->error;
			header('Location: employee.php');
		}

	}
	else{
		$_SESSION['error'] = 'Select Member to edit first';
		header('Location: employee.php');
	}

	
?>