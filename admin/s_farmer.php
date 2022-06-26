<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 
		include 'link.php';
		include 'connection.php';
		session_start();
		$sql  = "SELECT * FROM farmer";
		$sqlq = mysqli_query($conn, $sql);
		$result = mysqli_fetch_all($sqlq, MYSQLI_ASSOC);
	 ?>
</head>
<body>
	<form class="container" action="insert_f.php" method="post">
        <table class="table table-striped d-block">
            <thead>
                <tr>
                    <th>Farmer id</th>
                    <th>Nameame</th>
                    <th>Gender</th>
                    <th>Ward</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Phone Number</th>
                    <th>Zstc Reg. number</th>
                    <th>Zanzibar Id</th>
                    <th>NIDA</th>
                    <th><i class="fa fa-edit"></i></th>
                    <th><i class="fa fa-trash"></i></th>
                </tr>
            </thead>
            	<?php foreach($result as $res): ?>
            		<tr>
	            		<td><?php echo $res['farmerid'] ?></td>
	            		<td><?php echo $res['farmerName'] ?></td>
	            		<td><?php echo $res['gender'] ?></td>
	            		<td><?php echo $res['ward'] ?></td>
	            		<td><?php echo $res['location'] ?></td>
	            		<td><?php echo $res['date'] ?></td>
	            		<td><?php echo $res['phoneNo'] ?></td>
	            		<td><?php echo $res['zstcRegNo'] ?></td>
	            		<td><?php echo $res['zanId'] ?></td>
	            		<td><?php echo $res['Nida'] ?></td>
	            		<td><button class="btn btn-warning">
	            			<a href="e_farmer.php?id=<?php echo $res['farmerid'] ?>">edit </a>
	            		</button></td>
	            		<td><button class="btn">
	            			<a href="insert_f.php?id=<?php echo $res['farmerid'] ?>" onclick="return confirm('are you sure? you want to delete <?php echo $res['farmerName']; ?>')">delete </a>
	            		</button></td>
            		</tr>
            	<?php endforeach ?>
            <tbody>
            </tbody>
        </table>   
    </form> 
</body>
</html>