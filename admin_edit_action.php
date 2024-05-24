<?php
include('connection.php');
session_start();
$id=$_POST['id'];
$_SESSION['id'] = $id;
$query1 = "SELECT * FROM `studentinfo` WHERE `id` = '$id' ";   
$RES = mysqli_query($con,$query1);
$rows = mysqli_num_rows($RES);

if ($rows > 0) {
        header("location: admin_edit_profile.php");
    }
 else {
    header("location: admin_edit.php");
  }
  ?>