-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 jan. 2018 à 18:34
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
(12, 'mentions légales', 'A remplir', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
