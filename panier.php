<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Mon panier</title>
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
          <span class="m-2">Retour à l'accueil</span>
        </a>
      </div>
    </nav>
  </div>

  <div class="container col-md-8">
    <div class="row">
      <div id="svg_panier" class="mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#00A35C" class="bi bi-cart4"
          viewBox="0 0 16 16">
          <path
            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
        </svg>


      </div>
      <p class="text-center mt-3 font-weight-bold">MON PANIER</p>
    </div>


    <hr size="4px">
    <div class="row ">
      <div class="col">Produit</div>
      <div class="col text-end">Quantité</div>

    </div>
    <hr size="4px">

    <div class="row">
      <div class="col-8">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00A35C" class="bi bi-card-heading"
          viewBox="0 0 16 16">
          <path
            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
          <path
            d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
        </svg>
        <span class="m-4 font-weight-bold">Cartes de visite</span>
        <p class="design">Design b</p>
      </div>
      <div class="col-4">
        <span class="d-flex col-sm justify-content-end mb-5">500</span>
      </div>

      <div class="col-8">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00A35C" class="bi bi-printer"
          viewBox="0 0 16 16">
          <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
          <path
            d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
        </svg>
        <span class="m-4 font-weight-bold">Impression</span>
        <p class="design">Feuillle A3 </p>
      </div>
      <div class="col-4">
        <span class="d-flex justify-content-end mb-5">1000</span>
      </div>
      <div class="col-sm">
        <button type="button" class="btn btn-dark btn-rounded fa-pull-right mt-4 ml-5">COMMANDER</button>
      </div>
    </div>
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