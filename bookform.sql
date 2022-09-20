-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 20 sep. 2022 à 19:39
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookform`
--

CREATE TABLE `bookform` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(400) NOT NULL,
  `address` varchar(450) NOT NULL,
  `location` varchar(345) NOT NULL,
  `guests` varchar(500) NOT NULL,
  `arrivals` varchar(500) NOT NULL,
  `leaving` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bookform`
--

INSERT INTO `bookform` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'TOHE', 'sandrinetohe5@gmail.com', '93696128', 'Avédji-Lomé', 'Lomé', '9', '2022-09-16', '2022-09-23'),
(2, 'TOHE', 'sandrinetohe5@gmail.com', '93696128', 'Avédji-Lomé', 'efghjkl', '12334567', '2022-09-17', '2022-09-30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bookform`
--
ALTER TABLE `bookform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bookform`
--
ALTER TABLE `bookform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
