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
		$sql = "SELECT * FROM payment WHERE pay_type LIKE 'cash' AND receiptId = '$id'";
		$res = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 
	 ?>
</head>
<body>
	<form class="container card" action="cash.php" method="post">
		<div class="row">
			<div class="col-sm-12 card-title bg-light text-center">
				<p>Receipt no: <?php echo $res['receiptId'] ?> : <?php echo $res['fullName'] ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label>Full name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $res['fullName'] ?>" >
				<label>Product</label>
				<input type="text" name="good" class="form-control" value="<?php echo $res['good'] ?>" >
				<label>Remark</label>
				<input type="text" name="remark" class="form-control" value="<?php echo $res['remark']?>">
				<label>Date</label>
				<input type="date" name="date" class="form-control" value="<?php echo $res['date']?>" readonly>
			</div>
			<div class="col">
				<label>Mobile Name</label>
				<input type="text" name="mobname" class="form-control" value="<?php echo $res['b_mName']?>">
				<label>Phone No.</label>
				<input type="text" name="mobno" class="form-control" value="<?php echo $res['phoneNo']?>">
				<label>Weight</label>
				<input type="text" name="weight" class="form-control" value="<?php echo $res['weight']?>">
				<label>Amount</label>
				<input type="text" name="amount" class="form-control" value="<?php echo $res['amount']?>">
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