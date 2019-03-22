<?php
	session_start();
	if($_SESSION['admin']==false){
		header('Location:accueil.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>etudiant</title>
	<meta charset="utf-8">
	<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
	<link href="image/favicon.png" type="image/png" rel="icon" />
	</head>
	
	<body>
	<h1>Base de Données</h1>
	<div class="app">
	<table border=2px>
		<tr>
			<td>ID</td>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Login</td>
			<td>Mdp</td>
			<td>Modif</td>
			<td>Supp</td>
		<tr>
		
		<?php
		
		include ("cnx.php");
		
		$resultat = $cnx->query('select * from utilisateur');
	
		while ($donnees = $resultat->fetch())
		{
		echo "<tr><td>".$donnees['UTI_ID']."</td>
		<td>".$donnees['UTI_NOM']."</td>
		<td>".$donnees['UTI_PRENOM']."</td>
		<td>".$donnees['UTI_LOGIN']."</td>
		<td>".$donnees['UTI_PSW']."</td>
		<td><a href='form_modif.php?iduti=".$donnees['UTI_ID']."'>modif</a></td>
		<td><a href='form_supp.php?iduti=".$donnees['UTI_ID']."'>supp</a></td></tr>" ;
		}
		?>
	</table>
	<br/><br/>
	<a class="btn" href="profil.php">retour</a>
	</div>
	
	</body>
</html>