-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 03, 2021 at 04:53 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushiheaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(6) UNSIGNED NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userDate` varchar(30) NOT NULL,
  `userTime` varchar(30) NOT NULL,
  `userPersons` int(2) NOT NULL,
  `userMail` varchar(30) NOT NULL,
  `userPhone` varchar(20) NOT NULL,
  `userNotes` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `userName`, `userDate`, `userTime`, `userPersons`, `userMail`, `userPhone`, `userNotes`) VALUES
(3, 'Tommi', '2021-03-26', '16:00', 5, 'ajsndjk@ajksnjd.com', '3325156123', ''),
(4, 'Fas', '2021-03-10', '18:00', 12, 'asdasdaca@gmail.com', '0408711561', ''),
(5, 'Tukhtaboy', '2021-03-04', '19:30', 5, 'romatsypin@gmail.com', '0408735560', 'Allergies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
