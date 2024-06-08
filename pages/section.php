<?php

   include('../backend/connection.php');
include('../backend/functions.php');

   $sec=$_SESSION['sec_id'];
   $crs=$_SESSION['course'];
   


$query = "SELECT * from studentcrs where sec_id=$sec and course_id =$crs";

   $res = mysqli_query($con, $query);
   if (mysqli_num_rows($res) > 0) {
       $temp_data = mysqli_fetch_assoc($res);
       $id = $temp_data['student_id'];
       
      
       
       
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
        margin-left: 350px;
        font-size: 0.9 em;
        width: 50%;
        min-height: 100px;
        border-radius: 15px;
        overflow: hidden;
        margin-top: 150px;
    }

    .students thead tr {
        background-color :rgb(255, 236, 158);
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
    th{
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
                <th>student_id</th>
                
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>
                <td>" . $row['student_id'] . "</td>
               
                <td>
                  <form action='admin/add_grade.php' method='post' >
                  <input type='text' class='input1'>
                    <button type='submit' name='update_profile' ><i class='fa-solid fa-plus'></i>
                </td>
              </tr>";
      }
    } else {
        echo "<tr>
        <td> there is no data </td>
           </tr>";
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