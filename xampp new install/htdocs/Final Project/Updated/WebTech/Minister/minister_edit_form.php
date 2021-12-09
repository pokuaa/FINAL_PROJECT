<?php
 include '../Database/connection.php';
 if (isset($_GET['id'])){
    $id = $_GET['id'];
    $record = mysqli_query($connect, "select * from MINISTER where Person_id='$id'");

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
        <title>Minister's Details</title>
        <link href="../Dashboard/css/styles.css" rel="stylesheet" />
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Minister's Info</h3></div>
                                    <div class="card-body">
                                        <form action="minister_edit.php" method="post">
                                        

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name= "Person_id" type="name" placeholder="Enter first name" value="<?php echo $result['Person_id'] ?>" required/>
                                                <label for="person_id"> Membership ID</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name = "branch_name" type="name" placeholder="Enter last name" value="<?php echo $result['branch_name'] ?>" required/>
                                                <label for="branch_name">Branch name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="hometown" name = "qualification" type="name" placeholder="Enter date of birth" value="<?php echo $result['qualification'] ?>" required/>
                                                <label for="qualification">Qualification</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="place_birth" name = "date_joined" type="date" placeholder="Enter email" value="<?php echo $result['date_joined'] ?>"required />
                                                <label for="date_joined">Date Joined</label>
                                            </div>

                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="emergency_contactName" name= "projects_taken" type="name" placeholder="Enter contact" value="<?php echo $result['projects_taken'] ?>" required/>
                                                <label for="projects_taken">projects taken</label>
                                            </div>


                                            <div>
                                            <input type ="submit" name = "edit" value = "Update">
                                            </div>

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
