<?php

// session_start();

$servername = "localhost";
$username = "root";
$password= "";
$dbname = "ace";

$msg ="";
$css_class = "";

$connection = new mysqli($servername,$username,$password,$dbname);



// $createTable = "CREATE TABLE Students(id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,FirstName VARCHAR(255) NOT NULL, LastName VARCHAR(255) NOT NULL, UserName VARCHAR(255) NOT NULL, Email VARCHAR(255) NOT NULL, Age INT(255) NOT NULL, Gender VARCHAR(255) NOT NULL, Course VARCHAR(255) NOT NULL, Profile_Image VARCHAR(255), Password VARCHAR(255) NOT NULL, Confirm_Password VARCHAR(255) NOT NULL)";

// $res = $connection->query($createTable);
// if($res)
// {
//   echo "table created";
// }
// else
// {
//   die($connection->error);
// }



if(isset($_POST["submit-user"]))
{

  $first_name = $_POST["fname"];
  $last_name = $_POST["lname"];
  $user_name = $_POST["uname"];
  $email_info = $_POST["email"];
  $age_info = $_POST["age"];
  $gender_info = $_POST["gender"];  
  $course_info = $_POST["course"];
  $pasword_info = $_POST["pword"];
  $confirm_password_info = $_POST["cf_pword"];

  // $insertData = "INSERT INTO Students (FirstName, LastName, UserName, Email, Age, Gender, Course, Password, Confirm_Password) VALUES ('$first_name', '$last_name', '$user_name', '$email_info', '$age_info', '$gender_info', '$course_info', '$pasword_info', '$confirm_password_info')";

  // $res = $connection->query($insertData);
  // if($res)
  // {
  //   echo "data inserted";
  // }
  // else
  // {
  //   die($connection->error);
  // }

  // echo "<pre>", print_r($_POST),"</pre>";
  // echo "<pre>", print_r($_FILES['profile_Pic']['name']),"</pre>";

  $profile_Image_Name = time() .'_'. $_FILES['profile_Pic']['name'];

  $target = 'images/' . $profile_Image_Name;

  if(move_uploaded_file($_FILES['profile_Pic']['tmp_name'],$target))
  {
    $uploadImage = "INSERT INTO students (FirstName, LastName, UserName, Email, Age, Gender, Course, Profile_Image,  Password, Confirm_Password) VALUES ('$first_name', '$last_name', '$user_name', '$email_info', '$age_info', '$gender_info', '$course_info','$profile_Image_Name', '$pasword_info', '$confirm_password_info')";
    $res = $connection->query($uploadImage);
    if($res)
    {
      header("location: login.php");    
    }
    $msg = "upload image success";
    $css_class = "alert-success";
  }
  else
  {
    $msg = "failed to upload image";
    $css_class = "alert-danger";
  }
}


if(isset($_POST["update-user"]))
{

  $update_firstname = $_POST["ufname"];
  $update_lastname = $_POST["ulname"];
  $update_username = $_POST["upuname"];
  $update_email = $_POST["uemail"];
  $update_age = $_POST["uage"];
  $update_gender = $_POST["ugender"];
  $update_course = $_POST["ucourse"];
  $update_pass = $_POST["upword"];
  $update_cf_pass = $_POST["ucf_pword"];

  // echo "<pre>". print_r( $new_profile_Image_Name)."</pre>";
  

  $new_profile_Image_Name = time() .'_'. $_FILES['uprofile_Pic']['name'];

  $target = 'images/' . $new_profile_Image_Name;

  if(move_uploaded_file($_FILES['uprofile_Pic']['tmp_name'],$target))
  {
    $updateDetails = "UPDATE students SET FirstName = '$update_firstname' , LastName = '$update_lastname', UserName = '$update_username' , Email = '$update_email', Age = '$update_age', Gender = '$update_gender' , Course = '$update_course', Profile_Image = '$new_profile_Image_Name',  Password = '$update_pass', Confirm_Password = $update_cf_pass";

    $updateQueryResult = $connection->query($updateDetails);
    
    if($updateQueryResult)
    {
      header("location: login.php");    
    }
    else
    {
      die($connection->error);
    }

  }
  else
  {
    echo "failed to upload image";
  }
}



?>