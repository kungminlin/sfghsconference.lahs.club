<?php

$servername = "localhost";
$username = "root";
$password = "mml8linmc";
$dbname = "smash";

require('phpmailer/PHPMailerAutoload.php');
$mail = new \PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'lin.kungmin@gmail.com';
$mail->Password = 'mml8linmc';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

 ?>
