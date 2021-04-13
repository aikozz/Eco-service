
<?php include_once('./vue/header.php'); ?>
<!-- Fin du Header -->
<section class="jumbotron  ">
    <div class="container">
        <h1 class="jumbotron-heading DecouvrezNosProduits text-center" >Decouvrez nos produits </h1></br>
        <div >
            <a class="text-left" id="nouveautesProduits" onclick="showNouveautes()">Nouveautés </a>
            <a class="text-left" id="toutProduits" onclick="showAllProduits()">Tous les produits </a>
        </div>
    </div>
</section>

<div class="container w-100 " id="" >
    <div id="allArticles">

        <div class="row"  action="./index.php/?modele=article&action=getAllArticles">

            <?php include('./modele/connexion.php');
            $sql = "SELECT * FROM article ";
            $pdo = $pdo->prepare($sql);
        
            $pdo->execute();

            while($result = $pdo->fetch())
            {  
            ?>
                <div class="row w-100 col-6"> 
                   
                    <div class="col-11 articleProducts text-center">
                        <img src ="http://localhost/Eco-service/vue/img/articleImg/<?php echo $result['img'] ?>.jpg" class="img-fluid rounded " width="90%">
                        <p> Catégorie :  <?php echo $result['categoriearticle'] ; ?></p>
                        <p> Prix :  <?php echo $result['prix'] ; ?></p>
                        <button> Ajouter au panier</button>
                    </div>
    
                </div>  
            <?php }?>
        </div>
    </div>
        <div id="newArticles">
            <div class="row" action="./index.php/?modele=article&action=getAllArticles">

                <?php include('./modele/connexion.php');
                $sql = "SELECT * FROM article  ORDER BY date_ajout DESC";
                $pdo = $pdo->prepare($sql);
            
                $pdo->execute();

                while($result = $pdo->fetch())
                {  
                ?>
                    <div class="row w-100 col-6"> 
                    
                        <div class="col-11 articleProducts text-center">
                            <img src ="http://localhost/Eco-service/vue/img/articleImg/<?php echo $result['img'] ?>.jpg" class="img-fluid rounded " width="90%">
                            <p> Catégorie :  <?php echo $result['categoriearticle'] ; ?></p>
                            <p> Prix :  <?php echo $result['prix'] ; ?></p>
                            <button> Ajouter au panier</button>
                        </div>
        
                    </div>  
                <?php }?>
            </div>
        </div>
    </div>

</div>




<!-- Footer -->
<?php include('./vue/footer.php');?>
<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>
<script>
    function showNouveautes() {
    var buttonNouveauteProduit = document.getElementById('nouveautesProduits');
    var buttonToutProduits = document.getElementById("toutProduits");
    var allArticles = document.getElementById("allArticles");
    var newArticles = document.getElementById("newArticles");


    allArticles.style.display = "none";
    newArticles.style.display = "block";
    buttonNouveauteProduit.style.fontWeight="bold";
    buttonNouveauteProduit.style.textDecoration="underline";
    buttonNouveauteProduit.style.textDecorationColor="#668B22";
    buttonToutProduits.style.textDecoration="none";

    buttonToutProduits.style.fontWeight="normal";
}
function showAllProduits() {
    var buttonNouveauteProduit = document.getElementById('nouveautesProduits');
    var buttonToutProduits = document.getElementById("toutProduits");
    var allArticles = document.getElementById("allArticles");
    var newArticles = document.getElementById("newArticles");


    allArticles.style.display = "block";
    newArticles.style.display = "none";
    buttonNouveauteProduit.style.fontWeight="normal";
    buttonToutProduits.style.fontWeight="bold";
    buttonToutProduits.style.textDecoration="underline";
    buttonToutProduits.style.textDecorationColor="#668B22";
    buttonNouveauteProduit.style.textDecoration="none";

}

</script>
</body>
</html>
