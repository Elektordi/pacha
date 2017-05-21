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
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nom',
  `adresse` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Adresse',
  `telephone1` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Téléphone fixe',
  `telephone2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Téléphone portable',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Adresse e-mail',
  `limite` smallint(2) DEFAULT NULL COMMENT 'Chats max.',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Familles d''accueil' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `accueils`
--

INSERT INTO `accueils` (`id`, `nom`, `adresse`, `telephone1`, `telephone2`, `email`, `limite`) VALUES
(1, 'GENTY', '1 rue de l''Yerres, 91330 YERRES', '01.23.45.67.89', '06.00.00.00.00', 'example@example.net', 20);

-- --------------------------------------------------------

--
-- Structure de la table `adoptions`
--

CREATE TABLE IF NOT EXISTS `adoptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL COMMENT 'Chat',
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nom',
  `adresse` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Adresse',
  `telephone1` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Téléphone fixe',
  `telephone2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Téléphone portable',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Adresse e-mail',
  `nom_chat` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nouveau nom chat',
  `date_debut` date NOT NULL COMMENT 'Date d''adoption',
  `date_fin` date DEFAULT NULL COMMENT 'Fin d''adoption',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Adoptions' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `adoptions`
--

INSERT INTO `adoptions` (`id`, `chat_id`, `nom`, `adresse`, `telephone1`, `telephone2`, `email`, `nom_chat`, `date_debut`, `date_fin`) VALUES
(1, 2, 'DUPONT', '1 rue de Paris, 75001 PARIS', '01.23.45.67.89', '06.00.00.00.00', 'dupont@example.com', 'Wiki', '2013-02-01', '2013-03-03');

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numéro unique',
  `nom` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nom',
  `naissance` date DEFAULT NULL COMMENT 'Naissance',
  `identification` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Identification',
  `race` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Race',
  `robe` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Robe',
  `sexe` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Sexe',
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Statut',
  `deces` date DEFAULT NULL COMMENT 'Décédé',
  `accueil_id` int(11) DEFAULT NULL COMMENT 'Famille d''accueil',
  `provenance` VARCHAR( 200 ) NOT NULL COMMENT 'Provenance du chat',
  `detenteur` VARCHAR( 200 ) NULL DEFAULT '' COMMENT 'Détenteur',
  `unique` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chats' AUTO_INCREMENT=3 ;

--
-- Contenu de la table `chats`
--

INSERT INTO `chats` (`id`, `nom`, `naissance`, `identification`, `race`, `robe`, `sexe`, `etat`, `deces`, `accueil_id`, `provenance`, `detenteur`, `unique`) VALUES
(1, 'Moustic', '2000-01-01', 'DUF307', 'Européen', 'Noir et blanc', 'F', 'DOMICILE', NULL, 1, 'Famille GENTY', '', 'Moustic (DUF307)'),
(2, 'Kiwi', '2013-01-01', 'EZD2??', 'Européen', 'Écaille de tortue', 'F', 'DECEDE', '2013-03-03', NULL, 'Trouvé au centre-ville de Yerres', '', 'Kiwi (EZD2??)');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL COMMENT 'Chat',
  `date` datetime NOT NULL COMMENT 'Date',
  `auteur` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Auteur',
  `texte` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Commentaire',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Commentaires' AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `chat_id`, `date`, `auteur`, `texte`) VALUES
(1, 1, '2013-10-27 00:00:00', 'GG', 'Test de commentaire'),
(2, 2, '2013-03-04 00:00:00', 'JMG', 'Décès suite tumeurs');

-- --------------------------------------------------------

--
-- Structure de la table `rappels`
--


CREATE TABLE IF NOT EXISTS `rappels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL COMMENT 'Chat',
  `echeance` date NOT NULL COMMENT 'Échéance',
  `affectation` varchar(8) COLLATE utf8_unicode_ci COMMENT 'Affecté à',
  `texte` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Détails',
  `soin_id` varchar(32) COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Concerne',
  `ok` tinyint(4) NOT NULL COMMENT 'Validé',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Rappels' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rappels`
--

INSERT INTO `rappels` (`id`, `chat_id`, `echeance`, `affectation`, `texte`, `soin_id`, `ok`) VALUES
(1, 1, '2014-08-01', 'ADMIN', 'Rappel de vaccin contre le Tétanos', '1', 0);

-- --------------------------------------------------------

--
-- Structure de la table `soins`
--

CREATE TABLE IF NOT EXISTS `soins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL COMMENT 'Chat',
  `type` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Type de soin',
  `date_debut` date NOT NULL COMMENT 'Date des soins',
  `date_fin` date DEFAULT NULL COMMENT 'Jusqu''au (si longue durée)',
  `nature` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nature des soins',
  `veterinaire_id` int(11) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Vétérinaire',
  `montant` decimal(5,2) DEFAULT NULL COMMENT 'Montant',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Soins' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `soins`
--

INSERT INTO `soins` (`id`, `chat_id`, `type`, `date_debut`, `date_fin`, `nature`, `veterinaire_id`, `montant`) VALUES
(1, 1, 'm', '2013-01-23', NULL, 'Felidiarix 1cp', 1, NULL);


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Identifiant',
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mot de passe',
  `initiales` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Initiales',
  `level` tinyint(3) NOT NULL COMMENT 'Niveau d''accès',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Utilisateurs' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `initiales`, `level`) VALUES
(1, 'admin', 'f730d138ce9e30f76b8b67b2b0d272699453d914', 'ADMIN', 9);

-- --------------------------------------------------------

--
-- Structure de la table `veterinaires`
--

CREATE TABLE IF NOT EXISTS `veterinaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nom',
  `adresse` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Adresse',
  `telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Téléphone',
  `fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Fax',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Adresse e-mail',
  `commentaires` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Commentaires',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Vétérinaires' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `veterinaires`
--

INSERT INTO `veterinaires` (`id`, `nom`, `adresse`, `telephone`, `fax`, `email`, `commentaires`) VALUES
(1, 'Clinique Vétérinaire de Paris', 'Place des chats, 75042 PARIS', '01.23.45.67.89', '01.23.45.67.90', 'example@example.net', 'Blablabla');

