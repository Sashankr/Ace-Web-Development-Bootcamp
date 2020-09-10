<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACE DEV CAMP</title>
  <link rel="shortcut icon" type="image/ico" href="images/logo.ico" />
  <link rel="stylesheet" href="css/redirect.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<?php
session_start();
?>

<div class="container">
  <div class="row">
    <div id="contactMessage" class="col-md-6 mx-auto">
    <h3>Hi <?php echo $_SESSION["username"]?> your message has been recieved</h3>
<p>Please check your inbox for the provided email <b><?php echo $_SESSION["email"]?></b> or the phone number <b><?php echo $_SESSION["phone"]?></b> </p>
<p>We will get back to you as soon as possible</p>
<h3><a href="index.php">Click here <br>Back to Home</a></h3>
    </div>
  </div>
</div>
