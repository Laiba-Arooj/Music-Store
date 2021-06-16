<?php
    // Login Handler
    include('connection.php');

    if(isset($_POST['submit'])){
        $admin_username= $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];
        $result = mysqli_query($con, "SELECT * FROM admin WHERE admin_username='$admin_username' and admin_password= '$admin_password';");
        $result_array = mysqli_fetch_assoc($result);
        
        if($result_array){
            session_start();
            $_SESSION = $result_array;
            echo "<script>window.location.href='adminPanel/adminpanel.html';</script>";
           // header('Location: adminpanel.html');
        }
        else{
          $message = 'Wrong Credentials'; 
          echo $message;
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="assets/css/stylesign.css" rel="stylesheet" /> 
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="hdtext">
                <a class="active" id="sound" href="#">Sound On</a></div>
            <h1>Listen to your favorite singers</h1>
            <a href="">Sign in</a>
            <a href="">Register</a>
        </div>
        <div class="topnav">
          <a href="#">Recommended</a>
          <a href="#news">Downloads</a>
          <a href="#contact">Genre</a>
            <a href="aboutUs.html">About Us</a>
            <a>Contact Us</a>
          <div class="topnav-right">
            <a href="#search">Search</a>
            <input type="text">
          </div>
        </div>
        
        <div class="content">
            <img src="images/music.jpg">
            <div class="Login">
               <form action="" method="post">
                    <h1>Sign In</h1>  
                    <input type="text" placeholder="Enter Username" name="admin_username" required>     
                    <input type="password" placeholder="Enter Password" name="admin_password" required>  
                    <button name="submit" type="submit">Login</button> 
                    <p>For User Login <a href="Signin.php">Click here</a></p>
                </form>

            </div>
            
        </div>
        <div class="footer">
            <a class="active" href="#">Blogs</a><br/>
            <a class="active" href="#">Singerlist</a><br/>
            <a class="active" href="#">Buy Albums</a><br/>
            <a class="active" href="#">Select Genre</a>
             <p>Providing you with songs of your Favourite Singers. Join Us to stay Connected. <a class="active" href="Signin.php">Sign In</a></p>
        </div>
            
    </div>
</body>
</html>
