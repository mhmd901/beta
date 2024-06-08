<?php
include 'connection.php';
 
$student = $_POST['student'];
$section1 = $_POST['jawad'];
$crs=$_POST['crs'];
$query = "INSERT INTO studentcrs(student_id,sec_id,course_id) VALUES('$student','$section1','$crs')";
mysqli_query($con, $query);
header('location:add_std.php');
?>

