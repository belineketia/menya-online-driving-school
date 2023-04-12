<?php 

include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>page 1</title>
</head>
<body>
<table border="2px">
	<thead>
		<th>id</th>
		<th>username</th>
		<th>password</th>
		<th>repeatpassword</th>
		<th>email</th>
		<th colspan="2">action</th>
	</thead>
	<?php 
     $display=mysqli_query($connection,"SELECT* FROM `signup`");
    if (mysqli_num_rows($display)>0) {
    	while ($row=mysqli_fetch_array($display)) {
	 ?>
	 
	 	<tr>
	 	<td><?php echo $row['id']; ?></td>
	 	<td><?php echo $row['name']; ?></td>
	 	<td><?php echo $row['psw']; ?></td>
	 	<td><?php echo $row['pswrepeat']; ?></td>
	 	<td><?php echo $row['email']; ?></td>
	 	<td><a href="#?id=<?php echo $row['id']; ?>"></a>update</td>
	 	<td><a href="#?id=<?php echo $row['id']; ?>"></a>delete</td></tr>
	
	 <?php 	}
    	
    } ?>
</table>

</body>
</html>