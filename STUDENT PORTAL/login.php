<?php
include "header.php";

require_once "loginCode.php";
?>

<link rel="stylesheet" href="css/login.css">

<div id="login_Form">
  <div class="container">

    <div class="row">
      <div class="col-md text-center">
        <img src="images/login.png" alt="login">
        <h1>LOGIN</h1>
        <p>Please enter your details to login</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mx-auto">
      <form action="loginCode.php" method="post">
              <div class="form-group">
                <label for="login_uname">Enter Username</label>
                <input type="text" name="login_uname" placeholder="Enter username here" required class="form-control">
              </div>
              <div class="form-group">
                <label for="login_pword">Password</label>
                <input type="password" name="login_pword" placeholder="Enter password here" required class="form-control">
              </div>

              <button type="submit" class="btn btn-light text-dark" name="login_submit">SUBMIT</button>
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