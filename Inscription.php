<?php
	require "reachBDD.php";
 ?>
 <?php
	require "header.php";
 ?>
		
		<?php 
			$inscrit = false;
			if ( isset($_POST('nomPersonne')) && isset($_POST('email')) && isset($_POST('motDePasse')) && isset($_POST('motDePasse2')) )
			{
				$nomPersonne = htmlspecialchars($_POST('nomPersonne'));
				$email = htmlspecialchars($_POST('email'));
				$motDePasse = password_hash($_POST('motDePasse'), PASSWORD_DEFAULT);
				$motDePasse2 = password_hash($_POST('motDePasse2'), PASSWORD_DEFAULT);

				


		 ?>
			 
		<?php 
			}
			else
			{
		?>
				<section class="fond-transparent-30">
				<form action="/inscription.php" method="POST" id="formulaireInscription">
					<h2>INSCRIPTION</h2>
					<h3>Rapide et facile</h3>
					<input type="text" name="nomPersonne" id="nomPersonne" placeholder="Votre nom" required="">
					<input type="mail" name="email" id="email" placeholder="Votre email" required="" />
					<input type="password" name="motDePasse" id="motDePasse" placeholder="Choisir un mot de passe" required="" />
					<input type="password" name="motDePasse2" id="motDePasse2" placeholder="Confirmer le mot de passe" required="" />
					<span id="alert">* Les deux mots de passe sont différents</span>
					<input type="submit" name="Valider" id="valider"/>
				</form>
			</section>

		<?php

			}

		 ?>

<?php 
	require "footer.php";
 ?>