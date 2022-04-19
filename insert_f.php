<?php 
    include_once 'connection.php';
    session_start();
    if (isset($_POST['add'])) {
        $f_name = $_POST['fname'];
        $f_gender = $_POST['gender'];
        $f_ward = $_POST['ward'];
        $f_location = $_POST['location'];
        $f_date = date('Y-m-d'.' h:i:sa');
        $f_phone = $_POST['phone'];
        $f_regno = $_POST['regno'];
        $f_zanid = $_POST['zid'];
        $f_nida = $_POST['nida'];

        $sql = "INSERT INTO farmer(farmerName, gender, ward, location, date, phoneNo, zstcRegNo, zanId,Nida) VALUES('$f_name','$f_gender','$f_ward','$f_location','$f_date',$f_phone,'$f_regno','$f_zanid','$f_nida');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['status'] = "Farmer registered!";
            header('location: reg_farmer.php');
        } else {
            echo "error" . $sql . mysqli_error($conn);
            $_SESSION['status'] = "Failed to register farmer";
            header('location: reg_farmer.php');
        }
        mysqli_close($conn);
    }elseif (isset($_POST['update'])) {
            
        $id = $_POST['id'];
        $f_name = $_POST['fname'];
        $f_gender = $_POST['gender'];
        $f_ward = $_POST['ward'];
        $f_location = $_POST['location'];
        $f_phone = $_POST['phone'];
        $f_regno = $_POST['regno'];
        $f_zanid = $_POST['zid'];
        $f_nida = $_POST['nida'];


        $sql = "UPDATE farmer SET farmerName = '$f_name', gender = '$f_gender', ward = '$f_ward', location = '$f_location', phoneNo = '$f_phone', zstcRegNo = '$f_regno', zanId = '$f_zanid', Nida = '$f_nida' WHERE farmerid = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['status'] = "farmer updated";
            header('location: s_farmer.php');
        } else {
            $_SESSION['status'] = "fail to update farmer!";
            /*header('location: s_farmer.php');*/
            echo 'error' . $sql . mysqli_error($conn);
        }
    } else {
        $id = $_GET['id'];

        $sql = "DELETE FROM farmer WHERE farmerid = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['status'] = "Farmer deleted";
            header('location: s_farmer.php');
        } else {
            $_SESSION['status'] = "fail to delete farmer";
            echo "error" . $sql . mysqli_error($conn);
            header('location: s_farmer');
    }
    }
?>