<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');


//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
//Create a new PHPMailer instance
// leemos los datos
$cuerpo =  htmlentities("Nombre: ".$_POST['name'])."<br>";
$cuerpo .= htmlentities("Email: ".$_POST['email'])."<br>";
$cuerpo .= htmlentities("Comentarios: ".$_POST['comments'])."<br>";

$mail = new PHPMailer;

//Tell PHPMailer to use SMTP

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ekats.leads@gmail.com';                 // SMTP username
$mail->Password = 'aciicdgnkbexthaq';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
//$mail->SMTPDebug = 2;

// enviamos el mail
$mail->setFrom("ekats.leads@gmail.com", "ekastudio.net");
$mail->AddAddress("wizerlink.leads@gmail.com");
$mail->AddAddress("kat@ekastudio.net");
$mail->AddAddress("info@ekastudio.net");
$mail->AddAddress("misaeboca@gmail.com");
$mail->CharSet = "UTF-8";
$mail->isHTML(true);
/*
if ( $_FILES["recibo"]["error"]==0 )
{
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["recibo"]["name"]);
	move_uploaded_file($_FILES["recibo"]["tmp_name"], $target_file);

	// tenemos un archivo -> lo adjuntamos
	$mail->AddAttachment( $target_file, $_FILES["recibo"]["name"] );
}*/

$mail->Subject		= "Contacto ekastudio.net";
$mail->Body		= $cuerpo;

$res = $mail->send();


if (!$res) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else{
header("Location: /thanks");
}

// eliminamos el archivo
//@unlink( $target_file );
return $res;
