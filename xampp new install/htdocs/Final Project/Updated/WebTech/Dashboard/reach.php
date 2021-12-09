<?php 
 include '../Database/connection.php';

// used to select a value from the database table when the user clicks on search
if (isset($_POST["submit"])){
	$VALUE = $_POST["searchBox"];
    $sql = "SELECT Person_id, Fname, Lname, DOB, email, phone FROM Employee WHERE fname ='$VALUE'";

   
    // the users input is saved in the results variable 
    // the if statement searches into the database to fetch what the user enetered
	$result = $connect->query($sql);
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<br>".$row["fname"]."<br>";

        }

    //if the value entered is not found, the page prints null
    }else{
        echo "null";
    }	
}

?>