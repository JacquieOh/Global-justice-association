<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <!-- favicon -->
  <link rel="icon" href="favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->


<!-- reCaptcha top-->
  <script src="https://www.google.com/recaptcha/api.js?render=6LeWhlMaAAAAAJI45-VMDf7lCh-EydiykUlWh0pp"></script>

  <?php

  if(isset($_POST) && isset($_POST["btnSubmit"]))
  {

  $secretKey  = '6LeWhlMaAAAAADYn3UdRO7pYLTwCyv6kXw7oGDmB';
  $token      = $_POST["g-toeken"];
  $ip         = $_SERVER['REMOTE_ADDR'];

  $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;
  $request  = file_get_contents($url);
  $response = json_decode($request);


  if($response->success){
    echo '<h3>Thank you for contacting us!</h3>';
  } else {
    echo '<h1>Oops something went wrong. Please, try sending your message again.</h1>';
  }
    };
  ?>



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

  <!-- contact side section -->
  <!-- <div class="col-lg-5 col-md-5-sm-5">

    <div class="contact-form " id="contact-form">

      <form method="post" >
        <input type="hidden" name="g-toeken" id="g-token" />
        <h3>Contact Form</h3>
        <input type="text" class="form-control"  name="name" value="" placeholder="Your Name" value="" required><br>
        <input type="text" class="form-control "name="organization" placeholder="Your organization (optional)" value="" ><br>
        <input type="email" class="form-control"  name="email" placeholder="Your Email" value=""  required><br>
        <input type="text"  class="form-control "name="subject" placeholder="Subject" value="" required><br>
        <textarea class="form-control " name="message" placeholder="Message" rows="4" required></textarea><br>

        <input type="submit" class="form-control submit" name="btnSubmit" value="Send Message" required>


      </form>
    </div>
  </div> -->

  <div class="container" id="contact">
    <div class="contact-title">
      <h2 class="contact">Contact Us</h2>

      <div class="row">
        <div class="contact-address col-lg-3 col-md-6 col-sm-12">
          <h3>Global Justice Association</h3>
          <br>Jan Evertsenstraat 45 HS
          <br>1057 SZ Amsterdam
          <br>The Netherlands
          <br>
          <br>T+ 31-20-4703558
          <br> <a href="mailto:info@global-justice.com">E info@global-justice.com</a>


        </div>
        <div class="contact-map col-lg-4 col-md-6 col-sm-12">
          <h3>Find us on maps</h3>
          <iframe class="map-container"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9977756.562922036!2d4.786002!3d52.3708602!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e272879f743d%3A0x29a68f83e0694abd!2sJan%20Evertsenstraat%2045%2C%201057%20SZ%20Amsterdam!5e0!3m2!1sen!2snl!4v1610298906995!5m2!1sen!2snl"
            width="250" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>



        <div class="col-lg-5 col-md-5-sm-5 contact-main">

          <div class="contact-form " id="contact-form">
            <h3>Contact Form</h3>
            <form method="post" >
              <input type="hidden" name="g-toeken" id="g-token" />
              <input type="text" class="form-control"  name="name" value="" placeholder="Your Name" value="" required><br>
              <input type="text" class="form-control "name="organization" placeholder="Your organization (optional)" value="" ><br>
              <input type="email" class="form-control"  name="email" placeholder="Your Email" value=""  required><br>
              <input type="text"  class="form-control "name="subject" placeholder="Subject" value="" required><br>
              <textarea class="form-control " name="message" placeholder="Message" rows="4" required></textarea><br>

              <input type="submit" class="form-control submit" name="btnSubmit" value="Send Message" required>

              <!-- <button type="submit" name="submit">SEND MAIL</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- javaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="index.js" charset="utf-8"></script>

  <!-- reCaptcha js-->
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


  <!-- contact php-->
  <?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $email_from = 'info@global-justice.com';
  $email_subject = "New Form Submission";
  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                    "User Subject: $subject.\n".
                    "User Message: $message.\n";

  $to = "siebkejacqueline@yahoo.de";
  $headers = "From: $email_from \r\n";
  $headers .="Reply-To: $visitor_email \r\n";
  mail($to, $email_subject, $email_body, $headers);

  header("Location: index.html");
  ?>

</body>

</html>
