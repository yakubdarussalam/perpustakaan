-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 03:18 PM
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
('B003', 'Belajar Web Penetration Tester', 'Hacker Gacor', 'Mamank 4 Sec', 50),
('B004', 'XSS Inject Manual', 'Mamank Backdoor', 'Anjay 4 Sec', 50),
('B005', 'SQL Injection', 'Kang Gacor', 'Gacor Kang', 30),
('B006', 'Trik Menang Judi Bola', 'Kang Judi', 'Kantor Bola 88', 99),
('B007', 'Makanan Extra Ordinary', 'Pood Ploger', 'Makan Cuy ', 30),
('B008', 'Jejak si Bungul', 'Bungul', 'Petualang Gacor', 10),
('B009', 'ABCDEFG', 'ABCD', 'Lorem Ipsum', 30);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` varchar(5) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `member_username` varchar(12) NOT NULL,
  `member_password` text NOT NULL,
  `member_gender` varchar(20) NOT NULL,
  `member_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_username`, `member_password`, `member_gender`, `member_photo`) VALUES
('MB01', 'Agus Nurjaman', 'agus01', '12345', 'Male', 'Ada'),
('MB02', 'Ujang', 'ujangarut', '12345', 'Male', 'Ada'),
('MB03', 'Ucup Bansal', 'ucupbansal', '123456', 'Male', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(5) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `staff_username` varchar(12) NOT NULL,
  `staff_password` text NOT NULL,
  `staff_gender` varchar(20) NOT NULL,
  `staff_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_username`, `staff_password`, `staff_gender`, `staff_photo`) VALUES
('ST01', 'Agus Nurjaman', 'agus01', '12345', 'Male', 'Yes'),
('ST02', 'Ujang', 'ujangarut', '12345', 'Male', 'Yes'),
('ST03', 'Andika Hari', 'andika03', '12345', 'Male', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
