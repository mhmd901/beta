<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../scripts/myscript.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../../style/user.css">
</head>

<body>

    <div class="mother">
        <div class="child">
            <div class="outputbox" id="outputbox">

            </div>
        </div>
    </div>

</body>

</html>
<?php
include('../../backend/connection.php');
include('../../backend/functions.php');
show_users();

  function show_users(){
    global $con;
    $query1 = "SELECT * FROM `studentinfo` ";
    $result1 = mysqli_query($con , $query1);
    
    $id = array();
    while ($row = mysqli_fetch_assoc($result1)) {
           $id[] = $row['id'];
           $fname[] = $row['Fname'];
           $lname[] = $row['Lname'];
           $dob[] = $row['Date'];
           $gender[] = $row['Gender'];
           $phone[] = $row['phone'];
           $city[] = $row['city'];
    }
    echo("<script>show_users(".json_encode($id).",".json_encode($fname).",".json_encode($lname).",".json_encode($dob).",".json_encode($gender).",".json_encode($phone).",".json_encode($city).")</script>");

}



?>