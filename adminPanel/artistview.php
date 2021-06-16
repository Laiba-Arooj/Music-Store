<?php
include 'connection.php';
include ('includes/header.php');


$sql="SELECT * from artist";
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
	<h2>Artists Data</h2>

   <table class="table">
     <thead>
		 <tr>
		<th>Artist ID</th>
     	 <th>Artist Name</th>
     	 <th>Artist Email </th>
     	 <th>Total Albums</th>
          <th>Action</th>
		  <tr>
     </thead>
     <tbody>
	 <?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td data-label="Artist ID"><?php echo $row['artist_id']; ?></td>
					<td data-label="Artist Name"><?php echo $row['artist_name']; ?></td>
					<td data-label="Artist Email"><?php echo $row['artist_email']; ?></td>
					<td data-label="Total Albums"><?php echo $row['total_album']; ?></td>
					<td data-label="Action"><a class="btn" href="artistedit.php?id=<?php echo $row['artist_id']; ?>">Edit</a>&nbsp;<a class="btn" href="artistdelete.php?id=<?php echo $row['artist_id']; ?>">Delete</a></td>
					</tr>	
					
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