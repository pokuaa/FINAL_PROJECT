<?php
	require '../Database/connection.php';
	//require '../Minister/minister_form.php';


	if(isset($_POST['submit'])){
    	$Person_id = $_POST['Person_id'];
		$branch_name = $_POST['branch_name'];
		$qualification = $_POST['qualification'];
        $date_joined = $_POST['date_joined'];
		$projects_taken = $_POST['projects_taken'];

	
		$sql = "INSERT INTO MINISTER (Person_id,branch_name,qualification,date_joined,projects_taken) VALUES 
					('$Person_id', '$branch_name','$qualification', '$date_joined','$projects_taken')";
		if($connect->query($sql)){
			echo 'Minister added successfully';
			header('Location: ../Dashboard/minister.php');

		}
		else{
			echo $connect-> error;
		}

	}
	else{
		echo 'Fill up add form first';
		header('Location: minister_form.php');
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

	

