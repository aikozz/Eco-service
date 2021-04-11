<?php

  function addUser($nom,$prenom,$email,$adresse,$mdp,$siret){
    include('connexion.php');

    if(empty($siret))
        $sql = "INSERT INTO USER (email, mdp, adresse, prenom, nom, statut) VALUES ('$email', '$mdp', '$adresse', '$prenom', '$nom', '1')";
    else
        $sql = "INSERT INTO USER (email, mdp, adresse, prenom, nom, statut, siret) VALUES ('$email', '$mdp', '$adresse', '$prenom', '$nom', '1', '$siret')";
        $test = $pdo->exec($sql);
   


}