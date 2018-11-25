<?php

require_once("conf.ini.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail->clearAllRecipients();

// $mail->setFrom('lahs.outreach@gmail.com', 'SFGHS Outreach Team');
$mail->addAddress('lahsgreenteam@gmail.com', 'LAHS Green Team');

$mail->Subject = "SFGHS Contact Form: " . $name;
$mail->Body = "Name: $name<br/><br/>Email: $email<br/><br/>Message:<br/><br/>$message";

if (!$mail->send()) {
	die('Mailer Error: '.$mail->ErrorInfo);
} else {
	echo "success";
}

$mail->clearAllRecipients();
$mail->addAddress($email, $name);

$mail->Subject = "Your Message Has Been Received!";
$mail->Body = "Hello $name,<br/><br/>Thank you for reaching out to the LAHS Green Team! We have received your message, and will get back to you as soon as possible! If you have any additional questions, contact us via the contact form, this email, or the <a href='mailto:lahsgreenteam@gmail.com'>official LAHS Green Team email</a>. <br/><br/>Be Green Not Mean!<br/>LAHS Green Team";

if (!$mail->send()) {
	die('Mailer Error: '.$mail->ErrorInfo);
} else {
	echo "secondccess";
}
