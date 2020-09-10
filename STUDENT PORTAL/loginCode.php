<?php
require_once("dbprocess.php");

$login_username = "";
$login_password = "";


if(isset($_POST["login_submit"]))
{
  $login_username = $_POST["login_uname"];
  $login_password = $_POST["login_pword"];

  $login = "SELECT * FROM students WHERE UserName = '$login_username' AND Password = '$login_password' ";
  $login_res = $connection->query($login);

  if($login_res->num_rows>0)
  {
    while($loginrows = $login_res->fetch_assoc())
    {
      $login_id = $loginrows["id"];
      if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
      $_SESSION["id"] = $login_id;
      $_SESSION["username"] = $login_username;
    }
    header("location: portfolio.php");
  }
  else
  {
    echo "wrong credentials";
    die($connection->error);
    
  }

}
?>