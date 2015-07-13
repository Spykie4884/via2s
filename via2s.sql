-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Juillet 2015 à 17:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `via2s`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `fonction` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `message` mediumtext,
  `objet_message` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE IF NOT EXISTS `devis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `code_affaire` varchar(45) DEFAULT NULL,
  `livraison` varchar(45) DEFAULT NULL,
  `produit_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_société_id` int(11) NOT NULL,
  `utilisateur_Contact_id` int(11) NOT NULL,
  `Modele_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`produit_id`,`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`,`Modele_id`),
  KEY `fk_Devis_utilisateur1_idx` (`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`),
  KEY `fk_Devis_Modele1_idx` (`Modele_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_document` varchar(45) DEFAULT NULL,
  `Type_document` varchar(45) DEFAULT NULL,
  `photo_document` varchar(45) DEFAULT NULL,
  `fiche_document` varchar(45) DEFAULT NULL,
  `catégorie` varchar(45) DEFAULT NULL,
  `reference` varchar(45) DEFAULT NULL,
  `droit` varchar(45) DEFAULT NULL,
  `Documentcol` varchar(45) DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_société_id` int(11) NOT NULL,
  `utilisateur_Contact_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`),
  KEY `fk_Document_utilisateur1_idx` (`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `duree_formation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE IF NOT EXISTS `historique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(45) DEFAULT NULL,
  `action` varchar(45) DEFAULT NULL,
  `date_action` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_société_id` int(11) NOT NULL,
  `utilisateur_Contact_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`),
  KEY `fk_Historique_utilisateur1_idx` (`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE IF NOT EXISTS `modele` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id_produits` int(11) NOT NULL AUTO_INCREMENT,
  `ref_produit` varchar(255) DEFAULT NULL,
  `constructeur_produit` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `Famille` varchar(255) DEFAULT NULL,
  `Prix` int(11) DEFAULT NULL,
  `Quantité` int(11) NOT NULL,
  PRIMARY KEY (`id_produits`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_client` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_Fname` varchar(255) DEFAULT NULL,
  `user_societe` varchar(255) DEFAULT NULL,
  `user_function` varchar(255) DEFAULT NULL,
  `user_phone` int(11) DEFAULT NULL,
  `user_mobile` int(11) DEFAULT NULL,
  `user_fax` int(11) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_zipCode` int(11) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_statut` varchar(255) DEFAULT NULL,
  `user_mdp` varchar(255) DEFAULT NULL,
  `valide` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `ref_client`, `user_name`, `user_Fname`, `user_societe`, `user_function`, `user_phone`, `user_mobile`, `user_fax`, `user_email`, `user_address`, `user_zipCode`, `user_city`, `user_country`, `user_statut`, `user_mdp`, `valide`) VALUES
(1, NULL, 'a', 'a', 'a', 'a', 0, 0, 0, 'a', 'a', 0, 'a', '0', 'super-administrateur', 'a', 1),
(2, NULL, 'test', 'test', 'test', 'test', 0, 0, 0, 'test', 'test', 0, 'test', 'test', 'super-administrateur', 'test', 1),
(3, NULL, 'testons', 'testons', 'testons', 'testons', 0, 0, 0, 'testons', 'testons', 0, 'testons', 'testons', 'super-administrateur', 'testons', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_has_formation`
--

CREATE TABLE IF NOT EXISTS `utilisateur_has_formation` (
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_société_id` int(11) NOT NULL,
  `utilisateur_Contact_id` int(11) NOT NULL,
  `Formation_id` int(11) NOT NULL,
  PRIMARY KEY (`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`,`Formation_id`),
  KEY `fk_utilisateur_has_Formation_Formation1_idx` (`Formation_id`),
  KEY `fk_utilisateur_has_Formation_utilisateur1_idx` (`utilisateur_id`,`utilisateur_société_id`,`utilisateur_Contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
