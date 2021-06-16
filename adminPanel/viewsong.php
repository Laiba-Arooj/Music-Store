<?php
include 'connection.php';
include ('includes/header.php');


$sql="SELECT * from song";
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
	<h2>Songs Data</h2>

   <table class="table">
     <thead>
		 <tr>
		<th>Song ID</th>
     	 <th>Song Name</th>
     	 <th>Album Name</th>
     	 <th>Artist Name</th>
     	 <th>Duration</th>
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
					<td data-label="Song ID"><?php echo $row['song_id']; ?></td>
					<td data-label="Song Name"><?php echo $row['songname']; ?></td>
					<td data-label="Album Name"><?php echo $row['album_name']; ?></td>
					<td data-label="Artist Name"><?php echo $row['artist_name']; ?></td>
					<td data-label="Duration"><?php echo $row['duration']; ?></td>
					<td data-label="Action"><a class="btn" href="updatesong.php?id=<?php echo $row['song_id']; ?>">Edit</a>&nbsp;<a class="btn" href="deletesong.php?id=<?php echo $row['song_id']; ?>">Delete</a></td>
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