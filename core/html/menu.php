<div id='cssmenu'>
	<ul>
		<li class='active'><a href='index.php'><span>Accueil</span></a></li><tr>
		<li><a href='index.php?page=articles'><span>Articles</span></a></li><tr>
	  
	<?php
		if(!isset($_SESSION['Authentification']['NomContact']))
		{
	?>
			<li style="float: right"><a href='index.php?page=inscription'><span>Inscription</span></a></li>
			<li style="float: right"><a data-reveal-id="myModal" href='index.php?page=connexion' id="connexion"><span>Connexion</span></a></li>
	<?php
		}
		else
		{
	?>
			<li style="float: right"><a href='votre_panier.php'><span>mon panier</span></a></li>
			<li style="float: right"><a href='index.php?page=admin/deconnect'><span>D&eacute;connexion</span></a></li>
			<li style="float: right"><a href='index.php?page=core/pagadmin/profil'><span><?php echo $_SESSION['Authentification']['NomContact']; ?></span></a></li>
	<?php
		}
	?>
		
		
	</ul>
</div>

<!-- contenu de la fenêtre -->
<div id="myModal" class="reveal-modal">
	<?php require_once 'core/pages/connexion.php'; ?>
	<a class="close-reveal-modal"><img src="images/fermer.png" border="0" width="24" height="24" alt=""></a>
</div>