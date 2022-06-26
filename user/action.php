<?php 

	include_once 'connection.php';
	session_start();
	if (isset($_POST['addcash'])) {
		$name = $_POST['name'];
		$good = $_POST['good'];
		$mobname = $_POST['mobname'];
		$mobno = $_POST['mobno'];
		$remark = $_POST['remark'];
		$date = date('Y-m-d'.' h:i:sa');
		$weight = $_POST['weight'];
		$amount = $_POST['amount'];
		$pay = 'cash';
		$total = $amount;

		$sql = "INSERT INTO payment(fullName,good,phoneNo, b_mName,date,weight,amount,pay_type,remark,total) VALUES('$name','$good', '$mobno', '$mobname','$date', '$weight', '$amount','$pay', '$remark', '$total')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$_SESSION['status'] = "Success";
			header('location: pay_cash.php');
		}else {
			$_SESSION['status'] = "Failed";
			echo "error" . $sql . mysqli_error($conn);
			/*header('location: pay_cash.php');*/
	}elseif($_POST['addcash']){
            $name = $_POST['name'];
            $good = $_POST['good'];
            $mobname = $_POST['mobname'];
            $mobno = $_POST['mobno'];
            $remark = $_POST['remark'];
            $date = date('Y-m-d'.' h:i:sa');
            $weight = $_POST['weight'];
            $amount = $_POST['amount'];
            $pay = 'cash';
            $total = $amount;

            $sql = "INSERT INTO payment(fullName,good,phoneNo, b_mName,date,weight,amount,pay_type,remark,total) VALUES('$name','$good', '$mobno', '$mobname','$date', '$weight', '$amount','$pay', '$remark', '$total')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $_SESSION['status'] = "Success";
                header('location: pay_cash.php');
            }else {
                $_SESSION['status'] = "Failed";
                echo "error" . $sql . mysqli_error($conn);
                /*header('location: pay_cash.php');*/
            }
        }elseif (isset($_POST['addmobile'])) {
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
    }
    ?>