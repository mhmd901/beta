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
<script src="myscript.js"></script>
</body>
</html>