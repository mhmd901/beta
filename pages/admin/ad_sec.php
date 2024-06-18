<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../style/style1.css">
    </head>
    <body>
    <?php include('header.php'); ?>
        <form action="ad_sec.php?action=add-sec" method="post">
        <div class="container">
        <h1>Create  a Section</h1>
            <label>instructor_id: </label>
            <select class="inst_id" name="in">
         
                <?php 

                      include('../../backend/connection.php');
                      $query ="SELECT * FROM `pr_info` WHERE `role` =  'instractor'";
                      $res = mysqli_query($con, $query);
                      if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<option value='".$row['id']."'>".$row['id']."</option>";
                        }
                    } else {
                         
                    }
 
                ?>
            </select><br><br>
            <label>course_id:</label>
<select name="crs">
    <?php
    $query1 = "SELECT crs_id FROM course";
    $res1 = mysqli_query($con, $query1);

    if (mysqli_num_rows($res1) > 0) {
        while ($row = mysqli_fetch_assoc($res1)) {
            echo "<option value='" . $row['crs_id'] . "'>" . $row['crs_id'] . "</option>";
        }
    }
    ?>
</select><br><br>

<label>add new section:</label>
<input type="text" placeholder="new section" name="n_sec"><br><br>

<label>class:</label>
<input type="text" placeholder="class" name="class"><br><br>

<label>choose day:</label>
<select name="day">
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
</select><br><br>

<label>choose time:</label>
<select name="time">
    <option value="8:00 to 10:30">8:00 to 10:30</option>
    <option value="11:00 to 13:30">11:00 to 13:30</option>
    <option value="14:00 to 16:30">14:00 to 16:30</option>
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
    case 'add-sec':
        add_sec();
        break;

    default:
        break;
}

function add_sec() {
    global $con;

    $in = $_POST['in'] ?? '';
    $crs = $_POST['crs'] ?? '';
    $n_sec = $_POST['n_sec'] ?? '';
    $class = $_POST['class'] ?? '';
    $day = $_POST['day'] ?? '';
    $time = $_POST['time'] ?? '';
    $query = "INSERT INTO `section` (`sec_name`, `in_id`, `class`, `crs_id`, `date`, `time`) 
    VALUES ('$n_sec', '$in', '$class', '$crs', '$day', '$time')";
    mysqli_query($con, $query);
    header('Location: ad_sec.php');

}
?>
