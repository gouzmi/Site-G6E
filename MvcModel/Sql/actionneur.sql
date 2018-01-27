-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 27 jan. 2018 à 10:19
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
  PRIMARY KEY (`id_actionneur`),
  KEY `id_piece` (`id_piece`),
  KEY `id_type_actionneur` (`id_type_actionneur`),
  KEY `id_actionneur` (`id_actionneur`),
  KEY `id_cemac` (`id_cemac`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`id_actionneur`, `id_type_actionneur`, `fonctionnement`, `id_piece`, `nom`, `id_cemac`) VALUES
(1, 1, 1, 1, 'voleet', 10);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actionneur`
--
ALTER TABLE `actionneur`
  ADD CONSTRAINT `actionneur_ibfk_1` FOREIGN KEY (`id_type_actionneur`) REFERENCES `type_actionneur` (`id_type_actionneur`),
  ADD CONSTRAINT `actionneur_ibfk_2` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`),
  ADD CONSTRAINT `actionneur_ibfk_3` FOREIGN KEY (`id_cemac`) REFERENCES `cemac` (`id_cemac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
