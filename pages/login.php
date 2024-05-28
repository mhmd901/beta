<?php
include('../backend/connection.php');
include('../backend/functions.php');
$nameError = "";
$passwordError = "";

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        $nameError = "Name is Required";
    }

    if (empty($password)) {
        $passwordError = "Password is Required";
    }
}

$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {


    case "login":
            login_user();
            exit;
        break;
    }

function login_user(){
  global $con;
  $email=$_POST['email'];
$password=$_POST['password']; 
$_SESSION['email'] = $email;
$query1 = "SELECT * FROM `studentinfo` WHERE `Email` = '$email' AND `Password` = '$password'";   
$RES = mysqli_query($con,$query1);
$rows = mysqli_num_rows($RES);

if ($rows > 0) {
  if ($email == '1@beta' && $password == '1mm') {
      header("location: sigin-up.php");
  } else {
      header("location: profile1.php");
  }
} else {
  header("location: login.php");
}
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_in</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>

<body>
    <form action="login.php?action=login" method="post">
        <h2>login</h2>
        <div class="form-group email">
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" placeholder="Enter your email address">
            <span style="color: red;"><?php echo $nameError?></span>
        </div>
        <div class="form-group password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <span style="color: red;"><?php echo $passwordError?></span>
            <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
        </div>
        <div class="form-group submit-btn">
            <input type="submit" value="Submit">
        </div>
    </form>

</body>

</html>