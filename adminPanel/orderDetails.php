<?php
include 'connection.php';
include ('includes/header.php');


$sql="SELECT * FROM `order`";
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
		<th>Order ID</th>
     	 <th>Order Name</th>
     	 <th>User ID </th>
     	 <th>Song Id</th>
          <th>Song Name</th>
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
					<td data-label="Order Id"><?php echo $row['orderid']; ?></td>
					<td data-label="Order Name"><?php echo $row['ordername']; ?></td>
					<td data-label="User Id"><?php echo $row['userid']; ?></td>
					<td data-label="Song Id"><?php echo $row['songid']; ?></td>
                    <td data-label="Song Name"><?php echo $row['songname']; ?></td>
					<td data-label="Action"><a class="btn" href="orderdelete.php?id=<?php echo $row['orderid']; ?>">Delete</a></td>
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