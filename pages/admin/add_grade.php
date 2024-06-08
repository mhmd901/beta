<!DOCTYPE html>
<!--
<html>

<head>
    <style>
    * {
        box-sizing: border-box;
        /* font-family: Arial, sans-serif;*/
    }

    body {
        background-color: #1e90ff;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .reg {
        margin-top: 12%;
        margin-left: 37%;
        width: 400px;
        background-color: #fff;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
        text-align: center;
        margin-bottom: 10px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }



    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 15px;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .button {
        background-color: #1e90ff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        width: 100%;
    }

    .button:hover {
        background-color: #1e90ff;
    }
    </style>
</head>

<body>
    <div class="reg">
        <form action="add_grade.php?action=addgrade" method="post">
            <h3>new grade:</h3>

            <label for="age">grade:</label>
            <input type="text" placeholder="grade" name="grade" id="grade">
            <button class="button">save</button><br><br>
        </form>
    </div>
</body>

</html>-->
<?php
include('../../backend/connection.php');
include('../../backend/functions.php');
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {


    case "addgrade":
            addgrade();
            exit;
        break;
    }
    function addgrade(){
        global $con;
        $servername = "localhost"; 
 $username = "root"; 
 $password = ""; 
 $database = "beta"; 
 $con = mysqli_connect($servername, $username, $password, $database);

$grades=$_POST['grade'];

 $query =  " UPDATE studentcrs SET grades = '$grades' where crs_id = (select course_id from pr_info where student_id = id)";
mysqli_query($con, $query);
 
    }
header("location:../section.php");
?>