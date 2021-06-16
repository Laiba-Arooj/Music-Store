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
            $_SESSION['uname'] = $result_array['admin_username'];
            //echo "<script>window.location.href='adminPanel/adminpanel.html';</script>";
           header('Location: adminpanel.php');
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
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">


    <link rel="stylesheet" href="assets/css/admin.css"> 
    
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
            <li>
                <a href="#" class="nav-links">Blog</a>
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
        <input type="text" required name="admin_username">
        <label>Enter your username</label>
      </div>
      <div class="input-box">
        <input type="password" required name="admin_password">
        <label>Enter your Password</label>
      </div>
      <div class="input-box">
        <input name="submit" type="submit" value="Login">
      </div>
      <p style="text-align: center" >For User Login <a href="userLogin.php">Click here</a></p>
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