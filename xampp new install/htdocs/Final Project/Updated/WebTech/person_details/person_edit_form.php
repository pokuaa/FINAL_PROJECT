<?php
 include '../Database/connection.php';
 if (isset($_GET['id'])){
    $id = $_GET['id'];
    $record = mysqli_query($connect, "select * from person where Person_id='$id'");

    $result = mysqli_fetch_array($record);
    
 }
 
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Member</h3></div>
                                    <div class="card-body">
                                        <form action="Person_edit.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Person_id" type="id" name = "Person_id" placeholder="Enter member id" value="<?php echo $result['Person_id'] ?>" required/>
                                                <label for="Person_id">Member_id</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Fname" name= "Fname" type="name" placeholder="Enter first name" value="<?php echo $result['Fname'] ?>" required/>
                                                <label for="Firstname">Enter first name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Lname" name = "Lname" type="name" placeholder="Enter last name" value="<?php echo $result['Lname'] ?>"required/>
                                                <label for="Lastname">Enter last name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="DOB" name = "DOB" type="date" placeholder="Enter date of birth" value="<?php echo $result['DOB'] ?>" required/>
                                                <label for="DOB">Date of birth</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name = "email" type="name" placeholder="Enter email" value="<?php echo $result['email'] ?>" required/>
                                                <label for="DOB">Email</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="phone" name= "phone" type="name" placeholder="Enter contact" value="<?php echo $result['phone'] ?>" required/>
                                                <label for="DOB">Contact details</label>
                                            </div>

                                            <div>
                                            <input type ="submit" name = "edit" value = "Update member">
                                            </div>

                                        </form>

                                            
                                         


                                            
                                        </form>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
    </body>
</html>
