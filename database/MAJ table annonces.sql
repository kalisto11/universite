-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 29 mars 2020 à 23:37
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `universite`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `contenu`) VALUES
(1, 'Ouverture des inscriptions en Master 1.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eveniet voluptas mollitia? Alias est natus, autem corrupti totam harum iure et esse voluptatum dolorem quidem, aspernatur tempore? Veritatis officia totam quibusdam voluptatibus quos consequatur, ducimus tempora, amet sint earum neque numquam. Adipisci quos laborum sapiente eos expedita quas quae impedit.'),
(2, 'Fin du Corona Virus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eveniet voluptas mollitia? Alias est natus, autem corrupti totam harum iure et esse voluptatum dolorem quidem, aspernatur tempore? Veritatis officia totam quibusdam voluptatibus quos consequatur, ducimus tempora, amet sint earum neque numquam. Adipisci quos laborum sapiente eos expedita quas quae impedit.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
