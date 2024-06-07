<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../style/style1.css">
</head>

<body>
    <form action="../backend/sigin-up-action1.php" method="post">

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
                <option value="programer">programer</option>
            </select>
        </div>
        </div>
        <div class="form-group role">
            <label for="role">role</label>
            <select id="role" name="role">
                <option value="" selected disabled>Select the role</option>
                <option value="student">student</option>
                <option value="instractor">instractor</option>
                <option value="admin">admin</option>
            </select>
        </div>
        <div class="form-group submit-btn">
            <input type="submit" value="Submit">
        </div>

    </form>
    <div class="edit">
        <a href="admin/admin_edit.php">edit user</a><br>
        <a href="admin/crs_edit.php">courses</a><br>
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
      $query1 = "SELECT id FROM pr_info ORDER BY id DESC LIMIT 1";
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
$role = $_POST['role'];
$query = "INSERT INTO `studentinfo` (`Fname`, `Lname`, `phone`, `Email`, `city`, `Password`, `Date`, `Gender`,`role`) VALUES ('$fname', '$lname', '$phone', '$email', '$city', '$password', '$date', '$Gender','$role')";
mysqli_query($con, $query);
echo "add succ";
    }
?>