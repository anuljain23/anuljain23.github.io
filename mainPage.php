<?php

  $error = "";
  $successMessage = "";
  if($_POST){
    if(!$_POST["form-name"]){
      $error .= "Name field can not be empty.<br>";
    }
    if(!$_POST["email"]){
      $error .= "Your email is required.<br>";
    }
    if(!$_POST["message"]){
      $error .= "Message field is required.<br>";
    }
    if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATION_EMAIL) === false){
      $error .= "The entered email is not valid.<br>";
    }
    if($error!=""){
      $error = '<div class="alert alert-danger" data-aos="fade-down" data-aos-delay="300" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . error . '</div>';
    }else{
      $emailTo = "anuljain23@gmail.com";
      $subject = "Feedback to your website";
      $content = $_POST["message"];
      $headers = "From: ".$_POST["email"];
      if(mail($emailTo, $subject, $content, $headers)){
        $successMessage = '<div class="alert alert-success" data-aos="fade-down" data-aos-delay="300" role="alert"><p>Your message was sent successfully.<strong>Thank You for your feedback!!!</strong></p></div>';
      }else{
        $error = '<div class="alert alert-danger" data-aos="fade-down" data-aos-delay="300" role="alert"><p>Your message couldn\'t be sent. <strong>Please try again later!</strong></p></div>';
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anul Jain</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@500&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aos-master/dist/aos.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="jquery.min.js"></script>
  </head>

  <body>

    <div class="row">
      <div id="loading" class="col-sm-12 col-lg-12"></div>
    </div>

    <div id="main-navbar">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-color float-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto" id="nav-list">
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#work">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feedback">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#connect">Connect</a>
            </li>
          </ul>
        </div>
      </nav>

      <header class="header-section">
        <!-- <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#connect">Connect</a>
          </li>
        </ul> -->
        <h1 data-aos="zoom-in" data-aos-delay="200" id="name">Anul Jain</h1>
      </header>
    </div>

    <div id="about">
      <div class="container">
        <div class="col col-12">
          <h1><u>Who Am I</u></h1>
        </div>
        <div class="row align-items-center justify-content-center">
          <div class="col-sm-12 col-lg-4">
            <img data-aos="fade-up" data-aos-delay="100" src="images/Anul1.jpeg" alt="Anul">
          </div>
          <div data-aos="fade-down" data-aos-delay="300" class="col-sm-12 col-lg-8">
            <p>
              I'm a Computer Science Junior at Sir M. Visvesvaraya Institute of Technology, Bangalore.
              I'm from Indore, born and brought up in Indore. I spend most of my time, learning things ,playing games,
              listening to music and enjoying with my friends. I'm also a foodie. I love being surrounded by my
              friends, so you can find me roaming with them. Coming to my college, most of work revolves around
              deep-learning and problem solving, be it a building and training a model or sum of calculus or
              algorithm optimization.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div id="work">
      <div class="container">
        <div class="row">
          <div class="col col-12">
            <h1><u>What Do I Do</u></h1>
          </div>
        </div>
        <div class="row skill-row">
          <div class="col-sm-12 col-lg-6">
            <div class="skill-item">
              <h3>Web Development</h3>
                <img data-aos="fade-right" data-aos-delay="100" id="image1" src="images/web-development.jpg" alt="Web-develpoment">
                <p></p>
                <ul data-aos="fade-up" data-aos-delay="100" class="skill-list">
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>Bootstrap</li>
                  <li>Javascript</li>
                  <li>Jquery</li>
                  <li>Wordpress</li>
                  <li>PHP</li>
                  <li>Sql</li>
                </ul>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6">
            <div class="skill-item">
              <h3>Mobile App Development</h3>
                <img data-aos="fade-left" data-aos-delay="300" src="images/app-development.jpg" alt="App-Development">
                <p></p>
                <ul data-aos="fade-up" data-aos-delay="100" class="skill-list">
                  <li>Flutter</li>
                  <li>Dart</li>
                  <li>Firebase</li>
                </ul>
            </div>
          </div>
            <div class="col-sm-12 col-lg-6">
              <div class="skill-item">
                <h3>Deep Learning</h3>
                  <img data-aos="fade-right" data-aos-delay="100" src="images/deep-learning.jpg" alt="Deep-Learning">
                  <p></p>
                  <ul data-aos="fade-up" data-aos-delay="100" class="skill-list">
                    <li>Logistic Regression</li>
                    <li>Neural Network</li>
                    <li>Pytorch</li>
                    <li>CNN</li>
                    <li>RNN</li>
                    <li>LSTM</li>
                    <li>GAN</li>
                    <li>TensorFlow</li>
                  </ul>
              </div>
            </div>
          <div class="col-sm-12 col-lg-6">
            <div class="skill-item">
              <h3>Problem Solving</h3>
                <img data-aos="fade-left" data-aos-delay="300" src="images/problem-solving.jpg" alt="Problem-Solving">
                <p></p>
                <ul data-aos="fade-up" data-aos-delay="100" class="skill-list">
                  <li>Algorithms</li>
                  <li>Data Structure</li>
                  <li>C programming</li>
                  <li>Python</li>
                  <li>Discrete Mathematics</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="feedback">
      <div class="container">
        <div class="form-heading">
          <h1>Feedback</h1>
        </div>
        <div class="container">
          <div id="error">
            <? echo $error.$successMessage; ?>
          </div>
          <form id="feedback-form" method="post" action="#feedback">
            <div class="row">
              <div class="col-lg-4 col-sm-12 form-group">
                <label for="form-name">Name</label>
              </div>
              <div class="col-lg-8 col-sm-12 form-group">
                <input type="text" id="form-name" name="name" placeholder="Your name...">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-12 form-group">
                <label for="email">E-Mail</label>
              </div>
              <div class="col-lg-8 col-sm-12 form-group">
                <input type="email" id="email" class="form-control" name="email" placeholder="example@email.com">
                <p id="mutedText" class="form-text">We'll never share your email with anyone else.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-12 form-group">
                <label for="message">Message</label>
              </div>
              <div class="col-lg-8 col-sm-12 form-group">
                <textarea id="message" name="message" placeholder="Write something..." rows="4"></textarea>
              </div>
            </div>
            <div class="row align-items-center justify-content-center">
              <input id="submit-button" type="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="connect">
      <div class="container">
        <div class="row">
          <div class="connect-heading col col-12">
            <h1><u>Connect With Me</u></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <ul >
              <li data-aos="fade-right" data-aos-delay="100" class="connect-link"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i><span class="text">+91 8817950836</span></li>
              <li data-aos="fade-left" data-aos-delay="100" class="connect-link"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i><a href="mailto:anuljain23@gamil.com" target="_blank"><span class="text">anuljain23@gmail.com</span></a></li>
              <li data-aos="fade-right" data-aos-delay="100" class="connect-link"><i class="fa fa-github fa-2x" aria-hidden="true"></i><a href="https://github.com/anuljain23" target="_blank"><span class="text">anuljain23</span></a></li>
              <li data-aos="fade-left" data-aos-delay="100" class="connect-link"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i><a href="https://www.linkedin.com/in/anuljain/" target="_blank"><span class="text">Linkedin</span></a></li>
              <li data-aos="fade-right" data-aos-delay="100" class="connect-link"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i><a href="https://www.instagram.com/anul_jain/" target="_blank"><span class="text">Anul Jain</span></a></li>
              <li data-aos="fade-left" data-aos-delay="100" class="connect-link"><i class="fa fa-code fa-2x" aria-hidden="true"></i><a href="https://www.hackerrank.com/anuljain23" target="_blank"><span class="text">Hackerrank</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-section">
      <p>&copy Anul Jain 2020</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="aos-master/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

  </body>

  <script type="text/javascript">

    document.onreadystatechange = function() {
      if (document.readyState !== "complete") {
          document.querySelector("body").style.visibility = "hidden";
          document.querySelector("#loading").style.visibility = "visible";
      } else {
          document.querySelector("#loading").style.display = "none";
          document.querySelector("body").style.visibility = "visible";
      }
    };

    $(document).on('click',function(){
     $('.collapse').collapse("hide");
    });

    $("form").submit(function(e) {
             var error = "";
             if ($("#form-name").val() == "") {
                 error += "The name field is required.<br>"
             }
             if ($("#email").val() == "") {
                 error += "The email field is required.<br>"
             }
             if ($("#message").val() == "") {
                 error += "The message field is required.<br>"
             }
             if (error != "") {
                $("#error").html('<div class="alert alert-danger" data-aos="fade-down" data-aos-delay="300" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                 return false;
             } else {
                 return true;
             }
         })

  </script>

</html>
