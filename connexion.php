<?php 

$mail = $_POST["mail"];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=pao;charset=utf8', 'root', 'root');
}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if(!empty($mail)){
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE user_mail = :mail");
    $req->execute(array(
        ':mail' => $mail));

    $resultat = $req->fetch();

    $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['user_mdp']);

    if ($isPasswordCorrect){

        session_start();
        $_SESSION['nom'] = $resultat['user_nom'];
        header('location: indexconnect.php');

    }else{

        header('location: login.php');

    }
}else{
    header('location: login.php');
}
?>