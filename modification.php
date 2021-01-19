<?php 

	include('connexion.php');
	$connexion = connect();

	$id = $_GET['id'];


	$sqldonnee = "SELECT * FROM stagiaire WHERE id = $id";
	$requetedonnee=$connexion->prepare($sqldonnee);
	$requetedonnee->execute();


	While($resultat = $requetedonnee->fetch(PDO::FETCH_OBJ)){?>
		<?php 
			//var_dump($resultat);
		 ?>
	 <legend>Modification</legend>
	 	<div class="container">
			<form class="form form-control" method="POST" action="modifier.php" enctype="multipart/form-data" style="background-color: #F4F6F7;">
				<div class="row">
					<div class="mb-3 col-6">
						<label class="form-label" for="prenom">Pénom:</label>
						<input class="form-control" type="text" name="prenom" id="prenom" value="<?= $resultat ->prenom?>">
					</div>
					<div class="mb-3 col-6">
						<label class="form-label" for="nom">Nom:</label>
						<input class="form-control" type="text" name="nom" id="nom" value="<?= $resultat ->nom ?>">
					</div>
					<div class="mb-3 col-6">
						<label class="form-label" for="date">Date de naissance:</label>
						<input class="form-control" type="date" name="date" id="date" value="<?= $resultat ->date_naiss ?>">
					</div>
					<div class="mb-3 col-6">
						<label class="form-label" for="lieu">Lieu de naissance:</label>
						<input class="form-control" type="text" name="lieu" id="lieu" value="<?= $resultat ->lieu_naiss ?>">
					</div>

					<div class="col-6">
						Sexe:
						<div class="form-check">
							<input class="form-check-input" type="radio" name="sexe" id="sexeH" value="Homme">
							<label class="form-check-label" for="sexeH">
								Homme
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="sexe" id="sexeF" value="Femme">
							<label class="form-check-label" for="sexeF">
								Femme
							</label>
						</div>
					</div>
					
					
					<div class="mb-3 col-6">
						<label class="form-label" for="adresse">Adresse:</label>
						<input class="form-control" type="text" name="adresse" id="adresse" value="<?= $resultat ->Adresse ?>">
					</div>
					<div class="mb-3 col-6">
						<label class="form-label" for="motivation">Motivation:</label>
						<input class="form-control" type="file" name="motivation" id="motivation" value="">
					</div>
					<div class="mb-3 col-6">
						<label class="form-label" for="fonction">Fonction:</label>
						<input class="form-control" type="text" name="fonction" id="fonction" value=" <?= $resultat ->fonction ?>">
					</div>
					<div class="mb-3 col-6">
						<label class="form-label" for="message">Message:</label>
						<textarea class="form-control" type="text" name="message" id="message" rows="5" value="<?= $resultat ->message?>"></textarea>
						
					</div>
					<input type="hidden" name="id" value="<?=$resultat->id?>">
					<div class="col-6" style="margin-top: 50px;">
						<div>
							<a href="modifier.php">
								<input class="btn btn-primary form-control" type="submit" name="valide" value="Modifier">
							</a>
						</div>
						<div style="padding-top: 10px;">
							<a href="affichage.php">
								<input class="btn btn-secondary form-control" type="button" name="retour" value="Retour">
							</a>
						</div>
					</div>
				</div>
				
				
			</form>
		</div>
	<?php }

	
?>
