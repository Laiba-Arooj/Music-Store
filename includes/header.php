<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/mystyle.css">

</head>
<body>
       <div class="header">
		    <div class="logo">
			    <center><h3> Admin Panel </h3></center>
            </div>
	    </div>
	<div class="navbar">
		<nav>
		<ul>
			<li><a href="#">HOME</a></li>
			<li><a href="#">LOGOUT</a></li>
		  </ul>
		  </nav>
	</div>
	<div class="container">

        <div class="sidenav">
        <a href="#dashboard">Dashboard</a>
        <button class="dropdown-btn">Manage Users
        </button>
        <div class="dropdown-container">
            <a href="#">Add User</a>
            <a href="#">View User</a>
            <a href="#">Update User</a>
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
        <button class="dropdown-btn">Manage Categories
        </button>
        <div class="dropdown-container">
            <a href="insertcategory.php">Add Category</a>
            <a href="#">View Category</a>
        </div>

        </div>
               
    </div>