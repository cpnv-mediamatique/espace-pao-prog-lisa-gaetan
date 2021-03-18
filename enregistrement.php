<?php 

$nom = $_POST["nom"];
$mail = $_POST["mail"];
$mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
$rang = "élève";
$token = bin2hex(openssl_random_pseudo_bytes(12));

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=pao;charset=utf8', 'root', 'root');
}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if(!empty($mail)){

    $i = $bdd->prepare("INSERT INTO utilisateur (user_nom , user_mail , user_mdp , user_rang , token) VALUES(:nom , :mail , :mdp , :rang, :token)");

    $i->bindParam(":nom", $nom);
    $i->bindParam(":mail", $mail);
    $i->bindParam(":mdp", $mdp);
    $i->bindParam(":rang", $rang);
    $i->bindParam(":token", $token);

    $i->execute();

    session_start();
    $_SESSION['nom'] = $nom;

    header('location: indexconnect.php');
}else{
    header('location: register.php');
}
?>