<?php


    function getArticles(){




    }


    function getNewArticles(){
        include('connexion.php');
        $sql = "SELECT '*' FROM article LIMIT 0,3 ORDER BY date_ajout DESC";
        $pdo = $pdo->prepare($sql);
      
        $pdo->execute();
  
        $result = $pdo->fetch();
        var_dump($result); die;
        



    }