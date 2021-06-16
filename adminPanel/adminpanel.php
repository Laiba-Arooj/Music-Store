<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/mystyle.css">
<link rel="stylesheet" href="assets/css/tablestyle.css"/>

</head>
<body>
    <div class="header">
		<div class="logo">
			<center><h3> Admin Panel </h3></center></div>
	</div>
	<div class="navbar">
		<nav>
		<ul>
			<li><a href="#">HOME</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
		  </ul>
		  </nav>
	</div>
	<div class="container">

        <div class="sidenav">
        <a href="#dashboard">Dashboard</a>
        <a href="orderDetails.php">Orders</a>
        <button class="dropdown-btn">Manage Users
        </button>
        <div class="dropdown-container">
            <a href="viewuser.php">View User</a>
        </div>
        <button class="dropdown-btn">Manage Songs 
        </button>
        <div class="dropdown-container">
           
            <a href="insertsong.php">Add Songs</a>
            <a href="viewsong.php">View Songs</a>
        </div>
        <button class="dropdown-btn">Manage Album
        </button>
        <div class="dropdown-container">
            <a href="insertalbum.php">Add Album</a>
            <a href="albumview.php">View Album</a>
        </div>
        <button class="dropdown-btn">Manage Artist
        </button>
        <div class="dropdown-container">
            <a href="insertartist.php">Add Artist</a>
            <a href="artistview.php">View Artists</a>
            <a href="artistpackage.php">Artist Package</a>
        </div>


        

        </div>

        <div class="main-content">
            <div id="dashboard">
            <center>
        <?php
        session_start();
            if($_SESSION["uname"]) {
            ?>
          <h1 style="color:purple;">  Welcome <?php echo $_SESSION["uname"]; ?>. </h1>
            <?php
            }
            ?>
			
			<p>Here you can stuff!</p>
			<div class="panel-wrapper">
				<div class="panel-head">
					News
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam fugiat culpa quia possimus molestiae id sapiente ad eveniet, aliquid, eum sint fuga eius, ratione suscipit ut minus voluptates dicta nesciunt.
				</div>
			</div>
			<div class="panel-wrapper">
				<div class="panel-head">
					News
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam fugiat culpa quia possimus molestiae id sapiente ad eveniet, aliquid, eum sint fuga eius, ratione suscipit ut minus voluptates dicta nesciunt.
				</div>
			</div>
			
		</div>
        </div>
</div>
<div class="footer">
   <center> <p style="color: whitesmoke;">&copy; All rights reserved</p></center>
</div>
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

</body>
</html> 
