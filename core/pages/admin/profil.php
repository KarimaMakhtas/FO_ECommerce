<?php
	session_start();
	require_once 'classes/class_authentification.php';
	if(Authentification::EstConnecte())
	{
?>
		<h2> Profil de <?php echo $_SESSION['Authentification']['NomContact']; ?> </h2>
		<h3> Faites votre choix parmi les articles <a href='index.php?page=articles'><span>ici</span></a> </h3>
<?php
	}
	else
	{
		header('Location: index.php');
	}
?>