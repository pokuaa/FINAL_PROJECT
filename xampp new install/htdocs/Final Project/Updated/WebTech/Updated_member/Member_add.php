<?php
	require '../Database/connection.php';
	//require '../Updated_member/Member_form.php';

	if(isset($_POST['submit'])){
        $Person_id = $_POST['Person_id'];
		$mother_name = $_POST['mother_name'];
		$father_name = $_POST['father_name'];
		$place_birth = $_POST['place_birth'];
        $hometown = $_POST['hometown'];
		$emergency_contactName = $_POST['emergency_contactName'];
		$emergency_Contact = $_POST['emergency_Contact'];


		
		$sql = "INSERT INTO member (Person_id,mother_name,father_name,place_birth,hometown,emergency_contactName,emergency_Contact) VALUES 
					('$Person_id', '$mother_name ', '$father_name','$place_birth', '$hometown','$emergency_contactName','$emergency_Contact')";
		if($connect->query($sql)){
			echo 'Member added successfully';
			header('Location: Member.php');

		}
		else{
			echo $connect-> error;
		}

	}
	else{
		echo 'Fill up add form first';
		header('Location: Member_form.php');
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

	

