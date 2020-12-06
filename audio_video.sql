-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Loomise aeg: Nov 11, 2020 kell 07:41 PL
-- Serveri versioon: 8.0.18
-- PHP versioon: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `library`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `audio_video`
--

DROP TABLE IF EXISTS `audio_video`;
CREATE TABLE IF NOT EXISTS `audio_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pealkiri` varchar(225) NOT NULL,
  `tuup` varchar(10) NOT NULL,
  `autor` varchar(225) NOT NULL,
  `aasta` int(11) NOT NULL,
  `liik` varchar(50) NOT NULL,
  `keel` varchar(50) NOT NULL,
  `valjaandja` varchar(225) NOT NULL,
  `kogus` varchar(50) NOT NULL,
  `riiul` varchar(50) NOT NULL,
  `marksona` varchar(250) NOT NULL,
  `markused` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `audio_video`
--

INSERT INTO `audio_video` (`id`, `pealkiri`, `tuup`, `autor`, `aasta`, `liik`, `keel`, `valjaandja`, `kogus`, `riiul`, `marksona`, `markused`) VALUES
(1, 'PEALKIRI', 'AV_TUUP', 'AUTOR', 0, 'LIIK', 'KEEL', 'VALJAANDJA', 'KOGUS', 'RIIUL', 'MARKSONA', 'MARKUSED'),
(2, '11. Toila-Voka rahvajooks 2005.a.', '', '', 2005, '', '', '', '1', '', '', ''),
(3, 'Araabia Lawrence', '', '', 1995, '', '', '', '1', '', '', ''),
(4, 'Arabella, merer', '', '', 1998, '', '', '', '1', '', '', ''),
(5, 'Casablanca', '', '', 1999, '', '', '', '1', '', '', ''),
(6, 'Detsembrikuumus', 'DVD', '', 2012, '', 'Eesti', '', '1', '', '', 'Eesti P'),
(7, 'Emadep', 'DVD', '', 2010, '', 'Eesti', '', '1', '7', '', ''),
(8, 'Enam paremaks minna ei saa', '', '', 1998, '', '', '', '1', '', '', ''),
(9, 'Georgica', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(10, 'Hukkunud alpinisti hotell', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(11, 'Hullumeelsus', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(12, 'H', '', '', 1998, '', '', '', '1', '', '', ''),
(13, 'Ida-Virumaa kultuuritiigel', '', '', 2006, '', '', '', '1', '', '', ''),
(14, 'Ideaalmaastik', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(15, 'Ikkagi inimesed: Toila G', '', '', 0, '', '', '', '1', '', '', ''),
(16, 'Indrek', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(17, 'Inimene, keda polnud', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(18, 'Isadep', 'DVD', '', 2011, '', 'Eesti', '', '1', '7', '', ''),
(19, 'Isadep', 'DVD', '', 2012, '', 'Eesti', '', '1', '7', '', ''),
(20, 'Ja k', 'DVD', '', 2009, '', 'Eesti', '', '1', '7', '', ''),
(21, 'Jan Uusp', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(22, 'J', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(23, 'J', 'DVD', '', 2007, '', 'Eesti', '', '1', '7', '', ''),
(24, 'J', 'DVD', '', 2009, '', 'Eesti', '', '1', '7', '', ''),
(25, 'Karu s', 'DVD', '', 2012, '', 'Eesti', '', '1', '', '', ''),
(26, 'Kevadball Toila G', '', '', 2005, '', '', '', '1', '', '', ''),
(27, 'Kevade', '', '', 1998, '', '', '', '1', '', '', ''),
(28, 'Kevade', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(29, 'Kevadpidu Voka rahvamajas 2011', 'DVD', '', 2011, '', 'Eesti', '', '1', '7', '', ''),
(30, 'Klass', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(31, 'Koduloop', 'DVD', '', 2009, '', 'Eesti', '', '1', '7', '', ''),
(32, 'Konrad M', '', '', 0, '', '', '', '1', '', '', ''),
(33, 'Kontsert J', 'DVD', '', 2014, '', 'Eesti', '', '1', '7', '', ''),
(34, 'K', '', '', 1998, '', '', '', '1', '', '', ''),
(35, 'K', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(36, 'K', '', '', 0, '', '', '', '1', '', '', ''),
(37, 'Lammas all paremas nurgas', 'DVD', '', 1992, '', 'Eesti', '', '1', '7', '', ''),
(38, 'Laulan oma kodust', 'DVD', '', 2008, '', 'Eesti', '', '1', '7', '', ''),
(39, 'Legende ja lugusid Toilast I osa: M', '', '', 0, '', '', '', '1', '', '', ''),
(40, 'Lendas ', '', '', 1998, '', '', '', '1', '', '', ''),
(41, 'Libahunt', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(42, 'Ma pole turist, ma elan siin', 'DVD', '', 2012, '', 'Eesti', '', '1', '', '', 'Eesti P'),
(43, 'Malta pistrik', '', '', 1999, '', '', '', '1', '', '', ''),
(44, 'Mehed ei nuta', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(45, 'Metskapten', '', '', 1998, '', '', '', '1', '', '', ''),
(46, 'Minu Eestimaa', '', '', 2005, '', '', '', '1', '', '', ''),
(47, 'Moskiitorannik', '', '', 1999, '', '', '', '1', '', '', ''),
(48, 'M', '', '', 1998, '', '', '', '1', '', '', ''),
(49, 'M', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti p'),
(50, 'Naerata ometi', '', '', 1998, '', '', '', '1', '', '', ''),
(51, 'Naksitrallid', 'DVD', '', 1990, '', 'Eesti', '', '1', '7', '', ''),
(52, 'Need vanad armastuskirjad', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(53, 'Nimed marmortahvlil', 'DVD', '', 2012, '', 'Eesti', '', '1', '', '', ''),
(54, 'Nimed marmortahvlil', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(55, 'Nipernaadi', '', '', 1998, '', '', '', '1', '', '', ''),
(56, 'Nukitsamees', '', '', 1998, '', '', '', '1', '', '', ''),
(57, 'Nukitsamees', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(58, 'N', 'DVD', '', 2012, '', 'Eesti', '', '1', '', '', 'Eesti P'),
(59, 'Oru pargi promenaad 2004', '', '', 0, '', '', '', '1', '', '', ''),
(60, 'Oru pargi promenaad 2005', '', '', 2005, '', '', '', '1', '', '', ''),
(61, 'Oru pargi promenaad 2012', 'DVD', '', 2012, '', 'Eesti', '', '1', '7', '', ''),
(62, 'Otsimas Iseend. Toila G', 'DVD', '', 2010, '', 'Eesti', '', '1', '7', '', ''),
(63, 'Pankrannik ja joad Ida-Virumaal', '', '', 0, '', '', '', '1', '', '', 'pole olnud minu ajal ???'),
(64, 'Picasso Looja ja H', '', '', 1997, '', '', '', '1', '', '', ''),
(65, 'P', '', '', 1998, '', '', '', '1', '', '', ''),
(66, 'Raudsed leedid', '', '', 2004, '', '', '', '1', '', '', ''),
(67, 'Ristumine peateega', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(68, 'Ruudi', 'DVD', '', 2006, '', 'Eesti', '', '1', '7', '', ''),
(69, 'Segarahvatantsur', 'DVD', '', 2010, '', 'Eesti', '', '1', '7', '', ''),
(70, 'Suvi', '', '', 1998, '', '', '', '1', '', '', ''),
(71, 'S', '', '', 1998, '', '', '', '1', '', '', ''),
(72, 'S', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(73, 'Tea laste- ja noorteents', 'DVD', '', 2008, '030', 'Eesti', 'TEA', '1', '3', 'Ents', '*'),
(74, 'T', 'DVD', 'Tammsaare A', 2013, '', 'Eesti', '', '1', '7', '', 'Katrin K./25.08.15'),
(75, 'Toila G', 'DVD', '', 0, '', 'Eesti', '', '1', '7', '', ''),
(76, 'Toila vald l', 'DVD', '', 2011, '', 'Eesti', '', '1', '7', '', ''),
(77, 'Toila valla 13 aastap', '', '', 2006, '', '', '', '1', '', '', ''),
(78, 'Toila valla aastap', 'DVD', '', 2007, '', 'Eesti', '', '1', '7', '', ''),
(79, 'Toila valla aastap', 'DVD', '', 2008, '', 'Eesti', '', '1', '7', '', ''),
(80, 'Toila valla aastap', 'DVD', '', 2009, '', 'Eesti', '', '1', '7', '', ''),
(81, 'Toila valla s', 'DVD', '', 2012, '', 'Eesti', '', '1', '7', '', ''),
(82, 'Toila valla X laste lauluv', '', '', 2005, '', '', '', '1', '', '', ''),
(83, 'Toila-Voka rahvajooks 2011', 'DVD', '', 2011, '', 'Eesti', '', '1', '7', '', ''),
(84, 'Toila: Film Toila valla inimestest 2001-2002', '', '', 0, '', '', '', '1', '', '', ''),
(85, 'Tulivesi', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(86, 'Tuulte pesa', 'DVD', '', 2012, '', 'Eesti', '', '2', '', '', 'Eesti P'),
(87, 'Ukuaru', '', '', 1998, '', '', '', '1', '', '', ''),
(88, 'Vaeslaps ja talut', 'DVD', '', 2008, '', 'Eesti', '', '1', '7', '', ''),
(89, 'Vares ja hiired. Tulelaeva kulid. Veel ...', 'DVD', '', 1998, '', 'Eesti', '', '1', '7', '', ''),
(90, 'Viimne reliikvia', '', '', 1998, '', '', '', '1', '', '', ''),
(91, 'Viimne reliikvia', 'DVD', '', 2012, '', 'Eesti', '', '3', '', '', 'Eesti P'),
(92, 'Viini postmark', 'DVD', '', 2012, '', 'Eesti', '', '1', '', '', 'Eesti P'),
(93, 'Voka 585', '', '', 0, '', '', '', '1', '', '', ''),
(94, 'V', 'DVD', '', 2008, '', 'Eesti', '', '1', '7', '', ''),
(95, '', 'DVD', '', 2012, '', 'Eesti', '', '1', '', '', 'Eesti P'),
(96, '', 'DVD', '', 2009, '', 'Eesti', '', '1', '7', '', ''),
(97, 'test audio', 'dvd', 'test', 2020, '1', 'est', 'test', '1', '1', ' 11.11', '11.11'),
(98, 'Test', 'test', 'test', 2020, '1', 'est', 'test', '1', '1', ' 11.11', '11.11'),
(99, 'Test', 'test', 'test', 2020, 'test', 'est', 'test', '1', '1', '11.11', '11.11'),
(100, 'Test', '', 'test', 2020, '1', 'est', 'test', '1', '1', ' 11.11 18:17', '11.11'),
(101, 'Test', '', 'test', 1987, 'eesti', 'est', 'test', '1', '1', '11.11', '11.11'),
(102, '', '', '', 0, '', '', '', '', '', '', ''),
(103, '', '', '', 0, '', '', '', '', '', '', ''),
(104, '', '', '', 0, '', '', '', '', '', '', ''),
(105, '', '', '', 0, '', '', '', '', '', '', ''),
(106, '', '', '', 0, '', '', '', '', '', '', ''),
(107, '', '', '', 0, '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
