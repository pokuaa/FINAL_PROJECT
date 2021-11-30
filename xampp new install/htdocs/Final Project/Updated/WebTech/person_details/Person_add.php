<?php
	require '../Database/connection.php';
	//require 'person_details/Person_form.php';

	if(isset($_POST['submit'])){
        $Person_id = $_POST['Person_id'];
		$Firstname = $_POST['Fname'];
		$Lastname = $_POST['Lname'];
		$Date_of_birth = $_POST['DOB'];
        $email = $_POST['email'];
		$Contact = $_POST['phone'];

		
		$sql = "INSERT INTO person (Person_id,Fname,Lname,DOB,email,phone) VALUES 
					('$Person_id', '$Firstname', '$Lastname', '$Date_of_birth','$email', '$Contact' )";
		if($connect->query($sql)){
			echo 'Member added successfully';
			header('Location: ../Dashboard/layout-static.php');

		}
		else{
			echo $connect-> error;
		}

	}
	else{
		echo 'Fill up add form first';
		header('Location: Person_form.php');
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

	

