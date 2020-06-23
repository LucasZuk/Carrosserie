<!DOCTYPE html>
<html>
<head>
	<title>Carrosserie PEAKCELL</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
</head>
<body>
	<header>
		<section id="identite">
			<section>
				<img src="../IMAGES/LOGO-PEAKCELL-BLANC-SANS-FOND.png" alt="PEAKCELL" id="logo">
				<h2 id="baseline">La performance au service de la carrosserie</h2>
			</section>
		</section>
		<section id="login">
				<form method="Post" action="Carrosserie_Login.php">
					<p>
						<input type="text" name="Login" id="nom" size="30" maxlength="28" required placeholder="Login" /><br/>
						<input type="password" name="Mdp" id="mdp" size="30" maxlength="28" required placeholder="Mot de passe"/><br/>
					</p>
					<p>
						<input type="submit" name="Ok" value="Ok" id="ok">
					</p>
				</form>
			<div id="pbConnexion">
				<a href="mdpOublie" class="lien">Mot de passe oublié ?</a>
				<a href="Inscription.html" class="lien">Créer un compte</a>
			</div>
		</section>
	</header>
	<section id="corps">
		<p><?php print_r($_SERVER); ?></p>
		<p id="slogan"> La performance passe par le pilotage de votre activité.<br/>Découvrez nos <a href="tableauDeBord" class="lien">tableaux de bords stratégiques</a>.</p>
	</section>
	<footer>
		<section id="contact">
			<h2>PEAKCELL</h2><br/>
			<h3 class="site"><a href="www.peakcell.com">www.peakcell.com</a></h3>
			<p class="mail">contact@peakcell.com</p>
			<p class="adresse">33b, rue de la république<br/>69002 Lyon</p>
		</section>
		<section id="FAQ"><a href="FAQ">FAQ</a></section>
		<section id="mentionsLegales"><p>Mentions Légales</p></section>
	</footer>
	<style type="text/css" href="../JS/Login.js"></style>
</body>
</html>