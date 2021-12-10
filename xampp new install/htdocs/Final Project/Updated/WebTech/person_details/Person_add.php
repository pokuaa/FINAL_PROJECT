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

		//sql query to insert into person table
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


	

