<?php 

	include('connexion.php');
	$connexion = connect();

	$id = $_POST['id'];

	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$date = $_POST['date'];
	$lieu = $_POST['lieu'];
	$sexe = $_POST['sexe'];
	$adresse = $_POST['adresse'];
	$fonction = $_POST['fonction'];
	$message = $_POST['message'];

	
	$sql = "UPDATE stagiaire SET 
			prenom='$prenom',
			nom='$nom',
			date_naiss='$date',
			lieu_naiss='$lieu',
			sexe='$sexe',
			adresse='$adresse',
			fonction='$fonction',
			message='$message'
		WHERE id='$id'";

	$requete = $connexion->prepare($sql);
	$requete->execute();

	//REDIRECTIONNEMENT
	header('location: affichage.php');
  
 ?>
<!--  <div class="alert alert-dismissible fade show" role="alert">
 	Modification reussie!!
 	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div> -->