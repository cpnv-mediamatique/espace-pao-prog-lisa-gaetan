<?php

session_start();

date_default_timezone_set('Europe/Zurich');

$utilisateur = $_SESSION['nom'];
$nb = $_POST['nb'];
$prenom = $_POST['nom_prenom'];
$titre = $_POST['titre'];
$num = $_POST['numero_telephone'];
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

$i = $bdd -> prepare("INSERT INTO cartes (carte_nom , carte_titre, carte_numero, carte_nb, carte_design, carte_date, carte_statut, fk_utilisateur) VALUES(:nom , :titre, :carte_num, :carte_nb, :design , :com_date, :statut, :utilisateur)");

$i -> bindParam(":nom", $prenom);
$i -> bindParam(":titre", $titre);
$i -> bindParam(":carte_num", $num);
$i -> bindParam(":carte_nb", $nb);
$i -> bindParam(":design", $design);
$i -> bindParam(":com_date", $date_com);
$i -> bindParam(":statut", $statut);
$i -> bindParam(":utilisateur", $user['id_utilisateur']);

$i -> execute();

header('location: indexconnect.php');
?>