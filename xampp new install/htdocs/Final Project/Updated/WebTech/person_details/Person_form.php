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
                                        <form action="Person_add.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Person_id" type="id" name = "Person_id" placeholder="Enter member id" />
                                                <label for="Person_id">Member_id</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Fname" name= "Fname" type="name" placeholder="Enter first name" />
                                                <label for="Firstname">Enter first name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Lname" name = "Lname" type="name" placeholder="Enter last name" />
                                                <label for="Lastname">Enter last name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="DOB" name = "DOB" type="date" placeholder="Enter date of birth" />
                                                <label for="DOB">Date of birth</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name = "email" type="name" placeholder="Enter email" />
                                                <label for="DOB">Email</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="phone" name= "phone" type="name" placeholder="Enter contact" />
                                                <label for="DOB">Contact details</label>
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
