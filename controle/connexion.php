<?php


     function inscription(){
         include('./modele/user.php');
        $mdp = $_POST['mdp'];
        $email = $_POST['email'];
        $siret = $_POST['siret'];
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $prenom = $_POST['prenom'];
        $mdp = sha1($mdp);
        addUser($nom, $prenom, $email, $adresse, $mdp, $siret);

        include('./vue/inscription.php');


    }

    function login(){
        include('./modele/user.php');
        $mdp = $_POST['mdp'];
        $email = $_POST['email'];
        $mdp = sha1($mdp);
       
        login_user($email,$mdp); 
    }
?>