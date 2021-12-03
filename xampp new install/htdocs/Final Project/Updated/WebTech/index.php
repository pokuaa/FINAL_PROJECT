<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>My Project Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel = "stylesheet" href = "indexStyle.css" >
</head>
<body>
    <div class = "main">

<!--navigation bar-->
        <div class = "navbar">
            <div class = "icon">
            
             
              <h2 class = "logo"> <img src="presby.png" width="70" height="80"> </h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href = "#">HOME</a></li>
                    <li><a href = "https://pcgonline.org/">ABOUT</a></li>  
                    <li><a href = "#">SERVICE</a></li>          
                    <li><a href = "#">DESIGN</a></li>
                    <li><a href = "https://pcgonline.org/contact-us/">CONTACT</a></li>
                    <li><a href = "#">MEDIA</a></li>
                    <li><a href = "#">EVENTS</a></li>
                    <li><a href = "#">LOCATION</a></li>
                    <li><a href = "#">DONATIONS</a></li>

                </ul>

            </div>

            <!-- <div class = "search">
                <input class = "srch" type = "search" name = "" placeholder = "Type to text">
                <a href = "#"> <button class = "btn">Search</button></a>
            </div>  -->
            
            
        </div>

        <br/>
      
        

        


        <div class = "content">
            <h1>PRESBYTERIAN CHURCH OF GHANA <br><span>DOMINION CONGREGATION</span></h1> 
            <br/>
            
            
            <!-- <h2 class = "logo"> <img src="presby.png" width="60" height="60"> </h2> -->

            <img src="church.jpg" width = "650" height = "300" alt="church building">

            <p class = "par">The Presbyterian Church of Ghana was established in 1828 and formalised partnership <br>
                (Reg No. ACB 146/88) with the then government of Gold Coast now the Republic of Ghana in 1932 to <br>
                contribute to the Spiritual and socio-economic development of the citizenry of Ghana.</p>

                <br/>
                <br/>
<!-- 
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div> -->

                    
                <!-- </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            </div>
                        </div>
                        </div>
                     -->

                 </div>

                    

                    <br/>
                <br/>

            <!-- <button class = "cn"> <a href = "register.php"> JOIN US </a></button>    -->
                
            


            
            <div class = "form">
                <h2> Admin Login </h2>
                <form action="Actions/login.php" method="post">
                <input type = "email" name = "email" placeholder = "Enter Email here"  required>
                <input type = "password" name = "password" placeholder = "Enter Password here" required>
                <button name="Login" class= "btnn">Login</button>
                </form>
             

                <br/>
                <br/>
                <!--<p class = "link">Don't have an account<br/>-->
                <!--<a href = "register.html"> Sign Up </a> here </a></p>-->
                <p class= "liw"><a href = "../Dashboard/password.php">forgot password</p>

                
            
        </div>

        
</body>
</html>

