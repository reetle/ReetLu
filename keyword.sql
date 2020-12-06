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
-- Tabeli struktuur tabelile `keyword`
--

DROP TABLE IF EXISTS `keyword`;
CREATE TABLE IF NOT EXISTS `keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nimi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `keyword`
--

INSERT INTO `keyword` (`id`, `nimi`) VALUES
(1, 'Aforismid '),
(2, 'Aimekirjandus '),
(3, 'Ajalugu '),
(4, 'Ameerika '),
(5, 'Antoloogiad '),
(6, 'Artiklikogumikud '),
(7, 'Astronoomia '),
(8, 'Austria '),
(9, 'Baltimaad '),
(10, 'Dünastiad '),
(11, 'Eesti '),
(12, 'Ehituskunst '),
(13, 'Elukutsed '),
(14, 'Elulaad '),
(15, 'Elulood '),
(16, 'Entsüklopeediad '),
(17, 'Esseekogumikud '),
(18, 'Etnograafia '),
(19, 'Filosoofia '),
(20, 'Füüsika '),
(21, 'Geograafia '),
(22, 'Haridus '),
(23, 'Haritlaskond '),
(24, 'Heliloojad '),
(25, 'Huumor '),
(26, 'Idamaad '),
(27, 'Identiteet '),
(28, 'Iluaiandus '),
(29, 'Ilukirjandus '),
(30, 'India '),
(31, 'Inglise '),
(32, 'Inimene '),
(33, 'Iseseisvus '),
(34, 'Keeled '),
(35, 'Keemia '),
(36, 'Kehakeel '),
(37, 'Keskaeg '),
(38, 'Kirjanduskriitika '),
(39, 'Kirjanikud '),
(40, 'Komöödiad '),
(41, 'Kool '),
(42, 'Kronoloogiad '),
(43, 'Kunst '),
(44, 'Kunstiajalugu '),
(45, 'Käsiraamatud '),
(46, 'Käsitöö '),
(47, 'Lapsed '),
(48, 'Lastekirjandus '),
(49, 'Legendid '),
(50, 'Leksikonid '),
(51, 'Linnad '),
(52, 'Loodus '),
(53, 'Loomad '),
(54, 'Lugemikud '),
(55, 'Luuletused '),
(56, 'Majandus '),
(57, 'Matemaatika '),
(58, 'Memuaarid '),
(59, 'Muinasjutud '),
(60, 'Muusikaajalugu '),
(61, 'Mütoloogia '),
(62, 'Müüdid '),
(63, 'Naised '),
(64, 'Noorsookirjandus '),
(65, 'Norra '),
(66, 'Novellid '),
(67, 'Näidendid '),
(68, 'Olümpiamängud '),
(69, 'Õpikud '),
(70, 'Poisid '),
(71, 'Poliitika '),
(72, 'Poliitikud '),
(73, 'Põnevusromaanid '),
(74, 'Poola '),
(75, 'Prantsuse '),
(76, 'Psühholoogia '),
(77, 'Rahvakalender '),
(78, 'Rahvakultuur '),
(79, 'Romaanid '),
(80, 'Rootsi '),
(81, 'Saksa '),
(82, 'Sõnaraamatud '),
(83, 'Sport '),
(84, 'Sümbolid '),
(85, 'Taani '),
(86, 'Taimed '),
(87, 'Tarbekunst '),
(88, 'Tavad ja kombed '),
(89, 'Teater '),
(90, 'Teatmikud '),
(91, 'Tehnika '),
(92, 'Tervis '),
(93, 'Tüdrukud '),
(94, 'Uimastid '),
(95, 'Universum '),
(96, 'Vana-Kreeka '),
(97, 'Vanaaeg '),
(98, 'Väliseesti '),
(99, 'Värvid ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
