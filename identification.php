<?php
session_start();
if($_SESSION['connect'] == true){
	header('Location:accueil.php');
}
?>
<!DOCTYPE HTML>

<html>

	<head>
		<title>Identification</title>
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
		<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="image/favicon.png" />
	</head>

	<body>
		
		<h1>Connexion</h1>
		<div class="app">
		<a class="btn" href="accueil.php">Page d'accueil</a>
		<form method="post" action="auth.php">
			<div class="info">
			<p><label for="login">Votre login : </label><br/>
			<input type="text" name="login" size="30px" maxlenght="25" id="login"  /></p>
			<p><label for="psw">Votre mot de passe : </label><br/>
			<input type="password" name="psw" size="30px" maxlenght="15" id="psw" /></p>
			</div>
			<br/>
			<?php
			if($_SESSION['erreur']==true){
				echo "Identifiant ou mot de passe incorrect.<br/><br/>";
			};
			?>
			
			<input class="btn" type="submit" name="valider" id="valider" value="Valider"/><br/><br/>
			<a class="btn" href="creation.php">pas inscrit ?</a>
		</form>
		</div>
		
		
	</body>
	
</html>