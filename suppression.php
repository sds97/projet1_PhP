<?php 
	include('connexion.php');//INSERTION DE LA PAGE DE CONNEXION
	$connexion = connect();// CONNEXION A LA BASE DE DONNEES


	$id = $_GET['id'];// APPEL DE L'URL ID DANS AFFICHAGE 
	$sql = "DELETE FROM stagiaire WHERE id = $id";
	$requete = $connexion->prepare($sql);
	$requete -> execute();

	//REDIRECTIONNEMENT
	header('location: affichage.php');

 ?>


