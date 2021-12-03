<?php
	require '../Database/connection.php';
	//require '../Updated_member/Member_form.php';

	if(isset($_POST['submit'])){
        $edu_id = $_POST['edu_id'];
		$Person_id = $_POST['Person_id'];
		$Level_education = $_POST['Level_education'];
		$current_institution = $_POST['current_institution'];
        $occupation = $_POST['occupation'];
		$employment_status = $_POST['employment_status'];
		$employer = $_POST['employer'];

		echo $edu_id;
		$sql = "INSERT INTO Education (edu_id,Person_id,Level_education,current_institution,occupation,employment_status,employer) VALUES 
					('$edu_id', '$Person_id', '$Level_education','$current_institution', '$occupation','$employment_status','$employer')";
		if($connect->query($sql)){
			echo 'Member added successfully';
			header('Location: ../Dashboard/edu.php');

		}
		else{
			echo $connect-> error;
		}

	}
	else{
		echo 'Fill up add form first';
		header('Location: edu_form.php');
	}
     
	
?>


