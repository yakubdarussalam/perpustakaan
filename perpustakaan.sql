-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 05:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Code` char(5) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Stock` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Code`, `Title`, `Author`, `Publisher`, `Stock`) VALUES
('B001', 'Tips Maxwin Bersama Zeus', 'Papa Zeus', 'Gacor99', 99),
('B002', 'Mengatasi Rungkad Tanpa Pinjol', 'Papa Kratos', 'Gacor99', 88),
('B003', 'Belajar Web Penetration Tester', 'Hacker Gacor', 'Mamank 4 Sec', 1),
('B004', 'XSS Inject Manual', 'Mamank Backdoor', 'Anjay 4 Sec', 50),
('B005', 'SQL Injection', 'Kang Gacor', 'Gacor Kang', 30),
('B006', 'Trik Menang Judi Bola', 'Kang Judi', 'Kantor Bola 88', 99),
('B007', 'Makanan Extra Ordinary', 'Pood Ploger', 'Makan Cuy ', 30),
('B008', 'Jejak si Bungul', 'Bungul', 'Petualang Gacor', 10),
('B009', 'Setan Nyasar', 'Si Gondrong', 'Rumah Hantu', 30),
('B010', 'Mancing Mania Gacor', 'Kang Slot 99', 'Rumah Zeus', 50),
('B011', 'Ilmu Persantetan Dukun', 'Mbah Gacor', 'Padepokan Gacor', 30),
('B012', 'Membuat Web Gacor', 'Mamank Garox', 'Kantor Bola 66', 50),
('B013', 'Tutorial Minum', 'Dika', 'Bansal', 30),
('B014', 'Tutorial Mukbang', 'Wisnu', 'Bansal', 30),
('B015', 'Anjayyy', 'Dika', 'Bansal', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
