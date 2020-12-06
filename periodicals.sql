-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Loomise aeg: Nov 11, 2020 kell 07:42 PL
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
-- Tabeli struktuur tabelile `periodicals`
--

DROP TABLE IF EXISTS `periodicals`;
CREATE TABLE IF NOT EXISTS `periodicals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pealkiri` varchar(225) NOT NULL,
  `aasta` int(11) NOT NULL,
  `liik` varchar(50) NOT NULL,
  `keel` varchar(50) NOT NULL,
  `valjaandja` varchar(50) NOT NULL,
  `nr` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `riiul` varchar(50) NOT NULL,
  `marksona` varchar(250) NOT NULL,
  `markused` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `periodicals`
--

INSERT INTO `periodicals` (`id`, `pealkiri`, `aasta`, `liik`, `keel`, `valjaandja`, `nr`, `riiul`, `marksona`, `markused`) VALUES
(1, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '1', '', 'jaanuar', ''),
(2, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '2', '', 'veebruar', ''),
(3, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '3', '', 'märts', ''),
(4, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '4', '', 'aprill', ''),
(5, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '5', '', 'mai', ''),
(6, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '6', '', 'juuni', ''),
(7, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '7', '', 'juuli', ''),
(8, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '8', '', 'august', ''),
(9, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '9', '', 'september', ''),
(10, 'Kodukiri', 2020, '', 'eesti', 'ajakirjade kirjastus', '10', '', 'oktoober', ''),
(11, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '1', '', 'jaanuar', ''),
(12, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '2', '', 'veebruar', ''),
(13, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '3', '', 'märts', ''),
(14, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '4', '', 'aprill', ''),
(15, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '5', '', 'mai', ''),
(16, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '6', '', 'juuni', ''),
(17, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '7', '', 'juuli', ''),
(18, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '8', '', 'august', ''),
(19, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '9', '', 'september', ''),
(20, 'Kalamees', 2020, '', 'eesti', 'Kala kirjastus', '10', '', 'oktoober', ''),
(21, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '1', '', 'jaanuar', ''),
(22, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '2', '', 'veebruar', ''),
(23, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '3', '', 'märts', ''),
(24, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '4', '', 'aprill', ''),
(25, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '5', '', 'mai', ''),
(26, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '6', '', 'juuni', ''),
(27, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '7', '', 'juuli', ''),
(28, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '8', '', 'august', ''),
(29, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '9', '', 'september', ''),
(30, 'Auto', 2020, '', 'eesti', 'auto kirjastus', '10', '', 'oktoober', ''),
(31, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '1', '', 'jaanuar', ''),
(32, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '2', '', 'veebruar', ''),
(33, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '3', '', 'märts', ''),
(34, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '4', '', 'aprill', ''),
(35, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '5', '', 'mai', ''),
(36, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '6', '', 'juuni', ''),
(37, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '7', '', 'juuli', ''),
(38, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '8', '', 'august', ''),
(39, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '9', '', 'september', ''),
(40, 'Ehitaja', 2020, '', 'eesti', 'Ehitaja kirjastus', '10', '', 'oktoober', ''),
(41, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '1', '', 'jaanuar', ''),
(42, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '2', '', 'veebruar', ''),
(43, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '3', '', 'märts', ''),
(44, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '4', '', 'aprill', ''),
(45, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '5', '', 'mai', ''),
(46, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '6', '', 'juuni', ''),
(47, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '7', '', 'juuli', ''),
(48, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '8', '', 'august', ''),
(49, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '9', '', 'september', ''),
(50, 'Mood', 2020, '', 'eesti', 'Mood kirjastus', '10', '', 'oktoober', ''),
(51, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '1', '', 'jaanuar', ''),
(52, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '2', '', 'veebruar', ''),
(53, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '3', '', 'märts', ''),
(54, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '4', '', 'aprill', ''),
(55, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '5', '', 'mai', ''),
(56, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '6', '', 'juuni', ''),
(57, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '7', '', 'juuli', ''),
(58, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '8', '', 'august', ''),
(59, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '9', '', 'september', ''),
(60, 'Ilu', 2020, '', 'eesti', 'Ilu kirjastus', '10', '', 'oktoober', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
