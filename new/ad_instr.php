<!DOCTYPE html>
<html>
    <head>
       <Style>
        body {
  font-family: Arial, sans-serif;
  background-color: rgb(255, 236, 158);;
  
}

.container {
  max-width: 500px;
  margin: 40px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  margin-top: 0;
  font-weight: bold;
  color: #333;
}

label {
  display: block;
  margin-bottom: 10px;
}

select {
  width: 100%;
  height: 40px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="text"] {
  width: 95%;
  height: 15px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.crs_id,.class_no {
  margin-bottom: 20px;
}

.add-new-section {
  margin-top: 20px;
}

.add-new-section input[type="text"] {
  width: 100%;
  height: 30px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.add-new-section input[type="submit"] {
  background-color: rgb(255, 236, 158);
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.add-new-section input[type="submit"]:hover {
  background-color: rgb(255, 236, 158);
}

.sub1{
    margin-top: 3%;
 width:100%;
 
}
input[type="submit"].sub1 {
  background-color: rgb(255, 236, 158);
}
h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}
       </style>
    </head>
    <body>
        <form action="conn_add_ins.php" method="post">
        <div class="container">
        <h1>Create  a Section</h1>
            <label>instructor_id: </label>
            <select class="inst_id" name="in">
         
                <?php 

                      include 'connection.php';
                      $query ="SELECT in_id FROM section";
                      $res = mysqli_query($con, $query);
                      if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<option value='".$row['in_id']."'>".$row['in_id']."</option>";
                        }
                    } else {
                         
                    }
 
                ?>
            </select><br><br>
            <label>course_id: </label>
            <select name="crs">
                <?php

                 include 'connection.php';


            $query1 = "SELECT crs_id FROM course";
            $res1 = mysqli_query($con, $query1);

          if (mysqli_num_rows($res1) > 0) {
 
         while($row = mysqli_fetch_assoc($res1)) {
          echo "<option value='".$row['crs_id']."'>".$row['crs_id']."</option>";
         }
  
         } else {
         
            }

                ?>
            </select><br><br>
            <label>class_no:</label>
                <select class="class_no" name="class">
                    <?php
                    include 'connection.php';

                $query2 = "SELECT class FROM section";
                $res2 = mysqli_query($con, $query2);
                while($row = mysqli_fetch_assoc($res2)) {
                    echo "<option value='".$row['class']."'>".$row['class']."</option>";
                }
                ?>
            
                </select>
       <label>add new section:</label>
             
             <input type="text" placeholder="new section" name="n_sec"><br><br>
      <label>choose day: </label>

      <select name="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            </select><br><br>
         <label>choose time:</label>
         <select name="time">
            <option >8:00 to 10:30</option>
            <option >11:00 to 13:30</option>
            <option >14:00 to 16:30</option>
           
            </select>

           <input type="submit" value="Submit" class="sub1">
 


        </div>
        </form>
    </body>
</html>