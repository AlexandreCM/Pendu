<?php
session_start();
if($_SESSION['connect'] == false){
	header('Location:identification.php');
}
include("cnx.php");
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pendu</title>
		<meta name="description" content="description de la page" />
		<meta charset="utf-8" />
		<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet" />
		<link href="image/favicon.png" type="image/png" rel="icon" />
		
	</head>
	<body>
	<div class="app">
	<h3>Quel est le mot ?</h3>	
	<?php
	
	//initialisation partie
	if($_SESSION['PARTIE'] == true) {
		
		// RECUP id mot
		$recup=$cnx->query("SELECT COUNT(MOT_ID) AS NBMOT FROM mot");
		
		while ($donnees=$recup->fetch()){
			$nbmot= $donnees['NBMOT'];
		}
	
		// ID random
		$idmot=rand(1, $nbmot);
	
		// recup libelle mot
		$recup2=$cnx->query("SELECT MOT_LIBELLE FROM mot WHERE MOT_ID='".$idmot."'");
	
		while ($donnees=$recup2->fetch()){
			$mot=$donnees['MOT_LIBELLE'];
		}
		
		// ENREGISTRE LE MOT
		$_SESSION['mot']=$mot;
		// echo $_SESSION['mot'];
		
		
		//TAB ARRAY qui affichera le mot
		$_SESSION['tab']= array();
		for ($i = 0; $i < strlen($_SESSION['mot']); $i++) {
			$_SESSION['tab'][$i] = " _ ";
		}
		
		$_SESSION['faute']=0;
		$_SESSION['PARTIE']=false;
	}

//code du jeu
	
	if ($_SESSION['faute']<10){
		//recupération du choix
		if (isset($_POST['lettre'])){
			$choix=$_POST['lettre'];
			$nb=0;
			
			//verification de la presence et compte de la lettre choisi
			for($i=0;$i<strlen($_SESSION['mot']);$i++) {
				if($_SESSION['mot'][$i]==$choix) {
					$nb++; 
					$_SESSION['tab'][$i] = $choix;
				}
			}
			
			// COMMENTE LE NB DE LETTRE
			if($nb>0){
				echo "<p> Il y a ".$nb." fois la lettre ".strtoupper($choix)."</p>";
			}
			else {
				echo "<p>La lettre ".strtoupper($choix)." n'appartient pas au mot </p>";
				$_SESSION['faute']++;
			}

		}
		else {
			echo "<p>Choisissez une lettre</p>";
		}
	}
	else {
		echo "<p>Choisissez une lettre</p>";
	}
	
	// AFFICHAGE MOT
	foreach ($_SESSION['tab'] as $element){
		echo strtoupper($element);
	}
	
	// VERIFIE LA VICTOIRE
	$comptevictoire=0;
	for($i=0;$i<strlen($_SESSION['mot']);$i++) {
		if($_SESSION['mot'][$i]==$_SESSION['tab'][$i]) {
			$comptevictoire++; 
		}
	}
	if($comptevictoire==strlen($_SESSION['mot'])){
		echo '<p>Bravo !! Vous avez gagné.</p><br/><a href="replay.php" class="btn">rejouer</a>';
        $recup=$cnx->query("UPDATE utilisateur SET UTI_SCORE = UTI_SCORE + 1 WHERE UTI_ID LIKE ".$_SESSION['id'].";");
	}
	
	// VERIFE PERDU
	if($_SESSION['faute']>=10){
		echo '<p>Vous avez perdu. Le mot était '.strtoupper($_SESSION['mot']).'.</p><a href="replay.php" class="btn">rejouer</a>';
	}

	?>
	<br/><br/>
	<div class="alphabet">
	<form method="post" action="pendu.php">
		<input type="submit" name="lettre" id="lettre" value="a"/>
		<input type="submit" name="lettre" id="lettre" value="z"/>
		<input type="submit" name="lettre" id="lettre" value="e"/>
		<input type="submit" name="lettre" id="lettre" value="r"/>
		<input type="submit" name="lettre" id="lettre" value="t"/>
		<input type="submit" name="lettre" id="lettre" value="y"/>
		<input type="submit" name="lettre" id="lettre" value="u"/>
		<input type="submit" name="lettre" id="lettre" value="i"/>
		<input type="submit" name="lettre" id="lettre" value="o"/>
		<input type="submit" name="lettre" id="lettre" value="p"/><br/>
		<input type="submit" name="lettre" id="lettre" value="q"/>
		<input type="submit" name="lettre" id="lettre" value="s"/>
		<input type="submit" name="lettre" id="lettre" value="d"/>
		<input type="submit" name="lettre" id="lettre" value="f"/>
		<input type="submit" name="lettre" id="lettre" value="g"/>
		<input type="submit" name="lettre" id="lettre" value="h"/>
		<input type="submit" name="lettre" id="lettre" value="j"/>
		<input type="submit" name="lettre" id="lettre" value="k"/>
		<input type="submit" name="lettre" id="lettre" value="l"/>
		<input type="submit" name="lettre" id="lettre" value="m"/><br/>
		<input type="submit" name="lettre" id="lettre" value="w"/>
		<input type="submit" name="lettre" id="lettre" value="x"/>
		<input type="submit" name="lettre" id="lettre" value="c"/>
		<input type="submit" name="lettre" id="lettre" value="v"/>
		<input type="submit" name="lettre" id="lettre" value="b"/>
		<input type="submit" name="lettre" id="lettre" value="n"/>
	</form>
	</div>
	<br/>
	
<?php
	
	if($_SESSION['faute']==0){
		echo '<IMG SRC="img\etat_0.png"/>';
	}
	else if($_SESSION['faute']==1){
		echo '<IMG SRC="img\etat_1.png"/>';
	}
	else if($_SESSION['faute']==2){
		echo '<IMG SRC="img\etat_2.png"/>';
	}
	else if($_SESSION['faute']==3){
		echo '<IMG SRC="img\etat_3.png"/>';
	}
	else if($_SESSION['faute']==4){
		echo '<IMG SRC="img\etat_4.png"/>';
	}
	else if($_SESSION['faute']==5){
		echo '<IMG SRC="img\etat_5.png"/>';
	}
	else if($_SESSION['faute']==6){
		echo '<IMG SRC="img\etat_6.png"/>';
	}
	else if($_SESSION['faute']==7){
		echo '<IMG SRC="img\etat_7.png"/>';
	}
	else if($_SESSION['faute']==8){
		echo '<IMG SRC="img\etat_8.png"/>';
	}
	else if($_SESSION['faute']==9){
		echo '<IMG SRC="img\etat_9.png"/>';
	}
	else if($_SESSION['faute']>=10){
		echo '<IMG SRC="img\etat_10.png"/>';
	}

?>
	<br/><a class="btn" href="accueil.php">accueil</a>
	
	</div>
	</body>	
</html>