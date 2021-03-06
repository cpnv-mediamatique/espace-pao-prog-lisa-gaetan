<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
require 'PHPMailer/src/Exception.php';

//récupère le contenu des champs et se défend contre la faille XSS
$nom = htmlspecialchars($_POST["nom"]);
$mailp = htmlspecialchars($_POST["mail"]);
$mdp = htmlspecialchars(password_hash($_POST["mdp"], PASSWORD_DEFAULT));
$token = bin2hex(openssl_random_pseudo_bytes(12));

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=lgorgerat;charset=utf8', 'lgorgerat', 'fpTmuxcqYJXL');
}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$verif = $bdd->prepare("SELECT user_mail FROM utilisateur WHERE user_mail = $mailp");
$verif->execute();
$jsp = $verif->fetch();
$findme = "@cpnv.ch";
$pos = strpos($mailp, $findme);
//vérifier si l'adresse mail existe déjà dans la base de donnée et est une adresse du cpnv
if (empty($jsp) == true && $pos !== false){
    //envoi du mail
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'localhost'; 
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false; 
    $mail->Port = 25;

    $mail->setFrom('noreply@mediamatique.ch', 'Espace PAO');
    $mail->addReplyTo('noreply@mediamatique.ch', 'Espace PAO');
    $mail->addAddress("$mailp", "$nom"); 

    $mail->Subject = 'Confirmation adresse e-mail';
    $mail->Body = "Veuillez valider votre adresse mail en cliquant ce lien: http://lgorgerat.eleves.mediamatique.ch/espace-pao/enregistrement.php?mailp=$mailp&token=$token
    ";

    session_start();
        $_SESSION['nom'] = $nom;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['mail'] = $mailp;
        $_SESSION['token'] = $token;

    if($mail->send()){
        ?>
        <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Espace PAO</title>
        <!-- MDB icon -->
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        <!-- MDB -->
        <link rel="stylesheet" href="css/mdb.min.css" />
        <!-- Notre CSS -->
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <!-- Start your project here-->
        <div class="container">


            <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

                <div class="text-center">
                    <img class="mb-5" src="img/Espace_entreprise_logo.svg" style="width: 12rem" />
                    <div class="card-body shadow-3-strong bordDeCarte" style="width: 30rem ">
                        <p>Un mail a été envoyé à l'adresse suivante : <?=$mailp ?>.<br>Veuillez le consulter et le valider</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Fond vert de la page login -->
        <div id="background">
        </div>

        <!-- End your project here-->
    </body>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>


    </html>
<?php
    }else{
        echo 'Le mail a pas pu être envoyé. ';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}else{
    echo 'Cette adresse mail est invalid';
}


?>

