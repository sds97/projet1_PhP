<?php 


	function connect(){
		$server = "localhost";
		$login = "root";
		$pass = "";

		try {
			$connexion = new PDO("mysql:host=$server;dbname=inscription", $login, $pass);
			$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {

			die('Echec PDO: ' .$e -> getMessage());
			
		}

		return $connexion;

	}
	
	


 ?>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">