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
