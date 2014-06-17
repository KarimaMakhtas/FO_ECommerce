<?php

public abstract class bddOracleCommerce() {

	protected $hote = '127.0.0.1';
	protected $port = '1521'; // port par défaut
	protected $service = 'TEST';
	protected $utilisateur = 'TEST';
	protected $motdepasse = 'MotDePasse';
	protected $reponse;

	$lien_base =
	"oci:dbname=(DESCRIPTION =
	(ADDRESS_LIST =
		(ADDRESS =
			(PROTOCOL = TCP)
			(Host = ".$hote .")
			(Port = ".$port."))
	)
	(CONNECT_DATA =
		(SERVICE_NAME = ".$service.")
	)
	)";

	public function seConnecter() {

		try
		{
			// connexion à la base Oracle et création de l'objet
			$connexion = oci_pconnect($lien_base, $utilisateur, $motdepasse);
		}
		catch (PDOException $erreur)
		{
			echo $erreur->getMessage();
		}
	}

	public function seDeconnecter() {
		$reponse->closeCursor();
		oci_close(connexion);
	}
	

	public function __construct() {

	}

	'SELECT id, pseudo, pseudo, email, nom, prenom, refCivilite, dateDeNaissance FROM Client';

	'SELECT id, Reference, libelle, prix, stock, refCategorie, refCivilite, refFournisseur, refTva FROM Produit';

    'SELECT login, mdp FROM Administrateur';

	'SELECT id, Reference, prixTotal, refClient, refMoyenPaiement, refExpediteur, refAdresseLivraison, refAdresseFacturation, annulee FROM Commande';

	public function seConnecter();
	public function seDecnnecter();

public function listeDeProduit() {

		}

		public function getProduit() {
			return $produit;
		}

		public function setProduits() {
			$this->produit = $produit;
		}


		public function getClient() {
			return $this->client;
		}

		public function setClient($Client client) {
			$this->client = $client;
		}



		public function getUtilisateur() {
			return $this->utilisateur;
		}

		public function setUtilsateur($Utilisateur utilisateur) {
			$this->utilisateur = $utilisateur;
		}



		public function getAdministrateur() {
			return $this->Administrateur;
		}

		public function setAdministrateur($Administrateur Administrateur) {
			$this->Administrateur = $Administrateur;
		}



		public function getCommande() {
			return $this->Commande;
		}

		public function setCommande($Commande Commande) {
			$this->Commande = $Commande;
		}


}
	