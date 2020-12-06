-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Loomise aeg: Dets 06, 2020 kell 06:55 PL
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
-- Tabeli struktuur tabelile `write_off`
--

DROP TABLE IF EXISTS `write_off`;
CREATE TABLE IF NOT EXISTS `write_off` (
  `akt_nr` int(11) NOT NULL,
  `kuupaev` date NOT NULL,
  `meedia_liik` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `meedia_id` int(11) NOT NULL,
  `pealkiri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `autor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pohjus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `write_off`
--

INSERT INTO `write_off` (`akt_nr`, `kuupaev`, `meedia_liik`, `meedia_id`, `pealkiri`, `autor`, `pohjus`) VALUES
(0, '2020-11-28', 'tv', 5699, '', '', 'vana'),
(0, '2020-11-28', 'ra', 5697, '', '', 'vale sisestus'),
(0, '2020-11-28', 'ra', 21, ' 20. sajandi maailma ajaloo leksikon', ' ', 'vana'),
(25, '2020-11-28', 'ra', 5698, '', '', 'vale sisestus'),
(26, '2020-11-28', 'RA', 22, ' 20. sajandi näidendeid II', ' Tennessee W', 'test'),
(27, '2020-11-28', 'RA', 23, ' 51 käsitööeset munakarpidest', ' Hayes F', 'test 1'),
(29, '2020-11-26', 'RA', 5694, 'Test', 'Karu G', 'test'),
(30, '2020-11-29', 'RA', 24, ' 51 käsitööeset tualettpaberi rullidest', ' Hayes F', 'test'),
(1, '2020-11-29', 'op', 1, 'test', 'test', 'aegunud'),
(1, '2020-11-29', 'op', 1, 'test', 'test', 'aegunud'),
(2, '2020-11-29', 'op', 1, 'Kimi', 'Kimi Raikonen', 'aegunud'),
(3, '2020-11-29', 'op', 1, 'Ajalugu', 'Mart Laar', 'rikutud'),
(3, '2020-11-29', 'op', 1, 'Ajalugu', 'Mart Laar', 'rikutud'),
(4, '2020-11-29', 'tv', 1, 'Ajalugu', 'Mart Laar', 'rikutud'),
(30, '2020-11-29', 'RA', 55, ' \"Tere, kollane kass!\"', ' Unt M', 'vana'),
(1, '2020-11-29', 'RA', 56, ' ', ' Härtling P', 'test'),
(30, '2020-11-29', 'RA', 58, ' ', ' ', 'pole pealkirja'),
(1, '2020-11-30', 'OP', 2, '20.sajandi I poole Eesti kirjandus', 'Annus E; Epner L', 'test'),
(1, '2020-11-30', 'RA', 60, ' 10 kooki', ' Hainsalu L', 'test'),
(1, '2020-11-30', 'PE', 24, 'Auto', '', 'test'),
(1, '2020-11-30', 'AV', 3, 'Araabia Lawrence', '', 'test'),
(1, '2020-11-30', 'TV', 3, 'Aabitsa TV', 'Kloren A; Hiiepuu E', 'test'),
(100, '2020-11-30', 'MK', 4, 'Aabitsa lisalugemistekstid', '	', 'test'),
(0, '2020-12-02', 'TV', 483, '', '', ''),
(0, '2020-12-02', 'TV', 484, '', '', ''),
(0, '2020-12-02', 'TV', 481, '', '', ''),
(0, '0000-00-00', 'TV', 482, '', '', ''),
(0, '0000-00-00', 'TV', 480, 'aaaaa', '', ''),
(29, '2020-12-06', 'PE', 25, 'Auto', '', 'vana'),
(30, '2020-12-06', 'PE', 26, 'Auto', '', 'testtest06.12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
