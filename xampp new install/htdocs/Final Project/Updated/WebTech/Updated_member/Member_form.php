<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Updated Member Details</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Member Info</h3></div>
                                    <div class="card-body">
                                        <form action="Member_add.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Person_id" type="id" name = "Person_id" placeholder="Enter member id" />
                                                <label for="Person_id">Member_id</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name= "mother_name" type="name" placeholder="Enter first name" />
                                                <label for="mother_name"> Mother's name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name = "father_name" type="name" placeholder="Enter last name" />
                                                <label for="father_name">Father's name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="hometown" name = "hometown" type="name" placeholder="Enter date of birth" />
                                                <label for="hometown">hometown</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="place_birth" name = "place_birth" type="name" placeholder="Enter email" />
                                                <label for="place_birth">Place of birth</label>
                                            </div>

                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="emergency_contactName" name= "emergency_contactName" type="name" placeholder="Enter contact" />
                                                <label for="emergency_contactName">emergency contact person</label>
                                            </div>



                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="emergency_Contact" name= "emergency_Contact" type="text" maxlength ="43" placeholder="Enter contact" />
                                                <label for="emergency_Contact">emergency contact</label>
                                            </div>

                                            <div>
                                            <input type ="submit" name = "submit" value = "Add member">
                                            </div>

                                        </form>

                                            
                                         


                                            <!-- <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div> -->
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> -->
    </body>
</html>
