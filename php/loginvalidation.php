<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music_store";

 $con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con) {
    die('Could not connect: ' . mysql_error());
}
echo '<center><h6>Connected!!</h6></center> <br />';
    // Login Handler

    if(isset($_POST['submit'])){
        $admin_username= $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];
        $result = mysqli_query($con, "SELECT * FROM `admin` where `admin_username`=$admin_username and `admin_password`= $admin_password;");
        
        $result_array = mysqli_fetch_assoc($result);
        
        if($result_array){
            session_start();
            $_SESSION = $result_array;
           // echo "<script>window.location.href='adminpanel.html';</script>";
            header('Location:adminpanel.html');
        }
        else{
            $message = 'Wrong Credentials'; 
        }
    }

?>