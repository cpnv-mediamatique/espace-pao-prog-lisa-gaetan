-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 01 avr. 2021 à 14:02
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pao`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartes`
--

DROP TABLE IF EXISTS `cartes`;
CREATE TABLE IF NOT EXISTS `cartes` (
  `id_carte` int(11) NOT NULL,
  `carte_nom` varchar(100) DEFAULT NULL,
  `carte_classe` varchar(45) DEFAULT NULL,
  `carte_nb` varchar(45) DEFAULT NULL,
  `fk_utilisateur` int(11) NOT NULL,
  `fk_designs` int(11) NOT NULL,
  PRIMARY KEY (`id_carte`),
  KEY `fk_cartes_utilisateur1_idx` (`fk_utilisateur`),
  KEY `fk_cartes_designs1_idx` (`fk_designs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `designs`
--

DROP TABLE IF EXISTS `designs`;
CREATE TABLE IF NOT EXISTS `designs` (
  `id_design` int(11) NOT NULL AUTO_INCREMENT,
  `design_nom` varchar(45) DEFAULT NULL,
  `design_chemin` mediumtext,
  PRIMARY KEY (`id_design`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etiquettes`
--

DROP TABLE IF EXISTS `etiquettes`;
CREATE TABLE IF NOT EXISTS `etiquettes` (
  `id_etiquette` int(11) NOT NULL AUTO_INCREMENT,
  `eti_nom` varchar(100) DEFAULT NULL,
  `eti_titre` mediumtext,
  `eti_num` varchar(45) DEFAULT NULL,
  `fk_utilisateur` int(11) NOT NULL,
  `fk_designs` int(11) NOT NULL,
  PRIMARY KEY (`id_etiquette`),
  KEY `fk_etiquettes_utilisateur_idx` (`fk_utilisateur`),
  KEY `fk_etiquettes_designs1_idx` (`fk_designs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cartes`
--
ALTER TABLE `cartes`
  ADD CONSTRAINT `fk_cartes_designs1` FOREIGN KEY (`fk_designs`) REFERENCES `designs` (`id_design`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cartes_utilisateur1` FOREIGN KEY (`fk_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etiquettes`
--
ALTER TABLE `etiquettes`
  ADD CONSTRAINT `fk_etiquettes_designs1` FOREIGN KEY (`fk_designs`) REFERENCES `designs` (`id_design`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_etiquettes_utilisateur` FOREIGN KEY (`fk_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
