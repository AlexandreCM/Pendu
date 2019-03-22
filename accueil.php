<?php 
session_start();
$_SESSION['PARTIE']=true;
$_SESSION['faute'] = 0;
$_SESSION['gagner'] = 0;

if($_SESSION['connect'] == false){
	header('Location:index.php');
}?>
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
			<br/><br/>
			
			<a href="pendu.php" id="jouer" class="btn">Jouer</a><br/>
			<a href="profil.php" class="btn">mon compte</a><br/>
			<a href="deconnexion.php" class="btn">Deconnexion</a>
		</div>
	</body>
</html>