<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Membership of Dominion</title>
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
                                        <form action="Person_add.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Person_id" type="id" name = "Person_id" placeholder="Enter member id" required />
                                                <label for="Person_id">Member_id</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Fname" name= "Fname" type="name" placeholder="Enter first name" required />
                                                <label for="Firstname">Enter first name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Lname" name = "Lname" type="name" placeholder="Enter last name" required />
                                                <label for="Lastname">Enter last name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="DOB" name = "DOB" type="date" placeholder="Enter date of birth" required/>
                                                <label for="DOB">Date of birth</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name = "email" type="name" placeholder="Enter email" required/>
                                                <label for="DOB">Email</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="phone" name= "phone" type="name" placeholder="Enter contact" required/>
                                                <label for="DOB">Contact details</label>
                                            </div>

                                            <form action ="../person_details/upload.php" method="post" enctype="multipart/form-data">
                                                                    image:
                                                                    <input type="file" name="fileToUpload" id="fileToUpload" name="submit">
                                                                     <input type="submit" value="Upload Image" name="submit">
                                                               </form> 

                                            <div>
                                            <input type ="submit" name = "submit" value = "Add member">
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
