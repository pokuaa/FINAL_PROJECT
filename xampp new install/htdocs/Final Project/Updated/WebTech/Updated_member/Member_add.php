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


		//sql query to insert member table
		$sql = "INSERT INTO member (Person_id,mother_name,father_name,place_birth,hometown,emergency_contactName,emergency_Contact) VALUES 
					('$Person_id', '$mother_name ', '$father_name','$place_birth', '$hometown','$emergency_contactName','$emergency_Contact')";
		if($connect->query($sql)){
			echo 'Member added successfully';
			header('Location: ../Dashboard/Member.php');

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

