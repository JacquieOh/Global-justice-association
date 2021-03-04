<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <!-- favicon -->
  <link rel="icon" href="favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <!-- reCaptcha top-->
  <script src="https://www.google.com/recaptcha/api.js?render=6LeWhlMaAAAAAJI45-VMDf7lCh-EydiykUlWh0pp"></script>


</head>

<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&display=swap" rel="stylesheet">

<!-- CSS stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="./styles/style.css">

<!-- fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<body>
  <!-- Nav Bar -->
  <div class="" id="intro">
    <nav class="navbar   navbar-expand-lg navbar-light  sticky-top">
      <!-- Nav Brand? take out if not necessary-->
      <a class="navbar-brand" href="index.php#intro">
        <img class="logo-brand" src="images/GJA.png" alt="global-justice-association">
      </a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php#intro">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">ABOUT US
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="aboutUs">About us</a>
              <a class="dropdown-item" href="ourTeam">Our Team</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <!-- putting some text/ -->
            <a class="nav-link dropdown-toggle active" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">OUR WORK
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="ourWork#OurExpertise">Areas of expertise</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">OUR CASES</h6>
              <a class="dropdown-item" href="aguasDeCartagena">Aguas De Cartagena</a>
              <a class="dropdown-item" href="project2.php#intro">Agua Zarca Dam Project</a>
              <a class="dropdown-item" href="project3.php#intro">Océanos/Manuelita</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="news.php#intro">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php#contact">CONTACT</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="funding.php#intro">FUNDING</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

<?php

header( "refresh:2;url=https://www.global-justice.com/index" );

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $visitor_organization = $_POST['organization'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $email_from = $_POST['email'];
  $email_subject = "Website enquiry: ". $_POST['subject'];
  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                   "User Organization: $visitor_organization.\n".
                    "User Subject: $subject.\n".
                    "User Message: $message.\n";

  $to = "info@global-justice.com";
  $headers = "From: $email_from \r\n";
  $headers .="Reply-To: $visitor_email \r\n";
  mail($to, $email_subject, $email_body, $headers);

  if(isset($_POST) && isset($_POST["btnSubmit"]))
     {

     $secretKey  = '6LeWhlMaAAAAADYn3UdRO7pYLTwCyv6kXw7oGDmB';
     $token      = $_POST["g-toeken"];
     $ip         = $_SERVER['REMOTE_ADDR'];

     $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;
     $request  = file_get_contents($url);
     $response = json_decode($request);


     if($response->success) {
       echo '<div class="container">
         <div class="container-fluid light-section rounded news extra-margin">
             <h3>Thank you for contacting us!</h3>
             </div>
             </div>';
     } else {
       echo '<div class="container">
         <div class="container-fluid light-section rounded news extra-margin">
             <h3>Oops something went wrong. Please, try sending your message again.</h3>
             </div>
             </div>';

     }

   };



  ?>

  <footer class="footer-contact dark-section">
    <div class="footer-icon">

      <a class="fab fa-linkedin footer-icon" href="https://www.linkedin.com/company/global-justice-association/"></a>
      <a class="fab fa-twitter-square footer-icon" href="https://twitter.com/GlobJustAssoc"></a>
      <a class="fab fa-facebook-square footer-icon" href="https://www.facebook.com/GlobalJusticeAssociation"></a>
    </div>
  </footer>
  <!-- Bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- javaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="index.js" charset="utf-8"></script>

  <!-- reCaptcha bottom -->
<script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LeWhlMaAAAAAJI45-VMDf7lCh-EydiykUlWh0pp', {
        action: 'submit'
      }).then(function(token) {
        // Add your logic to submit to your backend server here.
        document.getElementById("g-token").value = token;
      });
    });
  </script>

  <script>
      if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
      }
  </script>

</body>

</html>
