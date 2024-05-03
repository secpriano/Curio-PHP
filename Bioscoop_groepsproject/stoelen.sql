-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mrt 2020 om 11:29
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioscoop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stoelen`
--

CREATE TABLE `stoelen` (
  `id` int(11) NOT NULL,
  `stoel` varchar(255) NOT NULL,
  `checked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `stoelen`
--

INSERT INTO `stoelen` (`id`, `stoel`, `checked`) VALUES
(7, '01', 'checked'),
(8, '02', 'checked'),
(9, '03', ''),
(10, '04', ''),
(11, '05', ''),
(12, '06', ''),
(13, '07', ''),
(14, '08', ''),
(15, '09', ''),
(16, '10', ''),
(17, '11', ''),
(18, '12', ''),
(19, '13', ''),
(20, '14', ''),
(21, '15', ''),
(22, '16', ''),
(23, '17', ''),
(24, '18', ''),
(25, '19', ''),
(26, '20', ''),
(27, '21', ''),
(28, '22', ''),
(29, '23', ''),
(30, '24', ''),
(31, '25', ''),
(32, '26', ''),
(33, '27', ''),
(34, '28', ''),
(35, '29', ''),
(36, '30', ''),
(37, '31', ''),
(38, '32', ''),
(39, '33', ''),
(40, '34', ''),
(41, '35', ''),
(42, '36', ''),
(43, '37', ''),
(44, '38', ''),
(45, '39', ''),
(46, '40', ''),
(47, '41', ''),
(48, '42', ''),
(49, '43', ''),
(50, '44', ''),
(51, '45', ''),
(52, '46', ''),
(53, '47', ''),
(54, '48', ''),
(55, '49', ''),
(56, '50', ''),
(57, '51', ''),
(58, '52', ''),
(59, '53', ''),
(60, '54', ''),
(61, '55', ''),
(62, '56', ''),
(63, '57', ''),
(64, '58', ''),
(65, '59', ''),
(66, '60', ''),
(67, '61', ''),
(68, '62', ''),
(69, '63', ''),
(70, '64', ''),
(71, '65', ''),
(72, '66', '\r\n');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `stoelen`
--
ALTER TABLE `stoelen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `stoelen`
--
ALTER TABLE `stoelen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
