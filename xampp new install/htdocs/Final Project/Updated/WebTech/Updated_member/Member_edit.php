<?php
	require '../Database/connection.php';
	//require '../Updated_member/Member_form.php';

	if(isset($_POST['edit'])){
        $Person_id = $_POST['Person_id'];
		$mother_name = $_POST['mother_name'];
		$father_name = $_POST['father_name'];
		$place_birth = $_POST['place_birth'];
        $hometown = $_POST['hometown'];
		$emergency_contactName = $_POST['emergency_contactName'];
		$emergency_Contact = $_POST['emergency_Contact'];


		
		$sql = "UPDATE member SET Person_id = '$Person_id', mother_name = '$mother_name', father_name = '$father_name',place_birth = '$place_birth', hometown = '$hometown', emergency_contactName = '$emergency_contactName', emergency_Contact = '$emergency_Contact' WHERE Person_id = '$Person_id'";
		if($connect->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
			header('Location: ../Dashboard/Member.php');
		}
		else{
			$_SESSION['error'] = $connect->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select Member to edit first';
		header('Location: ../Dashboard/Member.php');
	}

	
?>