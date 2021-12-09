<?php
 include '../Database/connection.php';
 if (isset($_GET['id'])){
    $id = $_GET['id'];
    $record = mysqli_query($connect, "select * from Education where Person_id='$id'");

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
        <title>Updated Member Details</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Educational Background</h3></div>
                                    <div class="card-body">
                                        <form action="education_edit.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" type="id" name = "edu_id" type="text" placeholder="Enter member id" value="<?php echo $result['edu_id'] ?>" required/>
                                                <label for="edu_id">Educational_id</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name= "Person_id" type="name" placeholder="Enter first name" value="<?php echo $result['Person_id'] ?>" required />
                                                <label for="person_id"> Membership ID</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name = "Level_education" type="name" placeholder="Enter last name" value="<?php echo $result['Level_education'] ?>" required/>
                                                <label for="Level_education">Level education</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="hometown" name = "current_institution" type="name" placeholder="Enter date of birth"  value="<?php echo $result['current_institution'] ?>" required />
                                                <label for="current_institution">current_institution</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="place_birth" name = "occupation" type="name" placeholder="Enter email"  value="<?php echo $result['occupation'] ?>" required />
                                                <label for="occupation">occupation</label>
                                            </div>

                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="emergency_contactName" name= "employment_status" type="name" placeholder="Enter contact"  value="<?php echo $result['employment_status'] ?>" required />
                                                <label for="employment_status">employment_status</label>
                                            </div>



                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="emergency_Contact" name= "employer" type="text" maxlength ="43" placeholder="Enter contact"  value="<?php echo $result['employer'] ?>" required />
                                                <label for="employer">employer</label>
                                            </div>

                                            <div>
                                            <input type ="submit" name = "edit" value = "Update">
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
