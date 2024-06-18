<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../scripts/myscript.js"></script>
    <link rel="stylesheet" href="../../style/style1.css">
</head>
<body>
<?php include('header.php'); ?>
<form action="../../backend/crs_edit_action.php" method="post">
        <label for="crs_name">course name</label>
        <input type="text"  name="crs_name" id="crs_name" placeholder="enter course name" >
        <label for="crs_cridt">course credit </label>
        <input type="text"  name="crs_crdt" id="crs_crdt" placeholder="enter course credits " >
        <div class="form-group submit-btn">
        <input type="submit" value="save">
      </div>
   <div id="crs-m">

   </div>

</form>
</body>
</html>
<?php
include('../../backend/connection.php');
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {


    case "d-crs":
           d_crs();
            exit;
        break;
    }

function show_crs(){
    global $con;
    $query1 = "SELECT * FROM `course`order by crs_id desc ";
    $result1 = mysqli_query($con , $query1);
    
    $id = array();
    while ($row = mysqli_fetch_assoc($result1)) {
           $id[] = $row['crs_id'];
           $crs_name[] = $row['crs_name'];
           $crs_crdt[] = $row['crs_crdt'];
    }
    echo("<script>show_crs(".json_encode($id).",".json_encode($crs_name).",".json_encode($crs_crdt).")</script>");

}
show_crs();
function d_crs(){
    include('../../backend/connection.php');
    $courseId = $_POST["id"];
    $sql = "DELETE FROM course WHERE `crs_id` = $courseId";
    mysqli_query($con, $sql);
};
?>
