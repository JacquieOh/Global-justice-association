<?php
//message Vars

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



if(isset($_POST) && isset($_POST["btnSubmit"])) {

  $secretKey  = '6LeWhlMaAAAAADYn3UdRO7pYLTwCyv6kXw7oGDmB';
  $token      = $_POST["g-toeken"];
  $ip         = $_SERVER['REMOTE_ADDR'];

  $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip="$ip;
  $request  = file_get_contents($url);
  $response = json_decode($request);

if($response->success){
  echo '<h1> Validation Sucess</h1>';
}
  else {
    echo '<h1> Validation Failed</h1>';
  }
}
  ?>
