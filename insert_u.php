<?php
    include_once('connection.php');
    if (isset($_POST['submit'])) {
        $u_id = $_POST['userid'];
        $u_name = $_POST['name'];
        $u_email = $_POST['email'];
        $u_username = md5($_POST['username']);
        $u_password = md5($_POST['password']);
        $u_location = $_POST['location'];
        $u_level = $_POST['level'];
        $u_gender = $_POST['gender'];
        $hash = password_hash($u_password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO reg_user(userid,fullName,gender,location,email,username,password,accessLevel) VALUES
        ('$u_id','$u_name','$u_gender', '$u_location','$u_email','$u_username', '$hash', '$u_level');";
         if (mysqli_query($conn, $sql)) {
            header("location: reg_user.php");
        }else {
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
            mysqli_close($conn);
    }
    elseif (isset($_POST['update'])) {
        $u_id = $_POST['id'];
        $u_name = $_POST['name'];
        $u_email = $_POST['email'];
        $u_username = $_POST['username'];
        $u_location = $_POST['location'];
        $u_gender = $_POST['gender'];

        $sql = "UPDATE reg_user SET fullName = '$u_name', gender = '$u_gender', location ='$u_location', email = '$u_email', username = '$u_username' WHERE userid = '$u_id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['status'] = "user updated";
            echo '<script type="text/javascript"> alert(user updated)</script>';
            header('location: s_user.php');
        }else {
            $_SESSION['status'] = "User failed to update";
            echo "<script>User updated failed</script>";
            echo 'error'. $sql . mysqli_error($conn);
        }
    }
    else {
        $id = $_GET['id'];
        $sql= "DELETE FROM reg_user WHERE userid = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['status'] = "User deleted";
            header('location: s_user.php');
        }else {
            $_SESSION['status'] = "Failed to delete ";
            header('location: s_user.php');
            /*echo "error". $sql . mysqli_error($conn);*/
    }
    }
?>