-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 jan. 2018 à 12:44
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
  PRIMARY KEY (`id_actionneur`),
  KEY `id_piece` (`id_piece`),
  KEY `id_type_actionneur` (`id_type_actionneur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
