-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 31 jan. 2019 à 13:57
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
-- Structure de la table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE IF NOT EXISTS `voter` (
  `id_vote` int(11) NOT NULL AUTO_INCREMENT,
  `NumE` int(11) NOT NULL,
  `code_election` int(11) NOT NULL,
  `nb_electeur` int(11) NOT NULL,
  `nb_votant` int(11) NOT NULL,
  `date_vote` date NOT NULL,
  PRIMARY KEY (`id_vote`),
  KEY `fk1` (`NumE`),
  KEY `fk3` (`code_election`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `voter`
--

INSERT INTO `voter` (`id_vote`, `NumE`, `code_election`, `nb_electeur`, `nb_votant`, `date_vote`) VALUES
(1, 1, 3, 1200, 100, '1998-12-12'),
(3, 5, 2, 12500, 31, '2028-02-18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
