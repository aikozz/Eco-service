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
<?php include('header.php'); ?>
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
                <p>Adresse <br><input type="text" name="adresse" /></p>
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
<?php include('footer.php');?>

<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>



