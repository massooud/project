<?php
    session_start();
    include 'connection.php';
    

    if(isset($_POST['login'])){
        extract($_POST);

        $username = $_POST['username'];
        $password =  $_POST['password'];
        $role = 'user';
        $sq = "SELECT * FROM reg_user where username='$username' and password='$password'";
        $sql=mysqli_query($conn,$sq);
        $row  = mysqli_fetch_array($sql);

        if ($row['accessLevel'] == "admin") {
            header('location: design.php');
        }else {
            echo "error: " . $sq . mysqli_error($conn);
        }
        /*if(is_array($row)){

            $_SESSION["userid"] = $row['userid'];
            $_SESSION["password"]=$row['password'];
            $_SESSION["fullName"]=$row['fullName'];
            $_SESSION['role'] = $row['accessLevel'];
            if ($sql1 = 'admin') {
                 header("location: design.php");
             } else {
                header('location: s_user.php');
             }
             
        }
        else
        {
            echo "Invalid Email ID/Password";
            echo "error" . $sql . mysqli_error($conn);
            header('location: index.php');
        }*/
    }
?>