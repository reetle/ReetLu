-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Loomise aeg: Dets 06, 2020 kell 06:54 PL
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
-- Tabeli struktuur tabelile `publisher`
--

DROP TABLE IF EXISTS `publisher`;
CREATE TABLE IF NOT EXISTS `publisher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nimi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `aadress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `linn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `maakond` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `postiindeks` int(11) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `markused` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `publisher`
--

INSERT INTO `publisher` (`id`, `nimi`, `aadress`, `linn`, `maakond`, `postiindeks`, `telefon`, `markused`) VALUES
(1, 'Akadeemia Nord  ', '  ', '  ', '  ', 10114, ' 3726210998  ', '  '),
(2, 'AKTA A.K. OÜ  ', ' Silikaltsiidi 3  ', ' Tallinn  ', '  ', 11216, ' 6507559  ', ' faks 6507555  '),
(3, 'Allecto AS  ', ' Juhkentali 8  ', ' Tallinn  ', '  ', 10132, ' 3726277230  ', '  '),
(4, 'Apollo Holding OÜ  ', ' Põikmäe 2, Tänassilma küla, Saku  vald  ', ' Harjumaa  ', '  ', 76406, ' 6336000  ', ' info@apollo.ee  '),
(5, 'Apollo Raamatud AS  ', ' Peterburi tee 64a  ', ' Tallinn  ', '  ', 11415, ' 6833400  ', ' faks 6833401  info@apollo.ee  '),
(6, 'Argo  ', ' Pk. 2297  ', ' Tallinn  ', '  ', 13502, ' 6690549  ', ' faks 6690548  '),
(7, 'AS BIT, Avita  ', ' Pikk 68  ', ' Tallinn  ', '  ', 10133, '  ', '  '),
(8, 'AS Kirjastus Elmatar  ', ' Viljandi mnt 11  ', ' Tartu  ', '  ', 50412, ' 7409700  ', ' faks 07 409 703,kirjastus@elmatar.ee  '),
(9, 'Atlex OÜ  ', ' Kivi 23  ', ' Tartu  ', '  ', 51009, ' 7348915  ', '  '),
(10, 'Avita  ', '  ', '  ', '  ', 0, '  ', '  '),
(11, 'Cum Laude OÜ  ', ' Koidula 38  ', ' Tallinn  ', '  ', 10150, ' 37250 63 018  ', '  '),
(12, 'Dialoog AS  ', ' Turu 9  ', ' Tartu  ', '  ', 51004, ' 3727344990  ', '  '),
(13, 'Eesti Entsüklopeediakirja  ', ' Narva mnt 4  ', ' Tallinn  ', '  ', 10117, ' 6999640  ', '  '),
(14, 'Eesti Keele Sihtasutus  ', '  ', '  ', '  ', 0, '  ', '  '),
(15, 'Eesti Loodusfoto  ', ' Riia 185  ', ' Tartu  ', '  ', 51014, ' 7477405  ', ' faks 07 383041  '),
(16, 'Eesti Matemaatika Selts  ', ' Kivi 2-614  ', ' Tartu  ', '  ', 50409, '  ', '  '),
(17, 'Eesti Raamat  ', '  ', '  ', '  ', 0, '  ', '  '),
(18, 'Egmont  ', '  ', '  ', '  ', 0, '  ', '  '),
(19, 'Ellervo  ', '  ', '  ', '  ', 0, '  ', '  '),
(20, 'EOMAP Kaubanduse AS  ', ' Tondi 42  ', ' Tallinn  ', '  ', 11316, ' 3726811610  ', '  '),
(21, 'Ersen  ', '  ', '  ', '  ', 0, '  ', '  '),
(22, 'Estada Kirjastus OÜ  ', ' Mustamäe tee 86-31  ', ' Tallinn  ', '  ', 10111, '  ', '  '),
(23, 'FIE Anu Sööt  ', ' Koidula 2A-1  ', ' Viljandi  ', '  ', 71005, '  ', ' soot@kultuur.edu.ee  '),
(24, 'Hotger  ', '  ', '  ', '  ', 0, '  ', '  '),
(25, 'Huma  ', '  ', ' Tallinn  ', '  ', 0, '  ', '  '),
(26, 'Ilmamaa  ', ' Vanemuise 19  ', ' Tartu  ', '  ', 51014, ' 7427290  ', '  '),
(27, 'Ilo  ', '  ', '  ', '  ', 0, '  ', '  '),
(28, 'J.Sarapuu  ', ' Lennuki 3-27  ', ' Viljandi  ', '  ', 71011, ' 5148709  ', '  '),
(29, 'Karrup  ', '  ', '  ', '  ', 0, '  ', '  '),
(30, 'Kirilille Kirjastus  ', '  ', '  ', '  ', 0, '  ', '  '),
(31, 'Koge  ', '  ', '  ', '  ', 0, '  ', '  '),
(32, 'Koolibri AS  ', ' Pärnu mnt. 10  ', ' Tallinn  ', '  ', 10503, ' 6509712  ', '  '),
(33, 'Kunst  ', '  ', '  ', '  ', 0, '  ', '  '),
(34, 'Kuutõrvaja OÜ  ', ' Harju 1  ', ' Tallinn  ', '  ', 10146, ' 6 83 77 10  ', ' tellimus@raamatukoi.ee   '),
(35, 'Külim  ', '  ', '  ', '  ', 0, '  ', '  '),
(36, 'Künnimees  ', ' Sinimäe tee 10-21  ', ' Tallinn  ', '  ', 0, ' (0) 6098 345  ', '  '),
(37, 'Langenscheidt  ', '  ', ' München  ', '  ', 0, ' 3 60 96-333  ', '  '),
(38, 'Maalehe Raamat  ', '  ', '  ', '  ', 0, '  ', '  '),
(39, 'Margus Konnula  ', '  ', '  ', '  ', 0, '  ', '  '),
(40, 'Mathema  ', ' Oksa 10-7  ', ' Tallinn  ', '  ', 11316, ' (2) 6 552 749  ', ' tel.õhtuti 56 699 247  '),
(41, 'Matle OÜ  ', ' Keskuse 14-64  ', ' Tallinn  ', '  ', 12911, ' 5535056  ', ' matle.hilli@gmail.com  '),
(42, 'Maurus Kirjastus OÜ  ', ' Lõõtsa 8  ', '  ', '  ', 0, ' 59196117  ', ' opik@fyysika.ee  '),
(43, 'Minu Sõbrad MTÜ  ', ' Lille 18-17  ', '  ', '  ', 0, '  ', '  '),
(44, 'Monokkel  ', '  ', '  ', '  ', 0, '  ', '  '),
(45, 'Muti Raamat  ', '  ', '  ', '  ', 0, '  ', '  '),
(46, 'Müügimeistrite AS  ', ' Mustamäe tee 5 C  ', ' Tallinn  ', '  ', 10616, ' 6108532  ', '  '),
(47, 'Odamees  ', ' PK 1130  ', ' Tallinn  ', '  ', 11302, '  ', '  '),
(48, 'Olion  ', '  ', '  ', '  ', 0, '  ', '  '),
(49, 'Olympia  ', '  ', '  ', '  ', 0, '  ', '  '),
(50, 'OÜ Geotrail KS  ', ' Kuldnoka 16-29  ', ' Tallinn  ', '  ', 10609, ' 3726852859  ', '  '),
(51, 'OÜ Saar Graafika  ', ' Kuusiku tee 5-53, Loo  ', ' Harjumaa  ', '  ', 74201, ' 60 80 081  ', '  '),
(52, 'Pegasus  ', '  ', '  ', '  ', 0, '  ', '  '),
(53, 'Prisma Prindi Kirjastus  ', '  ', '  ', '  ', 0, '  ', '  '),
(54, 'Rahva Raamat AS  ', ' Viru väljak 4/6  ', ' Tallinn  ', '  ', 10111, ' 6081800  ', ' faks 6081801  '),
(55, 'Regio  ', ' Kastani 16  ', ' Tartu  ', '  ', 50410, ' (07) 387 300  ', ' faks (07) 387 301  '),
(56, 'Saara kirjastus  ', '  ', '  ', '  ', 0, '  ', '  '),
(57, 'Sild  ', '  ', ' Tallinn  ', '  ', 0, '  ', '  '),
(58, 'Sinisukk  ', '  ', '  ', '  ', 0, '  ', '  '),
(59, 'SP Muusikaprojekt OÜ  ', ' Pärnu mnt.146  ', ' Tallinn  ', '  ', 11317, ' 6418315  ', ' faks 6418 315   '),
(60, 'Steamark  ', ' Mäekalda 11  ', ' Tallinn  ', '  ', 10127, ' 6013076  ', '  '),
(61, 'Studium  ', ' Riia 15b  ', ' Tartu  ', '  ', 51010, ' 7420440  ', '  '),
(62, 'TEA  ', ' Liivalaia 28  ', ' Tallinn  ', '  ', 10118, ' 6449253  ', ' faks 645 9208  '),
(63, 'Ten-Team OÜ  ', ' Merivälja tee 5- E206  ', ' Tallinn  ', '  ', 11911, ' 6300900  ', '  '),
(64, 'Tervisekirjastus OÜ  ', ' Pärnu mnt.21  ', ' Tallinn  ', '  ', 10141, ' 6266477  ', ' faks 6266471  '),
(65, 'Tiritamm  ', '  ', '  ', '  ', 0, '  ', '  '),
(66, 'Tormikiri  ', '  ', '  ', '  ', 0, '  ', '  '),
(67, 'Tuum  ', ' Harju 1  ', ' Tallinn  ', '  ', 10146, '  ', '  '),
(68, 'TÜ Kirjastus  ', '  ', '  ', '  ', 0, '  ', '  '),
(69, 'Tänapäev  ', '  ', '  ', '  ', 0, '  ', '  '),
(70, 'Valgus  ', '  ', '  ', '  ', 0, '  ', '  '),
(71, 'Varrak  ', '  ', '  ', '  ', 0, '  ', '  '),
(72, 'Vastus  ', '  ', '  ', '  ', 0, '  ', '  '),
(73, 'Virgela  ', '  ', '  ', '  ', 0, '  ', '  '),
(74, 'Väike Vanker  ', '  ', '  ', '  ', 0, '  ', '  ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
