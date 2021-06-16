<?php
include 'connection.php';
include ('includes/header.php');


$sql="SELECT * FROM `album`";
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
	<h2>Album Data</h2>

   <table class="table">
     <thead>
		 <tr>
		<th>Album ID</th>
     	 <th>Album Name</th>
     	 <th>Artist ID </th>
     	 <th>Total Songs</th>
          <th>Release Year</th>
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
					<td data-label="Album ID"><?php echo $row['album_id']; ?></td>
					<td data-label="Album Name"><?php echo $row['album_name']; ?></td>
					<td data-label="Artist Id"><?php echo $row['artist_id']; ?></td>
					<td data-label="Total Songs"><?php echo $row['totalsongs']; ?></td>
                    <td data-label="Release Year"><?php echo $row['releaseyear']; ?></td>
					<td data-label="Action"><a class="btn" href="albumupdate.php?id=<?php echo $row['album_id']; ?>">Edit</a>&nbsp;<a class="btn" href="albumdelete.php?id=<?php echo $row['album_id']; ?>">Delete</a></td>
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