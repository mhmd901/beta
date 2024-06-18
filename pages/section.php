<?php
include('../backend/connection.php');
session_start();

$sec = $_POST['sec_id'];
$crs = $_POST['course'];

$sql = "SELECT * FROM `studentcrs` WHERE `course_id` = $crs AND `sec_id` = $sec";
$res = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        background-color: white;
    }

    table {
        border-collapse: collapse;
        margin-left: 350px;
        font-size: 0.9 em;
        width: 50%;
        min-height: 100px;
        border-radius: 15px;
        overflow: hidden;
        margin-top: 150px;
    }

    .students thead tr {
        background-color: rgb(255, 236, 158);
        color: #fff;
        text-align: left;
        font-weight: bold;


    }

    .students th,
    .students td {
        /* padding: 12px 15px;*/
        padding: 20px 20px;
        padding-left: 150px;

    }

    .students tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .students tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .students tbody tr:last-of-type {
        border-bottom: 2px solid rgb(255, 236, 158);
    }

    input {
        display: inline-block;
        height: 30px;
        width: 20%;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 5px;
        margin-top: 5px;
        font-size: 15px;
        font-weight: 500;
        padding: 0 10px;

    }

    button {

        width: 15%;
        color: #080710;
        font-size: 15px;
        font-weight: 400;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
        /* margin-left: 10%;*/
        height: 30px;
        border: none;
        background-color: rgb(255, 236, 158);
        transition: background-color 0.3s ease;
        margin-top: 1%;
        margin-right: 10%;
    }

    button:hover {
        background-color: aliceblue;
    }

    .delete {
        background-color: red;
        margin-left: 60%;
        transition: background-color 0.3s ease;
        display: inline-block;
        margin-top: 10%;

    }

    .delete:hover {
        background-color: crimson;
    }

    th {
        color: black;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <table class="students">
        <thead>
            <tr>
                <th>student id</th>
                <th>course id</th>
                <th>grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
  if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
          echo "<tr>
                  <td>" . $row['student_id'] . "</td>
                  <td>" . $row['course_id'] . "</td>
                  <td>
                      <form action='section.php?action=add_grade' method='post'>
                        <input type='hidden' name='std_id' value='" . $row['student_id'] . "'> 
                        <input type='hidden' name='crs_id' value='" . $row['course_id'] . "'> 
                        <input type='hidden' name='sec_id' value='" . $sec . "'> 
                        <input type='hidden' name='course' value='" . $crs . "'> 


                        <input type='text' placeholder='grade' name='grade' id='grade'>
                        <button type='submit'><i class='fa-solid fa-plus'></i></button>
                      </form>
                  </td>
              </tr>";
      }
  } else {
      echo "<tr><td> there is no data </td></tr>";
  }
?>

        </tbody>
    </table>
</body>

</html>
<?php
include('../backend/connection.php');
$action = $_GET['action'] ?? '';

switch ($action) {
    case "add_grade":
        add_grade();
        break;
}

function add_grade(){
    include('../backend/connection.php');
    $grade = $_POST['grade'];
    $std_id = $_POST['std_id'];
    $crs_id = $_POST['crs_id'];

    $stmt = $con->prepare("UPDATE `studentcrs` SET `grade` = ? WHERE `student_id` = ? AND `course_id` = ?");
    $stmt->bind_param("sss", $grade, $std_id, $crs_id);
    $stmt->execute();

    exit;
}
?>