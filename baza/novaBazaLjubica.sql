-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 02:58 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Milutin Milankovic', 'wade@example.com', '$2y$10$zTsVE8wovqKpHAWnBF/kU.KXRjP34dv/aD4gykg7t1YK9S2mxcVhm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_filma` int(11) NOT NULL AUTO_INCREMENT,
  `Vezba_id_vezbe` int(11) NOT NULL,
  `godina_proizvodnje` int(11) DEFAULT NULL,
  `naziv_filma` varchar(255) DEFAULT NULL,
  `trajanje` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_filma`),
  KEY `fk_Film_Vezba1_idx` (`Vezba_id_vezbe`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_filma`, `Vezba_id_vezbe`, `godina_proizvodnje`, `naziv_filma`, `trajanje`) VALUES
(1, 1, 2015, 'FILM', '60'),
(2, 1, 345, 'film proba bla', '54'),
(3, 1, 265, 'film proba bla', '256'),
(4, 1, 2006, 'ljubicin film', '52'),
(5, 1, 2006, 'ljubicin film', '52'),
(6, 1, 2016, 'ajdihfvjud', '54'),
(7, 1, 52, 'anksjd', '0'),
(8, 1, 2016, 'jiaehfksdu', '545'),
(9, 1, 2016, 'jiaehfksdu', '545'),
(10, 1, 52, 'anksjd', '0'),
(11, 1, 52, 'anksjd', '0'),
(12, 1, 52, 'anksjd', '0'),
(13, 1, 52, 'anksjd', '0'),
(14, 1, 52, 'anksjd', '0'),
(15, 1, 52, 'anksjd', '0'),
(16, 1, 52, 'anksjd', '0'),
(17, 1, 52, 'anksjd', '0'),
(18, 1, 52, 'anksjd', '0'),
(19, 1, 52, 'anksjd', '0'),
(20, 1, 52, 'anksjd', '0'),
(21, 1, 52, 'anksjd', '0'),
(22, 1, 2016, 'ajdihfvjud', '54'),
(23, 1, 2016, 'ajdihfvjud', '54'),
(24, 1, 2016, 'ajdihfvjud', '54'),
(25, 1, 2016, 'ajdihfvjud', '54'),
(26, 1, 2016, 'ajdihfvjud', '54'),
(27, 1, 2016, 'ajdihfvjud', '54'),
(28, 1, 2016, 'ajdihfvjud', '54'),
(29, 1, 2016, 'ajdihfvjud', '54'),
(30, 1, 2016, 'ajdihfvjud', '54'),
(31, 1, 2016, 'ajdihfvjud', '54'),
(32, 1, 2016, 'ajdihfvjud', '54'),
(33, 1, 2016, 'ajdihfvjud', '54'),
(34, 1, 2016, 'ajdihfvjud', '54'),
(35, 1, 2016, 'ajdihfvjud', '54'),
(36, 1, 1996, 'GOTOVO AJAJA', '52'),
(37, 1, 1996, 'GOTOVO AJAJA', '52'),
(38, 1, 1996, 'GOTOVO AJAJA', '52'),
(39, 1, 5546, 'ahfsiuvd', '56'),
(40, 1, 5546, 'ahfsiuvd', '56'),
(41, 1, 5546, 'ahfsiuvd', '56'),
(42, 1, 5546, 'ahfsiuvd', '56'),
(43, 1, 20016, 'proba rez.. i glumac', '205'),
(44, 1, 20016, 'proba rez.. i glumac', '205'),
(45, 1, 2006, 'PROBA1', '25'),
(46, 1, 2006, 'PROBA2', '52'),
(47, 1, 2006, 'PROBA2', '52'),
(48, 1, 2006, 'PROBA2', '52'),
(49, 1, 2006, 'PROBA3', '52'),
(50, 1, 2006, 'PROBA3', '52'),
(51, 1, 2006, 'PROBA3', '52'),
(52, 1, 2006, 'PROBA3', '52'),
(53, 1, 2006, 'PROBA3', '52'),
(54, 1, 20116, 'PROBA4', '648'),
(55, 1, 2009, 'PROBA5', '25'),
(56, 1, 2016, 'ljubajdj', '56'),
(57, 1, 2016, 'ljubajdj', '56'),
(58, 1, 2016, 'ljubajdj', '56'),
(59, 1, 2016, 'POVERA praznih', '52'),
(60, 1, 2016, 'POVERA praznih', '52'),
(61, 1, 2006, 'PROBA FINALNA', '0'),
(62, 1, 2006, 'PROBA FINALNA', '95'),
(63, 1, 206, 'fr', '52'),
(64, 1, 206, 'fr', '52'),
(65, 1, 206, 'fr', '52'),
(66, 1, 206, 'fr', '52'),
(67, 1, 22005, 'jdcfnvdj', '58'),
(68, 1, 22005, 'jdcfnvdj', '58'),
(69, 1, 22005, 'jdcfnvdj', '58'),
(70, 1, 22005, 'jdcfnvdj', '58'),
(71, 1, 22005, 'jdcfnvdj', '58'),
(72, 1, 22005, 'jdcfnvdj', '58'),
(73, 1, 2058, 'ljubica', '84'),
(74, 1, 22005, 'jdcfnvdj', '58'),
(75, 1, 22005, 'jdcfnvdj', '58'),
(76, 1, 22005, 'jdcfnvdj', '58'),
(77, 1, 22005, 'jdcfnvdj', '58'),
(78, 1, 84, 'huguk', '84'),
(79, 1, 22005, 'jdcfnvdj', '58'),
(80, 1, 22005, 'jdcfnvdj', '58'),
(81, 1, 2015, 'jaidvfd', '48'),
(82, 1, 2015, 'jaidvfd', '48'),
(83, 1, 2015, 'jaidvfd', '48'),
(84, 1, 585, 'ovo nece da radi', '578'),
(85, 1, 5821, 'vfd', '56'),
(86, 1, 5821, 'vfd', '56'),
(87, 1, 258, 'cd', '258'),
(88, 1, 258, 'dsf', '258'),
(89, 1, 258, 'csdfv', '258'),
(90, 1, 258, 'csdfv', '258'),
(91, 1, 258, 'ljubica ja ne mogu vise', '258'),
(92, 1, 2016, 'ljubca', '2016'),
(93, 1, 256, 'ksodjlaikfsud', '0'),
(94, 1, 256, 'ksodjlaikfsud', '0'),
(95, 1, 256, 'ksodjlaikfsud', '0'),
(96, 1, 80, 'knkn', '0'),
(97, 1, 80, 'knkn', '0'),
(98, 1, 80, 'knkn', '0'),
(99, 1, 80, 'knkn', '0'),
(100, 1, 80, 'knkn', '0'),
(101, 1, 80, 'knkn', '0'),
(102, 1, 80, 'knkn', '0'),
(103, 1, 80, 'knkn', '0'),
(104, 1, 80, 'knkn', '0'),
(105, 1, 80, 'knkn', '0'),
(106, 1, 2005, 'ovo je proba1', '12'),
(107, 1, 2005, 'ovo je proba1', '12'),
(108, 1, 2005, 'ovo je proba1', '12:12:12'),
(109, 2, 2005, 'ovo je proba2', '15:14:32'),
(110, 2, 1993, 'OVO JE PROBA 3', '15:20:46'),
(111, 3, 2005, 'proba za rezisera', '14:02:58'),
(112, 3, 2005, 'proba za rezisera', '14:02:58'),
(113, 3, 2005, 'proba za rezisera', '14:02:58'),
(114, 3, 2005, 'proba za rezisera', '14:02:58'),
(115, 3, 2005, 'proba za rezisera', '14:02:58'),
(116, 3, 2005, 'proba za rezisera', '14:02:58'),
(117, 3, 2005, 'proba za rezisera', '14:02:58'),
(118, 3, 2005, 'proba za rezisera', '14:02:58'),
(119, 3, 2005, 'proba za rezisera', '14:02:58'),
(120, 3, 2006, 'ovo je proba za rezisra', '12:12:12'),
(121, 3, 2006, 'ovo je proba za rezisra', '12:12:12'),
(122, 3, 2006, 'ovo je proba za rezisra', '12:12:12'),
(123, 3, 2006, 'ovo je proba za rezisra', '12:12:12'),
(124, 3, 2006, 'ovo je proba za rezisra', '12:12:12'),
(125, 3, 2006, 'ovo je proba za rezisra', '12:12:12'),
(126, 1, 1958, 'bla bla', '12:12:12'),
(127, 1, 1958, 'bla bla', '12:12:12'),
(128, 1, 1958, 'bla bla', '12:12:12'),
(129, 1, 1958, 'bla bla', '12:12:12'),
(130, 3, 1857, 'vbla bla bla ', '12:12:12'),
(131, 3, 1857, 'vbla bla bla ', '12:12:12'),
(132, 3, 1956, 'bla vla bla', '12:12:12'),
(133, 3, 1756, 'MONTAZER', '12:12:12'),
(134, 3, 1756, 'MONTAZER', '12:12:12'),
(135, 3, 1756, 'MONTAZER', '12:12:12'),
(136, 3, 1756, 'MONTAZER', '12:12:12'),
(137, 1, 206, 'MONTAZER', '12:12:12'),
(138, 1, 1985, 'PRODUCENT', '12:12:12'),
(139, 1, 2589, 'SNIMATELJ ', '12:12:12'),
(140, 1, 2016, 'NAGRADE', '12:12:12'),
(141, 1, 2016, 'NAGRADE', '12:12:12'),
(142, 3, 1985, 'NAGRADE', '12:12:12'),
(143, 3, 4758, 'NAGRADE', '12:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `glumac`
--

DROP TABLE IF EXISTS `glumac`;
CREATE TABLE IF NOT EXISTS `glumac` (
  `id_glumca` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `ime_prezime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_glumca`),
  KEY `fk_Film_has_Student_Film5_idx` (`Film_id_filma`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `glumac`
--

INSERT INTO `glumac` (`id_glumca`, `Film_id_filma`, `ime_prezime`) VALUES
(1, 36, 'ljubica'),
(2, 50, 'ljubica'),
(3, 51, 'ljubica'),
(4, 52, 'ljubica'),
(5, 53, 'ljubica'),
(6, 54, 'ljubica'),
(7, 59, 'ljubica'),
(8, 62, 'snimatelj_zvuka'),
(9, 63, ''),
(10, 64, ''),
(11, 65, ''),
(12, 66, ''),
(13, 73, '');

-- --------------------------------------------------------

--
-- Table structure for table `glumac_student`
--

DROP TABLE IF EXISTS `glumac_student`;
CREATE TABLE IF NOT EXISTS `glumac_student` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  PRIMARY KEY (`Film_id_filma`,`Student_id_studenta`),
  KEY `fk_Film_has_Student_Student1_idx` (`Student_id_studenta`),
  KEY `fk_Film_has_Student_Film6_idx` (`Film_id_filma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `glumac_student`
--

INSERT INTO `glumac_student` (`Film_id_filma`, `Student_id_studenta`) VALUES
(38, 1),
(49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `karton_prilog`
--

DROP TABLE IF EXISTS `karton_prilog`;
CREATE TABLE IF NOT EXISTS `karton_prilog` (
  `id_priloga` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `tip_priloga` varchar(255) NOT NULL,
  `putanja` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`id_priloga`),
  KEY `fk_Karton_prilog_Film1` (`Film_id_filma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `katedra`
--

DROP TABLE IF EXISTS `katedra`;
CREATE TABLE IF NOT EXISTS `katedra` (
  `godina_studija` int(11) NOT NULL,
  `skolska_godina` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `Profesor_id_profesora` int(11) NOT NULL,
  PRIMARY KEY (`godina_studija`,`skolska_godina`,`naziv`),
  KEY `fk_Katedra_Profesor1_idx` (`Profesor_id_profesora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `katedra`
--

INSERT INTO `katedra` (`godina_studija`, `skolska_godina`, `naziv`, `Profesor_id_profesora`) VALUES
(2, 2016, 'rezija', 1);

-- --------------------------------------------------------

--
-- Table structure for table `montazer`
--

DROP TABLE IF EXISTS `montazer`;
CREATE TABLE IF NOT EXISTS `montazer` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  KEY `fk_Film_has_Student_Film4_idx` (`Film_id_filma`),
  KEY `fk_Montazer_Student1_idx` (`Student_id_studenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `montazer`
--

INSERT INTO `montazer` (`Film_id_filma`, `Student_id_studenta`) VALUES
(5, 1),
(6, 1),
(7, 2),
(36, 1),
(38, 1),
(39, 1),
(55, 2),
(137, 1),
(137, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nagrada`
--

DROP TABLE IF EXISTS `nagrada`;
CREATE TABLE IF NOT EXISTS `nagrada` (
  `id_nagrade` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `naziv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_nagrade`),
  KEY `fk_Nagrada_Film1_idx` (`Film_id_filma`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nagrada`
--

INSERT INTO `nagrada` (`id_nagrade`, `Film_id_filma`, `naziv`) VALUES
(1, 5, 'NAGRADAA'),
(2, 6, ''),
(3, 7, ''),
(4, 8, ''),
(5, 9, ''),
(6, 10, ''),
(7, 11, ''),
(8, 12, ''),
(9, 13, ''),
(10, 14, ''),
(11, 15, ''),
(12, 16, ''),
(13, 17, ''),
(14, 18, ''),
(15, 19, ''),
(16, 20, ''),
(17, 21, ''),
(18, 22, ''),
(19, 23, ''),
(20, 24, ''),
(21, 25, ''),
(22, 26, ''),
(23, 27, ''),
(24, 28, ''),
(25, 29, ''),
(26, 30, ''),
(27, 31, ''),
(28, 32, ''),
(29, 33, ''),
(30, 34, ''),
(31, 35, ''),
(32, 36, 'OVO JE NAGRADA KONACNO'),
(33, 38, 'OVO JE NAGRADA KONACNO'),
(34, 39, 'gdf'),
(35, 40, 'gdf'),
(36, 41, 'gdf'),
(37, 42, 'gdf'),
(38, 43, ''),
(39, 44, ''),
(40, 45, ''),
(41, 46, ''),
(42, 47, ''),
(43, 48, ''),
(44, 49, ''),
(45, 50, ''),
(46, 51, ''),
(47, 52, ''),
(48, 53, ''),
(49, 54, ''),
(50, 55, ''),
(51, 56, ''),
(52, 57, ''),
(53, 58, ''),
(54, 59, 'ljubica'),
(55, 60, 'ljubica'),
(56, 61, ''),
(57, 62, 'snimatelj_zvuka'),
(58, 63, ''),
(59, 64, ''),
(60, 65, ''),
(61, 66, ''),
(62, 67, ''),
(63, 68, ''),
(64, 69, ''),
(65, 70, ''),
(66, 71, ''),
(67, 72, ''),
(68, 73, ''),
(69, 74, ''),
(70, 75, ''),
(71, 76, ''),
(72, 77, ''),
(73, 78, ''),
(74, 79, ''),
(75, 80, ''),
(76, 81, ''),
(77, 82, ''),
(78, 83, ''),
(79, 84, ''),
(80, 85, ''),
(81, 86, ''),
(82, 87, ''),
(83, 88, ''),
(84, 89, ''),
(85, 90, ''),
(86, 91, ''),
(87, 92, ''),
(88, 93, ''),
(89, 94, ''),
(90, 95, ''),
(91, 96, ''),
(92, 97, ''),
(93, 98, ''),
(94, 99, ''),
(95, 100, ''),
(96, 101, ''),
(97, 102, ''),
(98, 103, ''),
(99, 104, ''),
(100, 105, ''),
(101, 143, 'ljubica'),
(102, 143, 'bla'),
(103, 143, 'dhuesfv');

-- --------------------------------------------------------

--
-- Table structure for table `osnovne_informacije`
--

DROP TABLE IF EXISTS `osnovne_informacije`;
CREATE TABLE IF NOT EXISTS `osnovne_informacije` (
  `Film_id_filma` int(11) NOT NULL,
  `sinopsis` text,
  `arhivska_muzika` text,
  `biografija_rezisera` text,
  `napomene` text,
  PRIMARY KEY (`Film_id_filma`),
  KEY `fk_Info_film_Film1_idx` (`Film_id_filma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `osnovne_informacije`
--

INSERT INTO `osnovne_informacije` (`Film_id_filma`, `sinopsis`, `arhivska_muzika`, `biografija_rezisera`, `napomene`) VALUES
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, 'GOTOVO', 'GOTOVO', 'GOTOVO', ''),
(37, 'GOTOVO', 'GOTOVO', 'GOTOVO', ''),
(38, 'GOTOVO', 'GOTOVO', 'GOTOVO', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, '', '', '', ''),
(74, '', '', '', ''),
(75, '', '', '', ''),
(76, '', '', '', ''),
(77, '', '', '', ''),
(78, '', '', '', ''),
(79, '', '', '', ''),
(80, '', '', '', ''),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, '', '', '', ''),
(96, '', '', '', ''),
(97, '', '', '', ''),
(98, '', '', '', ''),
(99, '', '', '', ''),
(100, '', '', '', ''),
(101, '', '', '', ''),
(102, '', '', '', ''),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, '', '', '', ''),
(109, '', '', '', ''),
(110, 'Molim vas za pomoc. Pocela sam sa hrono ishranom i nekako uklopila satnicu,i sta se kada jede. ali mi je potrebna pomoc tj da mi neko uprosti sta koliko puta nedeljno ili nedeljnu kolicinu,i sta se sa cim ne kombinuje u sva tri broka. nemojte me upucivati na start,iscitala sam i vise od toga,ali imam bebu,i izmedju hrane z', 'Molim vas za pomoc. Pocela sam sa hrono ishranom i nekako uklopila satnicu,i sta se kada jede. ali mi je potrebna pomoc tj da mi neko uprosti sta koliko puta nedeljno ili nedeljnu kolicinu,i sta se sa cim ne kombinuje u sva tri broka. nemojte me upucivati na start,iscitala sam i vise od toga,ali imam bebu,i izmedju hrane z', 'Molim vas za pomoc. Pocela sam sa hrono ishranom i nekako uklopila satnicu,i sta se kada jede. ali mi je potrebna pomoc tj da mi neko uprosti sta koliko puta nedeljno ili nedeljnu kolicinu,i sta se sa cim ne kombinuje u sva tri broka. nemojte me upucivati na start,iscitala sam i vise od toga,ali imam bebu,i izmedju hrane z', 'Molim vas za pomoc. Pocela sam sa hrono ishranom i nekako uklopila satnicu,i sta se kada jede. ali mi je potrebna pomoc tj da mi neko uprosti sta koliko puta nedeljno ili nedeljnu kolicinu,i sta se sa cim ne kombinuje u sva tri broka. nemojte me upucivati na start,iscitala sam i vise od toga,ali imam bebu,i izmedju hrane z'),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, '', '', '', ''),
(114, '', '', '', ''),
(115, '', '', '', ''),
(116, '', '', '', ''),
(117, '', '', '', ''),
(118, '', '', '', ''),
(119, '', '', '', ''),
(120, '', '', '', ''),
(121, '', '', '', ''),
(122, '', '', '', ''),
(123, '', '', '', ''),
(124, '', '', '', ''),
(125, '', '', '', ''),
(126, '', '', '', ''),
(127, '', '', '', ''),
(128, '', '', '', ''),
(129, '', '', '', ''),
(130, '', '', '', ''),
(131, '', '', '', ''),
(132, '', '', '', ''),
(133, '', '', '', ''),
(134, '', '', '', ''),
(135, '', '', '', ''),
(136, '', '', '', ''),
(137, '', '', '', ''),
(138, '', '', '', ''),
(139, '', '', '', ''),
(140, '', '', '', ''),
(141, '', '', '', ''),
(142, '', '', '', ''),
(143, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `podrska`
--

DROP TABLE IF EXISTS `podrska`;
CREATE TABLE IF NOT EXISTS `podrska` (
  `id_podrske` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `tip_podrske` varchar(255) DEFAULT NULL,
  `ime_prezime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_podrske`),
  KEY `fk_Podrska_Film1` (`Film_id_filma`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `podrska`
--

INSERT INTO `podrska` (`id_podrske`, `Film_id_filma`, `tip_podrske`, `ime_prezime`) VALUES
(1, 55, 'dizajner_zvuka', 'ljubica'),
(2, 56, 'snimatelj_zvuka', 'ljubica'),
(3, 58, 'specijalni_efekti', 'ljubica'),
(4, 59, 'dizajner_zvuka', 'ljubica'),
(5, 60, 'snimatelj_zvuka', 'ljubica'),
(6, 62, 'dizajner_zvuka', 'snimatelj_zvuka'),
(7, 63, 'dizajner_zvuka', ''),
(8, 64, 'dizajner_zvuka', ''),
(9, 65, 'dizajner_zvuka', ''),
(10, 66, 'dizajner_zvuka', ''),
(11, 73, 'dizajner_zvuka', ''),
(12, 89, 'specijalni_efekti', 'ljubica'),
(13, 90, 'specijalni_efekti', 'ljubica');

-- --------------------------------------------------------

--
-- Table structure for table `podrska_student`
--

DROP TABLE IF EXISTS `podrska_student`;
CREATE TABLE IF NOT EXISTS `podrska_student` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  `tip_podrske` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_id_studenta`,`Film_id_filma`),
  KEY `fk_Film_has_Student_Student2_idx` (`Student_id_studenta`),
  KEY `fk_Film_has_Student_Film7_idx` (`Film_id_filma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `podrska_student`
--

INSERT INTO `podrska_student` (`Film_id_filma`, `Student_id_studenta`, `tip_podrske`) VALUES
(38, 1, NULL),
(39, 1, NULL),
(88, 1, NULL),
(36, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `predmet`
--

DROP TABLE IF EXISTS `predmet`;
CREATE TABLE IF NOT EXISTS `predmet` (
  `id_predmeta` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_predmeta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `predmet`
--

INSERT INTO `predmet` (`id_predmeta`, `naziv`) VALUES
(1, 'uvit');

-- --------------------------------------------------------

--
-- Table structure for table `producent`
--

DROP TABLE IF EXISTS `producent`;
CREATE TABLE IF NOT EXISTS `producent` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  KEY `fk_Film_has_Student_Film3_idx` (`Film_id_filma`),
  KEY `fk_Producent_Student1_idx` (`Student_id_studenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producent`
--

INSERT INTO `producent` (`Film_id_filma`, `Student_id_studenta`) VALUES
(5, 1),
(6, 1),
(7, 2),
(39, 1),
(138, 1),
(138, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `id_profesora` int(11) NOT NULL AUTO_INCREMENT,
  `ime_prezime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_profesora`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`id_profesora`, `ime_prezime`) VALUES
(1, 'Andjelka');

-- --------------------------------------------------------

--
-- Table structure for table `reziser`
--

DROP TABLE IF EXISTS `reziser`;
CREATE TABLE IF NOT EXISTS `reziser` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  KEY `fk_Film_has_Student_Film2_idx` (`Film_id_filma`),
  KEY `fk_Reziser_Student1_idx` (`Student_id_studenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reziser`
--

INSERT INTO `reziser` (`Film_id_filma`, `Student_id_studenta`) VALUES
(3, 1),
(5, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(45, 1),
(64, 2),
(78, 1),
(81, 1),
(82, 1),
(83, 1),
(117, 1),
(123, 1),
(126, 1),
(128, 1),
(131, 1),
(131, 2),
(132, 1),
(136, 1),
(136, 2);

-- --------------------------------------------------------

--
-- Table structure for table `scenarista`
--

DROP TABLE IF EXISTS `scenarista`;
CREATE TABLE IF NOT EXISTS `scenarista` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  KEY `fk_Film_has_Student_Film1_idx` (`Film_id_filma`),
  KEY `fk_Snimatelj_Student1_idx` (`Student_id_studenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scenarista`
--

INSERT INTO `scenarista` (`Film_id_filma`, `Student_id_studenta`) VALUES
(132, 1),
(132, 2);

-- --------------------------------------------------------

--
-- Table structure for table `snimatelj`
--

DROP TABLE IF EXISTS `snimatelj`;
CREATE TABLE IF NOT EXISTS `snimatelj` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  KEY `fk_Film_has_Student_Film1_idx` (`Film_id_filma`),
  KEY `fk_Snimatelj_Student1_idx` (`Student_id_studenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `snimatelj`
--

INSERT INTO `snimatelj` (`Film_id_filma`, `Student_id_studenta`) VALUES
(5, 1),
(6, 2),
(7, 2),
(36, 1),
(38, 1),
(39, 1),
(139, 1),
(139, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id_studenta` int(11) NOT NULL AUTO_INCREMENT,
  `indeks` mediumtext,
  `ime_prezime` varchar(255) DEFAULT NULL,
  `e-mail` varchar(255) DEFAULT NULL,
  `godina_studija` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_studenta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_studenta`, `indeks`, `ime_prezime`, `e-mail`, `godina_studija`) VALUES
(1, '123456', 'Mika', 'mika.mikic@gmail.com', 2),
(2, '123457', 'Pera', 'pera.peric@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tehnicka_specifikacija`
--

DROP TABLE IF EXISTS `tehnicka_specifikacija`;
CREATE TABLE IF NOT EXISTS `tehnicka_specifikacija` (
  `Film_id_filma` int(11) NOT NULL,
  `osnovni_format` varchar(255) DEFAULT NULL,
  `filmski_format` varchar(255) DEFAULT NULL,
  `video_format` varchar(255) DEFAULT NULL,
  `tel_standard` varchar(255) DEFAULT NULL,
  `analiza_slike` varchar(255) DEFAULT NULL,
  `format_slike` varchar(255) DEFAULT NULL,
  `br_sl_sek` varchar(255) DEFAULT NULL,
  `video_nosac` varchar(255) DEFAULT NULL,
  `vrsta_fajla` varchar(255) DEFAULT NULL,
  `zvuk` varchar(255) DEFAULT NULL,
  `broj_kanala` varchar(255) DEFAULT NULL,
  `redukcija_suma` varchar(255) DEFAULT NULL,
  `varijacije_zvuka` text,
  `napomene` text,
  PRIMARY KEY (`Film_id_filma`),
  KEY `fk_Tehnicka_specifikacija_Film1_idx` (`Film_id_filma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tehnicka_specifikacija`
--

INSERT INTO `tehnicka_specifikacija` (`Film_id_filma`, `osnovni_format`, `filmski_format`, `video_format`, `tel_standard`, `analiza_slike`, `format_slike`, `br_sl_sek`, `video_nosac`, `vrsta_fajla`, `zvuk`, `broj_kanala`, `redukcija_suma`, `varijacije_zvuka`, `napomene`) VALUES
(2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(3, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(4, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(5, 'VIDEO', '16 mm', 'HD', 'PAL', 'Sa proredom / Interlace', '4:3', '29,97', 'Blu-ray', 'Quick Time DV / ProRes / DNxHD', 'Zvucni / With sound', 'Stereo', 'Bez / None', '', ''),
(6, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(7, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(8, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(9, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(10, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(11, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(12, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(13, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(14, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(15, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(16, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(17, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(18, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(19, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(20, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(21, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(22, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(23, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(24, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(25, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(26, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(27, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(28, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(29, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(30, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(31, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(32, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(33, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(34, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(35, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(36, 'VIDEO', '16 mm', 'HD', 'NTSC', 'Progresivna / Progressive', '4:3L', '23,976', 'Fajl / File', 'Quick Time DV / ProRes / DNxHD', 'Zvucni / With sound', 'Mono', 'Bez / None', 'GOTOVO', ''),
(37, 'VIDEO', '16 mm', 'HD', 'NTSC', 'Sa proredom / Interlace', '4:3L', '18', 'Fajl / File', 'Quick Time DV / ProRes / DNxHD', 'Nemi / Silent', 'Stereo', 'Bez / None', 'GOTOVO', ''),
(38, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'GOTOVO', ''),
(39, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(40, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(41, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(42, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(43, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(44, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(45, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(46, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(47, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(48, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(49, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(50, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(51, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(52, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(53, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(54, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(55, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(56, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(57, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(58, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(59, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(60, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(61, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(62, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(63, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(64, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(65, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(66, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(67, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(68, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(69, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(70, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(71, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(72, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(73, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(74, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(75, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(76, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(77, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(78, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(79, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(80, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(81, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(82, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(83, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(84, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(85, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(86, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(87, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(88, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(89, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(90, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(91, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(92, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(93, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(94, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(95, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(96, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(97, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(98, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(99, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(100, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(101, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(102, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(103, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(104, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(105, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(109, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(110, 'VIDEO', '8 mm', 'HD', 'PAL', 'Sa proredom / Interlace', '4:3L', '23,976', 'Blu-ray', 'Quick Time DV / ProRes / DNxHD', 'Zvucni / With sound', 'Stereo', 'Bez / None', 'Molim vas za pomoc. Pocela sam sa hrono ishranom i nekako uklopila satnicu,i sta se kada jede. ali mi je potrebna pomoc tj da mi neko uprosti sta koliko puta nedeljno ili nedeljnu kolicinu,i sta se sa cim ne kombinuje u sva tri broka. nemojte me upucivati na start,iscitala sam i vise od toga,ali imam bebu,i izmedju hrane z', 'Molim vas za pomoc. Pocela sam sa hrono ishranom i nekako uklopila satnicu,i sta se kada jede. ali mi je potrebna pomoc tj da mi neko uprosti sta koliko puta nedeljno ili nedeljnu kolicinu,i sta se sa cim ne kombinuje u sva tri broka. nemojte me upucivati na start,iscitala sam i vise od toga,ali imam bebu,i izmedju hrane z'),
(111, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(112, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(113, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(114, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(115, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(116, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(117, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(118, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(119, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(120, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(121, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(122, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(123, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(124, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(125, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(126, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(127, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(128, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(129, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(130, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(131, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(132, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(133, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(134, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(135, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(136, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(137, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(138, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(139, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(140, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(141, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(142, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(143, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vezba`
--

DROP TABLE IF EXISTS `vezba`;
CREATE TABLE IF NOT EXISTS `vezba` (
  `id_vezbe` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) DEFAULT NULL,
  `opis` text,
  `tip` varchar(255) DEFAULT NULL,
  `Predmet_id_predmeta` int(11) NOT NULL,
  PRIMARY KEY (`id_vezbe`),
  KEY `fk_Vezba_Predmet1_idx` (`Predmet_id_predmeta`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vezba`
--

INSERT INTO `vezba` (`id_vezbe`, `naziv`, `opis`, `tip`, `Predmet_id_predmeta`) VALUES
(1, 'vezba1', 'ovo je vezba1 ', '1', 1),
(2, 'Vezba2', 'ovo je vrzba 2', 'individualna', 1),
(3, 'vezba3', 'ovo je vrzba 3', 'individualna', 1),
(4, 'vezba3', 'ovo je vrzba 3', 'individualna', 1),
(5, 'vezba3', 'ovo je vrzba 3', 'individualna', 1),
(6, 'vezba7', 'OVO JE VEZBA', 'individualna', 1),
(7, 'vezba7', 'OVO JE VEZBA', 'individualna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vezba_katedra`
--

DROP TABLE IF EXISTS `vezba_katedra`;
CREATE TABLE IF NOT EXISTS `vezba_katedra` (
  `Katedra_godina_studija` int(11) NOT NULL,
  `Katedra_skolska_godina` int(11) NOT NULL,
  `Katedra_naziv` varchar(255) NOT NULL,
  `Vezba_id_vezbe` int(11) NOT NULL,
  PRIMARY KEY (`Katedra_godina_studija`,`Katedra_skolska_godina`,`Katedra_naziv`,`Vezba_id_vezbe`),
  KEY `fk_Katedra_has_Vezba_Vezba1_idx` (`Vezba_id_vezbe`),
  KEY `fk_Katedra_has_Vezba_Katedra1_idx` (`Katedra_godina_studija`,`Katedra_skolska_godina`,`Katedra_naziv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vezba_studenti`
--

DROP TABLE IF EXISTS `vezba_studenti`;
CREATE TABLE IF NOT EXISTS `vezba_studenti` (
  `Vezba_id_vezbe` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  PRIMARY KEY (`Vezba_id_vezbe`,`Student_id_studenta`),
  KEY `fk_Vezba_has_Student_Student1_idx` (`Student_id_studenta`),
  KEY `fk_Vezba_has_Student_Vezba1_idx` (`Vezba_id_vezbe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_Film_Vezba1` FOREIGN KEY (`Vezba_id_vezbe`) REFERENCES `vezba` (`id_vezbe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `glumac`
--
ALTER TABLE `glumac`
  ADD CONSTRAINT `fk_Film_has_Student_Film5` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `glumac_student`
--
ALTER TABLE `glumac_student`
  ADD CONSTRAINT `fk_Film_has_Student_Film6` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Film_has_Student_Student1` FOREIGN KEY (`Student_id_studenta`) REFERENCES `student` (`id_studenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `karton_prilog`
--
ALTER TABLE `karton_prilog`
  ADD CONSTRAINT `fk_Karton_prilog_Film1` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `katedra`
--
ALTER TABLE `katedra`
  ADD CONSTRAINT `fk_Katedra_Profesor1` FOREIGN KEY (`Profesor_id_profesora`) REFERENCES `profesor` (`id_profesora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `montazer`
--
ALTER TABLE `montazer`
  ADD CONSTRAINT `fk_Film_has_Student_Film4` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Montazer_Student1` FOREIGN KEY (`Student_id_studenta`) REFERENCES `student` (`id_studenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nagrada`
--
ALTER TABLE `nagrada`
  ADD CONSTRAINT `fk_Nagrada_Film1` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `osnovne_informacije`
--
ALTER TABLE `osnovne_informacije`
  ADD CONSTRAINT `fk_Info_film_Film1` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `podrska`
--
ALTER TABLE `podrska`
  ADD CONSTRAINT `fk_Podrska_Film1` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `podrska_student`
--
ALTER TABLE `podrska_student`
  ADD CONSTRAINT `fk_Film_has_Student_Film7` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Film_has_Student_Student2` FOREIGN KEY (`Student_id_studenta`) REFERENCES `student` (`id_studenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `producent`
--
ALTER TABLE `producent`
  ADD CONSTRAINT `fk_Film_has_Student_Film3` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Producent_Student1` FOREIGN KEY (`Student_id_studenta`) REFERENCES `student` (`id_studenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reziser`
--
ALTER TABLE `reziser`
  ADD CONSTRAINT `fk_Film_has_Student_Film2` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Reziser_Student1` FOREIGN KEY (`Student_id_studenta`) REFERENCES `student` (`id_studenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `snimatelj`
--
ALTER TABLE `snimatelj`
  ADD CONSTRAINT `fk_Film_has_Student_Film1` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Snimatelj_Student1` FOREIGN KEY (`Student_id_studenta`) REFERENCES `student` (`id_studenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tehnicka_specifikacija`
--
ALTER TABLE `tehnicka_specifikacija`
  ADD CONSTRAINT `fk_Tehnicka_specifikacija_Film1` FOREIGN KEY (`Film_id_filma`) REFERENCES `film` (`id_filma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vezba`
--
ALTER TABLE `vezba`
  ADD CONSTRAINT `fk_Vezba_Predmet1` FOREIGN KEY (`Predmet_id_predmeta`) REFERENCES `predmet` (`id_predmeta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vezba_katedra`
--
ALTER TABLE `vezba_katedra`
  ADD CONSTRAINT `fk_Katedra_has_Vezba_Katedra1` FOREIGN KEY (`Katedra_godina_studija`,`Katedra_skolska_godina`,`Katedra_naziv`) REFERENCES `katedra` (`godina_studija`, `skolska_godina`, `naziv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Katedra_has_Vezba_Vezba1` FOREIGN KEY (`Vezba_id_vezbe`) REFERENCES `vezba` (`id_vezbe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vezba_studenti`
--
ALTER TABLE `vezba_studenti`
  ADD CONSTRAINT `fk_Vezba_has_Student_Student1` FOREIGN KEY (`Student_id_studenta`) REFERENCES `student` (`id_studenta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vezba_has_Student_Vezba1` FOREIGN KEY (`Vezba_id_vezbe`) REFERENCES `vezba` (`id_vezbe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
