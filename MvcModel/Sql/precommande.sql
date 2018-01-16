-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 jan. 2018 à 10:08
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
-- Structure de la table `precommande`
--

DROP TABLE IF EXISTS `precommande`;
CREATE TABLE IF NOT EXISTS `precommande` (
  `id_precommande` int(255) NOT NULL AUTO_INCREMENT,
  `date_commande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_capteur` int(255) NOT NULL DEFAULT '0',
  `email_commande` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_precommande`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `precommande`
--

INSERT INTO `precommande` (`id_precommande`, `date_commande`, `id_capteur`, `email_commande`, `admin`) VALUES
(1, '2017-12-30 00:00:00', 2, 'test@gmail.com', 0),
(2, '2018-01-01 00:00:00', 2, 'adresse@gmail.com', 0),
(3, '2018-01-03 00:00:00', 5, 'admin@gmail.com', 1),
(8, '2018-01-11 10:57:56', 0, 'test@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
