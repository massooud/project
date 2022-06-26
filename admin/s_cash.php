<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
		include 'connection.php';
		include 'link.php';
		$sql = "SELECT * FROM payment WHERE pay_type LIKE 'cash'";
		$results = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);
	 ?>
</head>
<body>
	<div class="container-fluid text-center bg-light" style="height: 90vh">
          <div class="header">
            <?php include 'topbar.php'?>
          </div>
          <div class="section row ml-sm-1 mr-sm-1" style="height: 70vh">
            <div class="col-sm-2" id="col1">
            <!-- <span style="font-size:30px;cursor:pointer" class="float-left" onclick="openSideNav()">&#9776; open</span> -->
                <?php include "sidenav.php" ?>
            </div>
            <div class="col-sm-9" id="col2">
                <table class="table table-striped container">
					<thead>
						<tr>
							<th>Receipt Id</th>
							<th>Full Name</th>
							<th>Product</th>
							<th>Mobile Name</th>
							<th>Phone No.</th>
							<th>Date</th>
							<th>Weight</th>
							<th>Amount</th>
							<th>Payment</th>
							<th>Total</th>
							<th>Change<i class="fa fa-edit"></i></th>
							<th>Remove <i class="fa fa-trash"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($results as $result): ?>
							<tr>
								<td><?php echo $result['receiptId'] ?></td>
								<td><?php echo $result['fullName'] ?></td>
								<td><?php echo $result['good'] ?></td>
								<td><?php echo $result['b_mName'] ?></td>
								<td><?php echo $result['phoneNo'] ?></td>
								<td><?php echo $result['date'] ?></td>
								<td><?php echo $result['weight'] ?></td>
								<td><?php echo $result['amount'] ?></td>
								<td><?php echo $result['pay_type'] ?></td>
								<td><?php echo $result['total'] ?></td>
								<td>
									<button class="btn btn-warning">
										<a href="e_cash.php?id=<?php echo $result['receiptId'] ?>">edit</a>
									</button>
								</td>
								<td>
									<button class="btn btn-danger">
										<a href="cash.php?id=<?php echo $result['receiptId'] ?>" onclick="return confirm('are you sure? you want to delete <?php echo $result['fullName'] ?>')">delete</a>
									</button>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
            </div>
          </div>
          <div class="footer">
              <?php include 'footer.php' ?>
          </div>
      </div>
	
</body>
</html>