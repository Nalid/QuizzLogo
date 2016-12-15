-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Décembre 2016 à 08:44
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dblogo`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE IF NOT EXISTS `appartenir` (
  `idMarque` int(11) NOT NULL,
  `idTypeQuiz` int(11) NOT NULL,
  PRIMARY KEY (`idMarque`,`idTypeQuiz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Contenu de la table `appartenir`
--

INSERT INTO `appartenir` (`idMarque`, `idTypeQuiz`) VALUES
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
(50, 5),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 2),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(100, 2);

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE IF NOT EXISTS `marques` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `NomMarques` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 AUTO_INCREMENT=175 ;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`idMarque`, `NomMarques`, `Image`, `Description`) VALUES
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
(38, 'Columbia', 'Columbia.png', NULL),
(39, 'Dorotenns', 'Dorotenns.png', NULL),
(40, 'Dunlop', 'Dunlop.png', NULL),
(41, 'Abarth', 'abarth.png', NULL),
(42, 'Acura', 'acura.jpg', NULL),
(43, 'Alfa Romeo', 'alfaRomeo.png', NULL),
(44, 'Alpina', 'alpina.png', NULL),
(45, 'Ariel', 'ariel.png', NULL),
(46, 'Arrinera', 'arrinera.png', NULL),
(47, 'Aston Martin', 'astonMartin.png', NULL),
(48, 'Audi', 'audi.png', NULL),
(49, 'Bentley', 'bentley.jpg', NULL),
(50, 'BMW', 'bmw.jpg', NULL),
(51, 'Cisco', 'Cisco.PNG', NULL),
(52, 'Cobra', 'cobra.jpg', NULL),
(53, 'Commendore International', 'commodoreInternational.png', NULL),
(54, 'Compaq', 'Compaq.jpg', NULL),
(55, 'Corsair', 'corsair.png', NULL),
(56, 'Dell', 'dell.jpg', NULL),
(57, 'Denon DJ', 'denonDj.PNG', NULL),
(58, 'Disney', 'disney.PNG', NULL),
(59, 'Electrolux', 'Elextrolux-logo.png', NULL),
(60, 'Game Loft', 'gameloft.jpg', NULL),
(61, 'Gate Way', 'gateway.png', NULL),
(62, 'Hasbo', 'hasbo.jpg', NULL),
(63, 'Hitachi', 'hitachi-logo.jpg', NULL),
(64, 'Hot Wheels', 'Hotweels.jpg', NULL),
(65, 'HTC', 'htc.jpg', NULL),
(66, 'iHome', 'iHome.jpg', NULL),
(67, 'JVC', 'jvc.jpg', NULL),
(68, 'LG', 'lg.jpg', NULL),
(69, 'Logitech', 'logitech.PNG', NULL),
(70, 'TT eSports', 'logo_TTesports_2.jpg', NULL),
(71, 'MatchBox', 'matchbox.jpg', NULL),
(72, 'MCZ', 'MCZ_logo.png', NULL),
(73, 'Microsoft', 'Microsoft_logo.png', NULL),
(74, 'Motorola', 'motorola.png', NULL),
(75, 'NexLink', 'Nexlink_logo_HR.jpg', NULL),
(76, 'Chanel', 'chanel.jpg', NULL),
(77, 'Chilli Beans', 'chilliBeans.jpg', NULL),
(78, 'Converse', 'converse.jpg', NULL),
(79, 'Crocs', 'Crocs.png', NULL),
(80, 'DC', 'dc,jpeg', NULL),
(81, 'Diesel', 'diesel.jpg', NULL),
(82, 'Dolce Gabbana', 'dolceGabbana,jnp', NULL),
(83, 'Esprit', 'esprit.jpg', NULL),
(84, 'Eternal', 'Eternal.jpg', NULL),
(85, 'Fila', 'fila.jpg', NULL),
(86, 'Gap', 'gap.png', NULL),
(87, 'Giorgio Armani', 'giorgioArmani.jpg', NULL),
(88, 'Givenchy', 'Givenchy.png', NULL),
(89, 'Gucci', 'gucci.jpg', NULL),
(90, 'Hollister', 'Hollister,jpg', NULL),
(91, 'Hublot', 'Hublot.png', NULL),
(92, 'Lee', 'lee.jpg', NULL),
(93, 'Levis', 'levis.jpg', NULL),
(94, 'Louis Vuitton', 'LV.png', NULL),
(95, 'Macys', 'macys.png', NULL),
(96, 'Marco O''Polo', 'MarcoO''Polo.jpeg', NULL),
(97, 'Micheal Kors', 'Micheal Kors.png', NULL),
(98, 'New Balance', 'NewBalance.png', NULL),
(99, 'Omega', 'Omega.png', NULL),
(100, 'Pepe Jeans', 'pepJeans.jpeg', NULL),
(101, 'Doritos', 'doritos.png', NULL),
(102, 'Dr.Oetker', 'Dr._Oetker-Logo.png', NULL),
(103, 'Dunkin Donuts', 'dunkinDonuts.jpeg', NULL),
(104, 'Evian', 'evian.jpg', NULL),
(105, 'Fanta', 'fanta.png', NULL),
(106, 'gatorade', 'gatorade.jpg', NULL),
(107, 'Haagen Daz', 'haagenDaz.png', NULL),
(108, 'Hard Rock Cafe', 'hard-rock-cafe-logo.jpg', NULL),
(109, 'Haribo', 'haribo.jpg', NULL),
(110, 'Hellmanns', 'hellmanns.jpg', NULL),
(111, 'Hooters', 'hooters.png', NULL),
(112, 'iHop', 'ihop.png', NULL),
(113, 'KFC', 'KFC.png', NULL),
(114, 'Knorr', 'knorrpng.png', NULL),
(115, 'Kraft', 'kraft.png', NULL),
(116, 'Lays', 'lays-logo.jpg', NULL),
(117, 'Lindt', 'lindt.png', NULL),
(118, 'Lipton', 'lipton1-jpg', NULL),
(119, 'Dr. Pepper', 'drpepper.png', NULL),
(120, 'Maggi', 'maggi.png', NULL),
(121, 'Ferrero Rocher', 'logo-ferrero-Rocher.png', NULL),
(122, 'Mc Donald''s', 'mcdonalds.png', NULL),
(123, 'Minute Maid', 'Minute_Maid_Logo.png', NULL),
(124, 'Moevenpick', 'moevenpick-icecream-logo.png', NULL),
(125, 'Dye', 'Dye.png', NULL),
(126, 'Eider', 'Eider.png', NULL),
(127, 'Ekkia', 'Ekkia.jpg', NULL),
(128, 'Eldera', 'Eldera.png', NULL),
(129, 'Erima', 'Erima.png', NULL),
(130, 'Fifa', 'Fifa.jpg', NULL),
(131, 'Fischer', 'Fischer.png', NULL),
(132, 'Fusalp', 'Fusalp.png', NULL),
(133, 'GoPro', 'GoPro.png', NULL),
(134, 'Heade', 'Heade.png', NULL),
(135, 'Hummel', 'Hummel.png', NULL),
(136, 'Kempa', 'Kempa.png', NULL),
(137, 'Lacoste', 'Lacoste.png', NULL),
(138, 'Lafuma', 'Lafuma,jpg', NULL),
(139, 'Le Coq Sportif', 'LecoqSportif.png', NULL),
(140, 'Li Ning', 'Li-Ning.png', NULL),
(141, 'Lonsdale', 'Lonsdale.jpg', NULL),
(142, 'Lotto', 'Lotto.png', NULL),
(143, 'Macron', 'Macron.jpg', NULL),
(144, 'Matsuru', 'Matsuru.png', NULL),
(145, 'Millet', 'Millet.png', NULL),
(146, 'Mizuno', 'Mizuno.png', NULL),
(147, 'mlbam', 'mlbam.jpg', NULL),
(148, 'New Balance', 'NewBalance.png', NULL),
(149, 'NBA', 'NBA.png', NULL),
(150, 'Bugatti', 'bugatti.png', NULL),
(151, 'Buick', '.jpg', NULL),
(152, 'Cadillac', '.png', NULL),
(153, 'Chevrolet', '.jpg', NULL),
(154, 'Chrysler', '.jpeg', NULL),
(155, 'Citroen', 'citroen.png', NULL),
(156, 'Corvette', 'Dacia.png', NULL),
(157, 'Dacia', '.png', NULL),
(158, 'Daewoo', 'daewoo.png', NULL),
(159, 'Daihatsu', 'daihatsu.jpg', NULL),
(160, 'Dodge', 'dodge.jpg', NULL),
(161, 'Ferrari', 'Ferrari.png', NULL),
(162, 'Fiat', 'fiat.png', NULL),
(163, 'Ford', 'Ford.png', NULL),
(164, 'Foton', 'foton.jpg', NULL),
(165, 'Hawtai', 'hawtai.png', NULL),
(166, 'Holden', 'Holden.png', NULL),
(167, 'Honda', 'honda2.jpg', NULL),
(168, 'Hyundai', 'hyundai.png', NULL),
(169, 'Infiniti', 'infiniti.jpg', NULL),
(170, 'Jaguar', 'jaguar.jpg', NULL),
(171, 'Jeep', 'jeep.jpg', NULL),
(172, 'Kia', 'kia.jpg', NULL),
(173, 'Lada', 'Lada.jpg', NULL),
(174, 'Lamborghini', 'Lamborghini.png', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `typequiz`
--

CREATE TABLE IF NOT EXISTS `typequiz` (
  `idTypeQuiz` int(11) NOT NULL AUTO_INCREMENT,
  `NomTypeQuiz` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idTypeQuiz`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `typequiz`
--

INSERT INTO `typequiz` (`idTypeQuiz`, `NomTypeQuiz`) VALUES
(1, 'Electronique'),
(2, 'Mode'),
(3, 'Nourriture'),
(4, 'Sport'),
(5, 'Voitures');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
