-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 25 mai 2023 à 09:54
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phpoo_7`
--

-- --------------------------------------------------------

--
-- Structure de la table `themessage`
--

DROP TABLE IF EXISTS `themessage`;
CREATE TABLE IF NOT EXISTS `themessage` (
  `idTheMessage` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titleTheMessage` varchar(120) NOT NULL,
  `slugTheMessage` varchar(150) NOT NULL,
  `dateTheMessage` date NOT NULL DEFAULT current_timestamp(),
  `messageTheMessage` text NOT NULL,
  `theMessageIdTheUser` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idTheMessage`),
  UNIQUE KEY `slugtm` (`slugTheMessage`),
  KEY `themessage_ibfk_1` (`theMessageIdTheUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `theuser`
--

DROP TABLE IF EXISTS `theuser`;
CREATE TABLE IF NOT EXISTS `theuser` (
  `idTheUser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `loginTheUser` varchar(100) NOT NULL,
  `pwdTheUser` varchar(100) NOT NULL,
  `mailTheUser` varchar(100) NOT NULL,
  PRIMARY KEY (`idTheUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `themessage`
--
ALTER TABLE `themessage`
  ADD CONSTRAINT `themessage_ibfk_1` FOREIGN KEY (`theMessageIdTheUser`) REFERENCES `theuser` (`idTheUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
