<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="b_style.css">
</head>
<body>
<div class="top-bar">
  <span id="topBarTitle">Blog | New Post</span>
</div>
<div class="writing-section">
  <form action="blog_action.php" method="POST">
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
<script src="myscript.js"></script>
</body>
</html>

<?php
include('connection.php');

function get_blogs() {
    global $con;
    session_start();
    $sql = "SELECT * FROM blogs ORDER BY id DESC";
    $res = mysqli_query($con, $sql);

    if ($res) {
        while ($temp_data = mysqli_fetch_assoc($res)) {
            $id[] = $temp_data['id'];
            $title[] = $temp_data['title'];
            $date[] = $temp_data['date'];
        }
        $_SESSION["id"] = $id;
        echo("<script>show_blogs(".json_encode($title).",".json_encode($date).",".json_encode($id).")</script>");
    } else {
        echo "Error retrieving blog data.";
    }
}

get_blogs();
?>
