<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="b_style.css">
</head>
<body>
<body>
<div class="top-bar">
  <span id="topBarTitle">Blog | New Post</span>
</div>
<div class="writing-section">
  <form action="blog_action.php" method="POST" >
    <input id="blogTitle" name="blogtitle" type="text" placeholder="Blog Title...">
    <br>
    <span id="dateLabel">Date: </span>
    <input id="blogDate" name="blogdate" readonly></input>
    <br>
    <input type="file" name="uploadimage">
    <br>
    <textarea id="blogPara" name="blogpara" cols="75" rows="10" type="text" placeholder="Blog Paragraph..." ></textarea>
    <br>
    <button id="saveBtn" type="submit">Save Post</button>
</form>
  <br>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog Post</title>
    <script src="myscript.js"></script>
    <link rel="stylesheet" href="b_style_post.css">
</head>
<body>
    <div  id="blog-delete-m">
        <h1>hel</h1>
    </div>
    <script src="myscript.js"></script>
    
</body>
</html>
<?php
include('connection.php'); 

function delete_blogs() {
    global $con;
    $sql = "SELECT * FROM blogs ORDER BY id DESC";
    $res = mysqli_query($con, $sql);

    if ($res) {
        while ($temp_data = mysqli_fetch_assoc($res)) {
            $id[] = $temp_data['id'];
            $title[] = $temp_data['title'];
            $date[] = $temp_data['date'];
        }
        echo("<script>show_blogs(".json_encode($title).",".json_encode($date).",".json_encode($id).")</script>");
    } else {
        echo "Error executing query:";
    }
}

delete_blogs();
?>


<script src="myscript.js"></script>

</body>
</html>