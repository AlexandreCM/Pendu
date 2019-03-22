<?php 
session_start();
$_SESSION['erreur'] = false;
if($_SESSION['connect'] == true){
	header('Location:accueil.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pendu Grp-1</title>
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
		<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="image/favicon.png" />

	</head>
	<body>
		<h1>Bienvenue au jeu du pendu</h1>
		
		<div class="app">
			<h2>PENDU</h2>
			<img id="pendu" src="img/pendu.png" />
			
			<p>Merci de vous connecter avant de jouer.</p>
			<a href="identification.php" class="btn">connexion</a>
			<a href="creation.php" class="btn">inscription</a>
		</div>
	</body>
</html>