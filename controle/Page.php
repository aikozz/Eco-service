<?php

function acc(){
	include("./modele/article.php");
	$results = getAllArticles();
	require("./vue/accueil.php");
	
}

function connexion(){
	require_once("./vue/inscription.php");
}

function allProducts(){
	include("./modele/article.php");
	$results = getAllArticles();
	require_once("./vue/allProducts.php");
	
}

function services(){
	require_once("./vue/services.php");
}

?>