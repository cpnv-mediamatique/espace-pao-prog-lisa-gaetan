<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
require 'PHPMailer/src/Exception.php';

$nom = $_POST["nom"];
$mailp = $_POST["mail"];

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25;

$mail->setFrom('noreply@mediamatique.ch', 'Mailtrap');
$mail->addReplyTo('noreply@mediamatique.ch', 'Mailtrap');
$mail->addAddress("$mailp", "$nom"); 

$mail->Subject = 'Test Email verification';
$mailContent = "<h1>Test</h1>
    <p>Hello.</p>";
$mail->Body = $mailContent;

if($mail->send()){
    echo 'Le mail a bien été envoyé.';
}else{
    echo 'Le mail a pas pu être envoyé. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>