-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 09 fév. 2018 à 16:14
-- Version du serveur :  10.1.26-MariaDB
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
-- Base de données :  `exercice_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id_movies` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `actors` varchar(45) DEFAULT NULL,
  `director` varchar(45) DEFAULT NULL,
  `producer` varchar(45) DEFAULT NULL,
  `year_of_prod` year(4) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `category` enum('Action','Aventure') DEFAULT NULL,
  `storyline` text,
  `video` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id_movies`, `title`, `actors`, `director`, `producer`, `year_of_prod`, `language`, `category`, `storyline`, `video`) VALUES
(1, 'Thor', 'Chris Hemsworth', 'Kenneth Branagh', 'Kevin Feige', 2011, 'francais', 'Action', 'Premi&egrave;re aventure de thor de l\'univers marvel', 'https://www.youtube.com/watch?v=MeN3Gwf2sDg'),
(2, 'Django Unchained', 'Jamie Foxx', 'Quentin Tarentino', 'Pilar Savone', 2012, 'anglais', 'Action', 'western', 'https://www.youtube.com/watch?v=K2XjgsfzDrU'),
(3, 'Gravity', 'Sandra Bullock', 'Alfonso Cuaron', 'Alfonso Cuaron', 2013, '1', 'Aventure', 'Perdu dans l\'espace', 'https://www.youtube.com/watch?v=k7RY4Br9jog');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movies`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movies` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
