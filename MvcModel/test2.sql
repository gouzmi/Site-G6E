-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Janvier 2018 à 10:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test2`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE IF NOT EXISTS `billets` (
  `id_billet` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `date_creation` datetime NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_billet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id_billet`, `titre`, `contenu`, `date_creation`, `auteur`) VALUES
(1, 'premier sujet', 'Concernant l''inscription des autre locataires pour qu''ils puissent gérer la maison.', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE IF NOT EXISTS `capteur` (
  `id_capteur` int(255) NOT NULL AUTO_INCREMENT,
  `fonctionnement` tinyint(1) NOT NULL DEFAULT '0',
  `id_type_capteur` int(255) NOT NULL,
  `id_cemac` int(255) NOT NULL,
  `id_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_capteur`),
  KEY `id_type_capteur` (`id_type_capteur`),
  KEY `id_piece` (`id_piece`) USING BTREE,
  KEY `id_cemac` (`id_cemac`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `fonctionnement`, `id_type_capteur`, `id_cemac`, `id_piece`) VALUES
(1, 0, 1, 1, 4),
(2, 0, 2, 1, 4),
(3, 0, 3, 1, 4),
(4, 0, 4, 1, 4),
(5, 0, 5, 1, 4),
(6, 0, 1, 2, 2),
(7, 0, 2, 2, 2),
(8, 0, 3, 2, 2),
(9, 0, 4, 2, 2),
(10, 0, 5, 2, 2),
(11, 0, 6, 2, 2),
(12, 0, 7, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `cemac`
--

CREATE TABLE IF NOT EXISTS `cemac` (
  `id_cemac` int(255) NOT NULL AUTO_INCREMENT,
  `id_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_cemac`),
  KEY `id_piece` (`id_piece`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `cemac`
--

INSERT INTO `cemac` (`id_cemac`, `id_piece`) VALUES
(1, 4),
(2, 6),
(4, 14),
(3, 15);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `commentaire` text COLLATE utf8_bin NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_billet` (`id_billet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_billet`, `auteur`, `commentaire`, `date_creation`) VALUES
(1, 1, 'b', 'Votre commentaire...egr', '2018-01-12 10:04:11'),
(2, 1, 'fhh', 'Votre commentairehhg', '2018-01-12 10:04:21');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(255) NOT NULL AUTO_INCREMENT,
  `question_faq` varchar(255) COLLATE utf8_bin NOT NULL,
  `reponse_faq` varchar(255) COLLATE utf8_bin NOT NULL,
  `theme_faq` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `historique_capteur`
--

CREATE TABLE IF NOT EXISTS `historique_capteur` (
  `id_historique_capteur` int(255) NOT NULL AUTO_INCREMENT,
  `id_capteur` int(255) NOT NULL,
  `valeur_capteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_donnee` date NOT NULL,
  `heure_donnee` time NOT NULL,
  PRIMARY KEY (`id_historique_capteur`),
  KEY `id_capteur` (`id_capteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `historique_capteur`
--

INSERT INTO `historique_capteur` (`id_historique_capteur`, `id_capteur`, `valeur_capteur`, `date_donnee`, `heure_donnee`) VALUES
(1, 1, 'oui', '2018-01-05', '06:14:02'),
(2, 2, 'oui', '2018-01-02', '18:10:25'),
(3, 8, '23', '2018-01-01', '21:11:40'),
(4, 10, 'non', '2018-01-03', '08:18:33'),
(5, 11, '55kw', '2017-12-28', '23:05:37');

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE IF NOT EXISTS `logement` (
  `id_logement` int(255) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `code_postale_logement` int(10) NOT NULL,
  `ville_logement` text COLLATE utf8_bin NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  PRIMARY KEY (`id_logement`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `adresse`, `code_postale_logement`, `ville_logement`, `id_utilisateur`) VALUES
(1, '6  Rue Ampère', 95190, 'Goussainville', 3),
(2, '4 avenue Victor Hugo', 94160, 'Saint-Mandé', 2);

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

CREATE TABLE IF NOT EXISTS `panne` (
  `id_panne` int(255) NOT NULL AUTO_INCREMENT,
  `probleme` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_debut` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_fin` varchar(255) COLLATE utf8_bin NOT NULL,
  `commentaire` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_capteur` int(11) NOT NULL,
  `id_logement` int(11) NOT NULL,
  PRIMARY KEY (`id_panne`),
  KEY `id_capteur` (`id_capteur`),
  KEY `id_logement` (`id_logement`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE IF NOT EXISTS `piece` (
  `id_piece` int(255) NOT NULL AUTO_INCREMENT,
  `id_type_piece` int(255) NOT NULL,
  `id_logement` int(255) NOT NULL,
  `nom_piece` text COLLATE utf8_bin NOT NULL,
  `superficie_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_piece`),
  KEY `id_type_piece` (`id_type_piece`),
  KEY `id_logement` (`id_logement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=21 ;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `id_type_piece`, `id_logement`, `nom_piece`, `superficie_piece`) VALUES
(1, 5, 1, 'SDB Bas', 5),
(2, 3, 1, 'Salon', 30),
(3, 4, 1, 'Salle à Manger', 25),
(4, 1, 1, 'Chambre de Darlène', 15),
(5, 1, 1, 'Chambre de Marvin', 15),
(6, 1, 1, 'Chambre d''Axel', 15),
(7, 1, 1, 'Chambre des Parents', 22),
(8, 6, 1, 'Cuisine', 10),
(9, 9, 1, 'Garage', 20),
(10, 5, 1, 'SDB Haut', 15),
(11, 5, 2, 'SDB Bas', 5),
(12, 3, 2, 'Salon', 30),
(13, 4, 2, 'Salle à Manger', 25),
(14, 1, 2, 'Chambre de Guillaume', 15),
(15, 1, 2, 'Chambre de Charlotte', 15),
(16, 1, 2, 'Chambre de Pauline', 15),
(17, 1, 2, 'Chambre des Parents', 22),
(18, 6, 2, 'Cuisine', 10),
(19, 9, 2, 'Garage', 20),
(20, 5, 2, 'SDB Haut', 15);

-- --------------------------------------------------------

--
-- Structure de la table `precommande`
--

CREATE TABLE IF NOT EXISTS `precommande` (
  `id_precommande` int(255) NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `id_capteur` int(255) NOT NULL,
  `email_commande` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_precommande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `precommande`
--

INSERT INTO `precommande` (`id_precommande`, `date_commande`, `id_capteur`, `email_commande`, `admin`) VALUES
(1, '2017-12-30', 2, 'test@gmail.com', 0),
(2, '2018-01-01', 2, 'adresse@gmail.com', 0),
(3, '2018-01-03', 5, 'admin@gmail.com', 1),
(4, '0000-00-00', 0, 'bruno-der@hotmail.fr', 0);

-- --------------------------------------------------------

--
-- Structure de la table `scenario`
--

CREATE TABLE IF NOT EXISTS `scenario` (
  `id_scenario` int(255) NOT NULL AUTO_INCREMENT,
  `action` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  `id_capteur` int(255) NOT NULL,
  PRIMARY KEY (`id_scenario`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_capteur` (`id_capteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_capteur`
--

CREATE TABLE IF NOT EXISTS `type_capteur` (
  `id_type_capteur` int(11) NOT NULL AUTO_INCREMENT,
  `variete_capteur` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_capteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Contenu de la table `type_capteur`
--

INSERT INTO `type_capteur` (`id_type_capteur`, `variete_capteur`) VALUES
(1, 'Présence'),
(2, 'Lumière'),
(3, 'Température'),
(4, 'Fumée'),
(5, 'Contact'),
(6, 'Consommation'),
(7, 'Caméra'),
(8, 'Cemac'),
(9, 'Actionneur');

-- --------------------------------------------------------

--
-- Structure de la table `type_piece`
--

CREATE TABLE IF NOT EXISTS `type_piece` (
  `id_type_piece` int(255) NOT NULL AUTO_INCREMENT,
  `variete_piece` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_piece`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Contenu de la table `type_piece`
--

INSERT INTO `type_piece` (`id_type_piece`, `variete_piece`) VALUES
(1, 'Chambre'),
(2, 'Cellier'),
(3, 'Salon'),
(4, 'Salle à Manger'),
(5, 'Salle de Bain'),
(6, 'Cuisine'),
(7, 'Bureau\r\n'),
(8, 'Terrasse'),
(9, 'Garage');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `adresse_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `cp_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `ville_contact` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin` int(10) NOT NULL DEFAULT '0',
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `adresse_contact`, `cp_contact`, `ville_contact`, `telephone`, `mail`, `admin`, `mdp`) VALUES
(1, 'Eustache', 'DarlÃ¨ne', '6  Rue AmpÃ¨re', '95000', 'Goussainville', '06123456789', 'darlene@gmail.com', 0, '$2y$10$J79FbrpkyzRtmlu65tp6s.Vxf8BTpytl9V..TTqOhlKiYC2Z/o3rW'),
(2, 'Dupont', 'Guillaume', '4 avenue Victor Hugo', '94160', 'Saint-Mandé', '0613544337', 'guillaume.dupont.rm@gmail.com', 0, '$2y$10$ZCNaYKAWxx83DrBh2Td7oe6NZMMhEKTSzWGGBXWrPhuDNm9As7KxS'),
(3, 'Eustache', 'Darlene', '6  Rue Ampère', '95190', 'Goussainville', '0123456789', 'adresse@gmail.com', 0, '$2y$10$CXTDDtpvArmwGduBKFZTe.dNCQWZ7kv9IVTPCG4ylWJBoc.d7Peei'),
(4, 'ADMINISTRATEUR', 'Admin', '2 Rue des Bois', '12345', 'Ville', '0123456789', 'admin@gmail.com', 1, '$2y$10$nVDEnGUXVzfVFOMvQ8G12./oBRfdrsnvGDagk9g/4VT0duXSjkuIK'),
(5, 'rosamel', 'bruno', '24 rue Auguste Bailly', '92600', 'asnieres', '0620638564', 'bruno-der@hotmail.fr', 0, '$2y$10$LBW9wiDDYpJF8Qt5vaJhr.ecDV0RCAhNlUoO9CrcIb8Byb5M4lhvG');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`id_type_capteur`) REFERENCES `type_capteur` (`id_type_capteur`),
  ADD CONSTRAINT `capteur_ibfk_3` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`),
  ADD CONSTRAINT `capteur_ibfk_4` FOREIGN KEY (`id_cemac`) REFERENCES `cemac` (`id_cemac`);

--
-- Contraintes pour la table `cemac`
--
ALTER TABLE `cemac`
  ADD CONSTRAINT `cemac_ibfk_1` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_billet`) REFERENCES `billets` (`id_billet`);

--
-- Contraintes pour la table `historique_capteur`
--
ALTER TABLE `historique_capteur`
  ADD CONSTRAINT `historique_capteur_ibfk_1` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`);

--
-- Contraintes pour la table `logement`
--
ALTER TABLE `logement`
  ADD CONSTRAINT `logement_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `panne`
--
ALTER TABLE `panne`
  ADD CONSTRAINT `panne_ibfk_1` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`),
  ADD CONSTRAINT `panne_ibfk_2` FOREIGN KEY (`id_logement`) REFERENCES `logement` (`id_logement`),
  ADD CONSTRAINT `panne_ibfk_3` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`id_type_piece`) REFERENCES `type_piece` (`id_type_piece`),
  ADD CONSTRAINT `piece_ibfk_2` FOREIGN KEY (`id_logement`) REFERENCES `logement` (`id_logement`);

--
-- Contraintes pour la table `scenario`
--
ALTER TABLE `scenario`
  ADD CONSTRAINT `scenario_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `scenario_ibfk_2` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
