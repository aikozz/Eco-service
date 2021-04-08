<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Site meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eco-Service</title>
    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

</head>
<body>
<!-- Header -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html" ><img src="./img/Logo.png" width="100" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-navicon" style="color:#668B22; font-size:28px;"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                
                
                <li class="nav-item col-4">
                    <a class="nav-link" href="product.html">Produits</a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" href="product.html">Services</a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                

            </ul>

            <div class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <a href="#" class ="iconnav" ><img title="search" alt="search" src="./img/icones/search.png" width="30px"></a> 
                    <a href="#" class ="iconnav"><img title="panier" alt="panier" src="./img/icones/panier.png" width="30px"></a> 
                    <a href="#" class ="iconnav"><img title="profil" alt="profil" src="./img/icones/profil.png" width="30px"></a> 


                </div>
                
            </div>
        </div>
    </div>
</nav>
<!-- Fin du Header -->

<script>

function showConnexion() {
    var selectConnexion = document.getElementById('selectConnexion');
    var connexionForm = document.getElementById("connexionForm");
    var inscriptionForm = document.getElementById("inscriptionForm");

    inscriptionForm.style.display = "none";
    connexionForm.style.display = "block";
    selectConnexion.style.fontWeight="bold";
    selectInscription.style.fontWeight="normal";
}
function showInscription() {
    var selectInscription = document.getElementById('selectInscription');

    var connexionForm = document.getElementById("connexionForm");
    var inscriptionForm = document.getElementById("inscriptionForm");

    selectInscription.style.fontWeight="bold"
    selectConnexion.style.fontWeight="normal";

    inscriptionForm.style.display = "block";
    connexionForm.style.display = "none";
  
}
</script>
<section class=" testici  container w-100 divBoxLog col-lg-4 col-10  ">
    <div class="row chooseLog">
            <a class="col-5-5 text-center justify-content-around itemConnec" id="selectConnexion" onclick="showConnexion()">CONNEXION </a>
            <a class=" col-custom text-center justify-content-around" ><span class="vertical"></span></a>

            <a class=" col-5-5 text-center justify-content-around itemConnec" id="selectInscription"onclick="showInscription()">INSCRIPTION</a>
        
    </div>
    <div class="row text-center logSignForm">
        <div id="connexionForm" style = "display:block;" class="container w-100 col-12">
            <form action="#" method="post">
                <p>Email  <br><input type="text" name="nom" /></p>
                <p>Mot de passe  <br><input type="text" name="age" /></p>
                <p><input type="submit" value="Se connecter"></p>
            </form>
        </div>
        <div id="inscriptionForm" style = "display:none;" class="container w-100 col-12">
            <form action="#" method="post">
                <p>Nom  <br><input type="text" name="nom" /></p>
                <p>Prénom <br><input type="text" name="prenom" /></p>
                <p>Email <br><input type="text" name="email" /></p>
                <p>Mot de passe  <br><input type="password" name="pass" /></p>
                <p>Confirmez votre mot de passe  <br><input type="password" name="confirmPass" /></p>
                <p>N° Siret <br> <input type="text" name="siret" /></p>

                <p><input type="submit" value="S'inscrire"></p>
            </form>
        </div>              
    </div>
</section>






<!-- Footer -->
<footer class="text-light">
    <div class="container">
        
        <div class="row">
        <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-envelope mr-2"></i> eco-service@gmail.com</li>
                    <li><i class="fa fa-phone mr-2"></i> 01 84 16 20 10</li>
                    <li><i class="fa fa-home mr-2"></i> 30 Rue Turbigo 75003 Paris</li>

                </ul>
            </div>
            

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Nous suivre</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>Description</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Eco-Service est une plateforme de mise en vente de produit Eco-Responsables, nous recyclons aussi les produits des professionnels !
                </p>
            </div>

            
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p>
            </div>
        </div>
    </div>
    
</footer>

<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>



