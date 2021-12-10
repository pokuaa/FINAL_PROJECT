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


	

