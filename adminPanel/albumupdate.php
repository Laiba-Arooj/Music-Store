<?php 
include "connection.php";
include ('includes/header.php');

?>
<?php
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_POST['update'])) {
    $album_id = $_GET["id"];
    $albumname = $_POST["albumname"];
    $artistid = $_POST["artistid"];
    $totalsongs = $_POST["totalsongs"];
    $releaseyear = $_POST["releaseyear"];

    // write the update query
    $sql = "UPDATE `album` SET `album_name`='$albumname',`artist_id`='$artistid',`totalsongs`='$totalsongs',`releaseyear`='$releaseyear' WHERE `album_id`='$album_id'";

    // execute the query
    $result = $con->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("location:albumview.php");
    }else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }
}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
$id = $_GET['id'];

// write SQL to get user data
$sql = "SELECT * FROM `album` WHERE `album_id`='$id'";

//Execute the sql
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $album_id = $row["album_id"];
        $albumname = $row["album_name"];
        $artistid = $row["artist_id"];
        $totalsongs = $row["totalsongs"];
        $releaseyear = $row["releaseyear"];
    }

?>
<!DOCTYPE html>
<head>
    <style>
        <style>
     .main-content {
	background-color: lavenderblush;
	width: calc(100% - 250px);
	margin-left: 250px;
	padding: 20px 30px;
    height: 500px;
}
    form .myfrm{
            float: right;
            position: relative;
            top: 10%;
            right:30%;
            background-color: #DCDCDC;
            height: 410px;
            width: 470px;
        }
        form h1{
            color: black;
            text-align: center;
            font-family: "Brush Script MT", "Brush Script Std", cursive;
        }
       
        input[type=text] {
            width: 90%;
            height:45px;
            margin: 15px;
            padding: 10px;
            display: inline-block;
            border: 1px solid purple;
            box-sizing: border-box;
            font-size: 10px;
        }
        .button-holder{
            text-align:center;
        }
        #update-btn {   
        background-color: plum;   
            width: 100px;  
            color: white;   
            padding: 10px;   
            margin: 9px 0px;   
            border: none;   
            cursor: pointer; 
            position: relative;
            border-radius: 20px;
         }   
        #update-btn:hover {   
                opacity: 0.7;  
                background-color: rebeccapurple;
            }  
        </style>
</head>
<body>
<div class="main-content">
    <form class="myfrm" action="" method="POST">
                    <h1>Update Song</h1>
                      
                   
                    
                    <input type="text"  name="albumname" value="<?php echo $albumname;?>">

                    <input type="text"  name="artistid" value="<?php echo $artistid; ?>" ><br/> 

                    <input type="text" name="totalsongs" value="<?php echo $totalsongs; ?>" > 
                      
                    <input type="text"  name="releaseyear" value="<?php echo $releaseyear; ?>" >
                     
            <div class="button-holder">
          <button name="update" type="submit" id="update-btn">Update</button>
        </div>
        </form>
</div>
    </body>
    </html>



<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: albumview.php');
	}

}
?>
 