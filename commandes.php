<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Statut des commandes</title>
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
  <!-- Image and text -->
  <div class="container-max-widths">
    <nav class="navbar navbar-dark primary-color retourSansDeco py-0">

      <div class="m-4">
        <a href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#00A35C" class="bi bi-arrow-bar-left"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" />
          </svg>
          <span class="m-2 fs-6">Retour à l'accueil</span>
        </a>
      </div>
    </nav>
  </div>
  <div class="container col-md-7">
    <div class="row">
      <div id="svg_panier" class="mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#00A35C" class="bi bi-person-fill"
          viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </svg>


      </div>
      <p class="text-center mt-3 font-weight-bold">STATUT DES COMMANDES</p>
    </div>


    <hr size="4px">
    <div class="row">
      <div class="col-4">Commandes</div>
      <div class="col-4 d-flex text justify-content-center">Quantité</div>

      <div class="d-flex col-4 text justify-content-end">Statut</div>

    </div>
    <hr size="4px">

    <div class="row">
      <div class="col-3">
        <!-- Search form -->
        <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
      </div>
      <div class="col-9">
        <span class="d-flex col-sm justify-content-end mb-5">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Filtrer par
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
            <span class="dropdown-item">En cours</span>
            <span class="dropdown-item">En attente</span>
            <span class="dropdown-item">Traitée</span>
          </div>
        </span>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-4">
        <span class="font-weight-bold">cmonney</span>
        <p class="font-weight-light">Étiquettes / Format n°2</p>
        <img class="etiquette mb-3" src="img/wilson.jpg" style="max-width: 50%;">
      </div>
      <div class="col-4 d-flex text justify-content-center">
        <p class="mt-4">40</p>
      </div>
      <div class="col-4">
        <span class="d-flex col-sm justify-content-end mb-5">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Traitée
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
            <span class="dropdown-item">En cours</span>
            <span class="dropdown-item ">En attente</span>
          </div>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <span class="font-weight-bold">ggentet</span>
        <p class="font-weight-light">Cartes de visites / Design n°2</p>
        <img class="etiquette mb-3" src="img/design2.png" style="max-width: 50%;">
      </div>
      <div class="col-4 col-4 d-flex text justify-content-center">
        <p class="mt-4">80</p>
      </div>
      <div class="col-4">
        <span class="d-flex col-sm justify-content-end mb-5">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            En cours
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
            <span class="dropdown-item">Traitée</span>
            <span class="dropdown-item">En attente</span>
          </div>
        </span>
      </div>


    </div>
    <div class="row">
      <div class="col-4">
        <span class="font-weight-bold">mkarlen</span>
        <p class="font-weight-light">Impression / Format A3</p>
        <a href="pdf/Affiche_semiotique.pdf"> Fichier à imprimer </a>
      
      </div>
      <div class="col-4 col-4 d-flex text justify-content-center">
        <p class="mt-4">80</p>
      </div>
      <div class="col-4">
        <span class="d-flex col-sm justify-content-end mb-5">
          <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            En cours
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
            <span class="dropdown-item">Traitée</span>
            <span class="dropdown-item">En attente</span>
          </div>
        </span>
      </div>


    </div>

  </div>
    <!-- End your project here-->
</body>
<footer class="container-max-widths bg-light mt-5">
    <div class="d-flex justify-content-center ">
      <img class="mt-5 mb-4" src="img/Espace_entreprise_logo.svg" style="width: 12rem" />
    </div>
  </footer>
  
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