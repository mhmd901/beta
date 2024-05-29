<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/b_style.css">
</head>

<body>
    <div class="top-bar">
        <span id="topBarTitle">Blog | New Post</span>
    </div>
    <div class="writing-section">
        <form action="blog_admin.php?action=add_blog" method="POST">
            <input id="blogTitle" name="blogtitle" type="text" placeholder="Blog Title...">
            <br>
            <span id="dateLabel">Date: </span>
            <input id="blogDate" name="blogdate" readonly></input>
            <br>
            <input type="file" name="uploadimage">
            <br>
            <textarea id="blogPara" name="blogpara" cols="75" rows="10" placeholder="Blog Paragraph..."></textarea>
            <br>
            <button id="saveBtn" type="submit">Save Post</button>
        </form>
        <br>
    </div>
    <div id="blog-m">
    </div>
    <script src="../../scripts/myscript.js"></script>
</body>

</html>

<?php
include('../../backend/connection.php');
include('../../backend/functions.php');
get_blogs();
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {


    case "add_blog":
            add_blog();
            exit;
        break;
    }
function  add_blog(){
  global $con;
  $blogTitle = $_POST["blogtitle"];
$blogDate = $_POST["blogdate"];
$blogPara = $_POST["blogpara"];
$sql = "INSERT INTO `blogs` ( `title`, `date`, `para`) VALUES ( '$blogTitle', '$blogDate', '$blogPara')";
mysqli_query($con, $sql);
}

function get_blogs() {
    global $con;
    
    $sql = "SELECT * FROM blogs ORDER BY id DESC";
    $res = mysqli_query($con, $sql);

    if ($res) {
        while ($temp_data = mysqli_fetch_assoc($res)) {
            $id[] = $temp_data['id'];
            $title[] = $temp_data['title'];
            $date[] = $temp_data['date'];
        }
        $_SESSION["id"] = $id;
        echo("<script>get_blogs(".json_encode($title).",".json_encode($date).",".json_encode($id).")</script>");
    } else {
        echo "Error retrieving blog data.";
    }
}


?>