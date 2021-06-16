<?php
include 'connection.php';
$sql="SELECT * from artist";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">


    <link rel="stylesheet" href="assets/css/userstyle.css"> 
    <link rel="stylesheet" href="assets/css/mainIndex.css"> 
    <link rel="stylesheet" href="assets/css/tablestyle.css">

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
        <div class = "containerM">
        <<h2 style="color:purple;">Singers of the week</h2>

<table class="table">
  <thead>
      <tr>
       <th>Singer Names</th>
       <tr>
  </thead>
  <tbody>
  <?php
         if ($result->num_rows > 0) {
             //output data of each row
             while ($row = $result->fetch_assoc()) {
     ?>

                 <tr>
                 <td data-label="Artist Name"><?php echo $row['artist_name']; ?></td>
                
                 
     <?php		}
         }
     ?>
  </tbody>
</table>

        </div>
    </div>
    
    </div>
    <div class="footer" style="position:relative; top:90%;">
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