<?php
session_start();
if($_SESSION['connect']==false){
	header('Location:identification.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>formulaire modif</title>
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
		<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="image/favicon.png" />
	</head>
	<body>
	<?php
	
	if ($_SESSION['admin'] == true ){
		$id=$_GET['iduti'];
	}
	else {
		$id=$_SESSION['id'];
	}
	?>
	<h1>Suppression de compte ?</h1>
	<div class="app">
	<p>Êtes vous sûr de voiloir supprimer votre compte ?</p>
	<form method="post" action="supp.php">
		<input type="submit" class="btn" name="valider" value="oui"/>
		<input type="submit" class="btn" name="non" value="non"/>
		
		<input type="hidden" name="identifient" value="<?php echo $id; ?>" />
	</form>
	</div>
	</body>
</html>