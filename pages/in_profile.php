<?php
  include('../backend/connection.php');
include('../backend/functions.php');
$email = $_SESSION['email'];
$query = "SELECT * FROM `instructorinfo` WHERE `Email` = '$email'";
$res = mysqli_query($con, $query);
if (mysqli_num_rows($res) > 0) {
    $temp_data = mysqli_fetch_assoc($res);
    $id = $temp_data['in_id'];
    $fname = $temp_data['fname'];
    $lname = $temp_data['lname'];
    $city = $temp_data['city'];
    $dob = $temp_data['dob'];
    $gender = $temp_data['gender'];
   
 
} else {

}

?>
<!DOCTYPE html>

<head>
    <style>
    /* style2.css */

    /* Apply styles to the panel */
    .panel {
        /*background-color: #f9f9f9;*/
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
        margin-left: 30%;
        width: 50%;
    }

    /* Style the heading */
    .bio-graph-heading h1 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    /* Style the bio information */
    .bio-row {
        margin-bottom: 10px;
    }

    /* Add more styles as needed for specific elements */

    /* Example: Style the student's name */
    .bio-graph-info h1 {
        font-size: 20px;
        color: #555;
        margin-bottom: 5px;
    }

    /* Example: Style the ID */
    .bio-row span {
        font-weight: bold;
    }

    /* Example: Style the email */
    .bio-row p {
        margin: 0;
    }

    /* Add more styles based on your design preferences */

    /* Remember to link this CSS file in your HTML head section */


    .navigation {
        background-color: #1e90ff;
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
        color: white;
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
                <li><a href="in_info.php"><i class="fa-solid fa-user"></i> instructor</a></li>
                <li><a href="in_login.php"><i class="fa-thin fa-left-from-bracket"></i> back</a></li>

            </ul>
    </header>
    </nav>

    <div class="panel">
        <div class="bio-graph-heading">
            <h1>student profile</h1>
        </div>

        <div class="panel-body bio-graph-info">
            <h1><?php  ?></h1>
            <div class="row">
                <div class="bio-row">
                    <p><span>id </span>: <?php echo $id  ?></p>
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
                    <p><span>Birthday</span>: <?php echo $dob ?></p>
                </div>
                <div class="bio-row">
                    <p><span>Email </span>: <?php echo $email ?></p>
                </div>
                <div class="bio-row">
                    <p><span>gender </span>: <?php echo $gender ?></p>
                </div>
            </div>
        </div>
    </div>
    <div>

</body>