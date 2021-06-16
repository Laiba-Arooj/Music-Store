<?php
session_start();
    // Login Handler
    
    include('connection.php');

    if(isset($_POST['submit'])){
        $uname= $_POST['username'];
        $upassword = $_POST['password'];
        $result = mysqli_query($con, "SELECT * FROM user WHERE username='$uname' and password= '$upassword';");
        
        $result_array = mysqli_fetch_assoc($result);
        
        if($result_array){
            session_start();
            $_SESSION['uname'] = $result_array['username'];
            $_SESSION['upassword']=$result_array['password'];
            header('Location: UserPage.php');
        }
        else{
            $message = 'Wrong Credentials'; 
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">


    <link rel="stylesheet" href="assets/css/contact.css"> 
    
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="hdtext">
                <a class="active" id="sound" href="#">Sound On</a></div>
            <h1>Listen to your favorite singers</h1>
            <a href="userLogin.php">Sign in</a>
            <a href="UserRegister.php">Register</a>
            
        </div>
        <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <div class="toggle"></div>
            <div class="toggle"></div>
            <div class="toggle"></div>
        </span>
        <a href="#" class="logo"></a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="Music%20Index%20page.html" class="nav-links">Home</a>
            </li>
            <li>
                <a href="about.html" class="nav-links">About Us</a>
            </li>
            <li>
                <a href="contactUs.html" class="nav-links">Contact Us</a>
            </li>
        </ul>
    </nav>
  <div class="maincontainer">
    <div class="content">
      <div class="image-box">
       <img src="assets/images/music.jpg">
      </div>
    <form action="#" method="POST">
    <h1 style="font-family: Brush Script MT, Brush Script Std, cursive; text-align: center;">Sign In</h1>  
      <div class="input-box">
        <input type="text" required name="username">
        <label>Enter your username</label>
      </div>
      <div class="input-box">
        <input type="password" required name="password">
        <label>Enter your Password</label>
      </div>
      <div class="input-box">
        <input name="submit" type="submit" value="Login">
      </div>
      <p style="text-align: center" >For Admin Login <a href="adminPanel/loginAdmin.php">Click here</a></p>
      <center>
                    <?php
                        if(isset($message)){
                        echo '<p style="color:red;">'.$message.'</p>';
                        }
                    ?>
                   </center>
    </form>
  </div>
  </div>
  <div class="footer">
       <p>All Right Reversed &copy; 2021</p>
  </div>
<script>
        let mainNav = document.getElementById('js-menu');
        let navBarToggle = document.getElementById('js-navbar-toggle');

        navBarToggle.addEventListener('click', function () {

            mainNav.classList.toggle('active');
});
    
    </script>
    </body>
</html>