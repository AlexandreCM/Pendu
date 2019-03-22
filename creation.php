<?php
session_start();
if($_SESSION['connect'] == true){
	header('Location:profil.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Inscription</title>
		
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
		
		<link href="css.css" type="text/css" rel="stylesheet"/>
	<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="image/favicon.png" />	</head>
	
	<body>
		<h1>Formulaire d'inscription</h1>
		
		<form method="post" action="recup.php">
		<div id="form" class="app">
			<div class="info" >
			<label for="nom">Nom : </label><br/>
				<input type="text" name="nom" id="nom" maxlength="30" size="53em" />
				
			<br/><br/>
			<label for="prenom">Prénom : </label><br/>
				<input type="text" name="prenom" id="prenom" maxlength="30" size="53em" />
			<br/><br/>
			<label for="login" >Login : </label> 
			<br/>
			<input type="text" id="login" name="login" maxlength="20"size="53em" />				
			<br/><br/>
			<label for="psw">Mot de passe</label> :<br/>
				<input type="password" name="psw" id="psw" maxlength="20" size="53em" />
				
			<br/><br/>
			<label for="psw2">Confirmer mot de passe</label> :<br/>
				<input type="password" name="psw2" id="psw2" maxlength="20" size="53em" />
			</div>
			<br/><br/>
			<input class="btn" type="submit" name="valider" id="valider" value="Valider"/>
		</form>
		
		<br/><br/>
			<a class="btn" href="creation.php">effacer</a>
			<a class="btn" href="identification.php">Deja un compte ?</a><br/>
			<a class="btn" href="index.php">Page d'accueil</a>
		</div>
	</body>
</html>