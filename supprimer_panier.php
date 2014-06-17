<?php
	session_start();
	require_once 'fonctions/inc/db.php';
	require_once 'fonctions/conf/config.php';

	require_once 'class_panier.php';
	
	$sql = "SELECT IdProduit, Description, Reference, PrixHT FROM produit WHERE IdProduit=".$_GET['IdProduit']." ;";
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	$panier = new Panier('produits');
	$panier->delete($_GET['IdProduit']);
	
	header('Location:votre_panier.php?IdProduit='.$_GET['IdProduit']);
?>