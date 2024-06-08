<!DOCTYPE html>
<html>
    <head>
      <style>
        body{
          background-color: rgb(255, 236, 158);
        }
               .container {
  max-width: 500px;
  margin: 40px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #666;
}

select.student, select.course {
  width: 100%;
  height: 40px;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"].sub1 {
  width: 100%;
  height: 40px;
  margin-top: 20px;
  padding: 10px;
  background-color: rgb(255, 236, 158);
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"].sub1:hover {
  background-color: rgb(255, 236, 158);
}

 
  select[name="crs"] {
    width: 100%;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px;
    font-size: 13px;
  }

  /* Add some spacing between the label and the select element */
  label {
    display: block;
    margin-bottom: 10px;
  }

      </style>
    </head>
    <body>
    <form action="add_std.php?action=add-std" method="post">
        <div class="container">
        <h1> students:  </h1>
            <label>student_id: </label>
            <select class="student" name="student">
                <?php
                      include '../../backend/connection.php';
                      $query ="SELECT * FROM `pr_info` WHERE `role` = 'student'";
                      $res = mysqli_query($con, $query);
                      if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<option value='".$row['id']."'>".$row['id']."</option>";
                        }
                    } else {
                         
                    }
                
                ?>
            </select ><br>
           
            <label>section_id: </label>
            <select class="course" name="sec">
                <?php
                  include '../backend/connection.php';
                  $query ="SELECT sec_id FROM section";
                  $res = mysqli_query($con, $query);
                  if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<option value='".$row['sec_id']."'>".$row['sec_id']."</option>";
                    }
                 } else {
                     
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
