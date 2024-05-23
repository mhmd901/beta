<?php
include('connection.php');
session_start();
$email=$_POST['email'];
$password=$_POST['password']; 
$_SESSION['email'] = $email;
$query1 = "SELECT * FROM `studentinfo` WHERE `Email` = '$email' AND `Password` = '$password'";   
$RES = mysqli_query($con,$query1);
$rows = mysqli_num_rows($RES);

if ($rows > 0) {
        header("location: admin_edit_profile.php");
    }
 else {
    header("location: admin_edit.php");
  }
  ?>