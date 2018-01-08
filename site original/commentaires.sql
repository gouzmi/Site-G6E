-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Janvier 2018 à 15:11
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
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `commentaire` text COLLATE utf8_bin NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'bruno', 'hola ! ce forum est ouf ', '0000-00-00 00:00:00'),
(1, 1, 'bruno', 'hola ! ce forum est ouf ', '0000-00-00 00:00:00'),
(0, 0, 'lebg', 'commentaire', '2018-01-18 09:09:09'),
(0, 0, 'lebg', 'commentaire', '2018-01-18 09:09:09'),
(1, 1, 'lebg', 'commentaire', '2017-12-04 01:01:01'),
(1, 1, 'lebg', 'commentaire', '2017-12-04 01:01:01'),
(0, 1, 'dfh', 'Votre commentaire...dh', '2018-01-04 12:47:07'),
(0, 1, 'gouzmi', 'ma grosse bite', '2018-01-08 14:17:22'),
(0, 1, 'ballu', 'est un connard', '2018-01-08 14:57:25'),
(0, 1, 'ballu', 'youlou', '2018-01-08 14:58:39'),
(0, 1, 'ballu', 'youlou\r\n', '2018-01-08 15:00:46'),
(0, 1, 'youlou', 'Votre commentaire...', '2018-01-08 15:01:19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
