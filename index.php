<?php 
session_start();
$_SESSION['erreur'] = false;
$_SESSION['admin'] = false;

if ($_SESSION['connect'] == true){
	header('Location:accueil.php');
}
else{
	$_SESSION['connect'] = false;
	header('Location:index2.php');
}

?>