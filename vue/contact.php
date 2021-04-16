<!DOCTYPE html>
<?php include_once('./vue/header.php'); ?>
<!-- Fin du Header -->
<section class="jumbotron  ">
    <div class="container">
        <h1 class="jumbotron-heading profil text-center" > Contact </h1></br>
    </div>
</section>

<div class=contact>
    <p> Nom</p>
    <input name="nom" type="text" required/>
    <br>
    <br>
    <p> Votre email</p>
    <input name="email" type="text" required/>
    <br>
    <br>
    <p> Objet</p>
    <input name="objet" type="text" required/>
    <br>
    <br>
    <p> Votre Message</p>
    <input class="msg" name="message" type="text" required/>
    <br>
    <br>
    <input class="submit" type="submit" value="Valider">
</div>

<br>
<br>
<br>
<br>


<!-- Footer -->
<?php include('./vue/footer.php');?>
<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

