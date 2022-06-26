<?php 
    session_start();
    include 'connection.php';
    if (isset($_POST['submit'])) { 
        $c_name = $_POST['cname'];
        $c_no = $_POST['cno'];
        $c_reg = $_POST['creg'];
        $c_loc = $_POST['location'];
        $c_dist = $_POST['district'];

        $sql = "INSERT INTO center(centerName, district, region, location) VALUES ('$c_name','$c_dist','$c_reg', '$c_loc');";
        
        if (mysqli_query($conn, $sql)) {
            $_SESSION['status'] = "Success";
            header('location: reg_center.php');
        } else {
            $_SESSION['status'] = "Failed!";
            /*header('location: reg_center.php');*/
            echo "error" . $sql . mysqli_error($conn);
        }
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $c_name = $_POST['cname'];
        $c_reg = $_POST['creg'];
        $c_loc = $_POST['location'];
        $c_dist = $_POST['district'];

        $sql = "UPDATE center SET centerName = '$c_name', district = '$c_dist', region ='$c_reg', location = '$c_loc'
        WHERE centerid = '$id'";

        $sqlquery = mysqli_query($conn, $sql);
        if ($sqlquery) {
            $_SESSION['status'] = "Success";
            header('location: s_center.php');
        }
        else {
            $_SESSION['status'] = "Failed";
            /*header('location: s_center.php');*/
            echo "error" . $sql . mysqli_error($conn);
        }
    }
    else{
        $id = $_GET['id'];
        $sql = "DELETE FROM center WHERE centerid = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['status'] = "Deleted";
            header('location: s_center.php');
        } else {
            $_SESSION['status'] = "failed to delete";
            echo "error" . $sql . mysqli_error($conn);
        }

    }
?>