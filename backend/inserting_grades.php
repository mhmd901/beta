<?php
include('connection.php');
$grade=$_POST['grade'];
$std_id=$_POST['std_id'];
$crs_id=$_POST['crs_id'];
$sql="UPDATE `studentcrs` SET `grade` = '$grade' WHERE `student_id` = $std_id AND `course_id` = $crs_id;";
$res = mysqli_query($con,$sql);
?>