<!DOCTYPE html>
<html>
	<head>
		<title>Branvillier & Sonifer</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel='stylesheet' type='text/css' href='css/menu.css' />
		<link rel="stylesheet" type='text/css' href="css/fenetre.css" />
		<link href="fonctions/js/filter.js" rel="stylesheet" type="text/css" />
		<!-- chargement des scripts -->
		<script type="text/javascript" src="fonctions/js/jquery.js"></script>			
		<script type="text/javascript" src="fonctions/js/init.js"></script>			
		<script type="text/javascript" src="fonctions/js/jquery_fenetre.js"></script>
		<script type="text/javascript" src="fonctions/js/jquery.reveal.js"></script>
		
		<?php session_start(); ?>
	<head>
	<body>
		
		<div id="corps">
		
			<div id="banniere"> <?php require_once 'core/html/banniere.php'; ?> </div>
		
			<div id="menu"> <?php require_once 'core/html/menu.php'; ?> </div>
			
			<div id="content">
				
				<?php
					
					if(isset($_GET['page']) AND !empty($_GET['page']))
					{
						$dossier = 'core/pages/';
						$page = htmlentities($_GET['page']).'.php';
						
						if(file_exists($dossier.$page))
						{
							require_once $dossier.$page;
						}
						else
						{
							require_once 'core/html/404.php';
						}
					}
					else
					{
						require_once 'core/pages/accueil.php';
					}
				
				?>
			
			</div>
		
			<div id="footer"> <?php require_once 'core/html/footer.php'; ?> </div>
			
		</div>
		
	</body>
	
</html>