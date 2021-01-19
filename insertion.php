<?php 

	include ('connexion.php');// INCLUSION DE LA PAGE DE CONNEXION
	$connexion = connect(); // CONNEXION A LA BASE DE DONNEES
	
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$date = $_POST['date'];
		$lieu = $_POST['lieu'];
		$sexe = $_POST['sexe'];
		$adresse = $_POST['adresse'];
		$fichier = $_FILES['motivation'];
		//$motivation = $fichier;
		$fonction = $_POST['fonction'];
		$message = $_POST['message'];


		if (isset($prenom) && isset($nom) && isset($date) && isset($lieu) && isset($sexe) && isset($adresse) && isset($fonction) && isset($message)) {
			# code...
			$sql = "INSERT INTO stagiaire (prenom, nom, date_naiss, lieu_naiss, sexe, adresse, fonction, message)
				VALUES(:prenom,:nom,:date_naiss,:lieu_naiss,:sexe,:adresse, :fonction,:message)";
		}else{
			echo "Remplissez tous les champs";
		}


		$requete = $connexion -> prepare($sql);

		$requete -> bindParam(':prenom', $prenom);
		$requete -> bindParam(':nom', $nom);
		$requete -> bindParam(':date_naiss', $date);
		$requete -> bindParam(':lieu_naiss', $lieu);
		$requete -> bindParam(':sexe', $sexe);
		$requete -> bindParam(':adresse', $adresse);
		//$requete -> bindParam(':motivation', $motivation);
		$requete -> bindParam(':fonction', $fonction);
		$requete -> bindParam(':message', $message);

		
		$requete -> execute();

	//REDIRECTIONNEMENT
	header('location: affichage.php');

 ?>

 