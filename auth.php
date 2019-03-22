<?php
	session_start();
	include ("cnx.php");
	// $_SESSION['erreur']=false;

		
	$login="";
	$psw="";
	$nb="";
	
	
	if (isset($_POST['login'])&& $_POST['login']!=""){
		$login=$_POST['login'];
	}
	else {$login="Attention aucun login saisie!";}

	if (isset($_POST['psw'])&& $_POST['psw']!=""){
		$psw=$_POST['psw'];
	}
	else {$psw="Attention aucun mot de passe saisie!";}
	
	
	$resultat = $cnx->query("SELECT COUNT(UTI_ID) AS NB, UTI_ID, UTI_NOM, UTI_PRENOM FROM utilisateur WHERE UTI_LOGIN='".$login."' AND UTI_PSW='".$psw."' GROUP BY UTI_ID");
	// echo "SELECT COUNT(UTI_ID) AS NB, UTI_ID, UTI_NOM, UTI_PRENOM FROM utilisateur WHERE UTI_LOGIN='".$login."' AND UTI_PSW='".$psw."'";
	
	while($donnees=$resultat->fetch()){
		$nb=$donnees['NB'];
		$_SESSION['id']=$donnees['UTI_ID'];
		$_SESSION['nom']=$donnees['UTI_NOM'];
		$_SESSION['prenom']=$donnees['UTI_PRENOM'];
		
	}
	echo "<br/>nb: ".$nb;
	
	echo "<br/>PRENOM: ".$_SESSION['prenom'];
	echo "<br/>NOM: ".$_SESSION['nom'];
	echo "<br/>id: ".$_SESSION['id'];
	
		
		if($nb>0){
			$_SESSION['connect']=true;
			$_SESSION['erreur']=false;
			if($login=="admin"){
				$_SESSION['admin']=true;
			}
			header('Location:accueil.php');
		}
		else{
			$_SESSION['erreur']=true;
			$_SESSION['connect']=false;
			header('Location:identification.php');
		}
?>
