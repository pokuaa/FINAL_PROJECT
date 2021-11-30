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

		
		$sql = "INSERT INTO member (edu_id,Person_id,Level_education,current_institution,occupation,employment_status,employer) VALUES 
					('$edu_id', '$Person_id', '$Level_education','$current_institution', '$occupation','$employment_status','$employer')";
		if($connect->query($sql)){
			echo 'Member added successfully';
			header('Location: edu.php');

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

<!-- 
// // requires the php file database_connection_test.php
// require 'database_connection_test.php';
// if (isset( $_POST["SEARCHING"])){


// //value entered by user is saved in value	
// 	$VALUE = $_POST['SEARCHING']; 

// 	 //inserts value into database table practical_lab_table
// 	 $sql = "INSERT INTO practical_lab_table(search_null) VALUES ('$VALUE')";


// 	 //it displays successfully inserted if value entered is inserted into the table
// 	 if ($connect->query($sql)){
// 		echo $VALUE . " successfully added";

// 	 }

// 	 //otherwise it prints the connect error message
// 	 else{
// 		 echo $connect-> error;
// 	 }

// 	} -->

	

