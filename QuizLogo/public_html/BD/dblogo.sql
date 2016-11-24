-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Novembre 2016 à 09:11
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  dblogo
--

-- --------------------------------------------------------

--
-- Structure de la table marques
--

CREATE TABLE IF NOT EXISTS marques (
  idMarque int(11) NOT NULL AUTO_INCREMENT,
  NomMarques varchar(50) NOT NULL,
  Image varchar(255) NOT NULL,
  Description varchar(255) DEFAULT NULL,
  PRIMARY KEY (idMarque)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=51 ;

--
-- Contenu de la table marques
--

INSERT INTO marques (idMarque, NomMarques, Image, Description) VALUES
(1, 'Aiwa', 'Aiwa.png', NULL),
(2, 'Alcatel', 'alcatel-logo.jpg', NULL),
(3, 'Alien Ware', 'alienware.jpg', NULL),
(4, 'AOC', 'AOC.jpg', NULL),
(5, 'Apple', 'apple.png', NULL),
(6, 'Asus', 'asus.jpg', NULL),
(7, 'Beats', 'Beats-logo.png', NULL),
(8, 'BenQ', 'BenQ-logo.png', NULL),
(9, 'Black Berry', 'blackberry.png', NULL),
(10, 'Bose', 'bose-logo.png', NULL),
(11, 'Abercrombie Fitch', 'AbercrombieFitch.png', NULL),
(12, 'Aeropostale', 'Aeropostale.jpg', NULL),
(13, 'American Eagle', 'AmericanEagle.png', NULL),
(14, 'Armani Exchange', 'armani-exchange.png', NULL),
(15, 'Benetton', 'benetton.jpg', NULL),
(16, 'Bimba Lola', 'BimbaLola.png', NULL),
(17, 'Burberry', 'burberry.png', NULL),
(18, 'Calvin Klein', 'calvin_klein.png', NULL),
(19, 'Campe', 'campe.png', NULL),
(20, 'Cavalinho', 'Cavalinho.jpg', NULL),
(21, 'Ben Jerrys', 'bemJerrys.jpg', NULL),
(22, 'Betty Crocker', 'betty-crocker.png', NULL),
(23, 'Big Bite', 'Big-Bite.jpg', NULL),
(24, 'Buger King', 'Burger_King_Logo.png', NULL),
(25, 'Chili''s', 'Chili''slogo.png', NULL),
(26, 'Chipotle', 'chipotle1.jpg', NULL),
(27, 'Chupa Chups', 'Chupa-chups.png', NULL),
(28, 'Coca-Cola', 'cocacola.jpg', NULL),
(29, 'Coffee Mate', 'coffeemate.png', NULL),
(30, 'Dominos Pizza', 'Dominos_pizza_logo.png', NULL),
(31, 'Airness', 'Airness.png', NULL),
(32, 'Arena', 'Arena.png', NULL),
(33, 'Asics', 'Asics.png', NULL),
(34, 'Babolat', 'Babolat.jpg', NULL),
(35, 'Boxeur des Rue', 'BoxeurDesRue.png', NULL),
(36, 'BV sport', 'BVSprot.jpg', NULL),
(37, 'Canter Bury', 'Canterbury.png', NULL),
(38, 'Columbia.png', 'Columbia.png', NULL),
(39, 'Dorotenns', 'Dorotenns.png', NULL),
(40, 'Dunlop', 'Dunlop.png', NULL),
(41, 'Abarth', 'abarth.png', NULL),
(42, 'Acura', 'acura.jpg', NULL),
(43, 'Alfa Romeo', 'alfaRomeo.png', NULL),
(44, 'Alpina', 'apina.png', NULL),
(45, 'Ariel', 'ariel.png', NULL),
(46, 'Arrinera', 'arrinera.png', NULL),
(47, 'Aston Martin', 'astonMartin.png', NULL),
(48, 'Audi', 'audi.png', NULL),
(49, 'Bentley', 'bentley.jpg', NULL),
(50, 'BMW', 'bmw.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table typequiz
--

CREATE TABLE IF NOT EXISTS typequiz (
  idTypeQuiz int(11) NOT NULL AUTO_INCREMENT,
  NomTypeQuiz varchar(30) DEFAULT NULL,
  PRIMARY KEY (idTypeQuiz)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=6 ;

--
-- Contenu de la table typequiz
--

INSERT INTO typequiz (idTypeQuiz, NomTypeQuiz) VALUES
(1, 'Electronique'),
(2, 'Mode'),
(3, 'Nourriture'),
(4, 'Sport'),
(5, 'Voitures');


-- --------------------------------------------------------

--
-- Structure de la table appartenir
--

CREATE TABLE IF NOT EXISTS appartenir (
  idMarque int(11) NOT NULL,
  idTypeQuiz int(11) NOT NULL,
  PRIMARY KEY (idMarque,idTypeQuiz),
  FOREIGN KEY (idMarque)
	REFERENCES marques (idMarque),
  FOREIGN KEY (idTypeQuiz)
	REFERENCES typequiz (idTypeQuiz)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Contenu de la table appartenir
--

INSERT INTO appartenir (idMarque, idTypeQuiz) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 5),
(42, 5),
(43, 5),
(44, 5),
(45, 5),
(46, 5),
(47, 5),
(48, 5),
(49, 5),
(50, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
