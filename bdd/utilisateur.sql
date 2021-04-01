-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 01 Avril 2021 à 14:52
-- Version du serveur :  10.1.45-MariaDB-0+deb9u1
-- Version de PHP :  7.2.33-1+0~20200807.47+debian9~1.gbpcb3068

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lgorgerat`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `user_nom` varchar(100) DEFAULT NULL,
  `user_mdp` varchar(450) DEFAULT NULL,
  `user_mail` varchar(100) DEFAULT NULL,
  `user_rang` enum('élève','enseignant','élève cbe','admin') DEFAULT NULL,
  `token` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `user_nom`, `user_mdp`, `user_mail`, `user_rang`, `token`) VALUES
(4, 'test 2', '$2y$10$Ea8XCfhWm.ePEDe0VcRbM.0GATMlovnAQTrcJdMo5fwFzbUOCKznS', 'test@test.ch', 'élève', ''),
(5, 'test 5', '$2y$10$cNc2CEBxkeJnsmoNlyC.weySwD3CClJDg3VYOZrDBZrOoNZfCU0Va', 'test5@test.ch', 'élève', '90dd93f3520cf11de7f76afd'),
(6, 'Lisa Gorgerat', '$2y$10$JjFJ2jtEglWyX2E3A5HwMOa7JRMjICu0TB3D4f4nVLn0ceP8nSW/O', 'Lisa.GORGERAT@cpnv.ch', 'admin', '693954dbd24a77ee7a154f28'),
(9, 'Gaëtan Gendroz', '$2y$10$4opQ9XJJ2/L23uquRU0tK.kw37qdZbCA.V/9PbedehXG8QP6Koy4q', 'gaetan.gendroz@cpnv.ch', 'admin', '2c0be79ed76546d7afe0b9ba');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
