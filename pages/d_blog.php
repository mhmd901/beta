<?php
include('../backend/connection.php');
    $id = $_POST["id"];
    $sql = "DELETE FROM blogs WHERE `id` = $id";
    mysqli_query($con, $sql);
    header("location: admin/blog_admin.php");
    ?>