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
        margin-left: 300px;
        font-size: 0.9 em;
        min-width: 850px;
        min-height: 100px;
        border-radius: 15px;
        overflow: hidden;
        margin-top: 175px;
    }

    .instructor thead tr {
        background-color: rgb(255, 236, 158);
        color: #fff;
        text-align: left;
        font-weight: bold;

    }

    .instructor th,
    .instructor td {
        /* padding: 12px 15px;*/
        padding: 15px 20px;

    }

    .instructor tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .instructor tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .instructor tbody tr:last-of-type {
        border-bottom: 2px solid rgb(255, 236, 158);
    }

    a {
        text-decoration: none;
        display: inline-block;
        justify-content: center;
        gap: 10px;
        background-color: rgb(255, 236, 158);
        color: black;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: 1a8cff;
    }

    th {
        color: black;
    }
    </style>
</head>

<body>
    <div id="sec"></div>

</body>

</html>
<?php
function show_sec(){
    include('../backend/connection.php');
    session_start();
    $id = $_SESSION['id'];
   
    $query = "SELECT * FROM `section` WHERE `in_id` = $id " ;
    
    $id =[];
    $clas =[];
    $ins =[];
    $crs =[];
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)){
$id[] =$row['sec_id'];
    $clas[] =$row['class'];
    $ins[] =$row['in_id'];
    $crs[] =$row['crs_id'];
        }



      
      
        echo("<script>show_sec(".json_encode($id).",".json_encode($clas).",".json_encode($ins).",".json_encode($crs).")</script>");
    } else {
        echo "no data";
    
    }
    


}
show_sec();
?>