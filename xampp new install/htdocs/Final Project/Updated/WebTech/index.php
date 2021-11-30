<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>My Project Assignment</title>
    <link rel = "stylesheet" href = "indexStyle.css" >
</head>
<body>
    <div class = "main">

<!--navigation bar-->
        <div class = "navbar">
            <div class = "icon">
            
             
              <h2 class = "logo"> <img src="presby.png" width="50" height="40"> </h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href = "#">HOME</a></li>
                    <li><a href = "https://pcgonline.org/">ABOUT</a></li>  
                    <li><a href = "#">SERVICE</a></li>          
                    <li><a href = "#">DESIGN</a></li>
                    <li><a href = "https://pcgonline.org/contact-us/">CONTACT</a></li>

                </ul>

            </div>

            <div class = "search">
                <input class = "srch" type = "search" name = "" placeholder = "Type to text">
                <a href = "#"> <button class = "btn">Search</button></a>
            </div> 
            
            
        </div>

        <br/>
        <br/>
        <br/>
        <br/>

        


        <div class = "content">
            <h1>PRESBYTERIAN CHURCH OF GHANA <br><span>DOMINION CONGREGATION</span></h1> 
            <br/>
            <br/>

            <p class = "par">The Presbyterian Church of Ghana was established in 1828 and formalised partnership <br>
                (Reg No. ACB 146/88) with the then government of Gold Coast now the Republic of Ghana in 1932 to <br>
                contribute to the Spiritual and socio-economic development of the citizenry of Ghana.</p>
            <button class = "cn"> <a href = "register.php"> JOIN US </a></button>   
                

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

