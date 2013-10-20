-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 20 Octobre 2013 à 17:31
-- Version du serveur: 5.1.70
-- Version de PHP: 5.3.2-1ubuntu4.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `pacha`
--

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `naissance` date DEFAULT NULL,
  `identification` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `race` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `couleur` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `chats`
--

INSERT INTO `chats` (`id`, `nom`, `naissance`, `identification`, `race`, `couleur`) VALUES
(1, 'Moustic', '2000-01-01', '', 'Européen', 'Noir et blanc');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `initiales`, `level`) VALUES
(1, 'Elektordi', '7ad675118e733735bc63900962d2c24f306f37d6', 'GG', 9),
(2, 'test', '7ad675118e733735bc63900962d2c24f306f37d6', 'TEST', 1);
