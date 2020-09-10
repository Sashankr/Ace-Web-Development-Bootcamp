<?php 
  if(isset($_POST["submit-contact"]))
  {
    session_start();
    $_SESSION["username"] = $_POST["uname"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["message"] = $_POST["message"];
    header("location: contactMessage.php");
  }
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACE DEV CAMP</title>
  <link rel="shortcut icon" type="image/ico" href="images/logo.ico" />
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div id="section1">
    <header>
      <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <a class="navbar-brand" href="#"><img src="images/logo.png" width="70px" height="70px" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a id="home-nav" class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a id="abt-nav" class="nav-link" href="#">ABOUT<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a id="fac-nav" class="nav-link" href="#">FACULTY</a>
              </li>
              <li class="nav-item">
                <a id="courses-nav" class="nav-link" href="#">COURSES</a>
              </li>
              <li class="nav-item">
                <a id="tes-nav" class="nav-link" href="#">TESTIMONIALS</a>
              </li>

              <li class="nav-item">
                <a id="contact-nav" class="nav-link" href="#">CONTACT US</a>
              </li>

              <li class="nav-item">
                <a id="gallery-nav" class="nav-link" href="#">GALLERY</a>
              </li>

              <li class="nav-item">
                <a id="sup-nav" class="nav-link" href="signup.php">SIGN UP</a>
              </li>

              <li class="nav-item">
                <a id="sin-nav" class="nav-link" href="login.php">LOGIN</a>
              </li>

            </ul>
          </div>
        </nav>

      </div>

    </header>
  </div>
  <!--end of section1-->

  <div id="section2">
    <div class="container">
      <h1 class="text-md-center text-xs-left">ACE WEB DEVELOPMENT BOOTCAMP</h1>

      <div id="about">
        <div class="row">
          <div class="col-md">
            <h2>ABOUT</h2>
            <p>ACE has trained thousands of individuals who have went out to become the best web developers.</p>
            <p>Our alumni network is working across mutiple MNC’s around the World.</p>
            <p>Join our bootcamp to start your carrer in web development.</p>
          </div>
          <div class="col-md d-flex justify-content-md-end">
            <img src="images/about.png" alt="about">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of section2-->

  <div id="section3">
    <div class="container">
      <div id="faculty">
        <div class="row">
          <div class="col-md-8">
            <h2>FACULTY</h2>
            <p>ACE has employed best in class faculty who have decades of experience
              in the web development industry and continue to work on new technologies. </p>
            <p>
              We have professors for UX Design, Full Stack Web Development and Marketing Strategist.
            </p>
            <p>Here are some of them you will meet more in the development center</p>
          </div>
        </div>
        <div id="faculty_Images">
          <div class="row">
            <div class="col-md-3">
              <img class="img-fluid" src="images/fac1.png" alt="faculty1">
              <h2>M. Kayla</h2>
              <p>UX Designer</p>
            </div>
            <div class="col-md-3 offset-1">
              <img src="images/fac2.png" alt="faculty2">
              <h2>R. John</h2>
              <p>Full Stack Web Developer</p>
            </div>
            <div class="col-md-3 offset-1">
              <img src="images/fac3.png" alt="faculty3">
              <h2>S. Bob</h2>
              <p>Marketing Strategist</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of section3-->

  <div id="section4">
    <div class="container">
      <div id="courses">
        <h2>COURSES</h2>
        <p>We offer a total of three courses</p>

        <div class="row course-details">
          <div class="col-md course-info">
            <h2>1. MERN Stack Developer</h2>
            <p>MERN Stack is a Javascript Stack that is used for easier and faster deployment of full-stack web
              applications.</p>
            <p>
              MERN Stack comprises of 4 technologies namely: MongoDB, Express, React and Node.js.
            </p>
            <p>
              It is designed to make the development process smoother and easier.
            </p>
          </div>
          <div class="col-md">
            <img src="images/mern.jpg" alt="mern" class="img-fluid">
          </div>
        </div>
        <div class="row course-details">
          <div class="col-md course-info">
            <h2>2. MEAN Stack Developer</h2>
            <p>It is a collection of JavaScript based technologies used to develop web applications. </p>
            <p>MEAN is an acronym for
              MongoDB, ExpressJS, AngularJS and Node.js.</p>
            <p>From client to server to database, MEAN is full stack JavaScript.</p>
          </div>
          <div class="col-md">
            <img src="images/mean.jpeg" alt="mern" class="img-fluid">
          </div>
        </div>
        <div class="row course-details">
          <div class="col-md course-info">
            <h2>3. MEVN Stack Developer</h2>
            <p>The acronym MEVN stands for MongoDB, Express.js, VueJS, Node.js.</p>
            <p>MEVN stack is the open-source JavaScript software stack that has emerged as a new and evolving way to
              build powerful and dynamic web applications.</p>
          </div>
          <div class="col-md">
            <img src="images/mevn.jpg" alt="mern" class="img-fluid">
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--end of section4-->

  <div id="section5">
    <div class="container">
      <div id="testimonials">
        <h2>TESTIMONIALS</h2>
        <p>Read some of the feedback provided by our students</p>

        <div class="row">
          <div class="col-md-6 col-lg-3 col-sm-6 testimonial-details">
            <img src="images/tes1.png" alt="testimonial1" class="img-fluid">
            <h3>Jonas K</h3>
            <div class="card">
              <p>"I learnt a lot about
                web development
                with MERN Stack
                here"</p>

              <p>"I am now working
                as a full time
                freelancer"</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 testimonial-details">
            <img src="images/tes2.png" alt="testimonial2" class="img-fluid">
            <h3>Erika L</h3>
            <div class="card">
              <p>"I learnt a lot about
                web development
                with MEAN Stack
                here"</p>

              <p>"I am now working
                at a startup."</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 col-sm-6 testimonial-details">
            <img src="images/tes3.png" alt="testimonial3" class="img-fluid">
            <h3>Kayla P</h3>
            <div class="card">
              <p>"I learnt a lot about
                web development
                with MEVN Stack
                here"</p>

              <p>"I am now working
                for a MNC building
                enterprise solutions
                for our customers."</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 col-sm-6 testimonial-details">
            <img src="images/tes4.png" alt="testimonial4" class="img-fluid">
            <h3>Ajay H</h3>
            <div class="card">
              <p>“I learnt about UX
                Design and worked
                on improving
                customer
                experience"</p>

              <p>"I am now working
                for a MNC building
                enterprise solutions
                for our customers."</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--end of section5-->
  <div id="section6">
    <div class="container">
      <div id="contact">
        <div class="row">
          <div class="col-md-6">
            <h2>CONTACT US</h2>
            <p>Kindly fill this form so that we can get back to you with your queries</p>
            <form action="" method="post">
              <div class="form-group">
                <label for="uname">Name</label>
                <input type="text" name="uname" placeholder="Enter your name here" required class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email id here" required class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="phone" name="phone" placeholder="Enter your phone number here" required
                  class="form-control">
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Enter your message here"
                  required></textarea>
              </div>

              <button type="submit" class="btn btn-light text-dark" name="submit-contact">SUBMIT</button>
            </form>
          </div>
          <div id="office_details" class="col-md-5 ml-3">

            <h2>Office Number and Location</h2>
            <i class="fa fa-phone-square"></i><span>+41 882 112 441</span>

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d12063.155295534243!2d-74.124861!3d40.898447!3m2!1i1024!2i768!4f13.1!4m8!3e2!4m0!4m5!1s0x89c3eaa5a84f32d5%3A0x1b353284eab79ec9!2sACE%20IT%20Solutions%2C%20619%20River%20Dr%20%23230%2C%20Elmwood%20Park%2C%20NJ%2007407%2C%20United%20States!3m2!1d40.898447!2d-74.124861!5e0!3m2!1sen!2sin!4v1595522662005!5m2!1sen!2sin"
              width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!--end of section6-->

  <div id="section7">
    <div class="container">
      <div id="gallery">
        <h2>GALLERY</h2>
        <div class="row galleryImages">
          <div class="col-md">
            <img src="images/gallery1.jpg" alt="gallery1" class="img-fluid">
          </div>
          <div class="col-md">
            <img src="images/gallery2.jpg" alt="gallery2" class="img-fluid">
          </div>
        </div>
        <div class="row galleryImages">
          <div class="col-md">
            <img src="images/gallery3.jpg" alt="gallery3" class="img-fluid">
          </div>
          <div class="col-md">
            <img src="images/gallery4.jpg" alt="gallery4" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of section7-->

  <div id="section8">
    <div class="container">
      <div id="signUP">
        <h2>SIGNUP</h2>
        <div class="row">
          <div class="col-md-5 col-lg-5">
            <p>
              Want to start your <br>
              web development carrer <br>
              with us?
            </p>
          </div>
          <div class="col-md-2 col-lg-2 Arrow">
            <i class="fa fa-arrow-right"></i>
          </div>
          <div class="col-md-5 col-lg-5">
            <button id= "signup_button">
              <a id="signup_link" href="signup.php">SIGNUP HERE!</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div><!--end of section8-->

  <footer>
  <div class="container">
    <div class="row">
      <div class="col-md text-xs-center text-md-left">
      <small>&copy; Copyright 2020, ACE. All Rights reserved</small> 
      </div>
      <div class="col-md text-xs-center text-md-right social_Links">
     <a href="https://www.linkedin.com/" target="_blank"> <i class="fa fa-linkedin"></i></a>
      <a href="https://github.com/" target="_blank" ><i class="fa fa-github"></i></a>
      <a href="https://twitter.com/" target="_blank" ><i class="fa fa-twitter"></i></a>
      </div>
    </div>
  </div>
  </footer>
  <a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" role="button"><i class="fa fa-arrow-circle-up"></i></a>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>