
<?php
    
	//include 'includes/session.php';
    include '../Database/connection.php';

	if(isset($_POST['edit'])){
        $Person_id = $_POST['Person_id'];
		$Firstname = $_POST['Fname'];
		$Lastname = $_POST['Lname'];
		$Date_of_birth = $_POST['DOB'];
        $email = $_POST['email'];
		$Contact = $_POST['phone'];
    
		
		//sql query to update person table
		$sql = "UPDATE person SET Person_id = '$Person_id', Fname = '$Firstname', Lname = '$Lastname', DOB = '$Date_of_birth', email = '$email', phone = '$Contact' WHERE Person_id = '$Person_id'";
		if($connect->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
			header('Location: ../Dashboard/layout-static.php');
		}
		else{
			$_SESSION['error'] = $connect->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select Member to edit first';
		header('Location: layout-static.php');
	}

	
?>