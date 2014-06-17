<?php
	session_start();
	require_once 'fonctions/inc/db.php';
	require_once 'fonctions/conf/config.php';
	
	$sql = "SELECT IdProduit, Reference, PrixHT FROM produit WHERE IdProduit=".$_POST['IdProduit'].";";
				
	require_once 'class_panier.php';
	
	$panier = new Panier('produits');

	$valeurs = array (
		'Reference' => $produit['Reference'],
		'PrixHT' => $produit['PrixHT'],
		'qte' => $_POST['qte'],
		'IdProduit' => $produit['IdProduit']
	);

	$panier->set($_POST['IdProduit'], $valeurs);
	
	header('Location:votre_panier.php?IdProduit='.$_POST['IdProduit']."&qte=".$_POST['qte']);
?>