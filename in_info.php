<?php
    include('connection.php');
    session_start();
    /*$id = $_SESSION['instructor_id'];*/
    $query = "SELECT s.*, i.*
    FROM section s
    JOIN instructorinfo i ON s.instructor_id = i.in_id  ";
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        $temp_data = mysqli_fetch_assoc($res);
        $id = $temp_data['sec_id'];
        $class = $temp_data['class_no'];
        $in = $temp_data['instructor_id'];
        $crs = $temp_data['crs_id'];
      
    } else {
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
        body{
            background-color:  white;
        }
        table{
           border-collapse: collapse;
            margin-left: 300px ;
            font-size: 0.9 em;
            min-width: 850px;
            min-height: 100px;
            border-radius: 15px;
            overflow: hidden;
            margin-top: 175px;
        }
        .instructor thead tr{
            background-color:#1e90ff;
            color: #fff;
            text-align: left;
            font-weight: bold;
            
        }
        .instructor th,
        .instructor td{
           /* padding: 12px 15px;*/
           padding: 15px 20px;

        }
        .instructor tbody tr{
            border-bottom: 1px solid #dddddd;
        }
        .instructor tbody tr:nth-of-type(even)
        {
            background-color: #f3f3f3;
        }
        .instructor tbody tr:last-of-type
        {
            border-bottom: 2px solid #1e90ff;
        }
        
        a{
          text-decoration: none;
          display: inline-block;
          justify-content: center;
          gap: 10px;
          background-color: #1e90ff;
                color: white;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                border-radius: 4px;
                transition: background-color 0.3s ease;
        }
        a:hover {
                background-color:1a8cff;
           }    
        </style>
    </head>
    <body>
    <table class="instructor">
  
  <thead>
    <tr>
      <th> id</th>
      <th>class</th>
      <th>in_id</th>
      <th>crs</th>
      <th>information</th>
    </tr>
  </thead>
  <tbody>
    <?php
  if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>
                <td>" . $row['sec_id'] . "</td>
                <td>" . $row['class_no'] . "</td>
                <td>" . $row['instructor_id'] . "</td>
                <td>" . $row['crs_id'] . "</td>
                <td><a href='section.php'>class</a></td>
              </tr>";
    }
} else {
    
}
?>
  </tbody>
</table>

    <?php

    ?>
    </body>

</html>