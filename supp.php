<?php
session_start();
if($_SESSION['connect']==false){
	header('Location:identification.php');
}
	
	//initialisation des variable
	
	$iduti=$_POST['identifient'];
	echo "DELETE FROM utilisateur WHERE UTI_ID=".$iduti;
	
	if (isset($_POST['valider'])){
		include ("cnx.php");
		$cnx->exec("DELETE FROM utilisateur WHERE UTI_ID=".$iduti);
		if ($_SESSION['admin'] == false ){
			header('Location:deconnexion.php');
		}
		else{
			header('Location:form_admin.php');
		}
	}
	else {
		header('Location:profil.php');
	}
	
?>