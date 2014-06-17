-- Tables de l'analyse WD Gestion de commandes.wda
-- pour MySQL

-- Création de la table Client
CREATE TABLE `client` (
    `NumClient` INTEGER PRIMARY KEY ,
    `Societe` VARCHAR(40)  NOT NULL ,
    `Civilite` VARCHAR(5)  NOT NULL ,
    `NomContact` VARCHAR(40)  NOT NULL ,
    `PrenomContact` VARCHAR(40)  NOT NULL ,
	`InitialePrenom` VARCHAR(2)  NOT NULL ,
    `Telephone` VARCHAR(20)  NOT NULL ,
    `Mobile` VARCHAR(20)  NOT NULL ,
    `Fax` VARCHAR(20)  NOT NULL ,
    `Email` VARCHAR(250)  NOT NULL ,
	`NumeroSIRETSociete` VARCHAR(14)  NOT NULL );
CREATE INDEX `WDIDX_Client_Societe` ON `client` (`Societe`);
CREATE INDEX `WDIDX_Client_NomContact` ON `client` (`NomContact`);
CREATE INDEX `WDIDX_Client_Telephone` ON `client` (`Telephone`);
CREATE INDEX `WDIDX_Client_Mobile` ON `client` (`Mobile`);
CREATE INDEX `WDIDX_Client_Fax` ON `client` (`Fax`);
CREATE INDEX `WDIDX_Client_Email` ON `client` (`Email`);

INSERT INTO `client` (`NumClient`, `Societe`, `Civilite`, `NomContact`, `PrenomContact`, `InitialePrenom`, `Telephone`, `Mobile`, `Fax`, `Email`, `NumeroSIRETSociete`) VALUES
(1,	'SHAPES', 	'1',	'BERGEREAU',	'ROSARIA',	'R',	'(+33)0314722144',		'(+33)0314722145', '(+33)0314722146',	'bergereau.rosaria@shapes.com', '14785896987458'),
(2,	'COFIROUTES',	'2',	'BORDENAVE',	'VINCIANE',	'V',	'(+33)0392339821', '(+33)0392339822', '(+33)0392339823',	'bordenave.vinciane@cofiroutes.com', '14185896914508'),
(3,	'IBSET CONSULTING', '2',	'SEBASTIEN',	'NASTASSJA',	'N',	'(+33)0462400696',		'(+33)0462400697', '(+33)0462400698',	'sebastien.nastassja@ibset.com', '14714598785458'),
(4,	'SCORINGEN',	'1',	'LUSCAN',	'OVIDE',	 'O', '(+33)0314227917', '(+33)0314227918', '(+33)0314227919',	'luscan.ovide@scoringen.com', '58754212457777'),
(5,	'CETEN DE LOUEST', 	'2',	'PETITQUEUX',	'HAYDEE',  'H', '(+33)0243040694',  '(+33)0243040695', '(+33)0243040696',	'petitqueux.haydee@ceten.com', '14785401452015'),
(6,	'LOGICAT', '2',	'DASSAS',	'LILLI', 'L', '(+33)0368914946',	'(+33)0368914947', '(+33)0368914948',	'dassas.lilli@logicat.com', '01548963201244'),
(7,	'INSERMEN U121',	'1',	'PENIN', 'KENYA', 'K', '(+33)0109090327', '(+33)0109090328', '(+33)0109090329',	'penin.kenya@insermen.com', '14785896981458'),
(8,	'SOFECOMEN',	'1',	'BOUJENDAR',	'BAYRAM', 'B', '(+33)0312451619', 	'(+33)0312451620', '(+33)0312451621',	'boujendar.bayram@sofecomen.com', '14787896987458'),
(9,	'STBFTER - GCE',	'2',	'FELLUS',	'SALLY',	'S', '(+33)0340358752',	'(+33)0340358753', '(+33)0340358754',	'fellus.sally@stbfter.com', '14785896785458'),
(10,	'CMGES',	'1',	'GELEZ',	'XUAN',	'X','(+33)0512097098',	'(+33)0512097099', '(+33)0512097100',	'gelez.xuan@cmges.com', '14785896901118');


