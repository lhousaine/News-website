-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 août 2018 à 22:51
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet1`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_event` int(11) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`Id`, `Id_event`, `auteur`, `contenu`, `comment_date`) VALUES
(1, 1, 'lhoussaine', 'lhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .', '2018-07-17 00:00:00'),
(2, 1, 'lhoussaine', 'lhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .', '2018-07-17 00:00:00'),
(3, 3, 'brahim', 'lhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .', '2018-07-17 00:00:00'),
(4, 3, 'lhoussaine', 'lhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .', '2018-07-05 12:05:00'),
(5, 2, 'youssef', 'lhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .', '2018-07-17 00:00:00'),
(6, 4, 'youssef', 'lhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .', '2018-07-17 00:00:00'),
(7, 5, 'lahcen', 'lhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .\r\nlhoussaine ouarhou eleve ingenieur à l\'ennsa de marrakech .', '2018-07-17 00:00:00'),
(10, 1, 'mohammed ', 'on vas voir en ce qui concerne notre projet l\'autre qu\'on a fait la semaine dernière .', '2018-07-16 12:50:28'),
(12, 11, 'lhoussaine', 'jhjhnh jhfgdfghf', '2018-07-19 19:33:34'),
(13, 10, 'mohammed ', 'jjfcj,gvjvkv vjvjkv', '2018-07-19 19:41:58'),
(14, 12, 'mohammed ', 'jjgvhn gvhg gvhj ,gvjnh,n,gv', '2018-07-19 19:44:24'),
(15, 12, 'lhoussaine', 'nhkfnh f lhoussaine ouarhou ', '2018-07-19 19:45:29'),
(18, 11, 'mohammed ', 'vhghbn ', '2018-07-19 20:01:08'),
(19, 7, 'hhjcf', 'bncnhj,f fcjfjfkdfkfkf', '2018-07-20 09:40:12'),
(20, 11, 'mohammed ', 'lhoussaine ouarhou ensa de marrakech morroco tamariss', '2018-07-20 09:45:53'),
(21, 12, 'mohammed ', 'fgh ghgnb ghbn ', '2018-07-20 09:48:19'),
(24, 7, 'lhoussaine', 'jhhbn ghb ghfggvnb', '2018-07-20 09:56:11'),
(25, 7, 'mohammed ', 'vhhgb hghgfydssg bgb', '2018-07-20 10:05:38'),
(26, 12, 'brahim', 'lhoussaine gb vhbn vghbjn cvensa asne', '2018-07-20 10:11:58'),
(27, 12, 'lahcen', 'b lahcen lahcen lahcen lahcen lahcen lahcen', '2018-07-20 10:15:24'),
(28, 7, 'mohammed ', 'lhoussaine est un etudiant à l\'ensa de marrakech', '2018-07-20 10:46:57'),
(29, 7, 'lahcen ', 'etudiant à ensa de safi ', '2018-07-20 10:48:23'),
(30, 7, '', 'lhoussaine ouarhou', '2018-07-20 18:14:07'),
(31, 7, '55', 'bnnvbnb', '2018-07-20 18:15:00'),
(32, 1, 'b', '', '2018-07-25 23:55:10'),
(33, 1, 'bbb', 'bbnbbnb', '2018-07-26 00:21:08'),
(34, 16, '55', '44555', '2018-07-30 19:25:43'),
(35, 16, '55', '78', '2018-07-30 23:23:48'),
(36, 16, '89', '89', '2018-07-30 23:33:30'),
(37, 16, 'mohammed ', '455', '2018-07-30 23:35:35'),
(38, 16, 'mohammed', 'nm', '2018-07-31 09:34:49'),
(39, 16, '', '', '2018-07-31 10:23:35'),
(40, 1, 'lk', 'jh', '2018-08-01 23:26:42'),
(41, 1, 'lk', 'n,', '2018-08-01 23:27:13'),
(42, 8, 'loussaine', 'je ne pense pas que notre économie vas atteindre cette valeur cette année.', '2018-08-06 11:20:20');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  `imp` int(11) NOT NULL,
  `titre` varchar(300) NOT NULL,
  `src_image` varchar(200) NOT NULL,
  `src_ve` varchar(200) NOT NULL,
  `contenu` text NOT NULL,
  `date_event` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`Id`, `Type`, `imp`, `titre`, `src_image`, `src_ve`, `contenu`, `date_event`) VALUES
