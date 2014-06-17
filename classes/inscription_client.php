<?php

// On commence par récupérer les champs
    if(isset($_POST['submit']))
	{
		$Societe=$_POST['Societe'];
		$NumeroSIRETSociete=$_POST['NumeroSIRETSociete'];
		$Civilite=$_POST['Civilite'];
        $NomContact=$_POST['NomContact'];
        $PrenomContact=$_POST['PrenomContact'];
		$InitialePrenom=$_POST['InitialePrenom'];
		$Telephone=$_POST['Telephone'];
		$Mobile=$_POST['Mobile'];
		$Fax=$_POST['Fax'];
		$Email=$_POST['Email'];
       }
	else
	{
		$Societe="";
		$NumeroSIRETSociete="";
		$Civilite="";
        $NomContact="";
        $PrenomContact="";
		$InitialePrenom="";
		$Telephone="";
		$Mobile="";
		$Fax="";
		$Email="";
	}

// On vérifie si les champs sont vides 
if(empty($Societe) && empty($NumeroSIRETSociete) && empty($Civilite) && empty($NomContact) && empty($PrenomContact) && empty($InitialePrenom) && empty($Telephone) && empty($Mobile) && empty($Fax) && empty($Email))
{

}
//Aucun champ n'est vide, on peut enregistrer dans la table 
else
{
    //connexion à la base et sélection de la base
	require_once "fonctions/conf/config.php";
	require_once "fonctions/inc/db.php";
	
    //on écrit la requête sql
    $sql = "INSERT INTO client(Societe, Civilite, NomContact, PrenomContact, InitialePrenom, Telephone, Mobile, Fax, Email, NumeroSIRETSociete) VALUES('$Societe', '$Civilite', '$NomContact', '$PrenomContact', '$InitialePrenom', '$Telephone', '$Mobile', '$Fax', '$Email', '$NumeroSIRETSociete')";
		
    //on insère les informations du formulaire dans la table 
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 
	
        if(isset($_GET['submit']))
		{
			$Societe=$_GET['Societe'];
			$NumeroSIRETSociete=$_GET['NumeroSIRETSociete'];
			$Civilite=$_GET['Civilite'];
            $NomContact=$_GET['NomContact'];
            $PrenomContact=$_GET['PrenomContact'];
			$InitialePrenom=$_GET['InitialePrenom'];
			$Telephone=$_GET['Telephone'];
			$Mobile=$_GET['Mobile'];
			$Fax=$_GET['Fax'];
			$Email=$_GET['Email'];
        }
		else
		{
			$Societe="";
			$NumeroSIRETSociete="";
			$Civilite="";
            $NomContact="";
            $PrenomContact="";
			$InitialePrenom="";
			$Telephone="";
			$Mobile="";
			$Fax="";
			$Email="";
		}
	
    //on affiche le résultat pour le visiteur
    header("Location: index.php");
	
	//on ferme la connexion 
    mysql_close();  
}
?>