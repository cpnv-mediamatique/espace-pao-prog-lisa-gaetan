<?php 

$nom = $_POST["nom"];
$mail = $_POST["mail"];
$mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
$rang = "élève";
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=pao;charset=utf8', 'root', 'root');
}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>

<?php

$i = $bdd->prepare("INSERT INTO utilisateur (user_nom , user_mail , user_mdp , user_rang) VALUES(:nom , :mail , :mdp , :rang)");

$i->bindParam(":nom", $nom);
$i->bindParam(":mail", $mail);
$i->bindParam(":mdp", $mdp);
$i->bindParam(":rang", $rang);
$i->execute();


header('location: indexconnect.php');
?>