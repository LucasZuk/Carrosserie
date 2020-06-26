	<!-- On essaye de se connecter à la BDD	-->
	<?php 	
		try 
		{
			$bdd = new PDO('mysql:host=localhost;dbname=Test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			/* $bdd = new PDO('mysql:host=lucasznzuk.mysql.db;dbname=lucasznzuk;charset=utf8', 'lucasznzuk', 'ZukervalrycXy6969'); 
			*/

		}
		catch (Exception $e) // Si n'y arrive pas, affiche l'erreur
		{
		        die('Erreur : ' . $e->getMessage());
		}
	?>