<?php 
include "connection.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
	$id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `order` WHERE `orderid`='$id'";
    mysqli_query($con,$sql);
    header('location:orderDetails.php');

	// Execute the query

	$result = $con->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
?>