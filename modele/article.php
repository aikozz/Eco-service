<?php


    function getArticles(){




    }


    function getAllArticles(){
        include('connexion.php');
        $sql = "SELECT * FROM article  ORDER BY date_ajout DESC";
        $pdo = $pdo->prepare($sql);
      
        $pdo->execute();
  
        $result = $pdo->fetch();
        var_dump($result); die;
        



    }
    include('connexion.php');
    $sql = "SELECT * FROM article  ORDER BY date_ajout DESC";
    $pdo = $pdo->prepare($sql);
  
    $pdo->execute();

    while($result = $pdo->fetch())
    {  
    ?>
        <div class="news">
            <div>
                <h3> 
                    <?php echo  htmlspecialchars($result['id']) ;?>
                    <em> le <?php echo $result['prix'] ; ?></em>
                    <em> ID :  <?php echo $result['description'] ; ?></em>
    
                </h3>  
            </div>
 <?php }?>