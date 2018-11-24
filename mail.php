<?php

require_once("conf.ini.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail->clearAllRecipients();

$mail->setFrom('lahs.outreach@gmail.com', 'SFGHS Outreach Team');
$mail->addAddress('lahsgreenteam@gmail.com', 'LAHS Green Team');

$mail->Subject = "SFGHS Contact Form: " . $name;
$mail->Body = "Name: " . $name . "Email: " . $email . "Message: " . $message;

if (!$mail->send()) {
	die('Mailer Error: '.$mail->ErrorInfo);
} else {
	echo "success";
}
