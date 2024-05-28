<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>

<body>
    <form action="sigin-up.php?action=sign-up" method="post">
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
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
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
        <a href="admin/admin_edit.php">edit user</a><br>
        <a href="admin/crs_edit.php">add courses</a><br>
        <a href="admin/users.php">all users</a><br>
        <a href="admin/blog_admin.php">add blog</a><br>
    </div>

</body>

</html>
<?php
include('../backend/connection.php');
include('../backend/functions.php');
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {


    case "sign-up":
           sign_up();
            exit;
        break;
    }
    function sign_up(){
      global $con;
      $query1 = "SELECT id FROM studentinfo ORDER BY id DESC LIMIT 1";
$res1 = mysqli_fetch_assoc(mysqli_query($con, $query1));
$new_id = $res1['id'] + 1;
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $new_id . '@beta';
$password = $new_id . 'mm';
$date = $_POST['date'];
$Gender = $_POST['Gender'];
$query = "INSERT INTO `studentinfo` (`Fname`, `Lname`, `phone`, `Email`, `city`, `Password`, `Date`, `Gender`) VALUES ('$fname', '$lname', '$phone', '$email', '$city', '$password', '$date', '$Gender')";
mysqli_query($con, $query);
    }
?>