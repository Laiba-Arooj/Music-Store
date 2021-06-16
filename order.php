<?php 
include 'connection.php';


    if(isset($_POST['submit'])){
        $ordername = $_POST["ordername"];
        $userid = $_POST["userid"];
        $songid = $_POST["songid"];
        $songname = $_POST["songname"];
      
        $query="INSERT INTO `order`( `ordername`, `userid`, `songid`, `songname`) VALUES ('$ordername','$userid','$songid','$songname')";
        $result = mysqli_query($con, $query); 
        $message = $result?'<center>Added<center>': 'Record Not Added';
        echo $message;

    }
    ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">


    <link rel="stylesheet" href="assets/css/userstyle.css"> 
    <link rel="stylesheet" href="assets/css/mainIndex.css">
    <link rel="stylesheet" href="assets/css/contact.css"> 
    <style>
     .main-content {
	background-color: lavenderblush;
	width: calc(100% - 250px);
	margin-left: 120px;
	padding: 20px 30px;
    height: 500px;
        }
        form .myfrm{
            float: right;
            position: relative;
            top: 10%;
            right:30%;
            background-color: #DCDCDC;
            height: 300px;
            width: 300px;
        
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
    <div class="container">
        <div class="header">
            <div class="hdtext">
                <a class="active" id="sound" href="#">Sound On</a></div>
            <h1>Listen to your favorite singers</h1>
            <a href="logout.php">Logout</a>
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
                <a href="Userpage.php" class="nav-links">Home</a>
            </li>
            <li>
                <a href="Userpage.php" class="nav-links">Top Albums</a>
            </li>
                <a href="topsingers.php" class="nav-links">Top Singers</a>
            </li>
            <li>
                <a href="topsongs.php" class="nav-links">Top Songs</a>
            </li>
            <li>
                <a href="order.php" class="nav-links">Place Order</a>
            </li>
        </ul>
    </nav>
    <center>
        <?php
        session_start();
            if($_SESSION["uname"]) {
            ?>
           <h3 style="color:brown"> Welcome <?php echo $_SESSION["uname"]; ?>. </h3>
            <?php
            }
            ?>
    </center>

    <div class = "products">
        <div class = "main-content">
            
    <form class="myfrm" action="" method="POST">
                    <h1>Order</h1>
                      
                    <input type="text" placeholder="Enter Order Name" name="ordername" required><br/> 
                    
                    <input type="text" placeholder="Enter User Id" name="userid" required>
                      
                    <input type="text" placeholder="Enter Song Id" name="songid" required>
                     
                    <input type="text" placeholder="Enter Songname" name="songname" required> 
                    <div class="button-holder">  
                        <button name="submit" type="submit" id="insert-btn">Buy</button>
                     </div> 
    </form>
        </div>
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