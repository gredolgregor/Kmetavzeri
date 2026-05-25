-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: podatkovna-baza
-- Generation Time: May 25, 2026 at 04:22 PM
-- Server version: 9.6.0
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ramsak`
--

-- --------------------------------------------------------

--
-- Table structure for table `gost`
--

CREATE TABLE `gost` (
  `id_gost` int NOT NULL,
  `ime` varchar(50) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `priimek` varchar(50) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `ustvarjen` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Dumping data for table `gost`
--

INSERT INTO `gost` (`id_gost`, `ime`, `priimek`, `email`, `telefon`, `ustvarjen`) VALUES
(1, 'Ana', 'Novak', 'ana.novak@email.si', '041111222', '2026-05-14 19:23:07'),
(2, 'Marko', 'Horvat', 'marko.horvat@email.si', '040333444', '2026-05-14 19:23:07'),
(3, 'Nina', 'Krajnc', 'nina.krajnc@email.si', '051555666', '2026-05-14 19:23:07'),
(4, 'Adam', 'Warlock', 'adam@warlock.com', '05121970', '2026-05-14 19:47:25'),
(7, 'Anikin', 'Ashoka', 'clone@wars.ds', '909909909', '2026-05-14 20:15:30'),
(8, 'Teodorče', 'Stončke', 'tor@stor.ski', '420420697', '2026-05-19 11:07:34'),
(11, 'Random', 'Ima', 'test55@gmail.com', '50000000', '2026-05-19 11:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id_rez` int NOT NULL,
  `gost_id` int NOT NULL,
  `soba_id` int NOT NULL,
  `datum_prihoda` date NOT NULL,
  `datum_odhoda` date NOT NULL,
  `stevilo_oseb` tinyint NOT NULL,
  `status` enum('cakajoca','potrjena','preklicana','zakljucena') COLLATE utf8mb4_slovenian_ci NOT NULL DEFAULT 'cakajoca',
  `sporocilo` text COLLATE utf8mb4_slovenian_ci,
  `datum_rezervacije` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id_rez`, `gost_id`, `soba_id`, `datum_prihoda`, `datum_odhoda`, `stevilo_oseb`, `status`, `sporocilo`, `datum_rezervacije`) VALUES
(1, 1, 1, '2025-07-01', '2025-07-05', 2, 'potrjena', 'Prosimo za tiho sobo.', '2026-05-14 19:23:07'),
(2, 2, 2, '2025-07-10', '2025-07-14', 3, 'cakajoca', NULL, '2026-05-14 19:23:07'),
(3, 3, 5, '2025-08-01', '2025-08-07', 4, 'potrjena', 'Prihajamo z otroki.', '2026-05-14 19:23:07'),
(4, 4, 5, '2026-05-24', '2026-05-26', 4, 'cakajoca', 'Test 1', '2026-05-14 19:47:25'),
(5, 7, 3, '2026-07-01', '2026-07-07', 2, 'cakajoca', 'Disney + za clone wars', '2026-05-14 20:15:30'),
(6, 8, 4, '2026-06-25', '2026-06-26', 3, 'cakajoca', 'pls pls cheese in the room psl', '2026-05-19 11:07:34'),
(7, 11, 2, '2026-06-01', '2026-06-04', 3, 'cakajoca', 'to je test za vaje', '2026-05-19 11:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `soba`
--

CREATE TABLE `soba` (
  `id_soba` int NOT NULL,
  `naziv` varchar(100) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `tip` enum('dvoposteljna','triposteljna','stiriosteljna') COLLATE utf8mb4_slovenian_ci NOT NULL,
  `max_oseb` tinyint NOT NULL,
  `cena_na_noc` decimal(8,2) NOT NULL,
  `balkon` tinyint(1) NOT NULL DEFAULT '0',
  `opis` text COLLATE utf8mb4_slovenian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Dumping data for table `soba`
--

INSERT INTO `soba` (`id_soba`, `naziv`, `tip`, `max_oseb`, `cena_na_noc`, `balkon`, `opis`) VALUES
(1, 'Soba 1 – Zakonska', 'dvoposteljna', 2, 70.00, 0, 'Prijetna soba z veliko zakonsko posteljo.'),
(2, 'Soba 2 – Triposteljna', 'triposteljna', 3, 95.00, 1, 'Triposteljna soba z balkonom in pogledom na naravo.'),
(3, 'Soba 3 – Triposteljna', 'triposteljna', 3, 95.00, 1, 'Triposteljna soba z balkonom.'),
(4, 'Soba 4 – Triposteljna', 'triposteljna', 3, 95.00, 1, 'Triposteljna soba z balkonom.'),
(5, 'Soba 5 – Štiriposteljna', 'stiriosteljna', 4, 120.00, 1, 'Prostorna štiriposteljna soba z balkonom.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gost`
--
ALTER TABLE `gost`
  ADD PRIMARY KEY (`id_gost`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id_rez`),
  ADD KEY `gost_id` (`gost_id`),
  ADD KEY `soba_id` (`soba_id`);

--
-- Indexes for table `soba`
--
ALTER TABLE `soba`
  ADD PRIMARY KEY (`id_soba`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gost`
--
ALTER TABLE `gost`
  MODIFY `id_gost` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id_rez` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soba`
--
ALTER TABLE `soba`
  MODIFY `id_soba` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`gost_id`) REFERENCES `gost` (`id_gost`),
  ADD CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`soba_id`) REFERENCES `soba` (`id_soba`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
