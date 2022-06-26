<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "payment_zstc";

$conn = mysqli_connect($servername,$username,$password,$databasename);
if (!$conn) {
    die("connection Failled: " . mysqli_connect_error());
}
// echo "Database connected" . "<BR>";
?>