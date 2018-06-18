-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 31 jan. 2018 à 20:36
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
-- Base de données :  `domhome`
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
  `nom` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `id_cemac` int(11) NOT NULL,
  `valeur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_actionneur`),
  KEY `id_piece` (`id_piece`),
  KEY `id_type_actionneur` (`id_type_actionneur`),
  KEY `id_actionneur` (`id_actionneur`),
  KEY `id_cemac` (`id_cemac`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`id_actionneur`, `id_type_actionneur`, `fonctionnement`, `id_piece`, `nom`, `id_cemac`, `valeur`) VALUES
(1, 6, 1, 21, 'Alarme', 1, NULL),
(2, 1, 1, 21, '', 1, NULL),
(3, 2, 1, 21, '', 1, NULL),
(4, 3, 1, 21, '', 1, NULL),
(5, 2, 1, 25, '', 2, NULL),
(6, 2, 1, 24, '', 2, NULL),
(7, 2, 1, 26, '', 4, NULL),
(8, 6, 1, 26, '', 4, NULL),
(9, 1, 1, 28, '', 2, NULL),
(10, 2, 1, 28, '', 2, NULL),
(11, 1, 1, 22, '', 3, NULL),
(12, 2, 1, 22, '', 3, NULL),
(13, 3, 1, 22, '', 3, NULL),
(14, 1, 1, 23, '', 3, NULL),
(15, 2, 1, 23, '', 3, NULL),
(16, 3, 1, 23, '', 3, NULL),
(17, 1, 1, 27, '', 4, NULL),
(18, 2, 1, 27, '', 4, NULL),
(19, 3, 1, 27, '', 4, NULL);
/*(20, 7, 0, 25, '', 1, NULL);*/

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `fonctionnement`, `id_type_capteur`, `id_cemac`, `id_piece`) VALUES
(47, 0, 1, 1, 21),
(48, 0, 2, 1, 21),
(49, 0, 3, 1, 21),
(50, 0, 4, 1, 21),
(51, 0, 5, 1, 21),
(52, 0, 6, 1, 21),
(53, 0, 1, 3, 22),
(54, 0, 2, 3, 22),
(55, 0, 3, 3, 22),
(56, 0, 5, 3, 22),
(57, 0, 6, 3, 22),
(58, 0, 1, 3, 23),
(59, 0, 2, 3, 23),
(60, 0, 3, 3, 23),
(61, 0, 5, 3, 23),
(62, 0, 6, 3, 23),
(63, 0, 1, 2, 24),
(64, 0, 2, 2, 24),
(65, 0, 6, 2, 24),
(66, 0, 3, 2, 24),
(67, 0, 1, 2, 25),
(68, 0, 2, 2, 25),
(69, 0, 5, 2, 25),
(70, 0, 6, 2, 25),
(71, 0, 5, 2, 24),
(72, 0, 1, 4, 26),
(73, 0, 2, 4, 26),
(74, 0, 5, 4, 26),
(75, 0, 6, 4, 26),
(76, 0, 1, 3, 23),
(77, 0, 2, 3, 23),
(78, 0, 3, 3, 23),
(79, 0, 5, 3, 23),
(80, 0, 1, 4, 27),
(81, 0, 2, 4, 27),
(82, 0, 4, 4, 26),
(83, 0, 5, 4, 27),
(84, 0, 6, 4, 27),
(85, 0, 1, 2, 28),
(86, 0, 2, 2, 28),
(87, 0, 3, 2, 28);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cemac`
--

INSERT INTO `cemac` (`id_cemac`, `id_piece`) VALUES
(1, 21),
(3, 23),
(4, 26),
(2, 28);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(255) NOT NULL AUTO_INCREMENT,
  `id_billet` int(255) NOT NULL,
  `commentaire` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_creation` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `id_utilisateur` int(255) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_billet` (`id_billet`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_billet`, `commentaire`, `date_creation`, `id_utilisateur`) VALUES
(1, 9, 'Bonjour, Comment savoir quand le détecteur de fumée n\'a plus de piles ?', '2018-01-09 05:19:00.000000', 6);

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
(1, 'Sur quel site faut -il passer commande ?', 'Il faut passer commande sur DomhomeCommande.fr', 'Commande');

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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `historique_capteur`
--

