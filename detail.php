<?php 

	include('connexion.php');
	$connexion = connect();

 ?>

 <table class="table table-bordered text-center">
 	<thead  style="background-color: #85929E;">
 		<th>identifiant</th>
 		<th>nom</th>
 		<th>prenom</th>
 		<th>date de naissance</th>
 		<th>lieu de naissance</th>
 		<th>sexe</th>
 		<th>adresse</th>
 		<th>fonction</th>
 		<th>commentaire</th>
 	</thead>
 	<tbody style="background-color: #F4F6F7;">
 		<?php 
		# code...
		$id = $_GET['id'];
		$sql = "SELECT * FROM stagiaire WHERE id=$id";
		$requete = $connexion -> prepare($sql);

		$requete->execute();

		
 		While ($resultat = $requete->fetch(PDO::FETCH_OBJ)) {?>
 				<?php
 				//var_dump($resultat);?>
 			<tr>
 				<td><?= $resultat ->id ?></td>
 				<td><?= $resultat ->nom ?></td>
 				<td><?= $resultat ->prenom ?></td>
 				<td><?= $resultat ->date_naiss ?></td>
 				<td><?= $resultat ->lieu_naiss ?></td>
 				<td><?= $resultat ->sexe ?></td>
 				<td><?= $resultat ->Adresse ?></td>
 				<td><?= $resultat ->fonction ?></td>
 				<td><?= $resultat ->message ?></td>
 			</tr>
 		<?php } ?>
 	</tbody>
 </table>

 <div class="text-center">
 	<a href="affichage.php">
 		<button class="btn btn-secondary">
 			Retour
 		</button>
 	</a>
 </div>

