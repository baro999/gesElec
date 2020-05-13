-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 31 jan. 2019 à 13:44
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
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_admin` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mot_de_passe_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom_admin`, `prenom_admin`, `mot_de_passe_admin`) VALUES
(1, 'root', 'root', 'jesuisunadmin');

-- --------------------------------------------------------

--
-- Structure de la table `electeur`
--

DROP TABLE IF EXISTS `electeur`;
CREATE TABLE IF NOT EXISTS `electeur` (
  `NumE` int(9) NOT NULL AUTO_INCREMENT,
  `prenomE` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `codeLoc` int(11) NOT NULL,
  PRIMARY KEY (`NumE`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `electeur`
--

INSERT INTO `electeur` (`NumE`, `prenomE`, `date_naissance`, `lieu_naissance`, `genre`, `codeLoc`) VALUES
(11, 'abdourahamane', '1999-02-12', 'burkina-faso', '', 13),
(10, 'kandza', '1998-05-10', 'congo', '', 11),
(9, 'mamadou', '1997-11-11', 'guinée', '', 17);

-- --------------------------------------------------------

--
-- Structure de la table `election`
--

DROP TABLE IF EXISTS `election`;
CREATE TABLE IF NOT EXISTS `election` (
  `code_election` int(11) NOT NULL AUTO_INCREMENT,
  `nom_election` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `code_type_election` int(11) NOT NULL,
  PRIMARY KEY (`code_election`),
  KEY `fr1` (`code_type_election`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `election`
--

INSERT INTO `election` (`code_election`, `nom_election`, `code_type_election`) VALUES
(1, 'administrative', 1),
(3, 'travail', 1);

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

-- --------------------------------------------------------

--
-- Structure de la table `parti`
--

DROP TABLE IF EXISTS `parti`;
CREATE TABLE IF NOT EXISTS `parti` (
  `num_parti` int(11) NOT NULL AUTO_INCREMENT,
  `nom_parti` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`num_parti`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `parti`
--

INSERT INTO `parti` (`num_parti`, `nom_parti`) VALUES
(3, 'UDPS'),
(5, 'yamcha');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

DROP TABLE IF EXISTS `participer`;
CREATE TABLE IF NOT EXISTS `participer` (
  `id_participer` int(11) NOT NULL AUTO_INCREMENT,
  `code_election` int(11) NOT NULL,
  `num_parti` int(11) NOT NULL,
  `nbvoix` int(11) NOT NULL,
  PRIMARY KEY (`id_participer`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `participer`
--

INSERT INTO `participer` (`id_participer`, `code_election`, `num_parti`, `nbvoix`) VALUES
(1, 3, 2, 26000),
(3, 3, 3, 12500);

-- --------------------------------------------------------

--
-- Structure de la table `type_election`
--

DROP TABLE IF EXISTS `type_election`;
CREATE TABLE IF NOT EXISTS `type_election` (
  `code_type_election` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_election` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`code_type_election`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_election`
--

INSERT INTO `type_election` (`code_type_election`, `nom_type_election`) VALUES
(1, 'communale'),
(3, 'regionale');

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
