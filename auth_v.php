<!-- <?php 
    session_start();
    include_once 'config.php';
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if (!empty($username) && !empty($password)) {
        $sq = "SELECT * from reg_user WHERE username='$username' AND password='$password'";
        $sql = mysqli_query($conn,$sq);
        if (mysqli_num_rows($sql)>0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role'] = $row['accessLevel'];
            //header('location: design.php');
            if ($_SESSION['role']=="admin") {
                header('location: admin/dashboard.php');
            }elseif($_SESSION['role']=="user"){
                header('location: user/dashboard.php');
            }

        } else {
            echo "Error: " + $sq + mysqli_error($conn);
            header('location: index.php');
        } 
    }

 ?> -->

<?php 
    session_start();
    include_once 'config.php';
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $pass = $_POST['password'];
    
    //$sq = "SELECT * from reg_user WHERE username='$username' AND password='$password'";
    $sq = "SELECT password from reg_user WHERE username = '$username' and password='$password'";
    password_verify($password, $sq);
    $sql = mysqli_query($conn,$sq);
    $ro = mysqli_fetch_assoc($sql);


    if (!empty($username) && !empty($password)) {
        //$sq = "SELECT * from reg_user WHERE username='$username' AND password='$password'";
        //$sql = mysqli_query($conn,$sq);
        //$ro = mysqli_fetch_assoc($sql);
        
        if (mysqli_num_rows($sql)>0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role'] = $row['accessLevel'];
            //header('location: design.php');
            if ($_SESSION['role']=="admin") {
                header('location: admin/dashboard.php');
            }elseif($_SESSION['role']=="user"){
                header('location: user/dashboard.php');
            }

        } else {
            echo "Error: " + $sq + mysqli_error($conn);
            header('location: index.php');
        } 
    }

 ?>



