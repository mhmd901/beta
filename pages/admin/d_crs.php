<?php
include('../../backend/connection.php');
    $courseId = $_POST["id"];
    $sql = "DELETE FROM course WHERE `crs_id` = $courseId";
    mysqli_query($con, $sql);
    header("location: crs_edit.php");
    ?>