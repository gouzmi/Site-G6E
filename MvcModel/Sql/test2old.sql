-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 27 jan. 2018 à 11:55
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test2`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

DROP TABLE IF EXISTS `actionneur`;
CREATE TABLE IF NOT EXISTS `actionneur` (
  `id_actionneur` int(255) NOT NULL AUTO_INCREMENT,
  `id_type_actionneur` int(255) NOT NULL,
  `fonctionnement` tinyint(1) NOT NULL DEFAULT '1',
  `id_piece` int(255) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_cemac` int(11) NOT NULL,
  `valeur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_actionneur`),
  KEY `id_piece` (`id_piece`),
  KEY `id_type_actionneur` (`id_type_actionneur`),
  KEY `id_actionneur` (`id_actionneur`),
  KEY `id_cemac` (`id_cemac`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`id_actionneur`, `id_type_actionneur`, `fonctionnement`, `id_piece`, `nom`, `id_cemac`, `valeur`) VALUES
(1, 1, 1, 1, 'voleet', 10, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id_billet` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_billet`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id_billet`, `titre`, `contenu`, `date_creation`) VALUES
(9, 'Problème', 'capteur\r\n', '2018-01-23 11:01:57');

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `id_capteur` int(255) NOT NULL AUTO_INCREMENT,
  `fonctionnement` tinyint(1) NOT NULL DEFAULT '0',
  `id_type_capteur` int(255) NOT NULL,
  `id_cemac` int(255) DEFAULT NULL,
  `id_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_capteur`),
  KEY `id_type_capteur` (`id_type_capteur`),
  KEY `id_piece` (`id_piece`) USING BTREE,
  KEY `id_cemac` (`id_cemac`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cemac`
--

DROP TABLE IF EXISTS `cemac`;
CREATE TABLE IF NOT EXISTS `cemac` (
  `id_cemac` int(255) NOT NULL AUTO_INCREMENT,
  `id_piece` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_cemac`),
  KEY `id_piece` (`id_piece`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cemac`
--

INSERT INTO `cemac` (`id_cemac`, `id_piece`) VALUES
(10, 1),
(11, 1),
(12, 5),
(13, 5),
(4, 14),
(3, 15);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_billet` int(11) NOT NULL,
  `commentaire` text COLLATE utf8_bin NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_utilisateur` int(255) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_billet` (`id_billet`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_billet`, `commentaire`, `date_creation`, `id_utilisateur`) VALUES
(16, 9, 'ouiii', '2018-01-23 11:02:08', 0),
(17, 9, 'nonn', '2018-01-23 11:02:33', 0),
(18, 9, 'aa', '2018-01-23 11:16:03', 0),
(19, 9, 'aa', '2018-01-23 11:30:51', 0),
(20, 9, 'aa', '2018-01-23 11:30:54', 0),
(25, 9, 'hhh', '2018-01-23 13:49:11', 0);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(255) NOT NULL AUTO_INCREMENT,
  `question_faq` varchar(255) COLLATE utf8_bin NOT NULL,
  `reponse_faq` varchar(255) COLLATE utf8_bin NOT NULL,
  `theme_faq` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question_faq`, `reponse_faq`, `theme_faq`) VALUES
(1, 'Comment tu t\'appelles ?', 'Darlène', 'Tet\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `historique_capteur`
--

DROP TABLE IF EXISTS `historique_capteur`;
CREATE TABLE IF NOT EXISTS `historique_capteur` (
  `id_historique_capteur` int(255) NOT NULL AUTO_INCREMENT,
  `id_capteur` int(255) NOT NULL,
  `valeur_capteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_donnee` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `heure_donnee` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`id_historique_capteur`),
  KEY `id_capteur` (`id_capteur`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `id_logement` int(255) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `code_postale_logement` int(10) NOT NULL,
  `ville_logement` text COLLATE utf8_bin NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  PRIMARY KEY (`id_logement`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `adresse`, `code_postale_logement`, `ville_logement`, `id_utilisateur`) VALUES
(1, '6  Rue Ampère', 95190, 'Goussainville', 3),
(2, '4 avenue Victor Hugo', 94160, 'Saint-Mandé', 2);

-- --------------------------------------------------------

--
-- Structure de la table `maintenance`
--

DROP TABLE IF EXISTS `maintenance`;
CREATE TABLE IF NOT EXISTS `maintenance` (
  `id_maintenance` int(11) NOT NULL AUTO_INCREMENT,
  `type_maintenance` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `desc_maintenance` text COLLATE utf8_bin NOT NULL,
  `desc_maintenance2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_maintenance`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `maintenance`
--

INSERT INTO `maintenance` (`id_maintenance`, `type_maintenance`, `desc_maintenance`, `desc_maintenance2`) VALUES
(1, 'horaire lundi', '09:00-12:00,14:00-17:00', NULL),
(2, 'horaire mardi', '09:00-12:00,14:00-17:00', NULL),
(3, 'horaire mercredi', '09:00-12:00,14:00-17:00', NULL),
(4, 'horaire jeudi', '09:00-12:00,14:00-17:00', NULL),
(5, 'horaire vendredi', '09:00-12:00,14:00-17:00', NULL),
(6, 'horaire samedi', 'Fermé', NULL),
(7, 'horaire dimanche', 'Fermé', NULL),
(8, 'numéro domhome', '06 13 54 43 37', NULL),
(9, 'adresse domhome', '4 av', NULL),
(10, 'adresse mail', 'domisep@domhome.fr', NULL),
(11, 'cgu', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', NULL),
(12, 'mentions légales', 'A remplis svp', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

DROP TABLE IF EXISTS `panne`;
CREATE TABLE IF NOT EXISTS `panne` (
  `id_panne` int(255) NOT NULL AUTO_INCREMENT,
  `probleme` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_debut` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_fin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `commentaire` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_capteur` int(11) DEFAULT NULL,
  `id_logement` int(11) NOT NULL,
  PRIMARY KEY (`id_panne`),
  KEY `id_capteur` (`id_capteur`),
  KEY `id_logement` (`id_logement`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `id_piece` int(255) NOT NULL AUTO_INCREMENT,
  `id_type_piece` int(255) NOT NULL,
  `id_logement` int(255) NOT NULL,
  `nom_piece` text COLLATE utf8_bin NOT NULL,
  `superficie_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_piece`),
  KEY `id_type_piece` (`id_type_piece`),
  KEY `id_logement` (`id_logement`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `id_type_piece`, `id_logement`, `nom_piece`, `superficie_piece`) VALUES
(1, 5, 1, 'SDB Bas', 5),
(2, 3, 1, 'Salon', 30),
(3, 4, 1, 'Salle à Manger', 25),
(4, 1, 1, 'Chambre de Darlène', 15),
(5, 1, 1, 'Chambre de Marvin', 15),
(6, 1, 1, 'Chambre d\'Axel', 15),
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

DROP TABLE IF EXISTS `precommande`;
CREATE TABLE IF NOT EXISTS `precommande` (
  `id_precommande` int(255) NOT NULL AUTO_INCREMENT,
  `date_commande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_commande` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_precommande`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `precommande`
--

INSERT INTO `precommande` (`id_precommande`, `date_commande`, `email_commande`, `admin`) VALUES
(1, '2017-12-30 00:00:00', 'test@gmail.com', 0),
(2, '2018-01-01 00:00:00', 'adresse@gmail.com', 0),
(3, '2018-01-03 00:00:00', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

DROP TABLE IF EXISTS `recuperation`;
CREATE TABLE IF NOT EXISTS `recuperation` (
  `id_recuperation` int(11) NOT NULL AUTO_INCREMENT,
  `mail_recuperation` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` int(255) NOT NULL,
  PRIMARY KEY (`id_recuperation`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `scenario`
--

DROP TABLE IF EXISTS `scenario`;
CREATE TABLE IF NOT EXISTS `scenario` (
  `id_scenario` int(255) NOT NULL AUTO_INCREMENT,
  `action` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  `id_capteur` int(255) NOT NULL,
  PRIMARY KEY (`id_scenario`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_capteur` (`id_capteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_actionneur`
--

DROP TABLE IF EXISTS `type_actionneur`;
CREATE TABLE IF NOT EXISTS `type_actionneur` (
  `id_type_actionneur` int(255) NOT NULL AUTO_INCREMENT,
  `variete_actionneur` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_actionneur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_actionneur`
--

INSERT INTO `type_actionneur` (`id_type_actionneur`, `variete_actionneur`) VALUES
(1, 'Volets'),
(2, 'Lumière'),
(3, 'Chauffage');

-- --------------------------------------------------------

--
-- Structure de la table `type_capteur`
--

DROP TABLE IF EXISTS `type_capteur`;
CREATE TABLE IF NOT EXISTS `type_capteur` (
  `id_type_capteur` int(11) NOT NULL AUTO_INCREMENT,
  `variete_capteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_url` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `taille_image` int(11) DEFAULT NULL,
  `desc_image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `desc_capteur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_type_capteur`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_capteur`
--

INSERT INTO `type_capteur` (`id_type_capteur`, `variete_capteur`, `image_url`, `taille_image`, `desc_image`, `desc_capteur`) VALUES
(1, 'Présence', '0', 0, '0', '0'),
(2, 'Lumière', '0', 0, '0', '0'),
(3, 'Température', '0', 0, '0', '0'),
(4, 'Fumée', '0', 0, '0', '0'),
(5, 'Contact', '0', 0, '0', '0'),
(6, 'Consommation', '0', 0, '0', '0'),
(7, 'Caméra', '0', 0, '0', '0'),
(8, 'Volet', '0', 0, '0', '0'),
(9, 'Actionneur', '0', 0, '0', '0');

-- --------------------------------------------------------

--
-- Structure de la table `type_piece`
--

DROP TABLE IF EXISTS `type_piece`;
CREATE TABLE IF NOT EXISTS `type_piece` (
  `id_type_piece` int(255) NOT NULL AUTO_INCREMENT,
  `variete_piece` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_piece`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_piece`
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

DROP TABLE IF EXISTS `utilisateur`;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `adresse_contact`, `cp_contact`, `ville_contact`, `telephone`, `mail`, `admin`, `mdp`) VALUES
(1, 'Eustache', 'Darlène\r\n', '6  Rue AmpÃ¨re', '95000', 'Goussainville', '06123456789', 'darlene@gmail.com', 0, '$2y$10$J79FbrpkyzRtmlu65tp6s.Vxf8BTpytl9V..TTqOhlKiYC2Z/o3rW'),
(2, 'Dupont', 'Guillaume', '4 avenue Victor Hugo', '94160', 'Saint-Mandé', '0613544337', 'guillaume.dupont.rm@gmail.com', 0, '$2y$10$Jb5c.gzbbv91BZ2AVdPhV.6EhJY6Wz02zaFMqZUqeCgIgpN7R4jDS'),
(3, 'Eustache', 'Darlene', '6  Rue Ampère', '95190', 'Goussainville', '0123456789', 'darlene.eustache@gmail.com', 1, '$2y$10$7Z2aofPDnWgq.MSZwbdOMue.1ehCh/WWJkGfmVNWwxG9LWAfLWlgW'),
(4, 'ADMINISTRATEUR', 'Admin', '2 Rue des Bois', '12345', 'Ville', '0123456789', 'admin@gmail.com', 1, '$2y$10$nVDEnGUXVzfVFOMvQ8G12./oBRfdrsnvGDagk9g/4VT0duXSjkuIK');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actionneur`
--
ALTER TABLE `actionneur`
  ADD CONSTRAINT `actionneur_ibfk_1` FOREIGN KEY (`id_type_actionneur`) REFERENCES `type_actionneur` (`id_type_actionneur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actionneur_ibfk_2` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actionneur_ibfk_3` FOREIGN KEY (`id_cemac`) REFERENCES `cemac` (`id_cemac`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`id_type_capteur`) REFERENCES `type_capteur` (`id_type_capteur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `capteur_ibfk_3` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `capteur_ibfk_4` FOREIGN KEY (`id_cemac`) REFERENCES `cemac` (`id_cemac`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cemac`
--
ALTER TABLE `cemac`
  ADD CONSTRAINT `cemac_ibfk_1` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_billet`) REFERENCES `billets` (`id_billet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `historique_capteur`
--
ALTER TABLE `historique_capteur`
  ADD CONSTRAINT `historique_capteur_ibfk_1` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `logement`
--
ALTER TABLE `logement`
  ADD CONSTRAINT `logement_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panne`
--
ALTER TABLE `panne`
  ADD CONSTRAINT `panne_ibfk_1` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panne_ibfk_2` FOREIGN KEY (`id_logement`) REFERENCES `logement` (`id_logement`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panne_ibfk_3` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`id_type_piece`) REFERENCES `type_piece` (`id_type_piece`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `piece_ibfk_2` FOREIGN KEY (`id_logement`) REFERENCES `logement` (`id_logement`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `scenario`
--
ALTER TABLE `scenario`
  ADD CONSTRAINT `scenario_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scenario_ibfk_2` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
