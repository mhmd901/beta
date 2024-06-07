<?php
include('../backend/connection.php');
include('../backend/functions.php');

$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case "login":
        login_user();
        exit;
        break;
}

function login_user() {
    global $con;
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password (for security)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $_SESSION['email'] = $email;
    $query1 = "SELECT * FROM `pr_info` WHERE `Email` = '$email' AND `Password` = '$hashedPassword'";
    $RES = mysqli_query($con, $query1);
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
    <title>Login</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>

<body>
    <form action="../backend/login-action.php" method="post">
        <h2>Login</h2>
        <div class="form-group email">
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" placeholder="Enter your email address">
        </div>
        <div class="form-group password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
        </div>
        <div class="form-group submit-btn">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>
