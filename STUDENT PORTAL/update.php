<?php
include "dbprocess.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGNUP</title>
  <link rel="shortcut icon" type="image/ico" href="images/logo.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/signup.css">
</head>
<body>


<div id="signUp_Form">
  <div class="container">
    
  <div class="row">
      <div class="col-md text-center">
      <img src="images/update.png" alt="signup">
      <h1>UPDATE DETAILS</h1>
      <p>Enter details that needs to be updated</p>
      </div>
    </div>

  <div class="row">
    <div class="col-md-6 mx-auto">
    <form id="signup" action="" method="POST" enctype="multipart/form-data" onsubmit = "return validation()">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="ufname" placeholder="Enter first name here" autofocus  class="form-control">
              </div>
              <p class="error-message"></p>
              
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="ulname" placeholder="Enter last name here" class="form-control">
              </div>
              <p class="error-message"></p>
              <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" id="uname" name="upuname" placeholder="Enter your username here" 
                  class="form-control">
                  <p class="error-message"></p>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="uemail" name="uemail" placeholder="Enter your email here" 
                  class="form-control">
              </div>
              <p class="error-message"></p>

              <div class="form-group">
                <label for="age">Age</label>
                <input type="text" id="age" name="uage" placeholder="Enter your age here" 
                  class="form-control">
              </div>
              <p class="error-message"></p>

              <div class="form-group">
                <label for="gender">Gender</label>
                <input class="genderRadio" type="radio" name="ugender" id="male" value ="Male" 
                  class="form-control" required><span>Male</span>
                  <input class="genderRadio" type="radio" name="ugender" id="female" value = "Female" 
                  class="form-control" required><span>Female</span>
              </div>

              <div class="form-group">
                <label for="course">Course</label>
                <input type="text" id="course" name="ucourse" placeholder="Enter your course name here" 
                  class="form-control">
              </div>
              <p class="error-message"></p>

              <div class="form-group">
                <label for="course">Upload Profile Picture</label>
                <input id="profileP" type="file" name="uprofile_Pic" class="form-control">
              </div>

              <div class="form-group">
                <label for="pword">Enter Password</label>
                <input type="password" id="pass" name="upword" id="password" class="form-control">
              </div>
              <p class="error-message"></p>

              <div class="form-group">
                <label for="cf_pword">Confirm Password</label>
                <input type="password" id="cf_pass" name="ucf_pword" id="confirm_password" class="form-control">
              </div>
              <p class="error-message"></p>
              <button type="submit" class="btn btn-light text-dark" name="update-user">UPDATE</button>
            </form>
    </div>
  </div>  
  </div>
</div>

<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" role="button"><i class="fa fa-arrow-circle-up"></i></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript" src="js/signup.js"></script>
</body>
</html>
