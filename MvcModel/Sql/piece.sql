-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 06 jan. 2018 à 12:28
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `id_type_piece`, `id_logement`, `nom_piece`, `superficie_piece`) VALUES
(1, 1, 1, 'SDB Bas', 5),
(2, 3, 1, 'Salon', 30),
(3, 4, 1, 'Salle à Manger', 25),
(4, 5, 1, 'Chambre de Darlène', 15),
(5, 5, 1, 'Chambre de Marvin', 15),
(6, 5, 1, 'Chambre d\'Axel', 15),
(7, 5, 1, 'Chambre des Parents', 22),
(8, 7, 1, 'Cuisine', 10),
(9, 9, 1, 'Garage', 20),
(10, 1, 1, 'SDB Haut', 15),
(11, 1, 2, 'SDB Bas', 5),
(12, 3, 2, 'Salon', 30),
(13, 4, 2, 'Salle à Manger', 25),
(14, 5, 2, 'Chambre de Guillaume', 15),
(15, 5, 2, 'Chambre de Léa', 15),
(16, 5, 2, 'Chambre d\'Armand', 15),
(17, 5, 2, 'Chambre des Parents', 22),
(18, 7, 2, 'Cuisine', 10),
(19, 9, 2, 'Garage', 20),
(20, 1, 2, 'SDB Haut', 15);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`id_type_piece`) REFERENCES `type_piece` (`id_type_piece`),
  ADD CONSTRAINT `piece_ibfk_2` FOREIGN KEY (`id_logement`) REFERENCES `logement` (`id_logement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
