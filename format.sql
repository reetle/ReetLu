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
-- Tabeli struktuur tabelile `format`
--

DROP TABLE IF EXISTS `format`;
CREATE TABLE IF NOT EXISTS `format` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nimi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `markused` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `format`
--

INSERT INTO `format` (`id`, `nimi`, `markused`) VALUES
(1, ' 0  ', ' Üldteosed  '),
(2, ' 4  ', ' Arvutiteadus. Informaatika  '),
(3, ' 30  ', ' Üldteatmeteosed  '),
(4, ' 1  ', ' Filosoofia  '),
(5, ' 159.9  ', ' Psühholoogia  '),
(6, ' 2  ', ' Religioon. Teoloogia  '),
(7, ' 3  ', ' Sotsiaalteadused. Majandus. Õigus.   '),
(8, ' 32  ', ' Poliitika  '),
(9, ' 355  ', ' Sõjateadus. Sõjandus  '),
(10, ' 37  ', ' Haridus. Kasvatus. Vaba aeg  '),
(11, ' 39  ', ' Etnograafia. Kombed. Tavad. Elulaad  '),
(12, ' 5  ', ' Loodusteadused. Matemaatika  '),
(13, ' 51  ', ' Matemaatika  '),
(14, ' 52/54  ', ' Astronoomia. Füüsika. Keemia  '),
(15, ' 57/59  ', ' Bioloogia. Botaanika. Zooloogia  '),
(16, ' 6  ', ' Rakendusteadused. Arstiteadus. Tehnika  '),
(17, ' 61  ', ' Meditsiin  '),
(18, ' 62  ', ' Tehnika  '),
(19, ' 63  ', ' Põllumajandus  '),
(20, ' 64  ', ' Kodumajandus. Kodundus. Majapidamine  '),
(21, ' 65  ', ' Juhtimine. Ettevõtlus  '),
(22, ' 7  ', ' Kunst. Meelelahutus. Sport  '),
(23, ' 74  ', ' Tarbekunst  '),
(24, ' 78  ', ' Muusika  '),
(25, ' 79  ', ' Meelelahutused. Mängud  '),
(26, ' 796  ', ' Sport. Kehakultuur  '),
(27, ' 81  ', ' Keeleteadus ja keeled  '),
(28, ' 811.511.113  ', ' Eesti keel  '),
(29, ' 82  ', ' Kirjandus. Ilukirjandus  '),
(30, ' 821.111  ', ' Inglise kirjandus  '),
(31, ' 821.111(73)  ', ' Ameerika kirjandus  '),
(32, ' 821.112.2  ', ' Austria, saksa kirjandus  '),
(33, ' 821.112.5  ', ' Hollandi kirjandus  '),
(34, ' 821.113.4  ', ' Taani kirjandus  '),
(35, ' 821.113.5  ', ' Norra kirjandus  '),
(36, ' 821.113.6  ', ' Rootsi kirjandus  '),
(37, ' 821.131.1  ', ' Itaalia kirjandus  '),
(38, ' 821.133.1  ', ' Prantsuse kirjandus  '),
(39, ' 821.134.3  ', ' Brasiilia kirjandus  '),
(40, ' 821.161.1  ', ' Vene kirjandus  '),
(41, ' 821.162.1  ', ' Poola kirjandus  '),
(42, ' 821.162.3  ', ' Tsehhi kirjandus  '),
(43, ' 821.511.111  ', ' Soome kirjandus  '),
(44, ' 821.511.113  ', ' Eesti kirjandus  '),
(45, ' 9  ', ' Geograafia. Biograafiad. Ajalugu  '),
(46, ' 91  ', ' Geograafia. Reisimine  '),
(47, ' 94  ', ' Üldajalugu  '),
(48, ' 94(474.2)  ', ' Eesti ajalugu  '),
(49, 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
