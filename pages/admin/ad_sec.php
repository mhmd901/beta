<!DOCTYPE html>
<html>
    <head>
       <Style>
        body {
  font-family: Arial, sans-serif;
  background-color: rgb(255, 236, 158);;
  
}

.container {
  max-width: 500px;
  margin: 40px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  margin-top: 0;
  font-weight: bold;
  color: #333;
}

label {
  display: block;
  margin-bottom: 10px;
}

select {
  width: 100%;
  height: 40px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="text"] {
  width: 95%;
  height: 15px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.crs_id,.class_no {
  margin-bottom: 20px;
}

.add-new-section {
  margin-top: 20px;
}

.add-new-section input[type="text"] {
  width: 100%;
  height: 30px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.add-new-section input[type="submit"] {
  background-color: rgb(255, 236, 158);
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.add-new-section input[type="submit"]:hover {
  background-color: rgb(255, 236, 158);
}

.sub1{
    margin-top: 3%;
 width:100%;
 
}
input[type="submit"].sub1 {
  background-color: rgb(255, 236, 158);
}
h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}
       </style>
    </head>
    <body>
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
