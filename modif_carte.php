<?php 
session_start();

$id = $_SESSION['id'];
$id_modif = $_GET['id'];
$modification = $_GET['modification'];
$acturang = $_GET['statut'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=lgorgerat;charset=utf8', 'lgorgerat', 'fpTmuxcqYJXL');
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

$transform = $bdd->prepare("UPDATE cartes
SET carte_statut = REPLACE(carte_statut, :acturang, :modification) WHERE id_carte = :id_modif");

$transform->bindParam(":modification", $modification);
$transform->bindParam(":acturang", $acturang);
$transform->bindParam(":id_modif", $id_modif);

$transform->execute();

header('location: commandes.php');

}else{
    echo"Accés refusé.";

}
?>