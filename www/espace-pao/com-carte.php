<?php 
    session_start();

    $nom = $_POST['nom_carte'];
    $titre = $_POST['carte_titre'];
    $num = $_POST['carte_num'];


    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=lgorgerat;charset=utf8', 'lgorgerat', 'fpTmuxcqYJXL');
    }
        catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $i = $bdd->prepare("INSERT INTO carte (carte_nom ,  carte_titre, carte_numero , carte_nb, fk_utilisateur, fk_designs) VALUES(:nom , :mail , :mdp , :rang, :token)");

    $i->bindParam(":nom", $_SESSION['nom']);
    $i->bindParam(":mail", $validmail);
    $i->bindParam(":mdp", $_SESSION['mdp']);
    $i->bindParam(":rang", $rang);
    $i->bindParam(":token", $validtoken);

    $i->execute();
?>