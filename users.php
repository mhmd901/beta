<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="myscript.js"></script>
    <title>Document</title>
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
include('connection.php');
show_users();

  function show_users(){
    global $con;
    $query1 = "SELECT id FROM `studentinfo` ";
    $result1 = mysqli_query($con , $query1);
    
    $id = array();
    while ($row = mysqli_fetch_assoc($result1)) {
           $id[] = $row['id'];
    }
    echo("<script>show_users(".json_encode($id).")</script>");

}



?>

