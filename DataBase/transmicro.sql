-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 04:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transmicro`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `BNo` int(100) NOT NULL,
  `ApNo` int(100) NOT NULL,
  `Floor` int(100) NOT NULL,
  `LandMark` text NOT NULL,
  `CPass` varchar(100) NOT NULL,
  `APhone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`FName`, `LName`, `Email`, `Password`, `Phone`, `Area`, `Street`, `BNo`, `ApNo`, `Floor`, `LandMark`, `CPass`, `APhone`) VALUES
('Ziad', 'Elshaer', 'zeyadelshaer2231@gmail.com', 'Activenike1', 1015337653, 'Madintnasr', 'Nasrkhesro', 3, 1, 1, 'Wonderland', 'Activenike1', 1015337653),
('Youssef', 'Hisham', 'yhisham590@gmail.com', 'Activenike1', 1223815373, 'Giza', 'ahmedhamd', 19, 1, 33, 'Pyramids', 'Activenike1', 1015337233),
('Erini', 'Sabry', 'Erinisgaid@gmail.com', 'Activenike1', 1018996563, 'Masrgdeda', 'hasanfahmy', 42, 22, 9, 'hadekattefl', 'Activenike1', 1015334652),
('Reham', 'Mohsen', 'reham20121999@gmail.com', 'Activenike1', 1015336975, 'October', 'kamlzyad', 66, 8, 3, 'Hosary', 'Activenike1', 1014563245),
('Maii', 'Sadek', 'maiisediik@gmail.com', 'Activenike1', 1014569353, 'Giza', 'fahmeahmed', 8, 1, 4, 'Pyramids', 'Activenike1', 1014745631);

-- --------------------------------------------------------

--
-- Table structure for table `btb_btc`
--

CREATE TABLE `btb_btc` (
  `Name` text NOT NULL,
  `Phone` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Type` text NOT NULL,
  `Town` text NOT NULL,
  `Street` text NOT NULL,
  `Bulding` int(100) NOT NULL,
  `Apartment` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btb_btc`
--

INSERT INTO `btb_btc` (`Name`, `Phone`, `Email`, `Type`, `Town`, `Street`, `Bulding`, `Apartment`) VALUES
('Samsung', 1223815373, 'samsung2131@gmail.com', 'Covers', 'Cairo', 'NasrKhesro', 8, 23),
('Ahmed', 1223815373, 'Ahmed321@yahoo.com', 'Tshirts', 'Cairo', 'NasrKhesro', 8, 23),
('Ahmed', 1223815373, 'Ahmed321@yahoo.com', 'Tshirts', 'Giza', 'hosare', 6, 2),
('Ziad', 1223815373, 'ZiadAHMED2121@yahoo.com', 'Laptop', 'NewCairo', 'Madinty', 32, 1),
('Youssef', 1015996752, 'yshehan231@gmail.com', 'Keyboard', 'Luxor', 'semblbay', 44, 13),
('Qaaf', 1015996752, 'Mohamedhamd231@gmail.com', 'NoteBooks', 'Cairo', 'Maadi', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ctc`
--

CREATE TABLE `ctc` (
  `Sender_Name` text NOT NULL,
  `Receiver_Name` text NOT NULL,
  `Sender_Phone` int(100) NOT NULL,
  `Receiver_Phone` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `Sender_Town` text NOT NULL,
  `Sender_Street` text NOT NULL,
  `Sender_Bul` int(100) NOT NULL,
  `Sender_Apar` int(100) NOT NULL,
  `Receiver_Town` text NOT NULL,
  `Receiver_Street` text NOT NULL,
  `Receiver_Bul` int(100) NOT NULL,
  `Receiver_Apar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctc`
--

INSERT INTO `ctc` (`Sender_Name`, `Receiver_Name`, `Sender_Phone`, `Receiver_Phone`, `Email`, `type`, `Sender_Town`, `Sender_Street`, `Sender_Bul`, `Sender_Apar`, `Receiver_Town`, `Receiver_Street`, `Receiver_Bul`, `Receiver_Apar`) VALUES
('Ziad', 'Youssef', 1223815373, 1015337653, 'zeyadelshaer2231@gmail.com', 'Mobile', 'Cairo', 'Madinty', 13, 5, 'Giza', 'HamdAhmed', 2, 33),
('Maii', 'Reham', 1231812211, 1015337121, 'Maii2231@gmail.com', 'Charger', 'Giza', 'KamalSyad', 32, 21, 'Giza', 'hosare', 1, 1),
('Erine', 'Youssef', 1231812145, 1215331111, 'Erine1211@yahoo.com', 'Notebooks', 'Cairo', 'Masrgedida', 12, 1, 'Giza', 'LoayAhmed', 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

CREATE TABLE `userpass` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`id`, `user`, `pass`) VALUES
(1, 'zeyadelshaer2231@gmail.com', 'Activenike1'),
(2, 'yhisham590@gmail.com', 'Activenike1'),
(3, 'Erinisgaid@gmail.com', 'Activenike1'),
(4, 'reham20121999@gmail.com', 'Activenike1'),
(5, 'maiisediik@gmail.com', 'Activenike1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userpass`
--
ALTER TABLE `userpass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userpass`
--
ALTER TABLE `userpass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
