-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 31 mai 2021 à 13:42
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
use `salvatumabase`;
--
-- CREATE DATABASE IF NOT EXISTS `salvatumabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
-- USE `salvatumabase`;

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id_competence` int(11) NOT NULL COMMENT 'ID unique',
  `id_user` int(11) NOT NULL,
  `competence` char(30) NOT NULL COMMENT 'Nom de la compétence',
  `valeur` tinyint(3) UNSIGNED NOT NULL COMMENT 'Valeurs de la compétence sur 100',
  `couleur` char(10) NOT NULL COMMENT 'Code couleur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id_competence`, `id_user`, `competence`, `valeur`, `couleur`) VALUES
(3, 1, 'PHP', 25, '#0805a3'),
(6, 1, 'CSS', 50, '#ff00f7'),
(15, 1, 'HTML', 60, '#ff0000'),
(18, 1, 'JavaScript', 10, '#ffee00'),
(22, 1, 'Office bureautique', 90, '#19cb01'),
(23, 1, 'Premiere Pro', 65, '#ad0090'),
(24, 1, 'After Effect', 20, '#ff61cd'),
(25, 1, 'In Design', 80, '#cc0000'),
(26, 1, 'Illustrator', 50, '#ffbb00'),
(27, 1, 'Photoshop', 20, '#007bff');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL COMMENT 'ID unique',
  `id_key` char(30) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` char(30) DEFAULT NULL COMMENT 'Nom de famille',
  `prenom` char(30) DEFAULT NULL COMMENT 'Prénom',
  `telephone` char(10) DEFAULT NULL COMMENT 'Numéro de téléphone',
  `adresse` char(100) DEFAULT NULL COMMENT 'Numéro et rue',
  `complement` char(50) DEFAULT NULL COMMENT 'Complément d''adresse',
  `code_postal` char(5) DEFAULT NULL COMMENT 'Code postal',
  `email` char(50) DEFAULT NULL COMMENT 'Email',
  `education` char(150) DEFAULT NULL COMMENT 'Niveau d''étude',
  `age` double DEFAULT NULL COMMENT 'Age de la personne',
  `disponibilite` tinyint(1) DEFAULT NULL COMMENT 'Disponibilité de travail',
  `metier` char(50) DEFAULT NULL COMMENT 'Métier de la personne',
  `website` char(150) DEFAULT NULL COMMENT 'Website personnel',
  `twitter` char(150) DEFAULT NULL,
  `facebook` char(150) DEFAULT NULL,
  `instagram` char(150) DEFAULT NULL,
  `github` char(150) DEFAULT NULL,
  `linkedin` char(150) DEFAULT NULL,
  `description_portfolio` text COMMENT 'Description page Portfolio',
  `description_cv` text COMMENT 'Description pour la page CV',
  `titre_cv` text COMMENT 'Titre du CV',
  `accroche_footer` text COMMENT 'Description dans le footer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `id_key`, `username`, `password`, `nom`, `prenom`, `telephone`, `adresse`, `complement`, `code_postal`, `email`, `education`, `age`, `disponibilite`, `metier`, `website`, `twitter`, `facebook`, `instagram`, `github`, `linkedin`, `description_portfolio`, `description_cv`, `titre_cv`, `accroche_footer`) VALUES
(1, '', 'salvatore', '$2y$10$ZQ7aFsdvHio6duDf1jHr7.lIMD9CeNFBEyUmnGlkosbmQr0pDuVq6', 'Giovinetti', 'Salvatore', '0781402350', 'Rue trumeau', '', '92500', 'salva.giovinetti@gmail.com', 'BTS+', 25, 1, '', 'https://getbootstrap.com/docs/5.0/layout/gutters', 'https://twitter.com/sallevataure', 'https://www.facebook.com/Sallevataure', 'https://www.instagram.com/sallevataure/', 'https://www.linkedin.com/in/salvatore-giovinetti-35544219a/', 'https://github.com/Bibbicasse', 'Une description d\'un portfolio', 'Mon jolie CV', 'Mon cv', 'Rejoignez-moi sur les réseaux...'),
(2, '', 'justine', 'Justine', 'Perinel', 'Justine', '0700000000', '8 boulevard Louis Loucheur', 'Colombbus', '92150', 'justine@colombbus.org', 'Master', 28, 0, 'Secretaire', 'https://www.google.com', NULL, NULL, NULL, NULL, NULL, 'Justine est la meilleure', 'Justine a un super CV', '', 'Le pied de Justine'),
(6, '', 'david', '$2y$10$ZQ7aFsdvHio6duDf1jHr7.lIMD9CeNFBEyUmnGlkosbmQr0pDuVq6', 'David', 'Solid', '0000000000', 'Shadow Moses', 'Alaska', '00000', 'david_solid@mgs.com', 'Membre de l\'unité Fox Hound, puis membre de Philanthropy', 49, 0, 'Forces spéciales de l\'armée des États-Unis', '', '', '', '', '', '', '', '', '', ''),
(18, NULL, 'JohnDoe', '$2y$10$1KEYiTd4o1G1iDvpjniurOyaJY6cxMqafWZmx6.m6toEwg4ixwdnq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `xp_professionnel`
--

CREATE TABLE `xp_professionnel` (
  `id_xp_pro` int(11) NOT NULL COMMENT 'Indice Unique XP',
  `id_user` int(11) NOT NULL COMMENT 'Id de la personne',
  `xp_name` char(150) DEFAULT NULL COMMENT 'Nom de l''experience',
  `xp_date_start` char(10) DEFAULT NULL COMMENT 'Date début XP',
  `xp_date_end` char(10) DEFAULT NULL COMMENT 'Date de fin XP',
  `xp_description` text COMMENT 'Descriptions de l''expérience',
  `xp_company` char(100) DEFAULT NULL COMMENT 'Nom de l''entreprise',
  `xp_location` char(100) DEFAULT NULL COMMENT 'Nom de la ville',
  `xp_poste` char(150) DEFAULT NULL COMMENT 'Poste occupé lors de l''expérience'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `xp_professionnel`
--

INSERT INTO `xp_professionnel` (`id_xp_pro`, `id_user`, `xp_name`, `xp_date_start`, `xp_date_end`, `xp_description`, `xp_company`, `xp_location`, `xp_poste`) VALUES
(1, 1, 'Colombbus', '06/07/2020', '04/06/2021', '1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequuntur consequatur nemo quidem optio quos magnam veritatis aperiam minus, voluptates alias perspiciatis iure, maxime veniam ullam ipsum ab molestiae dolorem! \r\n                             2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus rem, amet distinctio repellat facilis sapiente qui recusandae doloremque explicabo tempora itaque commodi nobis ex dolor et necessitatibus illo? Voluptatibus, laudantium.', 'Colombbus', 'Suresnes', 'un metier 2'),
(2, 1, 'btrf dcx', '06/07/2020', '04/06/2021', 'Formation CDDI', 'Colombbus', 'Suresnes', 'dév'),
(3, 1, 'bgrfd', '06/07/2020', '04/06/2021', 'Formation CDDI', 'Colombbus', 'Suresnes', 'dév');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id_competence`),
  ADD KEY `id_profile` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `xp_professionnel`
--
ALTER TABLE `xp_professionnel`
  ADD PRIMARY KEY (`id_xp_pro`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID unique', AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID unique', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `xp_professionnel`
--
ALTER TABLE `xp_professionnel`
  MODIFY `id_xp_pro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Indice Unique XP', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
