<?php
	session_start();
	if($_SESSION['connect']==false){
		header('Location:identification.php');
	};

	//initialisation des variable
	$nom="";
	$prenom="";
	$login="";
	$psw="";
	$iduti="";
	
	// récupération des champs avec verification des zone de saisi
	
	if (isset($_POST['nom'])&& $_POST['nom'] != "" ){
		$nom=$_POST['nom'];
		
	} 
	else { 
		$nom="attention aucun nom saisie";
	}
	echo "<br/>votre nom est :".$nom;
	
	
	if (isset($_POST['prenom'])&& $_POST['prenom'] != "" ){
		$prenom=$_POST['prenom'];
	} 
	else { 
		$prenom="attention aucun prenom saisie";
	}
	echo "<br/>votre prenom est :".$prenom;
	
	
	if (isset($_POST['login'])&& $_POST['login'] != "" ){
		$login=$_POST['login'];
	} 
	else { 
	$login="attention aucun login saisie";
	}
	echo "<br/>votre login est :".$login;
	 
	
	if (isset($_POST['psw'])&& $_POST['psw'] != "" ){
		$psw=$_POST['psw'];
		}
	else {
		$psw="attention aucun psw saisie";
	}
	echo "<br/>votre psw est :".$psw;
	
		
	if (isset($_POST['identifient'])){
		$idetu=$_POST['identifient'];
	}
	echo "<br/>votre id est :".$idetu;
	
	
	// modif dans la BDD
	include ("cnx.php");
	
	if ($cnx->exec("UPDATE utilisateur SET UTI_NOM='".$nom."', UTI_PRENOM='".$prenom."', UTI_LOGIN='".$login."', UTI_PSW='".sha1($psw)."' WHERE UTI_ID=".$idetu)){
		echo "<p>"." Modification effectué"."</p>";
	}
	
	
	header('Location:profil.php');
?>