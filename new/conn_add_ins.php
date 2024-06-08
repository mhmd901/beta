<?php
include 'connection.php';
 
$in = $_POST['in'];
$crs= $_POST['crs'];
$class = $_POST['class'];
$n_sec = $_POST['n_sec'];
$day =$_POST['day'];
$time =$_POST['time'];
$query = "INSERT INTO section(sec_id,in_id,class,crs_id,day,time) VALUES('$n_sec','$in' ,'$class' , '$crs','$day' ,'$time')";
mysqli_query($con, $query);
header('location:ad_instr.php');
?>