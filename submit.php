<?php

require 'phpmailer/PHPMailerAutoload.php';
//include("phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();

$body = $_POST['Message'];
$from = $_POST['emailAddress'];

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.highlanderthon.com;mail.highlanderthon.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'highla61';                 // SMTP username
$mail->Password = 'htnjit123$';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'pr@highlanderthon.com';
$mail->FromName = 'Website Contact Form';

$mail->Subject = "HighlanderThon Website Contact Form";

$mail->msgHTML($body . "<br><br>From: " . $from);

$mail->addAddress('pr@highlanderthon.com', 'PR Chairman');

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header("Location: http://www.highlanderthon.com/contact.html");
}

?>