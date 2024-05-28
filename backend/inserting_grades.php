<!--replaced-->

<?php

 $servername = "localhost"; 
 $username = "root"; 
 $password = ""; 
 $database = "BETA"; 
 $con = mysqli_connect($servername, $username, $password, $database);

$grades=$_POST['grade'];

 $query =  " UPDATE studentcrs SET grades = '$grades' where student_id = (select id from studentinfo where student_id = id)";
 $result=mysqli_query($con, $query);
 header("location:section.php")
?>