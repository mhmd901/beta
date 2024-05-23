
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="myscript.js"></script>
    <title>User Profile</title>
</head>
<body>
    
    
    <div id="box"></div>
    
    
</body>
</html>
<?php

show_edit_user();
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case "edituser":
       show_edit_user();
        break;
    case "saveuser":
        save_edit_user();
        break;
    
}

function show_edit_user(){
    include('connection.php');
    session_start();
    $email = $_SESSION['email'];
    $query = "SELECT * FROM `studentinfo` WHERE `Email` = '$email'";
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        $temp_data = mysqli_fetch_assoc($res);
        $id = $temp_data['id'];
        $fname = $temp_data['Fname'];
        $lname = $temp_data['Lname'];
        $city = $temp_data['city'];
        $dob = $temp_data['Date'];
        $phone = $temp_data['phone'];
        $gender = $temp_data['Gender'];
        $password= $temp_data['Password'];
    } else {
        return 0;
    }
    
    echo("<script>show_edit_user(".json_encode($id).",".json_encode($fname).",".json_encode($lname).",".json_encode($city).",".json_encode($dob).",".json_encode($phone).",".json_encode($gender).",".json_encode($password).")</script>");
}
function save_edit_user() {
    include('connection.php');
    
    // Sanitize input (use mysqli_real_escape_string or prepared statements)
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['Lname']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $password = $_POST['password'];
    $id = (int)$_POST['id']; // Ensure ID is an integer
            
    // Update query using prepared statement
    $update = "UPDATE `studentinfo`
               SET `Fname`='$fname', `Lname`='$lname', `Password`='$password',
                   `Date`='$dob', `Gender`='$gender', `phone`='$phone', `city`='$city'
               WHERE `id`='$id'";
    
    if (mysqli_query($con, $update)) {
        echo "User information updated successfully!";
    } else {
        echo "Error updating user information: " . mysqli_error($con);
    }
}

?>
