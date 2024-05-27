<?php 
include('connection.php');
$id=$_POST['id'];
$sql = "SELECT * FROM `blogs` WHERE `id` = '$id'";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
    $temp_data = mysqli_fetch_assoc($res);
    $blogTitle = $temp_data['title'];
    $blogDate = $temp_data['date'];
    $blogPara = $temp_data['para'];
} else {
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .blog-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .blog-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .blog-date {
            font-size: 14px;
            color: gray;
            margin-bottom: 10px;
        }
        
        .blog-para {
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="blog-container">
        <h2 class="blog-title"><?php echo $blogTitle; ?></h2>
        <p class="blog-date"><?php echo $blogDate; ?></p>
        <p class="blog-para"><?php echo $blogPara; ?></p>
    </div>
</body>
</html>
