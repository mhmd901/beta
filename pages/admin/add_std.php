<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../style/style1.css"> 
</head>
<body>
    <?php include('header.php'); ?>
    <form action="add_std.php?action=add-std" method="post">
        <div class="container">
            <h1>Students:</h1>
            <label>Student ID:</label>
            <select class="student" name="student">
                <?php
                include '../../backend/connection.php';
                $query ="SELECT * FROM `pr_info` WHERE `role` = 'student'";
                $res = mysqli_query($con, $query);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<option value='".$row['id']."'>".$row['id']."</option>";
                    }
                }
                ?>
            </select><br>
           
            <label>Section ID:</label>
            <select class="course" name="sec">
                <?php
                include '../../backend/connection.php'; // Corrected path to connection file
                $query ="SELECT sec_id FROM section";
                $res = mysqli_query($con, $query);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<option value='".$row['sec_id']."'>".$row['sec_id']."</option>";
                    }
                }
                ?>
            </select>
            
            <input type="submit" value="Submit" class="sub1">
        </div>
    </form>
</body>
</html>

<?php
include('../../backend/connection.php');

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'add-std':
        add_std();
        break;

    default:
        break;
}

function add_std() {
    global $con;

    $student = $_POST['student'];
    $section = $_POST['sec'];
    $sql = "SELECT * FROM `section` WHERE `sec_id` = '$section'";
    $res1 = mysqli_fetch_assoc(mysqli_query($con, $sql));

    $crs = $res1['crs_id'];

    $query = "INSERT INTO `studentcrs` (`student_id`, `course_id`, `sec_id`) VALUES ('$student', '$crs', '$section')";
    mysqli_query($con, $query);

    header('location:add_std.php');
}
?>
  