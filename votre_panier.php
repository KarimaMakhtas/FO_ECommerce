<?php
	session_start();
	require_once 'fonctions/inc/db.php';
	require_once 'fonctions/conf/config.php';
	require_once 'class_panier.php';
	
	$sql = "SELECT IdProduit, Description, Reference, PrixHT, TauxTVAActuel FROM produit, tva WHERE IdProduit=".$_GET['IdProduit']." ;";
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	
	$panier = new Panier('produits');
	$listeProduits = $panier->getPanier();
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
		
				<?php
					if(!$listeProduits)
					{
				?>
						<p>Votre panier est vide</p>
				<?php
					}
					else
					{
				?>
				
				<div id="produits">
					<h3 style="text-align: center">Voici votre panier après achat(s) d'article(s)</h3>
					
					<table class="table-prod" summary="produit">
						<tr><th>Photo</th><th>R&eacute;f&eacute;rence</th><th>Prix H.T</th><th>Articles choisis</th><th>Prix à payer</th><th></th><th></th></tr>

						<?php while($produit = mysql_fetch_array($req))
							{
						?>
								<tr>
									<td><img src="galerie/tous/<?php echo $produit['Reference'];?>.jpg" class="image-galerie"></td>
									<td><?php echo $produit['Reference']; ?></td>
									<td><?php echo $produit['PrixHT']; ?> &euro;</td>
									<td><?php echo $_GET['qte']; ?></td>
									<td><?php echo (($produit['PrixHT'] * $produit['TauxTVAActuel']) + ($produit['PrixHT'])) * $_GET['qte']; ?> &euro;</td>
									<td><a href="produit.php?IdProduit=<?php echo $produit['IdProduit'];?>">Modifier</a></td>
									<td><a href="supprimer_panier.php?IdProduit=<?php echo $produit['IdProduit'];?>">Supprimer</a></td>
								</tr>
						<?php
							}
						?>
					</table>
				</div>
					<?php
						}
					?>
			</div>
			<div id="footer"> <?php require_once 'core/html/footer.php'; ?> </div>
		</div>
	</body>
</html>