(1, 'soc_p', 1, 'Titre De L\'événemennt Principale', '../images/soc2.jpg', '../video/rt_vio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\r\n           labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco\r\n            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor\r\n            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>\r\n           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt\r\n            mollit anim id est laborum.  Lorem ipsum dolor sit amet, consectetur adipisicing elit,\r\n            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>\r\n            Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut\r\n            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in\r\n               voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n             Excepteur sint occaecat cupidatat non proident, sunt in culpa qui\r\n              officia deserunt mollit anim id est laborum', '2018-07-09 12:08:40'),
(2, 'sp', 1, 'Titre De L\'événemennt Principale', '../images/soc1.jpg', '../video/rt_vio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend', '2018-07-09 12:11:08'),
(3, 'cul', 1, 'Titre De L\'événemennt Principale', '../images/cul1.jpg', '../video/rt_vio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend', '2018-07-09 12:11:53'),
(4, 'eco', 1, 'Titre De L\'événemennt Principale', '../images/eco1.jpg', '../video/rt_vio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend', '2018-07-09 12:13:59'),
(5, 'interna', 1, 'Titre De L\'événemennt Principale', '../images/inter1.jpg', '../video/rt_vio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend', '2018-07-09 12:14:39'),
(7, 'sp', 1, 'amrabet vas se transfrer cette été vers elnassr saoudi', '../images/sp2.jpg', '../video/rt_vio', 'amrabet vas se transfrer cette été vers elnassr saoudi amrabet vas se transfrer cette été vers elnassr saoudiamrabet vas se transfrer cette été vers elnassr saoudiamrabet vas se transfrer cette été vers elnassr saoudiamrabet vas se transfrer cette été vers elnassr saoudiamrabet vas se transfrer cette été vers elnassr saoudiamrabet vas se transfrer cette été vers elnassr saoudiamrabet vas se transfrer cette été vers elnassr saoudi', '2018-07-10 12:35:16'),
(11, 'interna', 1, 'les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%.', '../images/inter2.jpg', '../video/rt_vio', 'les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .\r\nles actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits . les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .', '2018-07-10 13:10:21'),
(9, 'cul', 1, 'le festival de lhana vas prendre sa place cette fois a tazarine', '../images/cul2.jpg', '../video/rt_vio', 'le festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarinele festival de lhana vas prendre sa place cette fois a tazarine', '2018-07-10 12:39:19'),
(10, 'eco', 1, 'les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%.', '../images/eco3.jpg', '../video/rt_vio', 'les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .\r\nles actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits . les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .les actios des millyardires marocaines se bissant ce moins avec une percentage de 20%, on peut justifier cette bisse par le boycot des citoyenes pour les trois produits .', '2018-07-10 13:10:21'),
(12, 'eco', 1, 'les actions de monsieur ouarhou lhoussaine sont croissante avec une percentage de 15%:', '../images/eco3.jpg', '', 'les actions de monsieur ouarhou lhoussaine sont croissante avec une percentage de 15%.\r\nles actions de monsieur ouarhou lhoussaine sont croissante avec une percentage de 15%', '2018-07-16 22:06:05'),
(13, 'rec', 1, 'recommendation de ouarhou lhoussaine', '../images/rec.jpg', 'recommendation', 'je veux inviter de visiter notre école ,cette année on vas faire une pour les étudiants de baccalauréat .', '2018-07-16 23:27:10'),
(15, 'op_scient', 1, 'monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc', '../images/eco1.jpg', '', 'monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc', '2018-07-28 00:00:48'),
(16, 'hist', 1, 'monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc', '../images/eco2.jpg', '', 'monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc', '2018-07-28 00:00:48'),
(17, 'art_scien', 1, 'monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc', '../images/eco3.jpg', '', 'monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc monsieur le professeur vous présente un article sur la sichriche  au sud-est de maroc', '2018-07-28 00:00:48'),
(18, 'eco', 1, 'l\'économie du maroc vas avoir une croissance de 2% cette année', '../images/eco1.jpg', '', 'l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,l\'économie du maroc vas avoir une croissance de 2% cette année,.', '2018-08-14 04:24:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
