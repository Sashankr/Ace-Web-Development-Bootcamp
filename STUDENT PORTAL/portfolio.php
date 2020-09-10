<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACE DEV CAMP</title>
  <link rel="shortcut icon" type="image/ico" href="images/logo.ico" />
  <link rel="stylesheet" href="css/portfolio.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/signup.js"></script>

</head>

<body>
  <?php
  if (!isset($_SESSION)) {
    session_start();
  }
  $username_login = $_SESSION["username"];
  $userID =  $_SESSION["id"];
  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md text-right">
        <div id="options">
          <p class="student_para_heading">Username: <?php echo $username_login?> </p>
          <ul>
            <li><a class="option_links" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            <li><a class="text-warning" href="update.php"><i class="fa fa-pencil"></i> Update Profile</a></li>
            <li><a class="text-danger" href="delete.php"><i class="fa fa-trash-o"></i> Delete Profile</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>



  <?php
  include "dbprocess.php";
  ?>

  <!-- <h2>Database details captured</h2> -->



  <?php if (!empty($msg)) : ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="alert <?php echo $css_class; ?> ">
          <p><?php echo $msg ?></p>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php

  $getData = "SELECT * FROM students WHERE id = '$userID'";
  $getinfo =  $connection->query($getData);
  if ($getinfo->num_rows > 0) :
    while ($rows = $getinfo->fetch_assoc()) :

  ?>

  <div class="container">
    <div class="row">
      <div class="col-md mx-auto">
        <div class="row">
          <div class="col-md text-center mb-4">
            <h1>Student Details</h1>
          </div>
        </div>


        <div class="card">
          <p>
            <img src="images/<?php echo $rows["Profile_Image"] ?>" alt="profile image">
          </p>

          <div class="row">
            <div class="col-md">
              <p class="student_para_heading">First Name</p>
              <p class="student_para_heading">Last Name</p>
              <p class="student_para_heading">username</p>
              <p class="student_para_heading">Email</p>
              <p class="student_para_heading">Age</p>
              <p class="student_para_heading">Gender</p>
              <p class="student_para_heading">Course</p>
            </div>
            <div class="col-md">
              <p class="student_para"><?php echo $rows["FirstName"] ?></p>
              <p class="student_para"><?php echo $rows["LastName"] ?></p>
              <p class="student_para"><?php echo $rows["UserName"] ?></p>
              <p class="student_para"><?php echo $rows["Email"] ?></p>
              <p class="student_para"><?php echo $rows["Age"] ?></p>
              <p class="student_para"><?php echo $rows["Gender"] ?></p>
              <p class="student_para"><?php echo $rows["Course"] ?></p>
            </div>
          </div>



        </div>





        <?php endwhile;
    endif; ?>


        <?php
        include "footer.php";
        ?>