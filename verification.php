<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
require 'PHPMailer/src/Exception.php';

$nom = $_POST["nom"];
$mailp = $_POST["mail"];
$mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
$token = bin2hex(openssl_random_pseudo_bytes(12));

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25;

$mail->setFrom('noreply@mediamatique.ch', 'Mailtrap');
$mail->addReplyTo('noreply@mediamatique.ch', 'Mailtrap');
$mail->addAddress("$mailp", "$nom"); 

$mail->Subject = 'Confirmation de l adresse e-mail';
$mail->isHTML(true);
$mail->Body = "Veuillez valider votre adresse mail en cliquant ce lien: </br> http://lgorgerat.eleves.mediamatique.ch/espace-pao/enregistrement.php?mailp=$mailp&token=$token";

session_start();
    $_SESSION['nom'] = $nom;
    $_SESSION['mdp'] = $mdp;
    $_SESSION['mail'] = $mailp;
    $_SESSION['token'] = $token;

if($mail->send()){
    echo 'Le mail a bien été envoyé.';
    header('location: enregistrement.php');
}else{
    echo 'Le mail a pas pu être envoyé. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
