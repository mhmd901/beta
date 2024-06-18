<?php
  include('../backend/connection.php');
  session_start();
$email = $_SESSION['email'];
$query1 = "SELECT * FROM pr_info WHERE Email = '$email' ";
$res = mysqli_query($con, $query1);

if (mysqli_num_rows($res) > 0) {
    $temp_data = mysqli_fetch_assoc($res);
    $_SESSION['id'] = $temp_data['id'];
    $fname = $temp_data['Fname'];
    $lname = $temp_data['Lname'];
    $city = $temp_data['city'];
    $dob = $temp_data['Date'];
    $gender = $temp_data['Gender'];
   
 
} else {

}

?>
<!DOCTYPE html>

<head>
    <style>

    .panel {
        /*background-color: #f9f9f9;*/
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
        margin-left: 30%;
        width: 50%;
    }

 
    .bio-graph-heading h1 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

  
    .bio-row {
        margin-bottom: 10px;
    }

 
    .bio-graph-info h1 {
        font-size: 20px;
        color: #555;
        margin-bottom: 5px;
    }

    
    .bio-row span {
        font-weight: bold;
    }

    .bio-row p {
        margin: 0;
    }

 
    .navigation {
        background-color:rgb(256, 236, 158) ;
        height: 100%;
        width: 200px;
        position: fixed;
    }

    .navigation ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .navigation li {
        margin: 0;
        padding: 0;
    }

    .navigation a {
        font-family: 'Poppins', sans-serif;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navigation a:hover {
        background-color: #555;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> your profile:</title>
</head>

<body>
    <header>
        <nav class="navigation">
            <ul>
                <li><a href="in_sec.php"><i class="fa-solid fa-user"></i> instructor</a></li>
                <li><a href="in_login.php"><i class="fa-thin fa-left-from-bracket"></i> back</a></li>

            </ul></nav>
    </header>
    

    <div class="panel">
        <div class="bio-graph-heading">
            <h1>instructor profile</h1>
        </div>

        <div class="panel-body bio-graph-info">
            <h1><?php  ?></h1>
            <div class="row">
                <div class="bio-row">
                    <p><span>id </span>: <?php echo       $_SESSION['id']  ?></p>
                </div>
                <div class="bio-row">
                    <p><span>First Name </span>: <?php echo $fname ?></p>
                </div>
                <div class="bio-row">
                    <p><span>Last Name </span>: <?php echo $lname ?></p>
                </div>
                <div class="bio-row">
                    <p><span>Country </span> <?php  echo $city ?></p>
                </div>
                <div class="bio-row">
                    <p><span>date</span>: <?php echo $dob ?></p>
                </div>
               
                <div class="bio-row">
                    <p><span>gender </span>: <?php echo $gender ?></p>
                </div>
            </div>
        </div>
    </div>
    <div>

</body>