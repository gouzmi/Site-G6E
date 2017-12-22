-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 22 déc. 2017 à 08:30
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
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `id_capteur` int(255) NOT NULL AUTO_INCREMENT,
  `fonctionnement` tinyint(1) NOT NULL,
  `id_type_capteur` int(255) NOT NULL,
  `id_cemac` int(255) NOT NULL,
  PRIMARY KEY (`id_capteur`),
  KEY `id_type_capteur` (`id_type_capteur`),
  KEY `id_cemac` (`id_cemac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cemac`
--

DROP TABLE IF EXISTS `cemac`;
CREATE TABLE IF NOT EXISTS `cemac` (
  `id_cemac` int(255) NOT NULL AUTO_INCREMENT,
  `id_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_cemac`),
  KEY `id_piece` (`id_piece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(255) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom_discussion` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  PRIMARY KEY (`id_forum`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

DROP TABLE IF EXISTS `panne`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `id_piece` int(255) NOT NULL AUTO_INCREMENT,
  `superficie_piece` int(255) NOT NULL,
  `id_lgement` int(255) NOT NULL,
  `id_type_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_piece`),
  KEY `id_type_piece` (`id_type_piece`),
  KEY `id_lgement` (`id_lgement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `precommande`
--

DROP TABLE IF EXISTS `precommande`;
CREATE TABLE IF NOT EXISTS `precommande` (
  `id_precommande` int(255) NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `id_capteur` int(255) NOT NULL,
  `email_commande` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_precommande`)
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
-- Structure de la table `type_capteur`
--

DROP TABLE IF EXISTS `type_capteur`;
CREATE TABLE IF NOT EXISTS `type_capteur` (
  `id_type_capteur` int(11) NOT NULL AUTO_INCREMENT,
  `variete_capteur` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_capteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type_piece`
--

DROP TABLE IF EXISTS `type_piece`;
CREATE TABLE IF NOT EXISTS `type_piece` (
  `id_type_piece` int(255) NOT NULL AUTO_INCREMENT,
  `variete_piece` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_piece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mdp` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mail` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mdp`, `mail`) VALUES
(1, 'DAr', 'dar', 'kiki', 'dare@gmail.fr'),
(2, 'Eustache', 'Darlène', 'info', 'darlene.eustache@gmail.com'),
(3, 'Sellami', 'Mohamed', 'lolo', 'sm@gmail.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`id_type_capteur`) REFERENCES `type_capteur` (`id_type_capteur`),
  ADD CONSTRAINT `capteur_ibfk_2` FOREIGN KEY (`id_cemac`) REFERENCES `cemac` (`id_cemac`);

--
-- Contraintes pour la table `cemac`
--
ALTER TABLE `cemac`
  ADD CONSTRAINT `cemac_ibfk_1` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`);

--
-- Contraintes pour la table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `logement`
--
ALTER TABLE `logement`
  ADD CONSTRAINT `logement_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `panne`
--
ALTER TABLE `panne`
  ADD CONSTRAINT `panne_ibfk_1` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`),
  ADD CONSTRAINT `panne_ibfk_2` FOREIGN KEY (`id_logement`) REFERENCES `logement` (`id_logement`),
  ADD CONSTRAINT `panne_ibfk_3` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`id_type_piece`) REFERENCES `type_piece` (`id_type_piece`),
  ADD CONSTRAINT `piece_ibfk_2` FOREIGN KEY (`id_lgement`) REFERENCES `logement` (`id_logement`);

--
-- Contraintes pour la table `scenario`
--
ALTER TABLE `scenario`
  ADD CONSTRAINT `scenario_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `scenario_ibfk_2` FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
