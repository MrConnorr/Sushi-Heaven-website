-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 01:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text DEFAULT 'images/image-placeholder.png',
  `price` double(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `code`, `description`, `image`, `price`) VALUES
(1, 'RED SALMON SET', 'rdSalmonSet', 'Red Salmon 7pcs\r\nGrilled Red Salmon 8pcs', 'images/sushi1a.jpg', 8.07),
(67, 'dsadas', 'gsadasf', 'gfs', 'images/image-placeholder.png', 8545.00),
(68, 'dsadas', 'gsgdfdfsgf', 'gfs', 'images/image-placeholder.png', 8545.00),
(69, 'dsadas', 'ggdhdghf', 'gfs', 'images/image-placeholder.png', 8545.00),
(70, 'dsadas', 'gdsafasdf', 'gfs', 'images/image-placeholder.png', 8545.00),
(71, 'dsadas', 'fhgsdgf', 'waddsfffdsfds', 'images/image-placeholder.png', 8545.00),
(72, 'dsadas', 'ghgdghsdf', 'gfs', 'images/image-placeholder.png', 8545.00),
(73, 'dsadas', 'gdfasff', 'gfs', 'images/image-placeholder.png', 8545.00),
(80, 'asdas', 'das', 'dsadasdas', 'images/', 564.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
