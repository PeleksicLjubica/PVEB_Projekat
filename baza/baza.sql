-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 06:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Milutin Milankovic', 'wade@example.com', '$2y$10$zTsVE8wovqKpHAWnBF/kU.KXRjP34dv/aD4gykg7t1YK9S2mxcVhm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id_filma` int(11) NOT NULL AUTO_INCREMENT,
  `Vezba_id_vezbe` int(11) NOT NULL,
  `godina_proizvodnje` int(11) DEFAULT NULL,
  `naziv_filma` varchar(255) DEFAULT NULL,
  `trajanje` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_filma`),
  KEY `fk_Film_Vezba1_idx` (`Vezba_id_vezbe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=186 ;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_filma`, `Vezba_id_vezbe`, `godina_proizvodnje`, `naziv_filma`, `trajanje`) VALUES
(181, 15, 2008, 'Gnev', '00:04:21'),
(182, 15, 2011, 'Autobiografija', '00:11:11'),
(183, 13, 2016, 'Loš dan', '00:11:11'),
(184, 14, 2015, 'Razmisli', '00:23:14'),
(185, 14, 2014, 'Pocetak kraja', '00:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `glumac`
--

CREATE TABLE IF NOT EXISTS `glumac` (
  `id_glumca` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `ime_prezime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_glumca`),
  KEY `fk_Film_has_Student_Film5_idx` (`Film_id_filma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `glumac`
--

INSERT INTO `glumac` (`id_glumca`, `Film_id_filma`, `ime_prezime`) VALUES
(1, 183, 'Anica Marković'),
(2, 183, 'Luka Popović'),
(3, 184, 'Nadica Marković'),
(4, 184, 'Ljubiša Ristić'),
(5, 184, 'Nikola Šešić'),
(6, 185, 'Nemanja Subotić'),
(7, 185, 'Miloš Marković'),
(8, 185, 'Ana Stojanović');

-- --------------------------------------------------------

--
-- Table structure for table `glumac_student`
--

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
(183, 5),
(181, 19),
(181, 20),
(181, 21);

-- --------------------------------------------------------

--
-- Table structure for table `karton_prilog`
--

CREATE TABLE IF NOT EXISTS `karton_prilog` (
  `id_priloga` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `tip_priloga` varchar(255) NOT NULL,
  `putanja` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`id_priloga`),
  KEY `fk_Karton_prilog_Film1` (`Film_id_filma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `karton_prilog`
--

INSERT INTO `karton_prilog` (`id_priloga`, `Film_id_filma`, `tip_priloga`, `putanja`) VALUES
(12, 181, 'DVD', 'filmovi/Gnev_181/Gnev - 2008 - Studentski Film - FDU.mp4'),
(13, 181, 'fotografija iz filma', 'filmovi/Gnev_181/Klasici.jpg'),
(14, 182, 'DVD', 'filmovi/Autobiografija_182/AUTOBIOGRAFIJA 2011 FDU.mp4'),
(15, 182, 'fotografija iz filma', 'filmovi/Autobiografija_182/snimanje-kamerom.jpg'),
(16, 183, 'DVD', 'filmovi/Losdan_183/Los Dan.mp4'),
(17, 183, 'fotografija iz filma', 'filmovi/Losdan_183/a.jpg'),
(18, 183, 'fotografija iz filma', 'filmovi/Losdan_183/ovih-dana.jpg'),
(19, 184, 'DVD', 'filmovi/Razmisli_184/Razmisli - Ispitni film prve godine.mp4'),
(20, 184, 'fotografija iz filma', 'filmovi/Razmisli_184/leto-bez-meseca.jpg'),
(21, 185, 'DVD', 'filmovi/Pocetak kraja_185/Pocetakkraja,FDU2015.mp4'),
(22, 185, 'fotografija iz filma', 'filmovi/Pocetak kraja_185/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `katedra`
--

CREATE TABLE IF NOT EXISTS `katedra` (
  `id_katedre` int(11) NOT NULL AUTO_INCREMENT,
  `godina_studija` int(11) NOT NULL,
  `skolska_godina` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `Profesor_id_profesora` int(11) NOT NULL,
  PRIMARY KEY (`id_katedre`),
  KEY `fk_Katedra_Profesor1_idx` (`Profesor_id_profesora`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `katedra`
--

INSERT INTO `katedra` (`id_katedre`, `godina_studija`, `skolska_godina`, `naziv`, `Profesor_id_profesora`) VALUES
(1, 1, 2016, 'rezija', 1),
(2, 2, 2016, 'rezija', 1),
(3, 3, 2016, 'rezija', 1),
(4, 4, 2016, 'rezija', 1),
(5, 5, 2016, 'rezija', 1),
(6, 6, 2016, 'rezija', 1),
(7, 1, 2016, 'montaza', 2),
(8, 2, 2016, 'montaza', 2),
(9, 3, 2016, 'montaza', 2),
(10, 4, 2016, 'montaza', 2),
(11, 5, 2016, 'montaza', 2),
(12, 6, 2016, 'montaza', 2),
(13, 1, 2016, 'kamera', 3),
(14, 2, 2016, 'kamera', 3),
(15, 3, 2016, 'kamera', 3),
(16, 4, 2016, 'kamera', 3),
(17, 5, 2016, 'kamera', 3),
(18, 6, 2016, 'kamera', 3),
(19, 1, 2016, 'zvuk', 4),
(20, 2, 2016, 'zvuk', 4),
(21, 3, 2016, 'zvuk', 4),
(22, 4, 2016, 'zvuk', 4),
(23, 5, 2016, 'zvuk', 4),
(24, 6, 2016, 'zvuk', 4),
(25, 1, 2016, 'produkcija', 5),
(26, 2, 2016, 'produkcija', 5),
(27, 3, 2016, 'produkcija', 5),
(28, 4, 2016, 'produkcija', 5),
(29, 5, 2016, 'produkcija', 5),
(30, 6, 2016, 'produkcija', 5);

-- --------------------------------------------------------

--
-- Table structure for table `montazer`
--

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
(181, 3),
(182, 16),
(183, 18),
(184, 15),
(185, 10);

-- --------------------------------------------------------

--
-- Table structure for table `nagrada`
--

CREATE TABLE IF NOT EXISTS `nagrada` (
  `id_nagrade` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `naziv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_nagrade`),
  KEY `fk_Nagrada_Film1_idx` (`Film_id_filma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `osnovne_informacije`
--

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
(181, 'Zbog cega se ne razmislja? Ne reaguju svi ljudi isto u gnevu. I ne mora uvek da postoji direktan povod za gnev. ', '', 'Rođen sam  23.12.1989. u Šapcu. Osnovnu školu sam završio u O.Š."Mika Mitrović" u Bogatiću. Iako nisam išao na takmičenja dobitnik sam Vukove diplome. Gimnaziju sam pohađao u Šapcu.\r\nKao maturant dobijam diplomu od svoje gimnazije "za zalaganje u dramskoj sekciji", koja, u stvari nije ni postojala. 2008 upisujem Fakultet dramskih umetnosti i ovo je moj prvi film.', ''),
(182, '', '', 'Obrazovanje:\r\nOsnovna skola Dragica Pravica, Beograd;\r\nElektrotehnicka skola Nikola Tesla, Beograd;\r\nFaku;tet Dramskih Umetnosti, Beograd\r\nSlobodnog vremena imam jako malo zbog posla i fakulteta. Bavim se spasilastvom. Ono vremena sto mi ostaje slobodno provodim sa mojom devojkom. Na fakultetu\r\nse trudim da budem redovan mada mi to ponekad ne uspeva ali i dalje istrajavam i redovno zavrsavam 2 godinu studija. Hobi mi je stolarstvo.', ''),
(183, 'Student glume Filip pada ispit u poslednjem roku i zbog toga ne može da učestvuje u ispitnoj predstavi svoje klase, a ni da nastavi školovanje za koje mu treba velika svota novca. Njegove kolege će učiniti sve što je u njihovoj moći da mu pomognu, ali da li je to dovoljno da spasu Filipa i svoju predstavu?', '', 'Obrazovanje:\r\nOsnovna skola Sonja Marinkovic, Zemun;\r\nKrusevačka gimnazija;\r\nFakultet dramskih umetnosti, smer režija;\r\nJos u sestom razredu osnovne skole sam odlucio cime hocu da se bavim.\r\nMoja druga ljubav su jezici i cilj mi je da do kraja studija govorim cetiri. Veliki sam fan tenisa od 12. godine. Ovo je moj treci film.', ''),
(184, 'U svojoj poslednjoj noći u Beogradu Ivana se oprašta sa bratom i najbližim prijateljima. \n', '', 'Obrazovanje:\r\nOsnovna skola Zivko Ljujic, Nova Varos;\r\nGimnazija Pivo Karamatijevic, Nova Varos;\r\nFakultet Dramskih Umetnosti, Beograd;\r\nDruzeljubiv i komunikativan. U slobodno vreme izlazim sa drustvom, idem na\r\nplivanje, igram basket, igrice... Ovo je moj prvi studentski film.', ''),
(185, 'Pred odlazak u inostranstvo, šesnaestogodišnja Isidora provodi nekoliko dana u vikendici sa svojom starijom sestrom. Izgubljena u letnjoj tišini, strepi da će se sve oko nje promeniti. ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `podrska`
--

CREATE TABLE IF NOT EXISTS `podrska` (
  `id_podrske` int(11) NOT NULL AUTO_INCREMENT,
  `Film_id_filma` int(11) NOT NULL,
  `tip_podrske` varchar(255) DEFAULT NULL,
  `ime_prezime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_podrske`),
  KEY `fk_Podrska_Film1` (`Film_id_filma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `podrska`
--

INSERT INTO `podrska` (`id_podrske`, `Film_id_filma`, `tip_podrske`, `ime_prezime`) VALUES
(8, 181, 'snimatelj zvuka', 'Angelina Ivetić'),
(9, 181, 'animacija', 'Siniša Radović'),
(10, 181, 'kostimograf', 'Sara Popović'),
(11, 181, 'sminker', 'Aleksandra Peleksić'),
(12, 182, 'animacija', 'Milutin Dragić'),
(13, 182, 'sminker', 'Jana Vasić'),
(14, 183, 'specijalni efekti', 'Maksim Djurdjevac'),
(15, 183, 'snimatelj zvuka', 'Momčilo Lukić'),
(16, 183, 'kostimograf', 'Žarko Kosanić'),
(17, 183, 'sminker', 'Jelena Andrić'),
(18, 184, 'specijalni efekti', 'Tamara Djurić'),
(19, 184, 'animacija', 'Nataša Popadić'),
(20, 184, 'scenograf', 'Tanja Opačić'),
(21, 184, 'sminker', 'Ivan Matić'),
(22, 185, 'specijalni efekti', 'Aleksandra Djurić'),
(23, 185, 'snimatelj zvuka', 'Jana Milutinović'),
(24, 185, 'animacija', 'Igor Rodić'),
(25, 185, 'kostimograf', 'Ana Djordjević'),
(26, 185, 'sminker', 'Ana Milošević');

-- --------------------------------------------------------

--
-- Table structure for table `podrska_student`
--

CREATE TABLE IF NOT EXISTS `podrska_student` (
  `Film_id_filma` int(11) NOT NULL,
  `Student_id_studenta` int(11) NOT NULL,
  `tip_podrske` varchar(255) NOT NULL,
  PRIMARY KEY (`Student_id_studenta`,`Film_id_filma`,`tip_podrske`),
  KEY `fk_Film_has_Student_Student2_idx` (`Student_id_studenta`),
  KEY `fk_Film_has_Student_Film7_idx` (`Film_id_filma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `podrska_student`
--

INSERT INTO `podrska_student` (`Film_id_filma`, `Student_id_studenta`, `tip_podrske`) VALUES
(181, 1, 'dizajner zvuka'),
(181, 3, 'kompozitor'),
(182, 3, 'snimatelj zvuka'),
(183, 4, 'animacija'),
(182, 5, 'kompozitor'),
(183, 5, 'dizajner zvuka'),
(181, 6, 'specijalni efekti'),
(182, 6, 'specijalni efekti'),
(185, 6, 'scenograf'),
(182, 12, 'kostimograf'),
(185, 13, 'kompozitor'),
(184, 14, 'snimatelj zvuka'),
(184, 15, 'kostimograf'),
(183, 17, 'kompozitor'),
(185, 17, 'dizajner zvuka'),
(182, 18, 'dizajner zvuka'),
(183, 18, 'scenograf'),
(181, 19, 'scenograf'),
(184, 20, 'dizajner zvuka'),
(182, 21, 'scenograf'),
(184, 21, 'kompozitor');

-- --------------------------------------------------------

--
-- Table structure for table `predmet`
--

CREATE TABLE IF NOT EXISTS `predmet` (
  `id_predmeta` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_predmeta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `predmet`
--

INSERT INTO `predmet` (`id_predmeta`, `naziv`) VALUES
(1, 'Teorija filma'),
(2, 'Uvod u studije filma'),
(3, 'Osnovi pozorišne režije'),
(4, 'Osnovi audio tehnike'),
(5, 'Tehnologija televizije'),
(6, 'Istorija svetskog pozorišta i drame'),
(7, 'Filmska montaža'),
(8, 'TV produkcija'),
(9, 'Filmska produkcija');

-- --------------------------------------------------------

--
-- Table structure for table `producent`
--

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
(181, 2),
(182, 3),
(183, 4),
(184, 18),
(185, 14);

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `id_profesora` int(11) NOT NULL AUTO_INCREMENT,
  `ime_prezime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_profesora`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`id_profesora`, `ime_prezime`) VALUES
(1, 'Marko Mladenović'),
(2, 'Nikola Marković'),
(3, 'Milutin Popović'),
(4, 'Nenad Maljković'),
(5, 'Ivan Lukić'),
(6, 'Srdjan Ninković'),
(7, 'Nikola Sretenović'),
(8, 'Mirko Dragojević'),
(9, 'Saša Marković'),
(10, 'Bogdan Milošević');

-- --------------------------------------------------------

--
-- Table structure for table `reziser`
--

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
(181, 5),
(182, 19),
(183, 6),
(184, 1),
(185, 18);

-- --------------------------------------------------------

--
-- Table structure for table `scenarista`
--

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
(181, 2),
(182, 2),
(183, 13),
(184, 17),
(185, 7);

-- --------------------------------------------------------

--
-- Table structure for table `snimatelj`
--

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
(181, 2),
(182, 17),
(183, 11),
(184, 12),
(185, 15);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id_studenta` int(11) NOT NULL AUTO_INCREMENT,
  `indeks` mediumtext,
  `ime_prezime` varchar(255) DEFAULT NULL,
  `e_mail` varchar(255) DEFAULT NULL,
  `katedra_id_katedre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_studenta`),
  KEY `fk_student_katedra_kljuc_idx` (`katedra_id_katedre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_studenta`, `indeks`, `ime_prezime`, `e_mail`, `katedra_id_katedre`) VALUES
(1, '1052012', 'Marko Popović', 'markopopovic@gmail.com', 1),
(2, '10882014', 'Rade Vasić', 'radevasic@gmail.com', 2),
(3, '562013', 'Petra Anić', 'petraa@gmail.com', 28),
(4, '332016', 'Robert Mihailović', 'rokim@gmail.com', 15),
(5, '232014', 'Mirela Prusac', 'mirelap@gmail.com', 30),
(6, '32015', 'Mina Pantelić', 'minapantelic@gmail.com', 25),
(7, '52011', 'Vojislav Živanović', 'vojislavziv@gmail.com', 30),
(8, '62014', 'Mateja Vujanović', 'matejavujanovic@gmail.com', 4),
(9, '122015', 'Vladica Marković', 'vladicam@gmail.com', 17),
(10, '102012', 'Radiša Matić', 'radisamatic@gmail.com', 21),
(11, '92015', 'Irena Marković', 'irenamarkov@gmail.com', 14),
(12, '332014', 'Djenadija Šujić', 'djenasujic@gmail.com', 24),
(13, '222014', 'Gordana Lukić', 'gordanalu@gmail.com', 2),
(14, '22013', 'Jasmina Djurdjević', 'jasminadju@gmail.com', 9),
(15, '32011', 'Branislav Kojičić', 'branislavkojicic@gmail.com', 13),
(16, '72013', 'Vladimir Kukoleča', 'vladkukol@gmail.com', 27),
(17, '212015', 'Isidora Matić', 'isidoramatic@gmail.com', 25),
(18, '522010', 'Aron Sekelj', 'arons@gmail.com', 11),
(19, '522013', 'Nemanja Milunovic', 'milun@gmail.com', 15),
(20, '342016', 'Milena Zivanovic', 'milenazivanov@gmail.com', 29),
(21, '272016', 'Aleksandar Andjelic', 'andjelica@gmail.com', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tehnicka_specifikacija`
--

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
(181, 'VIDEO', '16 mm', '2K', 'PAL', 'Sa proredom / Interlace', '1:1,85', '30', 'DVD', 'Quick Time DV / ProRes / DNxHD', 'Nemi / Silent', 'Stereo', 'Bez / None', '', ''),
(182, 'VIDEO', '16 mm', '2K', 'NTSC', 'Progresivna / Progressive', '1:1,85', '24', 'DVD', 'Quick Time DV / ProRes / DNxHD', 'Nemi / Silent', 'Mono', 'Dolby', '', ''),
(183, 'VIDEO', '16 mm', '2K', 'NTSC', 'Progresivna / Progressive', '16:9', '24', 'DVD', 'AVI - DV', 'Zvucni / With sound', 'Mono', 'Dolby', '', ''),
(184, 'FILM', '16 mm', '2K', 'NTSC', 'Sa proredom / Interlace', '1:1,66', '25', 'Fajl / File', 'Quick Time DV / ProRes / DNxHD', 'Nemi / Silent', '5.1', 'Dolby', '', ''),
(185, 'FILM', '16 mm', '2K', 'NTSC', 'Progresivna / Progressive', '1:1,66', '29,97', 'Blu-ray', 'mp4 H.264', 'Nemi / Silent', 'Stereo', 'Bez / None', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vezba`
--

CREATE TABLE IF NOT EXISTS `vezba` (
  `id_vezbe` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) DEFAULT NULL,
  `opis` text,
  `tip` varchar(255) DEFAULT NULL,
  `Predmet_id_predmeta` int(11) NOT NULL,
  PRIMARY KEY (`id_vezbe`),
  KEY `fk_Vezba_Predmet1_idx` (`Predmet_id_predmeta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `vezba`
--

INSERT INTO `vezba` (`id_vezbe`, `naziv`, `opis`, `tip`, `Predmet_id_predmeta`) VALUES
(12, 'Potera ', ' 2RD, bez rasvete ', 'individualna', 5),
(13, ' Dijalog 3 lica za stolom', ' 2RD, Edirol R4 Pro, dizajn zvuka, bez budžeta (osim troškova prevoza - 2 000,00din), studio \r\n', 'zajednicka', 2),
(14, ' Dokumentarni i namenski film 1 ', 'Scenario se razvija celog semestra, 2 RD, Canon 5D, Sony XDCAM EX1,\r\nrasveta FDU – po sp', 'individualna', 3),
(15, 'Mizankadar ', 'Scenario do 1.12.2015, 2 RD, BlackMagic Cinema Camera, Canon 5D, rasveta\r\nFDU – po specifikaciji projekta, zvučno, bez budžeta. Ispit: februar 2016. ', 'zajednicka', 7),
(16, 'TELEVIZIJSKA REŽIJA 1', 'Scenario i realizacija pojedinih reklama prema internoj dinamici, 2 RD,\r\nBlackMagic Cinema Camera, Canon 5D, rasveta FDU – po specifikaciji\r\nprojekta, zvučno, budžet: 5 000,00 din. Ispit: februar 2016. ', 'individualna', 5),
(17, 'FILMSKA REŽIJA 5 ', 'Scenario se razvija celog semestra, 2 RD, Canon 5D, Sony XDCAM EX1,\r\nrasveta FDU – po specifikaciji projekta, zvučno, bez budžeta. Ispit: februar\r\n2016. \r\n', 'individualna', 7),
(18, 'FILMSKA REŽIJA 2', 'Scenario do 15.3.2016, 3 RD, BlackMagic Cinema Camera, Canon 5D, rasveta\r\nFDU - po specifikaciji projekta, nemo, budžet: 20.000,00 dinara, Ispit: jun\r\n2016.g. ', 'zajednicka', 9),
(19, 'TV drama ', 'Scenario do decembra 2015, (2)+1+2RD, BlackMagic Cinema Camera, Canon\r\n5D, rasveta FDU – po specifikaciji projekta, zvučno, budžet: 20.000,00 dinara\r\n+ ukupni teh.trošak 4.000,00 din. Ispit: jun 2016. ', 'individualna', 8),
(20, ' Sitcom ', 'Scenario do 25.02.2016, 2 RD, rasveta FDU – po specifikaciji projekta,\r\nzvučno, bez budžeta (samo troškovi prevoza - 2 000,00 din). Ispit: jun 2016.', 'individualna', 8);

-- --------------------------------------------------------

--
-- Table structure for table `vezba_katedra`
--

CREATE TABLE IF NOT EXISTS `vezba_katedra` (
  `Vezba_id_vezbe` int(11) NOT NULL,
  `Katedra_id_katedre` int(11) NOT NULL,
  KEY `fk_Katedra_has_Vezba_Vezba1_idx` (`Vezba_id_vezbe`),
  KEY `fk_IvanIsTheBoss` (`Katedra_id_katedre`)
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
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_katedra_kljuc` FOREIGN KEY (`katedra_id_katedre`) REFERENCES `katedra` (`id_katedre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_IvanIsTheBoss` FOREIGN KEY (`Katedra_id_katedre`) REFERENCES `katedra` (`id_katedre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Katedra_has_Vezba_Vezba1` FOREIGN KEY (`Vezba_id_vezbe`) REFERENCES `vezba` (`id_vezbe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
