<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
		include 'connection.php';
		include 'link.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM farmer WHERE farmerid = '$id'";
		$result = mysqli_query($conn, $sql);
		$farmer = mysqli_fetch_assoc($result);

	 ?>
</head>
<body>
	<form  action="insert_f.php" method="post">
		<table border=1 class="table table-bordered">
			<thead>
				<tr>
					<th>Farmer id</th>
					<th>Full Name</th>
					<th>Gender</th>
					<th>Ward</th>
					<th>Location</th>
					<th>Phone number</th>
					<th>Ztsc Reg. Number</th>
					<th>Zanzibar Id</th>
					<th>NIDA</th>					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $farmer['farmerid'] ?></td>
					<td><input type="text" name="fname" value=" <?php echo $farmer['farmerName'] ?>"></td>
					<td><input type="text" name="gender" value=" <?php echo $farmer['gender'] ?>"></td>
					<td><input type="text" name="ward" value=" <?php echo $farmer['ward'] ?>"></td>
					<td><input type="text" name="location" value=" <?php echo $farmer['location'] ?>"></td>
					<td><input type="text" name="phone" value=" <?php echo $farmer['phoneNo'] ?>"></td>
					<td><input type="text" name="regno" value=" <?php echo $farmer['zstcRegNo'] ?>"></td>
					<td><input type="text" name="zid" value=" <?php echo $farmer['zanId'] ?>"></td>
					<td><input type="text" name="nida" value=" <?php echo $farmer['Nida'] ?>"></td>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td><button name="update">update</button></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>