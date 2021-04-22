<?php 
session_start();

$id = $_SESSION['id'];
$id_modif = $_GET['id'];
$modification = $_GET['modification'];
$acturang = $_GET['rang'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=pao;charset=utf8', 'root', 'root');
}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = :id");
$req->execute(array(
    ':id' => $id));

$resultat = $req->fetch();

$nom = $resultat['user_nom'];

$_SESSION['nom'] = $nom;

if($resultat['user_rang'] !== "élève" && $resultat['user_rang'] !== "enseignant"){

$req2 = $bdd->prepare("SELECT * FROM utilisateur");

$req2->execute();

$transform = $bdd->prepare("UPDATE utilisateur
SET user_rang = REPLACE(user_rang, :acturang, :modification) WHERE id_utilisateur = :id_modif");

$transform->bindParam(":modification", $modification);
$transform->bindParam(":acturang", $acturang);
$transform->bindParam(":id_modif", $id_modif);

$transform->execute();

header('location: statut.php');

}else{
    echo"Accés refusé.";

}
?>