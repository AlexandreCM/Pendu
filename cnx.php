<?php
try{
	$cnx = new PDO('mysql:host=localhost;dbname=pendu;charset=utf8', 'test', 'test');
}
catch (PDOException $erreur){
	echo $erreur->getMessage();
}

?>