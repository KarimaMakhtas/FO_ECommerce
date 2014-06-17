<?php
	require_once 'fonctions/conf/config.php';
	require_once 'fonctions/inc/db.php';
	
	$sql = "SELECT IdProduit, Reference, Description, PrixHT FROM produit WHERE IdProduit=".$_GET['IdProduit']." ;";
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	require_once 'class_panier.php';
	
	$panier = new Panier('produits');
	$qte=1;
	if($produitPanier = $panier->get($_GET['IdProduit'])) {
		$qte=$produitPanier['qte'];
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel='stylesheet' type='text/css' href='css/menu.css' />
		<link rel="stylesheet" type='text/css' href="css/fenetre.css" />
	</head>
	<body>
		<div id="corps">
			<div id="banniere"> <?php require_once 'core/html/banniere.php'; ?> </div>
			
			<div id="menu"> <?php require_once 'core/html/menu.php'; ?> </div>
			
			<div id="content">
				<div id="produits">
					<table class="table-prod" summary="produit">
						<tr><th>Photo</th><th>R&eacute;f&eacute;rence</th><th>Description</th><th>Prix HT</th><th>Quantit&eacute;</th></tr>
						<?php
							while ($produit = mysql_fetch_array($req))
							{
						?>
								<tr>
									<td><img src="galerie/tous/<?php echo $produit['Reference'];?>.jpg" class="image-galerie"></td>
									<td><?php echo $produit['Reference']; ?></td>
									<td><?php echo $produit['Description']; ?></td>
									<td><?php echo $produit['PrixHT']; ?> &euro;</td>
									<td>
										<form action="ajouter_panier.php" method="post">
											<input style="width:30px" type="text" name="qte" value="<?php echo $qte; ?>"/>
											<input type="hidden" name="IdProduit" value="<?php echo $_GET['IdProduit']; ?>" />
											<input type="submit" value="acheter" />
										</form>
									</td>
								</tr>
						<?php
							}
						?>
					</table>
				</div>
			</div>
			
			<div id="footer"> <?php require_once 'core/html/footer.php'; ?> </div>
		</div>
	</body>
</html>