<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog Post</title>
    <script src="../scripts/myscript.js"></script>
    <link rel="stylesheet" href="../style/b_style_post.css">
</head>

<body>
    <div class="header">
        <h1> Blog</h1>
    </div>
    <div id="post-m">

    </div>

</body>

</html>
<?php
include('../backend/connection.php'); 
include('../backend/functions.php');
show_blogs();
function show_blogs() {
    global $con;
    
    $sql = "SELECT * FROM blogs ORDER BY id DESC";
    $res = mysqli_query($con, $sql);

    if ($res) {
        $id=array();
        $title = array();
        $date=array();

        while ($temp_data = mysqli_fetch_assoc($res)) {
            $id[] = $temp_data['id'];
            $title[] = $temp_data['title'];
            $date[] = $temp_data['date'];
        }
        $_SESSION["id"]=$id;
        echo("<script>show_blogs(".json_encode($title).",".json_encode($date).",".json_encode($id).")</script>");
    } else {
        echo "Error executing query:";
    }
}


?>