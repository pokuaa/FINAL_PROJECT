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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Employee's Info</h3></div>
                                    <div class="card-body">
                                        <form action="employee_add.php" method="post">
                                           
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name= "Person_id" type="name" placeholder="Enter first name" required />
                                                <label for="person_id"> Membership ID</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name = "salary" type="integer" placeholder="Enter last name" required/>
                                                <label for="salary">salary</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="hometown" name = "employment_date" type="date" placeholder="Enter date of birth" required/>
                                                <label for="employment_date">employment_date</label>
                                            </div>

                                            <div>
                                            <input type ="submit" name = "submit" value = "Add">
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
