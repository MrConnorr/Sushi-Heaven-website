-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 10:11 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userComment` tinytext NOT NULL,
  `userEmail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo`
--

CREATE TABLE `generalinfo` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` text DEFAULT NULL,
  `otherinfo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generalinfo`
--

INSERT INTO `generalinfo` (`id`, `title`, `description`, `image`, `otherinfo`) VALUES
(1, 'Buffet', 'Info about buffet \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" ', 'images/opening-icon.png', 'Opening Hours\r\nMon-Fri: 09:00 - 21:00\r\nSat: 11:00 - 23:00\r\nSun: Closed'),
(10, 'Delivery', 'Info about delivery\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" ', 'images/delivery-icon.png', 'Delivery working Hours\r\nMon-Fri: 10:00 - 20:00\r\nSat: 12 :00 - 22:00\r\nSun: Closed');

-- --------------------------------------------------------

--
-- Table structure for table `imgslider`
--

CREATE TABLE `imgslider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `imagealt` text NOT NULL,
  `imgslidernum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imgslider`
--

INSERT INTO `imgslider` (`id`, `image`, `imagealt`, `imgslidernum`) VALUES
(1, 'images/slider-image1.jpg', 'Sushi Heaven Slider Image 1', 0),
(6, 'images/slider-image2.jpg', 'Sushi Heaven Slider Image 2', 1),
(7, 'images/slider-image3.jpg', 'Sushi Heaven Slider Image 3', 2),
(8, 'images/slider-image4.jpg', 'Sushi Heaven Slider Image 4', 3),
(9, 'images/slider-image5.jpg', 'Sushi Heaven Slider Image 5', 4);

-- --------------------------------------------------------

--
-- Table structure for table `maininfoposts`
--

CREATE TABLE `maininfoposts` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` text DEFAULT 'images/image-placeholder.png',
  `imageAlt` text DEFAULT NULL,
  `imglocation` varchar(10) DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maininfoposts`
--

INSERT INTO `maininfoposts` (`id`, `title`, `description`, `image`, `imageAlt`, `imglocation`) VALUES
(6, 'Some Test Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci eu lobortis elementum nibh tellus. Vitae nunc sed velit dignissim sodales. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Id velit ut tortor pretium viverra suspendisse. Proin gravida hendrerit lectus a. Lectus mauris ultrices eros in cursus. Lacus vel facilisis volutpat est velit egestas dui id ornare. Sed cras ornare arcu dui vivamus. Nunc pulvinar sapien et ligula ullamcorper malesuada. Placerat in egestas erat imperdiet sed. Mi in nulla posuere sollicitudin. Egestas sed sed risus pretium quam vulputate dignissim. Purus ut faucibus pulvinar elementum integer.\r\n\r\nRisus viverra adipiscing at in tellus integer feugiat scelerisque varius. Nisl tincidunt eget nullam non nisi. Pharetra vel turpis nunc eget lorem dolor. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Arcu dui vivamus arcu felis bibendum ut tristique et. Ut porttitor leo a diam sollicitudin tempor id eu. Lacus suspendisse faucibus interdum posuere lorem. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Bibendum arcu vitae elementum curabitur. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Volutpat ac tincidunt vitae semper quis lectus nulla. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Risus nullam eget felis eget nunc lobortis mattis aliquam faucibus. Enim ut tellus elementum sagittis vitae. Tellus in metus vulputate eu. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Ipsum consequat nisl vel pretium lectus quam.', 'images/restaurant-img.jpg', 'Image of Restaurant inside', 'right');

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
(67, 'AVOCADO SALMON SET', 'avcSalmonSet', 'Avocado Salmon 8pcs\r\nGrilled Avocado Salmon 7pcs', 'images/sushi2a.jpg', 9.00),
(68, 'MIXED ONE SET', 'mxOneSet', 'Salmon 2pcs\r\nGrilled Red Salmon 8pcs\r\nAvocado 2pcs\r\nPrawn 2pcs', 'images/sushi3a.jpg', 15.00);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `imageAlt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `imageAlt`) VALUES
(1, 'images/partner-img1.jpg', 'Wolt Partner Image'),
(2, 'images/partner-img2.jpg', 'Hotel Partner Image'),
(3, 'images/partner-img3.jpg', 'Spa Partner Image'),
(4, 'images/partner-img4.jpg', 'Fishin Company Partner Image'),
(5, 'images/partner-img5.jpg', 'Sports Center Partner Image');

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
(6, 'Roman Konstantinov', '2021-03-12', '16:00', 5, 'dragonden2010@gmail.com', '+37258037071', 'Litle Roses ');

-- --------------------------------------------------------

--
-- Table structure for table `welcometxt`
--

CREATE TABLE `welcometxt` (
  `id` int(11) NOT NULL,
  `slidertitletxt` varchar(255) NOT NULL,
  `sliderwelcometxt` text NOT NULL,
  `sliderbuttontxt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `welcometxt`
--

INSERT INTO `welcometxt` (`id`, `slidertitletxt`, `sliderwelcometxt`, `sliderbuttontxt`) VALUES
(1, 'Welcome to Sushi Heaven', 'Best Sushi in town made with love', 'Learn More');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalinfo`
--
ALTER TABLE `generalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgslider`
--
ALTER TABLE `imgslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maininfoposts`
--
ALTER TABLE `maininfoposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcometxt`
--
ALTER TABLE `welcometxt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `generalinfo`
--
ALTER TABLE `generalinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `imgslider`
--
ALTER TABLE `imgslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `maininfoposts`
--
ALTER TABLE `maininfoposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `welcometxt`
--
ALTER TABLE `welcometxt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
