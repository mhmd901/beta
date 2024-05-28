<?php
 
 //include 'login1.php';
 $servername = "localhost"; 
 $username = "root"; 
 $password = ""; 
 $database = "BETA"; 
 $con = mysqli_connect($servername, $username, $password, $database);



 $query =  " UPDATE studentcrs SET grades = '0'";
 $result=mysqli_query($con, $query);
 header("location:section.php")
?>

