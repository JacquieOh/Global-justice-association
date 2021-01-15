<<<<<<< HEAD
<?php
//message Vars

$msg = '';
$msgClass = '';


if (isset)($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  //check required fields
  if(!empty($mailFrom) && !empty($name) && !empty($subject) && !empty($message)){
    //passed
    echo 'Passed';
  } else {
    //failed
    $msg = 'Please fill in all required fields';
    $msgClass = 'alert-danger';

  }
}

$mailTo = "siebkejacqueline@yahoo.de";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name. ".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend");
}

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

<div class="contact-title">
  <h1>Contact Form</h1>
  <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
  <form class="contact-form" action="contactform.php" method="post">
    <input type="text" name="name" placeholder="Full Name">
    <input type="text" name="mail" placeholder="Your Email">
    <input type="text" name="subject" placeholder="Subject">
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit" name="submit">SEND MAIL</button>
  </form>
</div>
=======
<?php
//message Vars

$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@global-justice.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
                "User E-mail: $visitor_email.\n".
                  "User Message: $message.n\";

$to = "siebkejacqueline@yahoo.de";
$headers = "From: .$email_from \r\n";
$headers . ="Reply-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");

  ?>
>>>>>>> 228bc3b700a2a7cce2826148ce57c342bd8f4ee9
