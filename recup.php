<?php session_start() ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Nom de la page</title>
		
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
	</head>
	
	<body>
<?php

		
		$nom="";
		$prenom="";
		$psw="";
		$login="";
		$psw2="";
		
		
		
		
		
		// teste nom
		
		if (isset($_POST['nom']) && ($_POST['nom'])!=""){
			$nom=$_POST['nom']; 
		}
		
		
		
		
		// test prenom
		
		if(isset($_POST['prenom']) && ($_POST['prenom'])!=""){
			$prenom=$_POST['prenom'];
		
		}
		// test login
		
		if(isset($_POST['login']) && ($_POST['login'])!=""){
			$login=$_POST['login'];
			
		}
		
		
		
	
		
		
		// test psw
		echo "<p>mot de passe : ";
		if (isset($_POST['psw'])){
			$psw=$_POST['psw'];
			echo $psw."</p>";
		}
		
		
		
		// test psw2
		echo "<p>mot de passe 2 : ";
		if (isset($_POST['psw2'])) {
			$psw2=$_POST['psw2'];
			echo $psw2."</p>";
		}
		else {
			echo "Le mot de passe ne correspond pas !</p>";
			
		}
				
		
		//INCLUR UNE CONNEXION A LA BDD
		include ("cnx.php");
		
		// INSERTION DE DONNEES 
		if($psw==$psw2 && ($_POST['psw'])!="" && ($_POST['login'])!="" && ($_POST['nom'])!=""&& ($_POST['prenom'])!=""){
		$cnx->exec("insert into utilisateur (UTI_NOM,UTI_PRENOM,UTI_LOGIN,UTI_PSW) 
		VALUES ('".$nom."','".$prenom."', '".$login."','".$psw."' )");
		$_SESSION['connect']==true;
		header('Location:identification.php');
		}
		else{
			$_SESSION['connect']==false;
			header('Location:creation.php');
			}
		
?>
	
	</body>
	
</html>