<?php
	session_start();
	if($_SESSION['connect']==false){
		header('Location:identification.php');
	};
?>
<!DOCTYPE html>
<html>
	<head>
	<title>formulaire de modification</title>
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
		<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="image/favicon.png" />
	</head>
	<body>
	<?php 
		
	if ($_SESSION['admin'] == true ){
		$iduti=$_GET['iduti'];
	}
	else {
		$iduti=$_SESSION['id'];
	}
		
		include ("cnx.php");
		$infoetu = $cnx->query('select * from utilisateur where UTI_ID='.$iduti);
		// echo 'select * from utilisateur where UTI_ID='.$iduti;
		
		while ($donnees = $infoetu->fetch()) {
			$id=$donnees['UTI_ID'];
			$nom=$donnees['UTI_NOM'];
			$prenom=$donnees['UTI_PRENOM'];
			$login=$donnees['UTI_LOGIN'];
			$psw=$donnees['UTI_PSW'];
		}
		
		?>
		<h1>Formulaire de modification</h1>
		<div class="app">
		<form method="post" action="modif.php">
		<div class="info">
			<label for="nom" >Nom : </label><br/>
			<input type="text" name="nom" maxlength="30" value="<?php echo $nom ;?>" /><br/><br/>
			<label for="prenom" >Prénom : </label><br/>
			<input type="text" name="prenom" maxlength="30" value="<?php echo $prenom ;?>" /><br/><br/>
			<label for="login" >Login : </label><br/>
			<input type="text" id="login" name="login" maxlength="20"  value="<?php  echo $login; ?>" /><br/><br/>
			<label for="psw" >Mot de passe : </label><br/>
			<input type="password" id="psw" name="psw" maxlength="20" value="<?php  echo $psw ;?>"/>
		</div>
			<br/><br/>
			<input type="submit" class="btn" name="valider" value="valider"/><br/><br/>
			<a class="btn" href="profil.php">retour</a>
			<input type="hidden" name="identifient" id="identifient" value="<?php echo $id; ?>" />
		</form>
		</div>
	</body>
</html>