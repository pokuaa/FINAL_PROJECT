<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Membership</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" ><a href="index.php">Back</a></div>
                            <a class="nav-link" href="index.php">
                                <!-- <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             -->
                                
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.php">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Membership
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Secondary information</h1>
                        <ol class="breadcrumb mb-4">                        
                            <div class="box-header with-border">
                                            <a href="../Updated_member/Member_form.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
                                            </div>
                           
                        </ol>
                       
                        </div>
                        


                                     <?php 
                                        include '../Database/connection.php';
                                    ?>

                                
                                    <?php
                                        if(isset($_SESSION['error'])){
                                        echo "
                                            <div class='alert alert-danger alert-dismissible'>
                                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                            <h4><i class='icon fa fa-warning'></i> Error!</h4>
                                            ".$_SESSION['error']."
                                            </div>
                                        ";
                                        unset($_SESSION['error']);
                                        }
                                        if(isset($_SESSION['success'])){
                                        echo "
                                            <div class='alert alert-success alert-dismissible'>
                                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                            <h4><i class='icon fa fa-check'></i> Success!</h4>
                                            ".$_SESSION['success']."
                                            </div>
                                        ";
                                        unset($_SESSION['success']);
                                        }
                                    ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="box">
                                            <div class="card mb-4">
                                            <div class="box-body">
                                            <table id="example1" class="table table-bordered">
                                                <thead>
                                                <th>Member_id</th>
                                                <th>Father's Name</th>
                                                <th>Mother's Name</th>
                                                <th>Place Birth</th>
                                                <th>Hometown</th>
                                                <th>emergency contact person</th>
                                                <th>emergency contact</th>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $sql = "SELECT * FROM member";
                                                    $query = mysqli_query($connect,$sql);
                                                    ?>

                                                    <?php
                                                    $i=0;
                                                        while($row = mysqli_fetch_array($query)){
                                                    ?>                    
                                                        <tr>
                                                        <td><?php echo $row['Person_id']; ?></td>
                                                        <td><?php echo $row['father_name']; ?></td>
                                                        <td><?php echo $row['mother_name']; ?></td>
                                                        <td><?php echo $row['place_birth']; ?></td>
                                                        <td><?php echo $row['hometown']; ?></td>
                                                        <td><?php echo $row['emergency_contactName']; ?></td>
                                                        <td><?php echo $row['emergency_Contact']; ?></td>
                                                        <td>
                                                        <button class="btn btn-success edit btn-sm btn-flat"><i class="fa fa-edit"></i><a style="color: white;" href="../Updated_member/Member_edit_form.php?id=<?php echo $row['Person_id']?>"> Edit</a></button>
                                                        <button class="btn btn-danger delete btn-sm btn-flat"><i class="fa fa-trash"></i><a style="color: white;" href="../Updated_member/Member_delete.php?id=<?php echo $row['Person_id']?>"> Delete</a></button>
                                                        </td>
                                                        </tr>
                                                    <?php
                                                    $i++;
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </section>   
                                </div>
                                    
                                
                                </div>
                                <?php include '../person_details/scripts.php'; ?>

                                <script>
                                $(document).ready(function(){
                                $('.delete').click(function(e){
                                    e.preventDefault();
                                    $('#delete').modal('show');
                                    $tr = $(this).closest('tr');
                                    var data = $tr.children('td').map(function(){
                                    return $(this).text();

                                    });
                                    console.log(data);

                                    $('#delete_id').val(data[0]);
                                    
                                });
                                });
                                </script>


                                <script>
                                $(document).ready(function(){
                                $('.edit').click(function(e){
                                    e.preventDefault();
                                    $('#edit').modal('show');
                                    $tr = $(this).closest('tr');
                                    var data = $tr.children('td').map(function(){
                                    return $(this).text();

                                    });
                         
                                });
                                </script>







                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body"></div></div>
                    </div>
                </main>
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
        <script src="js/scripts.js"></script>
    </body>
</html>
