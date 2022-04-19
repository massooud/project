<?php 

	include_once 'connection.php';
	session_start();
	if (isset($_POST['addmobile'])) {
		$name = $_POST['name'];
		$good = $_POST['good'];
		$mobname = $_POST['mobname'];
		$mobno = $_POST['mobno'];
		$remark = $_POST['remark'];
		$date = date('Y-m-d'.' h:i:sa');
		$weight = $_POST['weight'];
		$amount = $_POST['amount'];
		$pay = 'mobile';
		$total = $amount;

		$sql = "INSERT INTO payment(fullName,good,phoneNo, b_mName,date,weight,amount,pay_type,remark,total) VALUES('$name','$good', '$mobno', '$mobname','$date', '$weight', '$amount','$pay', '$remark', '$total')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$_SESSION['status'] = "Success";
			header('location: pay_mobile.php');
		}else {
			$_SESSION['status'] = "Failed";		
			header('location: pay_cash.php');
			/*echo "error" . $sql . mysqli_error($conn);*/
		}
	}elseif (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$good = $_POST['good'];
		$mobname = $_POST['mobname'];
		$mobno = $_POST['mobno'];
		$remark = $_POST['remark'];
		$date = date('Y-m-d'.' h:i:sa');
		$weight = $_POST['weight'];
		$amount = $_POST['amount'];
		$pay = 'cash';

		if ($remark="nzuri") {
			$amount = $weight*14000;
		}elseif ($remark="wastani") {
			$amount = $weight*13000;
		}elseif ($remark = "hafifu") {
			$amount = $weight * 12000;
		}else{
			$amount = $weight * 7000;
		}
		$total = $amount;
		$sql = "UPDATE payment SET fullName = '$name', good = '$good', b_mName = '$mobname', phoneNo = '$mobno', weight = '$weight', amount = '$amount', remark = '$remark', total = '$total' WHERE receiptId = '$id'";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['status'] = "Success";
			header('location: s_mobile.php');
		} else {
			$_SESSION['status'] = "Failed";
			header('location: s_mobile.php');
			/*echo 'error'. $sql . mysqli_error($conn);*/
		}
	} 
	// elseif(isset($_POST['search'])){
	// 	$find = $_POST['find'];
	// 	$sql = "SELECT * FROM farmer where zanId ='$find' or nida like '$find' or zstcRegNo like '$find'";
	// }
	else {
		$id = $_GET['id'];
		$sql = "DELETE FROM payment WHERE pay_type LIKE 'mobile' AND receiptId = $receiptId";
		$res = mysqli_query($conn, $sql);
		if ($res) {
			$_SESSION['status'] = "Success";
			header('location: s_mobile.php');
		} else {
			$_SESSION['status'] = "Failed";
			header('location: s_mobile.php');
			//check error
			/*echo 'error'. $sql . mysqli_error($conn);*/
		}
	}

 ?>