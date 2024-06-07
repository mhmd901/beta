<?php
include('connection.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$query1 = "SELECT * FROM `pr_info` WHERE `Email` = '$email' AND `Password` = '$password'";
$RES = mysqli_query($con, $query1);
$rows = mysqli_num_rows($RES);

if ($rows > 0) {
    $row = mysqli_fetch_assoc($RES);
    $userRole = $row['role']; 

    if ($userRole == 'admin') {
        header("location: ../pages/sign-up.php");
    } elseif ($userRole == 'student') {
        header("location: ../pages/profile1.php");
    } elseif ($userRole == 'instractor') { 
        header("location: ../pages/in_info.php");
    } 
}
else {
        header("location: login.php");
    }


?>