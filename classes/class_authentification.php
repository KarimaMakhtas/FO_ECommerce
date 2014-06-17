<?php
	class Authentification{
	
		static function EstConnecte() {
			if( isset($_SESSION['Authentification']) && isset($_SESSION['Authentification']['NomContact']) && isset($_SESSION['Authentification']['NumeroSIRETSociete'])) {
				extract($_SESSION['Authentification']);
				require("fonctions/conf/config.php");
				require("fonctions/inc/db.php");
				$sql = " SELECT NumClient FROM client WHERE NomContact='$NomContact' AND NumeroSIRETSociete='$NumeroSIRETSociete' ";
				$req = mysql_query($sql) or die(mysql_error());
				$rows=mysql_num_rows($req);
				if($rows==1){
					return true;
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
	}
?>