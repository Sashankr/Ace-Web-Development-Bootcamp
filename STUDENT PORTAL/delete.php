<?php
include "header.php";
require_once "loginCode.php";
require_once "dbprocess.php";
?>

<?php
  if (!isset($_SESSION)) {
    session_start();
  }
  $username_login = $_SESSION["username"];
  $userID =  $_SESSION["id"];
  ?>

  <?php
    if(isset($_POST["delete-user"]))
    {
      $delete = "DELETE FROM Students WHERE id = $userID ";
      $res = $connection->query($delete);
      if($res)
      {
        echo "success";
        header("location: redirect.php");
      }
      else
      {
        die($connection->error);
      }
    }
  ?>

<link rel="stylesheet" href="css/login.css">

<div id="login_Form">
  <div class="container">

    <div class="row">
      <div class="col-md text-center">
        <img src="images/delete.png" alt="delete">
        <h1>DELETE PROFILE</h1>
        <p>If you are sure you want to delete the profile click on delete</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mx-auto">
      <form action="" method="post">
              <button type="submit" class="btn btn-light text-dark d-flex mx-auto" name="delete-user">DELETE</button>
      </form>        
      </div>
    </div>
  </div>
</div>
</div>

<?php
include "scrollTop.php"
?>


<?php
include "footer.php";
?>