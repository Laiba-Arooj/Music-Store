<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music_store";

 $con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con) {
    die('Could not connect: ' . mysql_error());
}
//echo '<center><h6>Connected!!</h6></center> <br />';

?>