-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 jan. 2021 à 17:08
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(30) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Motivation` varchar(100) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`prenom`, `nom`, `date_naiss`, `lieu_naiss`, `sexe`, `Adresse`, `Motivation`, `fonction`, `message`, `id`) VALUES
('Souleymane Dieng', 'sall', '1997-01-18', 'dakar', 'Homme', 'dakar gueule tapée', '', '       developpeur junior', '', 5),
('sitan', 'drame', '1998-07-12', 'dakar', 'Femme', 'diameuguene', '', '    developpeuse junior', '', 12),
('mamadou', 'sall', '1997-05-14', 'dakar', 'Homme', 'dakar gueule tapée', '', 'footballeur', 'sgfdg', 14),
('ndeye sokhna', 'ndiaye', '2021-01-21', 'dakar', 'Femme', 'thiaroye', '', ' coach', 'elle est notre coach', 15),
('ndeye', 'khar', '1998-01-21', 'dakar', 'Femme', 'yoff layene', '', ' developpeuse junior', 'elle est cool', 16);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