INSERT INTO `historique_capteur` (`id_historique_capteur`, `id_capteur`, `valeur_capteur`, `date_donnee`, `heure_donnee`) VALUES
(10, 47, 'non', '2018-01-31 19:24:17', '00:00:00'),
(11, 48, 'non', '2018-01-31 19:24:39', '00:00:00'),
(12, 49, '20', '2018-01-31 19:24:54', '00:00:00'),
(13, 50, 'non', '2018-01-31 19:25:14', '00:00:00'),
(14, 51, 'non', '2018-01-31 19:25:25', '00:00:00'),
(15, 52, '0', '2018-01-31 19:25:35', '00:00:00'),
(16, 53, 'non', '2018-01-31 19:27:05', '00:00:00'),
(17, 54, 'non', '2018-01-31 19:27:10', '00:00:00'),
(18, 55, '20', '2018-01-31 19:27:15', '00:00:00'),
(19, 56, 'non', '2018-01-31 20:39:00', '00:00:00'),
(20, 57, '0', '2018-01-31 20:39:00', '00:00:00'),
(21, 58, 'non', '2018-01-31 20:39:00', '00:00:00'),
(22, 59, 'non', '2018-01-31 20:39:00', '00:00:00'),
(23, 60, '0', '2018-01-31 20:39:00', '00:00:00'),
(24, 61, 'non', '2018-01-31 20:39:00', '00:00:00'),
(25, 62, '0', '2018-01-31 20:39:00', '00:00:00'),
(26, 63, 'non', '2018-01-31 20:39:00', '00:00:00'),
(27, 64, 'non', '2018-01-31 20:39:00', '00:00:00'),
(28, 65, '0', '2018-01-31 20:39:00', '00:00:00'),
(29, 66, '0', '2018-01-31 20:39:00', '00:00:00'),
(30, 67, 'non', '2018-01-31 20:39:00', '00:00:00'),
(31, 68, 'non', '2018-01-31 20:39:00', '00:00:00'),
(32, 69, 'non', '2018-01-31 20:39:00', '00:00:00'),
(33, 70, '0', '2018-01-31 20:39:00', '00:00:00'),
(34, 71, 'non', '2018-01-31 20:39:00', '00:00:00'),
(35, 72, 'non', '2018-01-31 20:39:00', '00:00:00'),
(36, 73, 'non', '2018-01-31 20:39:00', '00:00:00'),
(37, 74, 'non', '2018-01-31 20:39:00', '00:00:00'),
(38, 75, 'non', '2018-01-31 20:39:00', '00:00:00'),
(39, 80, 'non', '2018-01-31 20:47:04', '00:00:00'),
(40, 81, 'non', '2018-01-31 20:47:23', '00:00:00'),
(41, 82, 'non', '2018-01-31 20:47:37', '00:00:00'),
(42, 83, 'non', '2018-01-31 20:47:51', '00:00:00'),
(43, 84, '0', '2018-01-31 20:48:02', '00:00:00'),
(44, 85, 'non', '2018-01-31 20:48:30', '00:00:00'),
(45, 86, 'non', '2018-01-31 21:02:36', '00:00:00'),
(46, 87, '20', '2018-01-31 21:02:52', '00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `adresse`, `code_postale_logement`, `ville_logement`, `id_utilisateur`) VALUES
(27, '10 rue du Client', 92130, 'Issy-les-Moulineaux', 6),
(28, '28 Rue Notre Dame des Champs', 75006, 'Paris', 8);

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
(9, 'adresse domhome', '10 Rue de Vanves 92130, Issy-les-Mouineaux', NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `id_type_piece`, `id_logement`, `nom_piece`, `superficie_piece`) VALUES
(21, 3, 27, 'Salon', 20),
(22, 1, 27, 'Chambre des Parents', 15),
(23, 1, 27, 'Chambre Client', 10),
(24, 5, 27, 'Salle de Bain', 7),
(25, 6, 27, 'Cuisine', 8),
(26, 9, 27, 'Garage', 20),
(27, 4, 27, 'Salle à Manger', 15),
(28, 7, 27, 'Bureau', 8);

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
(2, '2018-01-03 00:00:00', 'admin@gmail.com', 1),
(3, '2018-01-01 00:00:00', 'client@gmail.com', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `type_actionneur`
--

INSERT INTO `type_actionneur` (`id_type_actionneur`, `variete_actionneur`) VALUES
(1, 'Volets'),
(2, 'Lumière'),
(3, 'Chauffage'),
(4, 'Portail'),
(5, 'Autre Type'),
(6, 'Alarme'),
(7, 'Ventilateur');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(7, 'Caméra', '0', 0, '0', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `adresse_contact`, `cp_contact`, `ville_contact`, `telephone`, `mail`, `admin`, `mdp`) VALUES
(6, 'Compte', 'Client', '10 rue du client', '92130', 'Issy', '0123456789', 'client@gmail.com', 0, '$2y$10$.W2MAFHjNl3JuCyDJoVOUOiRYHjRfXV6wV0aME2wCfClNmMWbWM2S'),
(7, 'Admin', 'Domisep', '28 Rue Notre Dame des Champs', '75006', 'Paris', '0123456789', 'admin@gmail.com', 1, '$2y$10$C.tttl4wZYasnh5.07QfH.6kh71QzKxMPGNpem4YvFKW6OlpZNc8K'),
(8, 'Sav', 'Domisep', '28 Rue Notre Dame des Champs', '75006', 'Paris', '0123456789', 'domhome.sav@gmail.com', 2, '$2y$10$XWgKA6Ol34jaz5EWdQyeCuNWR8ckhB794/S0IImVKZ4FrwAqjXade');

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
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_billet`) REFERENCES `billets` (`id_billet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
