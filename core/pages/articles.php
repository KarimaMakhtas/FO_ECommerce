<?php
	require_once "fonctions/conf/config.php";
	require_once "fonctions/inc/db.php";
	$sql = 'SELECT IdProduit, Reference, LibProd, Description, PrixHT FROM produit';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="produits">
			<table class="table-prod" summary="produit">
				<tr><th>Photo</th><th>Prix HT</th></tr>
				<?php
					while ($produit = mysql_fetch_array($req))
					{
				?>
				<tr>
				<!--<li><a href="produit.php?IdProduit=<?php echo $produit['IdProduit'] ?>"><?php echo $produit['Reference'] ?></a></li>-->
				<td class="clairs"><a href="produit.php?IdProduit=<?php echo $produit['IdProduit']; ?>"><img src="galerie/tous/<?php echo $produit['Reference'];?>.jpg" alt="" class="image-galerie"></a></td>
					<td><?php echo $produit['PrixHT']; ?> &euro;</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</body>
</html>