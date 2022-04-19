<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
		include 'connection.php';
		include 'link.php';

        $sqlSelect = "SELECT * FROM center";
        $selectQ = mysqli_query($conn, $sqlSelect);
        $centers = mysqli_fetch_all($selectQ, MYSQLI_ASSOC);
	 ?>
</head>
<body>
	<form class="container" action="insert_c" method="post">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Center id</th>
					<th>Center Name</th>
					<th>Center Location</th>
					<th>Center District</th>
					<th>Center Region</th>
					<th><i class="fa fa-edit"></i></th>
					<th><i class="fa fa-trash"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($centers as $center): ?>
					<tr>
						<td><?php echo $center['centerid'] ?></td>
						<td><?php echo $center['centerName'] ?></td>
						<td><?php echo $center['location'] ?></td>
						<td><?php echo $center['district'] ?></td>
						<td><?php echo $center['region'] ?></td>
						<td>
							<button name="edit" class="btn btn-warning">
								<a href="e_center.php?id=<?php echo $center['centerid'] ?>">edit</a>
							</button>
						</td>
						<td>
							<button name="delete" class="btn btn-danger form" >
								<a href="insert_c.php?id=<?php echo $center['centerid'] ?>" onclick="return confirm('are you sure? you want to delete <?php echo $center['centerName'] ?>')">delete</a>
							</button>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</form>
</body>
</html>