<?php
include('../backend/connection.php');
session_start();

$email = $_SESSION['email'];
$query = "SELECT * FROM `pr_info` WHERE `Email` = '$email' ";
$res = mysqli_query($con, $query);
if (mysqli_num_rows($res) > 0) {
    $temp_data = mysqli_fetch_assoc($res);
    $id = $temp_data['id'];
    $fname = $temp_data['Fname'];
    $lname = $temp_data['Lname'];
    $city = $temp_data['city'];
    $dob = $temp_data['Date'];
    $phone = $temp_data['phone'];
    $gender = $temp_data['Gender'];
} else {

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="../style/style2.css">
    <script src="../scripts/myscript.js"></script>
</head>
<body>
<div class="panel">
          <div class="bio-graph-heading">
              <h1>student profile</h1>
          </div>
          <div class="panel-body bio-graph-info">
              <h1><?php echo $fname. " " .$lname ?></h1>
              <div class="row">
              <div class="bio-row">
                      <p><span>id </span>: <?php echo $id ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>First Name </span>: <?php echo $fname ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span>: <?php echo $lname ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Country </span> <?php echo $city ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Birthday</span>: <?php echo $dob ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email </span>: <?php echo $email ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Phone </span>: <?php echo $phone ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>gender </span>: <?php echo $gender ?></p>
                  </div>
              </div>
          </div>
      </div>
      <div>
        <div id="grade">

        </div>

    
</body>
</html>
<?php
function show_grade($con, $student_id){
    $sql = "SELECT * FROM `studentcrs` WHERE `student_id` = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $student_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $courses = [];
    $grades = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row['course_id'];
        $grades[] = $row['grade'];
    }

    echo("<script>show_grade(".json_encode($courses).",".json_encode($grades).")</script>");
}

show_grade($con, $id);
?>
