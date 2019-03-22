<?php
	session_start();
	if($_SESSION['connect']==false){
		header('Location:identification.php');
	}
?>

<!DOCTYPE HTML>

<html>

	<head>
		<title>Profil</title>
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
		
		<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
		<link href="image/favicon.png" type="image/png" rel="icon" />
		</head>

	<body>
		<h1>Mon compte</h1>
		<div class="app">
		<h2>Que voulez vous faire <?php echo $_SESSION['prenom'];?></h2>
		<a class="btn" href="accueil.php">retour</a><br/>
		<a class="btn" href="form_modif.php">Modification</a>
		<a class="btn" href="form_supp.php">Suppresion</a>
		<?php
		if ($_SESSION['admin']==true){
		?>
			<a class="btn" href="form_admin.php">Information</a>
			<?php
		}
		?>
		<a class="btn" href="deconnexion.php">Se deconneter</a>
		</div>
	</body>
	
</html>