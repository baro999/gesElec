-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 31 jan. 2019 à 13:55
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionelection`
--

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

DROP TABLE IF EXISTS `localite`;
CREATE TABLE IF NOT EXISTS `localite` (
  `code_localite` int(11) NOT NULL AUTO_INCREMENT,
  `nom_localite` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `superficie` int(11) NOT NULL,
  PRIMARY KEY (`code_localite`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `localite`
--

INSERT INTO `localite` (`code_localite`, `nom_localite`, `superficie`) VALUES
(1, 'dakar', 200000),
(2, 'thies', 150000),
(3, 'mbour', 136982),
(4, 'saint-louis', 150752),
(5, 'keur-massar', 15003),
(6, 'medina', 14526),
(7, 'grand-dakar', 1452),
(8, 'yoff', 2569),
(9, 'sandaga', 14896),
(10, 'djamena', 15486),
(11, 'rufisque', 12052),
(12, 'tchiali', 15545458),
(13, 'siafoumou', 15488),
(14, 'vindoulou', 54878),
(15, 'mont-kamba', 2545),
(16, 'dolisie', 6548484),
(17, 'nkayi', 5484),
(18, 'conakry', 1548548),
(19, 'libreville', 15484),
(20, 'owando', 65959);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
