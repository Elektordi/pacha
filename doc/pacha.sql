-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 27 Octobre 2013 à 13:05
-- Version du serveur: 5.1.72
-- Version de PHP: 5.3.2-1ubuntu4.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `pacha`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueils`
--

CREATE TABLE IF NOT EXISTS `accueils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telephone1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `telephone2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `limite` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `accueils`
--

INSERT INTO `accueils` (`id`, `nom`, `adresse`, `telephone1`, `telephone2`, `limite`) VALUES
(1, 'GENTY', '1 rue de l''Yerres, 91330 YERRES', '01.23.45.67.89', '', 20);

-- --------------------------------------------------------

--
-- Structure de la table `adoptions`
--

CREATE TABLE IF NOT EXISTS `adoptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `adoptions`
--

INSERT INTO `adoptions` (`id`, `chat_id`, `nom`, `adresse`, `telephone`, `email`, `date_debut`, `date_fin`) VALUES
(1, 1, 'DUPONT', '1 rue de Paris, 75001 PARIS', '01.23.45.67.89', 'dupont@example.com', '2013-02-01', '2013-03-03');

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nom2` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `identification` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `race` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `robe` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deces` date DEFAULT NULL,
  `accueil_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `chats`
--

INSERT INTO `chats` (`id`, `nom`, `nom2`, `naissance`, `identification`, `race`, `robe`, `sexe`, `etat`, `deces`, `accueil_id`) VALUES
(1, 'Moustic', NULL, '2000-01-01', 'DUF307', 'Européen', 'Noir et blanc', 'F', 'DOMICILE', NULL, 1),
(2, 'Kiwi', NULL, '2013-01-01', 'EZD2??', 'Européen', 'Écaille de tortue', 'F', 'DECEDE', '2013-03-03', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `auteur` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `chat_id`, `date`, `auteur`, `texte`, `source`) VALUES
(1, 1, '2013-10-27 00:00:00', 'GG', 'Test de commentaire', ''),
(2, 2, '2013-03-04 00:00:00', 'JMG', 'Décès suite tumeurs', 'adoptions/view/1');

-- --------------------------------------------------------

--
-- Structure de la table `rappels`
--

CREATE TABLE IF NOT EXISTS `rappels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL,
  `echeance` date NOT NULL,
  `affectation` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rappels`
--

INSERT INTO `rappels` (`id`, `chat_id`, `echeance`, `affectation`, `texte`, `source`) VALUES
(1, 1, '2013-10-31', 'GG', 'Rappel de vaccin contre le Tétanos', 'soins/view/1');

-- --------------------------------------------------------

--
-- Structure de la table `soins`
--

CREATE TABLE IF NOT EXISTS `soins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL,
  `type` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `nature` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `veterinaire` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `montant` decimal(2,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `soins`
--

INSERT INTO `soins` (`id`, `chat_id`, `type`, `date_debut`, `date_fin`, `nature`, `veterinaire`, `montant`) VALUES
(1, 1, 'm', '2013-01-23', NULL, 'Felidiarix 1cp', NULL, NULL);


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `initiales` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `initiales`, `level`) VALUES
(1, 'admin', MD5('admin'), 'ADMIN', 9);
