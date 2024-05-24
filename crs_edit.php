<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<form action="crs_edit_action.php" method="post">
        <label for="crs_name">course name</label>
        <input type="text"  name="crs_name" id="crs_name" placeholder="enter course name" required>
        <label for="crs_cridt">course credit </label>
        <input type="text"  name="crs_crdt" id="crs_crdt" placeholder="enter course credits " required>
        <div class="form-group submit-btn">
        <input type="submit" value="Submit">
      </div>
</form>
</body>
</html>