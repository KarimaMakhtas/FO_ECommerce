<?php
	require_once "classes/inscription_client.php";
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" style="text/css" href="css/style.css"/>
		<script language="javascript"> 
			function changementType() { 
				var type = document.getElementById("id").value; 
				if (type == "1") { 
					document.getElementById("1").style.display="block"; 
				}
				else { 
					document.getElementById("1").style.display="none"; 
				} 
				if (type == "2") { 
					document.getElementById("2").style.display="block"; 
				}
				else { 
					document.getElementById("2").style.display="none"; 
				} 
			} 
		</script>
	</head>
	<body>
		<header>
			<?php require_once 'core/html/banniere.php'; ?>
		</header>
			<h2>Formulaire d'inscription</h2>
			<div id="block">
				<form action="" method="post" id="form_inscription">
					<div>
						<label for="Societe">Soci&eacute;t&eacute; <font color="red">*</font> :</label>
						<input type="text" name="Societe" placeholder="Societe" required field />
					</div>
							
					<div>
						<label for="NumeroSIRETSociete">SIRET <font color="red">*</font> :</label>
						<input type="text" name="NumeroSIRETSociete" placeholder="SIRET" required field />
					</div>
					
					<div>
						<label for="Civilite">Civilité <font color="red">*</font> :</label>
						<select name="Civilite" id="id" onchange="changementType();" required field /> 
							<option value="" >Votre civilit&eacute;</option> 
							<option value="1">Monsieur</option> 
							<option value="2">Madame</option> 
						</select>
					</div>
					
					<div>
						<label for="NomContact">Nom <font color="red">*</font> :</label>
						<input type="text" name="NomContact"  placeholder="Nom" required field />
					</div>
					
					<div>
						<label for="PrenomContact">Pr&eacute;nom <font color="red">*</font> :</label>
						<input type="text" name="PrenomContact"/  placeholder="Prénom" required field />
					</div>
					
					<div>
						<label for="InitialePrenom">Initiale du pr&eacute;nom <font color="red">*</font> :</label>
						<input type="text" name="InitialePrenom"  placeholder="Initiale du prénom" required field />
					</div>
					
					<div>
						<label for="Telephone">T&eacute;l&eacute;phone <font color="red">*</font> :</label>
						<input type="text" name="Telephone"  placeholder="Téléphone" required field />
					</div>
					
					<div>
						<label for="Mobile">Mobile <font color="red">*</font> :</label>
						<input type="text" name="Mobile"  placeholder="Mobile" required field />
					</div>
					
					<div>
						<label for="Fax">Fax <font color="red">*</font> :</label>
						<input type="text" name="Fax"  placeholder="Fax" required field />
					</div>
					
					<div>
						<label for="Email">Email <font color="red">*</font> :</label>
						<input type="text" name="Email"  placeholder="Societe" required field />
					</div>
					
					<div>
						<input type="submit" name="submit" value="Inscription"></input>
					</div>
				</form>
			</div>
			
	</body>
</html>