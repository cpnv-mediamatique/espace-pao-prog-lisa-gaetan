<?php 
session_start();
//assigne le rang de base
$rang = "élève";
//récupère le mail et token contenu dans le mail
$validmail = $_GET['mailp'];
$validtoken = $_GET['token'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=lgorgerat;charset=utf8', 'lgorgerat', 'fpTmuxcqYJXL');
}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
//vérifie si le mail et token stockés sont pareil que ceux reçu
if($_SESSION['mail'] == $validmail && $_SESSION['token'] == $validtoken){
    
    $i = $bdd->prepare("INSERT INTO utilisateur (user_nom , user_mail , user_mdp , user_rang , token) VALUES(:nom , :mail , :mdp , :rang, :token)");

    $i->bindParam(":nom", $_SESSION['nom']);
    $i->bindParam(":mail", $validmail);
    $i->bindParam(":mdp", $_SESSION['mdp']);
    $i->bindParam(":rang", $rang);
    $i->bindParam(":token", $validtoken);

    $i->execute();
?>
<div class="container">


<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="text-center">
        <img class="mb-5" src="img/Espace_entreprise_logo.svg" style="width: 12rem" />
        <div class="card-body shadow-3-strong bordDeCarte" style="width: 30rem ">
            <a href="login.php">Se connecter</a>
        </div>
    </div>
</div>

</div>
<?php
}else{
    echo "/!\ Erreur ";
}
?>

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
