-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Loomise aeg: Dets 06, 2020 kell 06:53 PL
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
-- Tabeli struktuur tabelile `borrow_book`
--

DROP TABLE IF EXISTS `borrow_book`;
CREATE TABLE IF NOT EXISTS `borrow_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugeja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `meedia_id` int(11) NOT NULL,
  `meedia_liik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pealkiri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `autor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kogus` int(11) NOT NULL,
  `algus_kp` date NOT NULL,
  `tagastus_kp` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `borrow_book`
--

INSERT INTO `borrow_book` (`id`, `lugeja`, `meedia_id`, `meedia_liik`, `pealkiri`, `autor`, `kogus`, `algus_kp`, `tagastus_kp`) VALUES
(18, 'Terst', 4, 'OP', 'Test', 'Tungal L; Hiiepuu E; Valter E', 1, '2020-12-06', '2021-01-10'),
(17, '', 61, 'RA', '', ' Juurvee I', 1, '2020-12-06', '2020-12-06'),
(19, 'Reet Leidtorp', 5, 'MK', 'Aabitsa metoodiline juhend', '	Hiiepuu E', 1, '2020-12-06', '2020-12-06'),
(20, 'Reet Leidtorp', 27, 'PE', 'Auto', '', 1, '2020-12-06', '2020-12-06'),
(21, 'Reet Leidtorp', 28, 'PE', 'Auto', '', 1, '2020-12-06', '2020-12-06'),
(22, 'Reet Leidtorp', 51, 'PE', 'Ilu', '', 1, '2020-12-06', '0000-00-00'),
(23, 'Terst', 27, 'PE', 'Auto', '', 0, '2020-12-06', '2020-12-06'),
(24, 'Reet Leidtorp', 27, 'PE', 'Auto', '', 1, '2020-12-06', NULL),
(25, 'Reet Leidtorp', 4, 'AV', 'Arabella, merer', '', 1, '2020-12-06', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
