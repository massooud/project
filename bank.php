<?php 
	include_once 'connection.php';
	session_start();
	if (isset($_POST['addbank'])) {
		$name = $_POST['name'];
		$good = $_POST['good'];
		$bname = $_POST['bname'];
		$accno = $_POST['accno'];
		$remark = $_POST['remark'];
		$date = date('Y-m-d'.' h:i:sa');
		$weight = $_POST['weight'];
		$amount = $_POST['amount'];
		$pay = 'bank';
		$total = $amount;

		$sql = "INSERT INTO payment(fullName,good, b_mName,accountNo,date,weight,amount,pay_type,remark,total) VALUES('$name','$good', '$bname', '$accno', '$date', '$weight', '$amount','$pay','$remark', '$total')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$_SESSION['status'] = "Success";
			header('location: pay_bank.php');
		}else {
			$_SESSION['status'] = "Failed";
			echo "error" . $sql . mysqli_error($conn);
		}
	}elseif(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$good = $_POST['good'];
		$bname = $_POST['bname'];
		$accno = $_POST['accno'];
		$remark = $_POST['remark'];
		$weight = $_POST['weight'];
		$amount = $_POST['amount'];
		

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
		$sql = "UPDATE payment SET fullName = '$name', good = '$good', b_mName = '$bname', accountNo = '$accno', weight = '$weight', amount = '$amount', remark = '$remark', total = '$total' WHERE receiptId = '$id'";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['status'] = "Success";
			header('location: s_bank.php');
		} else {
			$_SESSION['status'] = "Failed";
			header('location: e_bank.php');
		}

	} else {
		$id = $_GET['id'];
		$sql = "DELETE FROM payment WHERE pay_type LIKE 'bank' and receiptId = '$id' ";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['status'] = "Success";
			header('location: s_bank.php');
		} else {
			$_SESSION['status'] = "Failed";
			header('location: s_bank.php');
		}
	}
	


 ?>