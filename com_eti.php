<?php

session_start();

date_default_timezone_set('Europe/Zurich');

$utilisateur = $_SESSION['nom'];
$nom = $_POST['titre'];
$classe = $_POST['classe'];
$design = $_POST['design'];
$date_com = date('d/m/Y H:i');
$statut = "En attente";

try {
    $bdd = new PDO('mysql:host=localhost;dbname=lgorgerat;charset=utf8', 'lgorgerat', 'fpTmuxcqYJXL');
} catch (Exception $e) {
    die('Erreur : '.$e -> getMessage());
}

$perso = $bdd -> prepare("SELECT id_utilisateur FROM utilisateur WHERE user_nom = ?");

$perso->execute(array($utilisateur));

$user = $perso->fetch();

$i = $bdd -> prepare("INSERT INTO etiquettes (eti_nom , eti_classe, eti_design, eti_date, eti_statut, fk_utilisateur) VALUES(:nom , :classe , :design , :com_date, :statut, :utilisateur)");

$i -> bindParam(":nom", $nom);
$i -> bindParam(":classe", $classe);
$i -> bindParam(":design", $design);
$i -> bindParam(":com_date", $date_com);
$i -> bindParam(":statut", $statut);
$i -> bindParam(":utilisateur", $user['id_utilisateur']);

$i -> execute();

header('location: indexconnect.php');
?>