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
		$sql = "SELECT * FROM payment WHERE receiptid = '$id' and pay_type LIKE 'bank'";
		$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	 ?>
</head>
<body>
	<form class="container card" action="bank.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-12 card-title bg-light text-center">
				<p>Receipt no: <?php echo $result['receiptId'] ?> : <?php echo $result['fullName'] ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label>Full name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $result['fullName'] ?>" >
				<label>Product</label>
				<input type="text" name="good" class="form-control" value="<?php echo $result['good'] ?>" >
				<label>Remark</label>
				<input type="text" name="remark" class="form-control" value="<?php echo $result['remark']?>">
				<label>Date</label>
				<input type="date" name="date" class="form-control" value="<?php echo $result['date']?>" readonly>
			</div>
			<div class="col">
				<label>Bank Name</label>
				<input type="text" name="bname" class="form-control" value="<?php echo $result['b_mName']?>">
				<label>Account No.</label>
				<input type="text" name="accno" class="form-control" value="<?php echo $result['accountNo']?>">
				<label>Weight</label>
				<input type="text" name="weight" class="form-control" value="<?php echo $result['weight']?>">
				<label>Amount</label>
				<input type="text" name="amount" class="form-control" value="<?php echo $result['amount']?>">
				<input type="hidden" name="id" value="<?php echo $id ?>">
			</div>
		</div>
		<div class="m-sm-4 text-center">
			<button type="submit" name="update" class="btn btn-primary">update</button>					
		</div>
	</form>
</body>
</html>