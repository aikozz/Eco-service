<?php


    function getArticles(){




    }


    function getAllArticles(){
        include('connexion.php');
        $sql = "SELECT * FROM article  ORDER BY date_ajout DESC";
        $pdo = $pdo->prepare($sql);
      
        $pdo->execute();
  
        $results = $pdo->fetchAll();
        return $results;
    }


 ?>