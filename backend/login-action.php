<?php
include('connection.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['email'] = $_POST['email'];

$query1 = "SELECT * FROM `pr_info` WHERE `Email` = ? AND `Password` = ?";
$stmt = mysqli_prepare($con, $query1);
mysqli_stmt_bind_param($stmt, "ss", $email, $password);
mysqli_stmt_execute($stmt);
$RES = mysqli_stmt_get_result($stmt);
$rows = mysqli_num_rows($RES);

if ($rows > 0) {
    $row = mysqli_fetch_assoc($RES);
    $userRole = $row['role']; 

    if ($userRole == 'admin') {
        header("location: ../pages/admin/sigin-up.php");
    } elseif ($userRole == 'student') {
        header("location: ../pages/profile1.php");
    } elseif ($userRole == 'instractor') { 
        header("location: ../pages/in_profile.php");
    } 
} else {
    header("location: ../pages/login.php");
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
