<?php
if(isset($_POST["name"]) && isset($_POST["email"]) ){
  $to = "moises.graterol.13@gmail.com";

  $subject = "Contact from ".$_POST["name"];

  $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $message = '<html><body>';
  $message .= '<h1>Hello, World!</h1>';
  $message .= '</body></html>';


  if(mail($to, $subject, $message, $headers)){
    header("Location: ../thanks");
    die();
  } else {
    header("Location: ../contact");
    die();
  }
}
?>
