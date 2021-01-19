<!DOCTYPE html>
<html>
	<head>
		<title>Mini projet de formulaire avec php</title>
		<meta charset="utf-8">
		
	</head>
	<body>
		<!-- <fieldset>  c'est pour encadrer le formulaire en html-->
		<div class="container-fluid">
			<div class="container">	
				
				<form class="form form-control" method="POST" action="insertion.php" enctype="multipart/form-data" style="background-color: #F4F6F7;">
					<strong><h2 class="text-center">Inscription</h2></strong>
					<div class="row">
						<div class="mb-3 col-6">
							<label class="form-label" for="prenom">Pénom:</label>
							<input class="form-control" type="text" name="prenom" id="prenom" placeholder="@exemple:souleymane" value="">
						</div>
						<div class="mb-3 col-6">
							<label class="form-label" for="nom">Nom:</label>
							<input class="form-control" type="text" name="nom" id="nom" placeholder="@exemple:sall"  value="">
						</div>
						<div class="mb-3 col-6">
							<label class="form-label" for="date">Date de naissance:</label>
							<input class="form-control" type="date" name="date" id="date" placeholder="@exemple:jj/mm/aaaa"  value="">
						</div>
						<div class="mb-3 col-6">
							<label class="form-label" for="lieu">Lieu de naissance:</label>
							<input class="form-control" type="text" name="lieu" id="lieu" placeholder="@exemple:dakar"  value="">
						</div>

						<div class="col-6">
							Sexe:
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexe" id="sexeH" value="Homme">
								<label class="form-check-label" for="sexeH" name>
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
							<input class="form-control" type="text" name="adresse" id="adresse" placeholder="@exemple:gueule tapee"  value="">
						</div>
						<div class="mb-3 col-6">
							<label class="form-label" for="motivation">Motivation:</label>
							<input class="form-control" type="file" name="motivation" id="motivation" placeholder="@exemple:inserer un fichier depuis votre pc">
						</div>
						<div class="mb-3 col-6">
							<label class="form-label" for="fonction">Fonction:</label>
							<input class="form-control" type="text" name="fonction" id="fonction" placeholder="@exemple:developpeur junior" value="">
						</div>
						<div class="mb-3 col-6">
							<label class="form-label" for="message">Message:</label>
							<textarea class="form-control" type="text" name="message" id="message" placeholder="@exemple:commentaire" rows="5" value=""></textarea>
							
						</div>
						<div class="col-6" style="margin-top: 50px;">
							<div>
								<input class="btn btn-primary form-control" type="submit" name="valide" value="Envoyé">
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
		</div>
		<!-- </fieldset> -->
		

	</body>
</html>