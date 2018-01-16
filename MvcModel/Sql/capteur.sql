-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 06 jan. 2018 à 12:34
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
  `fonctionnement` tinyint(1) NOT NULL DEFAULT '0',
  `id_type_capteur` int(255) NOT NULL,
  `id_cemac` int(255) NOT NULL,
  `id_piece` int(255) NOT NULL,
  PRIMARY KEY (`id_capteur`),
  KEY `id_type_capteur` (`id_type_capteur`),
  KEY `id_cemac` (`id_cemac`),
  KEY `id_piece` (`id_piece`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `capteur`
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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`id_type_capteur`) REFERENCES `type_capteur` (`id_type_capteur`),
  ADD CONSTRAINT `capteur_ibfk_2` FOREIGN KEY (`id_cemac`) REFERENCES `cemac` (`id_cemac`),
  ADD CONSTRAINT `capteur_ibfk_3` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id_piece`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
