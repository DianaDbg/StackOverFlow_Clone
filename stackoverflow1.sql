-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 08, 2021 at 12:15 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stackoverflow1`
--

-- --------------------------------------------------------

--
-- Table structure for table `apprenants`
--

DROP TABLE IF EXISTS `apprenants`;
CREATE TABLE IF NOT EXISTS `apprenants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `passwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `superviseur` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apprenants`
--

INSERT INTO `apprenants` (`id`, `prenom`, `nom`, `pseudo`, `passwd`, `superviseur`) VALUES
(1, 'Bamba', 'Deme', 'bamba.deme', 'bamba', 0),
(2, 'Khadim', 'Deme', 'khadim.deme', 'c09b00d558444841c0d78fbc9b192b24d15a78c3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `intitule` json NOT NULL,
  `date_question` datetime NOT NULL,
  `id_auteur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `intitule`, `date_question`, `id_auteur`) VALUES
(1, 'Cheikh Ahmadou Bamba Bamba Deme', '{\"ops\": [{\"insert\": \"aézdf zeff aersdg^jgr \'z$egf \\nzefn ezfspn\\n\"}]}', '2021-02-08 00:47:01', 2),
(2, 'Nouvelle question', '{\"ops\": [{\"insert\": \"sfdob zefcp eezf \"}, {\"insert\": \"eferfe \", \"attributes\": {\"bold\": true}}, {\"insert\": \"\\nzef erfvpon \"}, {\"insert\": \"fb\", \"attributes\": {\"italic\": true}}, {\"insert\": \" resflù\\n\"}]}', '2021-02-08 00:49:01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `question_theme`
--

DROP TABLE IF EXISTS `question_theme`;
CREATE TABLE IF NOT EXISTS `question_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` int(11) NOT NULL,
  `theme` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_theme`
--

INSERT INTO `question_theme` (`id`, `question`, `theme`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `nom`) VALUES
(1, 'html'),
(2, 'css'),
(3, 'python');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
