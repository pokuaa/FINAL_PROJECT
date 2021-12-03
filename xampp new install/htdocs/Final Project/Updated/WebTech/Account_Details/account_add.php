<?php
	require '../Database/connection.php';
	//require '../Updated_member/Member_form.php';

	if(isset($_POST['submit'])){
        $account_id = $_POST['account_id'];
		$Person_id = $_POST['Person_id'];
		$account_type = $_POST['account_type'];
		$account_description = $_POST['account_description'];
		echo $account_description;
      
		
		$sql = "INSERT INTO account_details (account_id,Person_id,account_type,account_description) VALUES 
					('$account_id', '$Person_id', '$account_type','$account_description')";
		if($connect->query($sql)){
			echo 'Member added successfully';
			header('Location: ../Dashboard/account.php');

		}
		else{
			echo $connect-> error;
		}

	}
	else{
		echo 'Fill up add form first';
		header('Location: account_form.php');
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

	

