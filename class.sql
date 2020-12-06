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
-- Tabeli struktuur tabelile `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `klass` int(11) NOT NULL,
  `taht` varchar(10) NOT NULL,
  `klassijuhataja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `klassiruum` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `markused` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `class`
--

INSERT INTO `class` (`id`, `klass`, `taht`, `klassijuhataja`, `klassiruum`, `markused`) VALUES
(31, 0, 'a', 'Reet L', '1', '23.11'),
(2, 1, '', 'Kristi Goldberg', '', ''),
(3, 2, '', 'Mare Karjuhin', '', ''),
(4, 3, 'a', 'Anneli Koppel', '', ''),
(5, 3, 'b', 'Kaja Oja', '', ''),
(6, 4, '', 'Anu Pungas, Kaja Vahter', '', ''),
(7, 5, '', 'Gerli Paumets', '', ''),
(8, 6, '', 'Pille J', '', ''),
(9, 7, '', 'Stella M', '', ''),
(10, 8, 'a', 'Maire Aul', '', ''),
(11, 8, 'b', 'Marge R', '', ''),
(12, 9, 'a', 'Katrin Kivimeister', '', ''),
(13, 9, 'b', 'Katrin Kivimeister', '', ''),
(14, 10, '', 'Inna Toovis', '', ''),
(15, 11, '', 'Anne Aia', '', ''),
(16, 12, '', 'Tiina Peedor', '', ''),
(29, 10, '', '', '', ''),
(32, 1, 'a', '', '', '23.11'),
(28, 110, '', '', '', '09.11 22.11'),
(33, 1, '', '', '', '23.11'),
(34, 0, '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
