<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/style1.css">
</head>

<body>
    <form action="crs_edit.php?action=edit_crs" method="post">
        <label for="crs_name">course name</label>
        <input type="text" name="crs_name" id="crs_name" placeholder="enter course name" required>
        <label for="crs_cridt">course credit </label>
        <input type="text" name="crs_crdt" id="crs_crdt" placeholder="enter course credits " required>
        <div class="form-group submit-btn">
            <input type="submit" value="save">
        </div>
    </form>
</body>

</html>
<?php
include('../../backend/connection.php');
include('../../backend/functions.php');
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {


    case "edit_crs":
            edit_crs();
            exit;
        break;
    }
function  edit_crs(){
  global $con;
  $crs_name = $_POST['crs_name'];
$crs_crdit = $_POST['crs_crdt'];
$query = "INSERT INTO `course`(`crs_name`, `crs_crdt`) VALUES ('$crs_name','$crs_crdit')";   
if (mysqli_query($con, $query)) {
    echo "course information updated successfully!";
} else {
    echo "Error updating course information: ";
}
}

?>