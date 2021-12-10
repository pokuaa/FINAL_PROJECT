<?php
	require '../Database/connection.php';
	//require '../Minister/minister_form.php';


	if(isset($_POST['submit'])){
    	$Person_id = $_POST['Person_id'];
		$salary = $_POST['salary'];
		$employment_date = $_POST['employment_date'];
        

		//sql query to insert into Employee tables
		$sql = "INSERT INTO Employee (Person_id,salary,employment_date) VALUES 
					('$Person_id', '$salary','$employment_date')";
		if($connect->query($sql)){
			echo 'Employee added successfully';
			header('Location: ../Dashboard/employee.php');

		}
		else{
			echo $connect-> error;
		}

	}
	else{
		echo 'Fill up add form first';
		header('Location: employee_form.php');
	}
     
	
?>
