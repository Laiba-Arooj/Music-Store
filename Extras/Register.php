<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="assets/css/reg.css" rel="stylesheet" /> 
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
        <center>
                    <?php
                        if(isset($msg)){
                        echo '<p style="color:purple;">'.$msg.'</p>';
                        }
                    ?>
             </center>
        
        <div class="content">
            <img src="assets/images/music.jpg">
            <div class="Register">
           
                <form action="#" method="POST">
                    <h1>Register</h1>
                    
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <input type="text" placeholder="Enter Email" name="email" required>
                    
                    <input type="password" placeholder="Enter Password" name="upassword" required>  
                     <input type="password" placeholder="Re-Enter Password" name="repassword" required>  
                    <button type="submit" name="submit">Register</button> 
                    <p>Forgot password? <a href="#">Click here</a></p>
                </form>
            
            </div>
            
        </div>
        <div class="footer">
            <a class="active" href="#">Blogs</a><br/>
            <a class="active" href="#">Singerlist</a><br/>
            <a class="active" href="#">Buy Albums</a><br/>
            <a class="active" href="#">Select Genre</a>
             <p>Providing you with songs of your Favourite Singers. Join Us to stay Connected. <a class="active" href="#">Sign In</a></p>
        </div>
            
    </div>
</body>
</html>
