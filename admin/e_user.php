<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
		include 'connection.php';
		include 'link.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM reg_user WHERE userid = '$id'";
		$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	 ?>
</head>
<body>
	<form action="insert_u.php" method="post" class="container card">
		<div class="row">
			<div class="col-sm-12 card-title bg-light text-center">
				<p>User no: <?php echo $result['userid'] ?> : <?php echo $result['fullName'] ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<label>Full name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $result['fullName'] ?>" >
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $result['email'] ?>" >
				<label>Gender</label>
				<select name="gender" class="form-control">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="col-sm-6">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $result['username']?>">
				<label>Location</label>
				<input type="text" name="location" class="form-control" value="<?php echo $result['location']?>">
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