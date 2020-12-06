-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Loomise aeg: Dets 06, 2020 kell 06:56 PL
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
-- Tabeli struktuur tabelile `readers`
--

DROP TABLE IF EXISTS `readers`;
CREATE TABLE IF NOT EXISTS `readers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `klass` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `perekonnanimi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `eesnimi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `aadress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `linn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `maakond` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `postiindeks` int(11) NOT NULL,
  `telefon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `markused` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Andmete tõmmistamine tabelile `readers`
--

INSERT INTO `readers` (`id`, `klass`, `perekonnanimi`, `eesnimi`, `aadress`, `linn`, `maakond`, `postiindeks`, `telefon`, `markused`) VALUES
(11, ' ', 'Hallik', 'Siret', '', '', '', 0, '', ''),
(12, ' ', 'Hein', 'Helgi', '', '', '', 0, '', ''),
(13, ' ', 'Heinla', 'Kaupo', '', '', '', 0, '', ''),
(14, ' ', 'Ilmj', 'Signe', '', '', '', 0, '', ''),
(15, ' ', 'J', 'Pille', '', '', '', 0, '', ''),
(16, ' ', 'Karjuhin', 'Mare', '', '', '', 0, '', ''),
(17, ' ', 'Kattai', 'Urmo', '', '', '', 0, '', ''),
(18, ' ', 'Kiik', 'Reet', '', '', '', 0, '', ''),
(19, ' ', 'Kivimeister', 'Katrin', '', '', '', 0, '', ''),
(20, ' ', 'Koppel', 'Anneli', '', '', '', 0, '', ''),
(21, ' ', 'Kreegimets', 'Laine', '', '', '', 0, '', ''),
(22, ' ', 'Kr', 'Jelena', '', '', '', 0, '', ''),
(23, ' ', 'Kudrja', 'Tatjana', '', '', '', 0, '', ''),
(24, ' ', 'Kukkur', 'Evi', '', '', '', 0, '', ''),
(25, ' ', 'Kuleva', 'Maria', '', '', '', 0, '', ''),
(26, ' ', 'Lepik', 'Lii', '', '', '', 0, '', ''),
(27, ' ', 'Lepsalu', 'Merike', '', '', '', 0, '', ''),
(28, ' 5', 'Lind', 'Maria', 'Tamme pst 12', 'Tartu', 'Tartumaa', 51402, '5147084', ''),
(29, ' ', 'Luus', 'Viive', '', '', '', 0, '', ''),
(30, ' ', 'Maljonkina', 'Irina', '', '', '', 0, '', ''),
(31, ' ', 'Mark', 'Malle', '', '', '', 0, '', ''),
(32, ' ', 'Marks', 'Maie', '', '', '', 0, '', ''),
(33, ' ', 'Must', 'Kristi', '', '', '', 0, '', ''),
(34, ' ', 'Muug', 'Riina', '', '', '', 0, '', ''),
(35, ' ', 'M', 'Stella', '', '', '', 0, '', ''),
(36, ' ', 'M', 'Kadri-Ann', '', '', '', 0, '', ''),
(37, ' ', 'Neidla', 'Urmas', '', '', '', 0, '', ''),
(38, ' ', 'Niisuke', 'Karis', '', '', '', 0, '', ''),
(39, ' ', 'Ohak', 'Helena', '', '', '', 0, '', ''),
(40, ' ', 'Oja', 'Kaja', '', '', '', 0, '', ''),
(41, ' ', 'Paumets', 'Gerli', '', '', '', 0, '', ''),
(42, ' ', 'Paumets', 'Iivi', '', '', '', 0, '', ''),
(43, ' ', 'Peedor', 'Tiina', '', '', '', 0, '', ''),
(44, ' ', 'Pentel', 'Katrin', '', '', '', 0, '', ''),
(45, ' ', 'Pungas', 'Anu', '', '', '', 0, '', ''),
(46, ' ', 'Raja', 'Maarika', '', '', '', 0, '', ''),
(47, ' ', 'R', 'Marge', '', '', '', 0, '', ''),
(48, ' ', 'Toovis', 'Inna', '', '', '', 0, '', ''),
(49, ' ', 'Trankmann ', 'Aimi', '', '', '', 0, '', 'muudatus 07.11'),
(50, ' ', 'Tuur ', 'Triin', '', '', '', 0, '', ''),
(51, ' ', 'Vahter', 'Kaja', '', '', '', 0, '', ''),
(52, ' ', 'Veesaar', 'Saima', '', '', '', 0, '', ''),
(53, ' ', 'Veisner', 'Diana', '', '', '', 0, '', ''),
(54, ' ', 'Vi', 'Oksana', '', '', '', 0, '', ''),
(55, '1', 'Goldberg', 'Gregor', '', '', '', 0, '', ''),
(56, '1', 'Kirmel ', 'Lisandra', '', '', '', 0, '', ''),
(57, '1', 'K', 'Marelle', '', '', '', 0, '', ''),
(58, '1', 'K', 'Nora-Liisa', '', '', '', 0, '', ''),
(59, '1', 'Larechkin', 'Mikhail', '', '', '', 0, '', ''),
(60, '1', 'Luha', 'Kaur', '', '', '', 0, '', ''),
(61, '1', 'Nassar', 'Lee', '', '', '', 0, '', ''),
(62, '2', 'Adamson', 'Rednar', '', '', '', 0, '', ''),
(63, '2', 'Egor', 'Gregori', '', '', '', 0, '', ''),
(64, '2', 'Eilart', 'Luisa-Maria', '', '', '', 0, '', ''),
(65, '2', 'Klaasm', 'Greta', '', '', '', 0, '', ''),
(66, '2', 'K', 'Paul', '', '', '', 0, '', ''),
(67, '2', 'Krilovs', 'Aaron', '', '', '', 0, '', '06.11 test'),
(68, '2', 'Kuslap', 'Joanna', '', '', '', 0, '', ''),
(69, '2', 'Leemets', 'Marcos', '', '', '', 0, '', ''),
(70, '2', 'Lepalind', 'Roco', '', '', '', 0, '', ''),
(71, '2', 'Mee', 'Karl', '', '', '', 0, '', ''),
(72, '2', 'Nemiro', 'Martin', '', '', '', 0, '', ''),
(73, '2', 'Ohak', 'Birk', '', '', '', 0, '', ''),
(74, '2', 'Oskar', 'Christofer', '', '', '', 0, '', ''),
(75, '2', 'Otto', 'Miia-Marta', '', '', '', 0, '', ''),
(76, '2', 'P', 'K', '', '', '', 0, '', ''),
(78, '2', 'Ronk', 'Albert', '', '', '', 0, '', ''),
(79, '2', 'Tepper', 'Hiie', '', '', '', 0, '', ''),
(80, '2', 'Tepper', 'H', '', '', '', 0, '', ''),
(122, '', '', '', '', '', '', 0, '', ''),
(82, '2', 'Vildak', 'Sander-Daniel', '', '', '', 0, '', ''),
(83, '2', 'Vuks', 'Ervin', '', '', '', 0, '', ''),
(84, '3a', 'Aps', 'Rasmus', '', '', '', 0, '', ''),
(85, '3a', 'Kaiva', 'J', '', '', '', 0, '', ''),
(86, '3a', 'Koppel', 'Johanna', '', '', '', 0, '', ''),
(87, '3a', 'Krutto', 'Tiit', '', '', '', 0, '', ''),
(88, '3a', 'Kruup', 'Mattias', '', '', '', 0, '', ''),
(89, '3a', 'Lehtla', 'Hendrik Markus', '', '', '', 0, '', ''),
(90, '3a', 'Nassar', 'Anni', '', '', '', 0, '', ''),
(91, '3a', 'Nassar', 'Liisi', '', '', '', 0, '', ''),
(92, '3a', 'Prohhorenko', 'Amelia', '', '', '', 0, '', ''),
(93, '3a', 'Rassak', 'Karl Joosep', '', '', '', 0, '', ''),
(94, '3a', 'Truup', 'Siim-Sedrik', '', '', '', 0, '', ''),
(95, '3a', 'Vaher', 'Marta', '', '', '', 0, '', ''),
(96, '3 b', 'Evard', 'Oliver', '', '', '', 0, '', ''),
(97, ' ', 'Toovis', 'Inna', '', '', '', 0, '', ''),
(98, ' ', 'Trankmann ', 'Aimi', '', '', '', 0, '', ''),
(103, 'edtr73', 'Leidtorp', 'Reet', '', 'Tartu', 'Tartumaa', 51402, '5147084', '06.11 test'),
(106, '1', 'Test1', 'Test1', '', '', '', 0, '', '09.11 1'),
(123, '1', 'Leidtorp', 'Maria', '', 'Tartu', 'Tartumaa', 51402, '5147084', '22.11'),
(124, '1', 'Leidtorp', 'Reet', '', 'Tartu', 'Tartumaa', 51402, '5147084', '22.11'),
(113, ' 5', 'Leidtorp', 'Maria', '', '', '', 0, '', '09.11'),
(114, ' 5', 'Leidtorp', 'Maria', '', '', '', 0, '', '09.11'),
(115, 'edtr73', 'Leidtorp', 'Reet', '', '', '', 0, '', '09.11'),
(116, 'edtr73', 'Leidtorp', 'Reet', '', '', '', 0, '', '09.11'),
(117, 'edtr73', 'Leidtorp', 'Reet', '', '', '', 0, '', '09.11'),
(118, 'edtr73', 'Leidtorp', 'Reet', '', '', '', 0, '', '09.11'),
(119, 'edtr73', 'Leidtorp', 'Reet', '', '', '', 0, '', '09.11'),
(121, '1', 'test', 'test', '', '', '', 0, '', '14:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
