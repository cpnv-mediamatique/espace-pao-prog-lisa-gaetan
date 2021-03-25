<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

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

    <!-- La NavBar -->
    <div class="container-max-widths">
        <nav class="navbar navbar-dark primary-color retourSansDeco py-0">

            <div class="m-4">
                <a href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#00A35C"
                        class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                    <span class="m-2 fs-6">Retour à l'accueil</span>
                </a>
            </div>
            <div class="mx-4">
                <a href="panier.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#00A35C"
                        class="bi bi-cart4 mb-2" viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                    <span class="mx-3">Mon panier</span>
                </a>
            </div>
        </nav>
    </div>

    <div class="backgroundColorFonceCartesVisite">
        <div class="container">
            <div class="row">
                <div class="col m-5">
                    <h1 class="texteCartesVisite">Un design adapté à votre demande</h1>
                    <p class="texteCartesVisite">Imaginez des cartes de visite sur mesure, avec des designs et une
                        impression de qualité. Tout ça en quelque clics.</p>
                </div>
                <div class="col m-5">
                    <!-- Nbr de cartes -->
                    <div class="card">
                        <div class="row m-5">
                            <div class="d-flex col-7 align-items-center justify-content-center">
                                <div class="centrerCartes">
                                    <p class="card-text">
                                        Nombre d'exemplaires souhaités:
                                    </p>
                                </div>

                            </div>
                            <div class="d-flex col-5 align-items-center justify-content-center">

                                <select class="btn btn-success dropdown-toggle browser-default custom-select"
                                    aria-haspopup="true" aria-expanded="false">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">40</option>
                                    <option value="32">50</option>
                                    <option value="33">60</option>
                                    <option value="34">70</option>
                                    <option value="35">80</option>
                                    <option value="36">90</option>
                                    <option value="37">100</option>
                                </select>
                            </div>
                        </div>
                        <!-- Nom et prénom -->
                        <div class="d-flex row justify-content-center mb-3 mx-2">
                            <div class="col-10">
                                <div class="form-outline mb-3">
                                    <input type="text" id="form2Example2" class="form-control" />
                                    <label class="form-label" for="form2Example2">Nom & Prénom</label>
                                </div>
                            </div>
                        </div>
                        <!-- Titre -->
                        <div class="d-flex row justify-content-center mb-3 mx-2">
                        <input type="hidden" name="MAX_FILE_SIZE" value="838608" />

                        <input type="file" />
                            
                            
                            
                            
                            
                        </div>
                        <!-- Numéro de téléphone -->
                        <div class="d-flex row justify-content-center mb-3 mx-2">
                            <div class="col-10">
                                <div class="form-outline mb-3">
                                    <input type="text" id="form2Example2" class="form-control" />
                                    <label class="form-label" for="form2Example2">Numéro de téléphone</label>
                                </div>
                            </div>
                        </div>
                        <!-- Design choisi -->
                        <div class="row mt-2 mb-4 m-5 ">
                            <div class="col-12">
                                <div class="designChoisiGauche">
                                    <p class="card-text">
                                        Format choisi :
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <div class="form-check">

                                        <label class="alignerCdVdroite">
                                            <input type="radio" name="design" value="1" checked>
                                            <img class="imgDesignCDV"  src="img/A3.jpg" alt="Design 1">
                                          </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        
                                        <label class="alignerCdVgauche">
                                            <input type="radio" name="design" value="2" checked>
                                            <img class="imgDesignCDV"  src="img/A4.jpg" alt="Design 2">
                                          </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row mb-5">
                            <div class="centrerCartes">
                                <a href="cartesVisite.php" class="btn btn-dark">Commander</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex mt-5 justify-content-center">
        <img class="mb-5" src="img/Espace_entreprise_logo.svg" style="width: 12rem" />
    </div>


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