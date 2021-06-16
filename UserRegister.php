
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">


    <link rel="stylesheet" href="assets/css/contact.css"> 
    
</head>
<body>
<?php
    session_start();
    $_SESSION['success'] = "";
require('connection.php');
// If form submitted, insert values into the database.
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $email=$_POST['email'];
    $upassword= $_POST['upassword'];
    $repassword=$_POST['repassword'];
    $password=MD5($upassword);
    $userCheck="SELECT * FROM `user` WHERE `username`='$username'";
    $query=mysqli_query($con,$userCheck);
    $usercount=mysqli_num_rows($query);
    if($usercount>0){
        $msg= "Username already exist";
    }
    else{
        if($upassword === $repassword){
            $insertQuery="INSERT INTO `user` VALUES ('','$username','$email','$upassword','$repassword')";
            $iquery=mysqli_query($con, $insertQuery);
            if($iquery){
                ?>
                <script> alert("Registered Successfully"); </script>
                <?php
            } else{
                ?>
                <script> alert ("Not Registered"); </script>
                <?php
            }
            
        }
        else{
            echo '<script>alert("Passwords do not match")</script>';
        }
    }

}

?>

    <div class="container">
        <div class="header">
            <div class="hdtext">
                <a class="active" id="sound" href="#">Sound On</a></div>
            <h1>Listen to your favorite singers</h1>
            <a href="userLogin.php">Sign in</a>
            <a href="Register.php">Register</a>
            
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
  <center>
                    <?php
                        if(isset($msg)){
                        echo '<p style="color:purple;">'.$msg.'</p>';
                        }
                    ?>
             </center>
    <div class="content">
      <div class="image-box">
       <img src="assets/images/music.jpg">
      </div>
    <form action="#" method="POST">
    <h1 style="font-family: Brush Script MT, Brush Script Std, cursive; text-align: center;">Sign In</h1>  
      <div class="input-box">
      <input type="text" placeholder="Enter Username" name="username" required>
      </div>
      <div class="input-box">
      <input type="text" placeholder="Enter Email" name="email" required>
                    
      </div>
      <div class="input-box">
      <input type="password" placeholder="Enter Password" name="upassword" required>  
                    
      </div>
      <div class="input-box">
      <input type="password" placeholder="Re-Enter Password" name="repassword" required>  
                    
      </div>
      <div class="input-box">
        <input name="submit" type="submit" value="Register">
      </div>
      <p style="text-align: center" >Forgot Password <a href="#">Click here</a></p>
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