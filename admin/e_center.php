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
		$sql = "SELECT * FROM center WHERE centerid = '$id'";
		$sqlquery = mysqli_query($conn, $sql);
		$center = mysqli_fetch_assoc($sqlquery);
	 ?>
</head>
<body>
	<form class="container" action="insert_c.php" method="post">
		<div class="row">
			<div class="col-sm-6">
				<p>Center no: <?php echo $center['centerid'] ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label>Name</label>
				<input type="text" name="cname" class="form-control" value="<?php echo $center['centerName'] ?>" >
				<label>District</label>
				<input type="text" name="district" class="form-control" value="<?php echo $center['district'] ?>" >
			</div>
			<div class="col">
				<label>Location</label>
				<input type="text" name="location" class="form-control" value="<?php echo $center['district'] ?>">
				<label>Region</label>
				<input type="text" name="creg" class="form-control" value="<?php echo $center['region'] ?>">
				<input type="hidden" name="id" value="<?php echo $id ?>">
			</div>
		</div>
		<div class="m-sm-4">
			<center>
				<button type="submit" name="update" class="btn btn-primary">update</button>
			</center>		
		</div>
	</form>
</body>
</html>