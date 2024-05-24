<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style1.css"> 
  </head>
  <body>
    <form action="sigin-up-action1.php" method="post">
      <h2>student info</h2>
      <div class="form-group fullname">
        <label for="fullname">First Name</label>
        <input type="text" name="Fname" id="fullname" placeholder="Enter your first name" required>
      </div>
      <div class="form-group fullname">
        <label for="fullname">Last Name</label>
        <input type="text" name="Lname" id="fullname" placeholder="Enter your last name" required>
      </div>
      <div class="form-group phone">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" >
      </div>
      <div class="form-group date">
        <label for="date">Birth Date</label>
        <input type="date" id="date" name="date" placeholder="Select your date">
      </div>
      <div class="form-group city">
        <label for="city">city</label>
        <input type="text" id="city" name="city" placeholder="enter your city">
      </div>
      <div class="form-group gender">
        <label for="gender">Gender</label>
        <select id="gender" name="Gender">
          <option value="" selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group submit-btn">
        <input type="submit" value="Submit">
      </div>
 
    </form> 
    <div class="edit">
    <a href="admin_edit.php">edit user</a><br>
    <a href="crs_edit.php">crs edit</a><br>
    <a href="users.php">all users</a><br>
    </div>

  </body>
</html>