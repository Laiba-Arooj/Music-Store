
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
            header('Location: userindex.php');
        }
        else{
            $message = 'Wrong Credentials'; 
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
                    <input type="text" placeholder="Enter Username" name="username" required>     
                    <input type="password" placeholder="Enter Password" name="password" required>  
                    <button name="submit" type="submit">Login</button> 
                    <p>For Admin Login <a href="adminPanel/adminLogin.php">Click here</a></p>
                </form>
                <center>
                    <?php
                        if(isset($message)){
                        echo '<p style="color:red;">'.$message.'</p>';
                        }
                    ?>
                   </center>
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
