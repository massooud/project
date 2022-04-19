<?php
//connection
include_once 'connection.php';
if(isset($_POST['submit'])){
    $c_no = $_POST['centerNo'];
    $c_name = $_POST['centerName'];
    $c_reg = $_POST['centerReg'];
    $c_loc = $_POST['location'];
    $c_dist = $_POST['district'];

    $sql = "INSERT INTO center(c_number,c_name, c_region,c_district,c_location)
    VALUES ('$c_no', '$c_name', '$c_reg', '$c_dist', '$c_loc ');";
    if (mysqli_query($conn, $sql)) {
        header("location: reg_center.php");
    }else {
        echo "error: " . $sql . "<br>" . mysqli_error($conn);
 }
    mysqli_close($conn);
}

?>
