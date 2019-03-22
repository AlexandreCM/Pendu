<?php
session_start();
if($_SESSION['connect'] == false){
	header('Location:identification.php');
}
$_SESSION['PARTIE'] = true;
header('Location:pendu.php');
?>