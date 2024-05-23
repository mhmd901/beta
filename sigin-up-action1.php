<?php
include('connection.php');
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:rgb(255, 236, 158);
        }
    .container {
        min-height: 100vh; 
        display: flex;
        justify-content: center;
        align-items: center;

    }
    h1{
        border: 2px solid black;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
        padding: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>student of id <?php echo $new_id ?> added succesfuly  </h1> 
</div>
    
</body>
</html>