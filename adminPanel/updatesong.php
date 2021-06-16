<?php 
include "connection.php";
include ('includes/header.php');

?>
<?php
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_POST['update'])) {
    $song_id = $_GET["id"];
    $songname = $_POST["songname"];
    $albumname = $_POST["albumname"];
    $artistname = $_POST["artistname"];
    $duration = $_POST["duration"];

    // write the update query
    $sql = "UPDATE `song` SET `songname`='$songname',`album_name`='$albumname',`artist_name`='$artistname',`duration`='$duration' WHERE `song_id`='$song_id'";

    // execute the query
    $result = $con->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
        header("location:viewsong.php");
    }else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }
}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
$id = $_GET['id'];

// write SQL to get user data
$sql = "SELECT * FROM `song` WHERE `song_id`='$id'";

//Execute the sql
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $song_id = $row["song_id"];
        $songname = $row["songname"];
        $albumname = $row["album_name"];
        $artistname = $row["artist_name"];
        $duration = $row["duration"];
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
            top: 8%;
            right:30%;
            background-color: #DCDCDC;
            height: 400px;
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
                      
                   
                    
                    <input type="text"  name="songname" value="<?php echo $songname;?>">

                    <input type="text"  name="albumname" value="<?php echo $albumname; ?>" ><br/> 

                    <input type="text" name="artistname" value="<?php echo $artistname; ?>" > 
                      
                    <input type="text"  name="duration" value="<?php echo $duration; ?>" >
                     
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
		header('Location: viewsong.php');
	}

}
?>
 