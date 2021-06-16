<?php
include 'connection.php';
include ('includes/header.php');


$sql="SELECT * from user";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Responsive Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/tablestyle.css"/>

</head>
<body>
<div class="main-content">
	<h2>Registered User List</h2>

   <table class="table">
     <thead>
		 <tr>
		<th>User ID</th>
     	 <th>User Name</th>
     	 <th>User Email</th>
		  <tr>
     </thead>
     <tbody>
	 <?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td data-label="User ID"><?php echo $row['userid']; ?></td>
					<td data-label="User Name"><?php echo $row['username']; ?></td>
					<td data-label="User Email"><?php echo $row['email']; ?></td>
					
					
		<?php		}
			}
		?>
     </tbody>
   </table>
</div>
</body>
</html>
<?php include('includes/footer.php');
?>