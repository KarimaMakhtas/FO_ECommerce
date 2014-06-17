<?php

	require_once "fonctions/conf/config.php";
	require_once "fonctions/inc/db.php";

	$boolNomVide = false;
	$boolSiretVide = false;

	if(isset($_POST['submit']))
	{
		$NomContact = htmlspecialchars(trim($_POST['NomContact']));
		$NumeroSIRETSociete = htmlspecialchars(trim($_POST['NumeroSIRETSociete']));
		if($NomContact && $NumeroSIRETSociete)
		{
			require("fonctions/conf/config.php");
			require 'fonctions/inc/db.php';
			$sql = " SELECT NumClient FROM client WHERE NomContact='$NomContact' AND NumeroSIRETSociete='$NumeroSIRETSociete' ";
			$req = mysql_query($sql) or die(mysql_error());
			$rows = mysql_num_rows($req);
			if($rows != 0)
			{
				session_start();
				$_SESSION['Authentification']['NomContact'] = $NomContact;
				$_SESSION['Authentification']['NumeroSIRETSociete'] = $NumeroSIRETSociete;
				header('Location: index.php?page=articles');
			}
		}

		if($NomContact == "")
		{
			$boolNomVide = true;
		}
		
		if($NumeroSIRETSociete == "")
		{
			$boolSiretVide = true;
		}
	}
?>

<html>
	<head>
		<title>Branvillier & Sonifer</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/fenetre.css" />
	<head>
	<body>
		<h2>Veuillez vous connectez :</h2>
		<div id="block">
			<form method="post" action="" id="form_inscription">
				<div>
					<label for="NomContact">Nom :</label>
					<input type="text" name="NomContact" placeholder="Nom" class="nom"  />
						<?php
							if($boolNomVide == true)
							{
								?><p>Veuillez remplir le nom<p><?php
							}
						?>
				</div>
				<div>
					<label for="NumeroSIRETSociete">Num&eacute;ro SIRET :</label>
					<input type="password" name="NumeroSIRETSociete" placeholder="SIRET" class="siret" />
						<?php
							if($boolSiretVide == true)
							{
								?><p id="error-nom">Veuillez remplir le Siret<p><?php
							}
						?>
				</div>
				<div>
					<input type="submit" name="submit" value="Connexion"></input>
				</div>
			</form>
		</div>
	</body>
</html>