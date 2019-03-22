-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Avril 2018 à 14:07
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  pendu
--

-- --------------------------------------------------------

--
-- Structure de la table mot
--

CREATE TABLE mot (
  MOT_ID int(11) NOT NULL,
  MOT_LIBELLE varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table mot
--

INSERT INTO mot (MOT_ID, MOT_LIBELLE) VALUES
(1, 'trousse'),
(2, 'exercice'),
(3, 'orphelin'),
(4, 'dessert'),
(5, 'tribut'),
(6, 'colere'),
(7, 'zodiaque'),
(8, 'galerie'),
(9, 'titanesque'),
(10, 'seringue'),
(11, 'equipage'),
(12, 'construction'),
(13, 'leopard'),
(14, 'aviateur'),
(15, 'javelot'),
(16, 'elephant'),
(17, 'frapper'),
(18, 'dompteur'),
(19, 'science'),
(20, 'camion');

-- --------------------------------------------------------

--
-- Structure de la table utilisateur
--

CREATE TABLE utilisateur (
  UTI_ID int(6) NOT NULL,
  UTI_NOM varchar(30) DEFAULT NULL,
  UTI_PRENOM varchar(30) DEFAULT NULL,
  UTI_LOGIN varchar(20) DEFAULT NULL,
  UTI_PSW varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table utilisateur
--

INSERT INTO utilisateur (UTI_ID, UTI_NOM, UTI_PRENOM, UTI_LOGIN, UTI_PSW) VALUES
(1, 'admin', 'admin', 'admin', 'mpadmin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table mot
--
ALTER TABLE mot
  ADD PRIMARY KEY (MOT_ID);

--
-- Index pour la table utilisateur
--
ALTER TABLE utilisateur
  ADD PRIMARY KEY (UTI_ID),
  ADD UNIQUE KEY UTI_LOGIN (UTI_LOGIN),
  ADD UNIQUE KEY UTI_LOGIN_2 (UTI_LOGIN);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table mot
--
ALTER TABLE mot
  MODIFY MOT_ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table utilisateur
--
ALTER TABLE utilisateur
  MODIFY UTI_ID int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `utilisateur` CHANGE `UTI_PSW` `UTI_PSW` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
