<?php

   include('../backend/connection.php');
include('../backend/functions.php');
   
   $query = "SELECT s.*, i.*
    FROM studentcrs s
    JOIN section i ON s.course_id = i.crs_id";
   
   $res = mysqli_query($con, $query);
   if (mysqli_num_rows($res) > 0) {
       $temp_data = mysqli_fetch_assoc($res);
       $id = $temp_data['student_id'];
       $crs = $temp_data['course_id'];
       /* $lname = $temp_data['grades'];*/
       
       
   }
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
        margin-left: 300px;
        font-size: 0.9 em;
        min-width: 850px;
        min-height: 100px;
        border-radius: 15px;
        overflow: hidden;
        margin-top: 150px;
    }

    .students thead tr {
        background-color: #1e90ff;
        color: #fff;
        text-align: left;
        font-weight: bold;

    }

    .students th,
    .students td {
        /* padding: 12px 15px;*/
        padding: 15px 20px;

    }

    .students tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .students tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .students tbody tr:last-of-type {
        border-bottom: 2px solid #1e90ff;
    }

    input {
        display: inline-block;
        height: 30px;
        width: 25%;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 5px;
        margin-top: 5px;
        font-size: 15px;
        font-weight: 500;
        padding: 0 10px;
        border: none;
    }

    button {

        width: 30%;
        color: #080710;
        font-size: 15px;
        font-weight: 400;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
        /* margin-left: 10%;*/
        height: 30px;
        border: none;
        background-color: #1e90ff;
        transition: background-color 0.3s ease;
        margin-top: 10%;
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
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <table class="students">
        <thead>
            <tr>
                <th>student_id</th>
                <th>course_id</th>
                <th>Grade</th>
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
                  <form action='admin/add_grade.php' method='post' >
                    <button type='submit' name='update_profile' ><i class='fa-solid fa-plus'></i>
                  
                   
                    
                  
                </td>
              </tr>";
      }
    } else {
      // Handle the case when there are no rows
    }
    ?>
        </tbody>
    </table>
















    <!--
    <table class="students">
  
  <thead>
    <tr>
    <th>student_id</th>
      <th>course_id</th>
      <th>Grade</th>
    </tr>
  </thead>
  <tbody>

  <?php
  /*
   if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>
                <td>" . $row['student_id'] . "</td>
                <td>" . $row['course_id'] . "</td>
                td>
                    <form action='inserting_grades.php' method='post'>
                      <input type='hidden' name='id' > 
                      <input type='text' placeholder='grade' name='grade' id='grade'>
                      <button type='submit'><i class='fa-solid fa-plus'></i></button>
                    </form>
                    <form action='deleting_grade.php' method='post'>
                      <input type='hidden' name='id'>
                      <button type='submit' class='delete'><i class='fa-solid fa-trash'></i></button>
                    </form>
                  </td>
              </tr>";
    }
} else {

}*/
?>    
  </tbody>
</table>-->

    <?php

    ?>
</body>

</html>