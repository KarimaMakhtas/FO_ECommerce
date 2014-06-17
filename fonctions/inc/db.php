<?php
	require_once 'fonctions/conf/config.php';	 //inclut le fichier qui contient les $confXxxx
	
	$connexion=mysql_connect('localhost', 'root', '');
	if($connexion!==false) {
		mysql_select_db($confDb);
	}