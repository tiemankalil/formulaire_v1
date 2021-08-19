-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 août 2021 à 17:04
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etudiant_igs`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `num_aej` int(10) NOT NULL,
  `num_tel` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `date_inscription` date NOT NULL,
  `inscription_ligne` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `num_aej`, `num_tel`, `email`, `fonction`, `date_inscription`, `inscription_ligne`) VALUES
(12, 'tieman', 'kalilou', 21122221, 7499900, 'tiemankalil@gmail.com', 'dev_web', '2021-07-28', '2021-08-18 21:54:11'),
(13, 'tieman', 'kalilou', 21122221, 7499900, 'tiemankalil@gmail.com', 'dev_web', '2021-07-28', '2021-08-18 21:54:11'),
(14, 'aaaa', 'zzzzzzeee', 11332233, 2233443, 'tiemankalil@gmail.com', 'data_ia', '2021-07-29', '2021-08-18 21:54:11'),
(15, 'aaaa', 'zzzzzzeee', 11332233, 2233443, 'tiemankalil@gmail.com', 'data_ia', '2021-07-29', '2021-08-18 21:54:11'),
(16, 'aaaa', 'zzzzzzeee', 11332233, 2233443, 'tiemankalil@gmail.com', 'data_ia', '2021-07-29', '2021-08-18 21:54:11'),
(17, '', '', 0, 0, 'tiemankalil@gmail.com', 'dev_web', '2021-08-27', '2021-08-18 21:54:11'),
(18, 'aaaa', '', 0, 0, '', '', '0000-00-00', '2021-08-18 22:04:53'),
(19, 'tieman', 'kalilou', 2132343, 12335, 'tiemankalil@gmail.com', 'dev_web', '2021-08-11', '2021-08-19 08:51:49'),
(20, 'aaaa', '', 0, 0, '', '', '0000-00-00', '2021-08-19 08:59:56'),
(21, 'eeeee', 'eee', 11111222, 333333, 'tiemankalil@gmail.com', 'dev_web', '2021-08-03', '2021-08-19 09:47:17'),
(22, 'eeeee', '', 11, 11111, 'EEEEEEE@GGGG.COM', 'ref_dig', '0000-00-00', '2021-08-19 11:56:00'),
(23, 'eeeee', '', 11, 11111, 'EEEEEEE@GGGG.COM', 'ref_dig', '0000-00-00', '2021-08-19 14:06:18'),
(24, 'eeeee', 'zzzzzz', 3, 22222, 'tiemankalil@gmail.com', 'dev_web', '2021-08-13', '2021-08-19 14:27:52'),
(25, 'tiemann pdo', 'zzzzzz', 3, 22222, 'tiemankalil@gmail.com', 'dev_web', '2021-08-05', '2021-08-19 14:28:16'),
(26, 'tie1', 'zzzzzz', -2, 22222, 'tiemankalil@gmail.com', 'dev_web', '2021-08-05', '2021-08-19 14:49:00'),
(27, 'aaa1', 'zzzzzz', -1, 22222, 'tiemankalil@gmail.com', 'dev_web', '2021-08-04', '2021-08-19 14:58:39'),
(28, 'ssss1', 'zzzzzz', -1, 22222, 'tiemankalil@gmail.com', 'ref_dig', '2021-08-13', '2021-08-19 14:59:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
