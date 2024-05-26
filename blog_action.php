<?php
include('connection.php');
$blogTitle = $_POST["blogtitle"];
$blogDate = $_POST["blogdate"];
$blogPara = $_POST["blogpara"];
$sql = "INSERT INTO `blogs` ( `title`, `date`, `para`) VALUES ( '$blogTitle', '$blogDate', '$blogPara')";
mysqli_query($con, $sql);
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
    <h1>post added succesfuly  </h1> 
    <a href="sigin-up.php"><h2>back to the admin page</h2></a>

</div>
    
</body>
</html>
