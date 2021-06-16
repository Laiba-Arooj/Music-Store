<?php 
include('includes/header.php');
?>

<?php
session_start();

    // Login Handler
    require 'connection.php';

    if(isset($_POST['submit'])){
        $songname = $_POST["songname"];
        $albumname = $_POST["albumname"];
        $artistname = $_POST["artistname"];
        $duration = $_POST["duration"];
      
       // $result = mysqli_query($con, "INSERT INTO government ('gov_name','recognition','gov_cnic','gphone_no','gov_email') VALUES ('$gname','$grecognition','$gcnic','$gphone','$gEmail')");
        $query="INSERT INTO song(`songname`,`album_name`,`artist_name`, `duration`) VALUES('$songname','$albumname','$artistname','$duration')";
        $result = mysqli_query($con, $query); 
        $message = $result?'<center>Added<center>': 'Record Not Added';

    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form </title>
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
        #insert-btn {   
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
        #insert-btn:hover {   
                opacity: 0.7;  
                background-color: rebeccapurple;
            }  
            #cancel-btn {   
                text-decoration:none;
                font-size:16px;
                     background-color: plum;   
                    width: 120px;  
                    color: white;   
                    padding: 10px;   
                    margin: 9px 0px;   
                    border: none;   
                    cursor: pointer; 
                    position: relative;
                    border-radius: 20px;
         }   
        #cancel-btn:hover {   
                opacity: 0.7;  
                background-color: rebeccapurple;
            }  
    </style>
</head>
<body>
<div class="main-content">
    <form class="myfrm" action="" method="POST">
                    <h1>New Songs</h1>
                      
                   
                    
                    <input type="text" placeholder="Enter Song Name" name="songname" required>

                    <input type="text" placeholder="Enter Album Name" name="albumname" required><br/> 

                    <input type="text" placeholder="Enter Artist Name" name="artistname" required> 
                      
                    <input type="text" placeholder="Enter Duration" name="duration" required>
                     
                    
                    <div class="button-holder">  
                        <button name="submit" type="submit" id="insert-btn">Insert</button>
                        <a href="adminpanel.html" type="button" id="cancel-btn">Back </a>
                     </div> 
    </form>
   </div>
    
</body>
</html>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                var dropdown = document.getElementsByClassName("dropdown-btn");
                var i;

                for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
                });
                }
</script>
<?php include('includes/footer.php');
?>
