<?php 

	include ('connexion.php');// INCLUSION DE LA PAGE DE CONNEXION
	$connexion = connect();// CONNEXION A LA BASE DE DONNEES

 ?>

 <table class="table table-bordered text-center">
 	<thead style="background-color: #AEB6BF;">
 		<th>identifiant</th>
 		<th>nom</th>
 		<th>prenom</th>
 		<th>actions</th>
 	</thead>
 	<tbody style="background-color: #F4F6F7;">
 		<?php 
		# code...
		$sql = "SELECT * FROM stagiaire";
		$requete = $connexion -> prepare($sql);

		$requete ->execute(); 
	
 		While ($resultat = $requete->fetch(PDO::FETCH_OBJ)) {?>

 			<tr>
 				<td><?= $resultat ->id ?></td>
 				<td><?= $resultat ->nom ?></td>
 				<td><?= $resultat ->prenom?></td>
 				<td>
 					<a href="suppression.php ? id=<?=$resultat->id?>">
 						<input class="btn btn-danger" type="submit" name="supprimer" value="Supprimer">
 					</a>
 					<a href="modification.php ? id=<?=$resultat->id?>">
 						<input class="btn btn-warning" type="submit" name="modifier" value= "Modifier">
 					</a>
 					<a href="detail.php ? id=<?=$resultat->id?>">
 						<input class="btn btn-info" type="submit" name="detail" value="Details">
 					</a>
 				</td>
 			</tr>
 		<?php } ?>
 	</tbody>
 </table>

 <div class="text-center">
 	<a href="formulaire.php">
 		<button class="btn btn-secondary">
 			Retour
 		</button>
 	</a>
 </div>
	 

