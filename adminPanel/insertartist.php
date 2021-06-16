<?php 
include 'connection.php';
include('includes/header.php');
?>
<?php
session_start();


    if(isset($_POST['submit'])){
        $artistname = $_POST["artistname"];
        $artistemail = $_POST["artistemail"];
        $totalalbum = $_POST["totalalbum"];
      
        
        $query="INSERT INTO `artist`( `artist_name`, `artist_email`, `total_album`) VALUES ('$artistname','$artistemail','$totalalbum');";
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
                    <h1>New Artist</h1>
                      
                    <input type="text" placeholder="Enter Artist Name" name="artistname" required><br/> 
                    
                    <input type="text" placeholder="Enter Artist Email" name="artistemail" required>
                      
                    <input type="text" placeholder="Enter Total Albums" name="totalalbum" required>
                     
                    <div class="button-holder">  
                        <button type="submit" name="submit" id="insert-btn">Insert</button>
                        <a href="test2.html" type="button" id="cancel-btn">Back </a>
                     </div> 
    </form>
   </div>
    
</body>
</html>
<?php include('includes/footer.php');
?>