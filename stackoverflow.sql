-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 22 jan. 2021 à 17:16
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stackoverflow`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

DROP TABLE IF EXISTS `apprenant`;
CREATE TABLE IF NOT EXISTS `apprenant` (
  `numApp` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `estsuperviseur` tinyint(1) NOT NULL DEFAULT '0',
  `nbrep` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numApp`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`numApp`, `nom`, `pseudo`, `passwd`, `estsuperviseur`, `nbrep`) VALUES
(6, 'Dème', 'soura', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 0, 0),
(7, 'gamer', 'shooter', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 0, 0),
(8, 'elaje', 'sousmarin', '0964bee5d5df3789d82e6c5337dc42191a0b3702', 0, 0),
(9, 'diana', 'diabong', '9a2da2aa865cf6f9f57e138fe8b86f5fe99f2171', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `numquestion` int(11) NOT NULL AUTO_INCREMENT,
  `numApp` int(11) NOT NULL,
  `intitulé` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`numquestion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `questiontheme`
--

DROP TABLE IF EXISTS `questiontheme`;
CREATE TABLE IF NOT EXISTS `questiontheme` (
  `numthem` int(11) NOT NULL,
  `numqestion` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `numrep` int(11) NOT NULL AUTO_INCREMENT,
  `numApp` int(11) NOT NULL,
  `numquestion` int(11) NOT NULL,
  `intitulé` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`numrep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `numtheme` int(11) NOT NULL AUTO_INCREMENT,
  `nomTheme` int(11) NOT NULL,
  PRIMARY KEY (`numtheme`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
