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
-- Tabeli struktuur tabelile `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`) VALUES
(5, 'Reet', '7951f2aea6c271e6944b3263adef2029', 'test@mail.ee'),
(8, 'Tere', '7951f2aea6c271e6944b3263adef2029', 'tere@mail.ee'),
(9, 'uus', '5f4dcc3b5aa765d61d8327deb882cf99', 'uus@mail.ee'),
(10, 'viis', '7951f2aea6c271e6944b3263adef2029', 'viis@mail.ee'),
(11, 'Katse', '7951f2aea6c271e6944b3263adef2029', 'katse@mail.ee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
