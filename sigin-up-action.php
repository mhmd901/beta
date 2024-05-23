<?php
include('connection.php');
$id= "SELECT id FROM `studentinfo`";
$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$Gender=$_POST['Gender'];
$query="INSERT INTO `studentinfo`(`Fname`, `Lname`, `phone`,`Date`, `Gender`) VALUES ('$fname','$lname','$phone','$date','$Gender')";
mysqli_query($con,$query);
header("location: login.php");

?>