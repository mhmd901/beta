<?php
include('connection.php');
session_start();
$email=$_POST['email'];
$password=$_POST['password']; 
$_SESSION['email'] = $email;
$query1 = "SELECT * FROM `instructorinfo` WHERE `Email` = '$email' AND `Password` = '$password'";   
$RES = mysqli_query($con,$query1);
$rows = mysqli_num_rows($RES);

if ($rows > 0) {
  if ($email == '1@beta' && $password == '1mm') {
      header("location: sigin-up.php");
  } else {
      header("location: in_profile.php");
  }
} else {
  header("location: in_login.php");
}
?>