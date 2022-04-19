<?php 
	session_start();

 ?>
 <?php
session_start();
if(isset($_POST['login']))
{
    extract($_POST);
    include 'connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM user_register where username='$username' and Password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["userid"] = $row['userid'];
        $_SESSION["username"]=$row['username'];
        // $_SESSION["First_Name"]=$row['First_Name'];
        // $_SESSION["Last_Name"]=$row['Last_Name']; 
        header("Location: design.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>