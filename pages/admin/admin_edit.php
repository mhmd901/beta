<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_in</title>
    <link rel="stylesheet" href="../../style/style1.css">
</head>

<body>
    <form action="admin_edit.php?action=edit" method="post">
        <h2>edit user</h2>
        <div class="form-group id">
            <label for="id">id</label>
            <input type="text" name="id" id="id" placeholder="Enter the student id">
        </div>
        <div class="form-group submit-btn">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>
<?php
include('../../backend/connection.php');
include('../../backend/functions.php');
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {


    case "edit":
            edit();
            exit;
        break;
    }

function edit() {
  global $con;
  $id=$_POST['id'];
$_SESSION['id'] = $id; 
$query1 = "SELECT * FROM `studentinfo` WHERE `id` = '$id' ";   
$RES = mysqli_query($con,$query1);
$rows = mysqli_num_rows($RES);

if ($rows > 0) {
        header("location: admin_edit_profile.php");
    }
 else {
    header("location: .admin_edit.php");
  }
}
?>