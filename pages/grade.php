<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../scripts/myscript.js"></script>  
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
</head>
<body>
    <div id="in_grade"></div>
    
</body>
</html>
<?php

function edit_grade(){
    include('../backend/connection.php');
session_start();

$sec = $_POST['sec_id'];
$crs = $_POST['course'];

$sql = "SELECT * FROM `studentcrs` WHERE `course_id` = $crs AND `sec_id` = $sec";
$res = mysqli_query($con, $sql);
    
    $id = array();
    if (mysqli_num_rows($res) > 0) {
        $temp_data = mysqli_fetch_assoc($res);
        $std_id[]= $temp_data['student_id'];
        $crs1[]= $temp_data['course_id'];

        echo("<script>edit_grade(".json_encode($std_id).",".json_encode($crs1).")</script>");

    } else {
        echo "no data";
    
    }
    

}
edit_grade();
?>
