<?php
include('connection.php');
$crs_name = $_POST['crs_name'];
$crs_crdit = $_POST['crs_crdt'];
$query = "INSERT INTO `course` (`crs_name`, `crs_crdt`) VALUES ('$crs_name', '$crs_crdit')";   
if (mysqli_query($con, $query)) {
    echo "Course information updated successfully!";
    header("location: ../../page/admin/crs_edit.php");
} else {
    echo "Error updating course information: " ;
}
?>
