<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_in</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <form action="admin_edit_action.php" method="post">
      <h2>login</h2>
      <div class="form-group email">
        <label for="email">Email Address</label>
        <input type="text"  name="email" id="email" placeholder="Enter your email address">
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