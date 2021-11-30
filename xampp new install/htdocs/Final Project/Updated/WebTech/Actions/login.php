
<?php 
session_start();
require '../Database/connection.php';
if(isset($_POST['Login'])){

// Fetching variables of the form which travels in URL
    $email = $_POST['email'];
    $password = $_POST['password'];

    //echo $email;
    //echo $password;
    $sql = "select * from administrator where email_address='$email'";
    $query = $connect->query($sql); 
    $result = $query->fetch_assoc();
 
    
    if (empty($result)){
      echo ("<script>alert('Account can't be found'); window.location.href = '../index.php';</script>");
    }
    else{
      if(password_verify($password, $result['password'])){
        echo ("<script>alert('Login successfully!'); window.location.href = '../Dashboard';</script>");
      }
      else{
        echo ("<script>alert('Incorrect password'); window.location.href = '../index.php';</script>");
      }
    }
  
}else{
  echo ("<script>alert('Fields can't be empty'); window.location.href = '../index.php';</script>");
}

?>


