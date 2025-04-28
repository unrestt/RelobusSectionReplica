-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 11:29 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relobus_database`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(11) NOT NULL,
  `produkt` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `liczba_biletow` int(11) NOT NULL,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `produkt`, `data`, `liczba_biletow`, `cena`) VALUES
(1, 'Karnet miesięczny', '0000-00-00', 0, 0.00),
(2, 'Karnet miesięczny', '0000-00-00', 0, 0.00),
(3, 'Karnet miesięczny', '0000-00-00', 0, 0.00),
(4, 'Karnet miesięczny', '0000-00-00', 0, 0.00),
(5, 'Karnet miesięczny', '0000-00-00', 2, 300.00),
(6, 'Karnet miesięczny', '2025-04-16', 2, 300.00),
(7, 'Karnet miesięczny', '2025-04-24', 20, 3000.00),
(8, 'Karnet miesięczny', '2025-04-16', 5, 750.00),
(9, 'Karnet miesięczny', '2025-04-16', 5, 750.00),
(10, 'Karnet miesięczny', '2025-11-06', 4, 600.00);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