-- Création de la table Produit
CREATE TABLE `produit` (
	`IdProduit` INTEGER PRIMARY KEY ,
    `Reference` VARCHAR(20) ,
    `LibProd` VARCHAR(40)  NOT NULL ,
    `Description` LONGTEXT  NOT NULL ,
    `PrixHT` NUMERIC(24,2)  NOT NULL ,
    `Photo` LONGBLOB  NOT NULL ,
    `CodeBarreFabricant` VARCHAR(12)  NOT NULL );
CREATE INDEX `WDIDX_Produit_LibProd` ON `produit` (`LibProd`);
CREATE INDEX `WDIDX_Produit_CodeBarreFabricant` ON `produit` (`CodeBarreFabricant`);

INSERT INTO `produit` (`IdProduit`, `Reference`, `LibProd`, `Description`, `PrixHT`, `Photo`, `CodeBarreFabricant`) VALUES
(1, 'TSCR-F-Blanc',	'TShirt - ColRond Blanc pour Femme',	'TShirt - ColRond Blanc pour Femme',	'11,00',  '1',		'123456780007'),
(2, 'TSCR-F-Bleu',	'TShirt - ColRond Bleu pour Femme',	'TShirt - ColRond Bleu pour Femme',	'35,00',	'2', 	'123456780010'),
(3, 'TSCR-F-BleuPetrol',	'TShirt - ColRond BleuPetrol pour Femme',	'TShirt - ColRond BleuPetrol pour Femme',	'11,00',	'',	'123456780002'),
(4, 'TSCR-F-Cyan',	'TShirt - ColRond Cyan pour Femme',	'TShirt - ColRond Cyan pour Femme',	'15,00',	'', 	'123456780017'),
(5, 'TSCR-F-Gris25',	'TShirt - ColRond Gris25 pour Femme',	'TShirt - ColRond Gris25 pour Femme',	'14,50',	'', 	'123456780031'),
(6, 'TSCR-F-Gris75',	'TShirt - ColRond Gris75 pour Femme',	'TShirt - ColRond Gris75 pour Femme',	'16,50',	'', 	'123456780023'),
(7, 'TSCR-F-Jaune',	'TShirt - ColRond Jaune pour Femme',	'TShirt - ColRond Jaune pour Femme',	'17,50',	'', 	'123456780015'),
(8, 'TSCR-F-MarronClairFr',	'TShirt - ColRond MarronClairFroid pour Femme',	'TShirt - ColRond MarronClairFroid pour Femme',	'31,00',	'', 	'123456780014'),
(9, 'TSCR-F-Noir',	'TShirt - ColRond Noir pour Femme',	'TShirt - ColRond Noir pour Femme',	'25,00',	'', 	'123456780027'),
(10, 'TSCR-F-Orange',	'TShirt - ColRond Orange pour Femme',	'TShirt - ColRond Orange pour Femme',	'37,00',	'', 	'123456780012');


-- Création de la table TVA
CREATE TABLE `TVA` (
    `TauxTVAActuel` NUMERIC(24,2)  NOT NULL  UNIQUE );
	
INSERT INTO `TVA`(`TauxTVAActuel`) VALUES
('0.20');

-- Création de la table DevisProposé
CREATE TABLE `DevisPropose` (
    `IDDevisPropose` BIGINT  PRIMARY KEY ,
    `DateDevisPropose` DATE  NOT NULL ,
    `TotalHT` NUMERIC(24,2)  NOT NULL ,
    `TotalTTC` NUMERIC(24,2)  NOT NULL ,
    `TotalTVA` NUMERIC(24,2)  NOT NULL ,
    `Observations` LONGTEXT  NOT NULL ,
	`NumClient` BIGINT  NOT NULL );
CREATE INDEX `WDIDX_DevisPropose_NumClient` ON `DevisPropose` (`NumClient`);


-- Création de la table LigneDevis
CREATE TABLE `LigneDevis` (
    `IDDevisPropose` INT NOT NULL ,
	`IdProduit` INTEGER  NOT NULL );
CREATE INDEX `WDIDX_LigneDevis_IDDevisPropose` ON `DevisPropose` (`IDDevisPropose`);
CREATE INDEX `WDIDX_LigneDevis_Reference` ON `DevisPropose` (`Reference`);