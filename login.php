<?php

$nameError = "";

$passwordError = "";

if(isset($_POST['submit'])) {

$username = $_POST['username'];

$password = $_POST['password'];}

if (empty($username)) {

$nameError = "Name is Required";

} else {}
if (empty($password)) {

$nameError1 = "password is Required";

} else {}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_in</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <form action="login-action.php" method="post">
      <h2>login</h2>
      <div class="form-group email">
        <label for="email">Email Address</label>
        <input type="text"  name="email" id="email" placeholder="Enter your email address">
        <span style="color: red;"><?php echo $nameError1?></span>
      </div>
      <div class="form-group password">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <span style="color: red;"><?php echo $nameError1?></span>
        <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
      </div>
      <div class="form-group submit-btn">
        <input type="submit" value="Submit">
      </div>
    </form>
  </body>
</html>