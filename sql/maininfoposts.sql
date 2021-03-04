-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 10:04 PM
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
(1, 'Sushi Heaven is about Sushi', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n', 'images/restaurant-img.jpg', 'Image of Restaurant inside', 'up'),
(6, 'Some Test Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci eu lobortis elementum nibh tellus. Vitae nunc sed velit dignissim sodales. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Id velit ut tortor pretium viverra suspendisse. Proin gravida hendrerit lectus a. Lectus mauris ultrices eros in cursus. Lacus vel facilisis volutpat est velit egestas dui id ornare. Sed cras ornare arcu dui vivamus. Nunc pulvinar sapien et ligula ullamcorper malesuada. Placerat in egestas erat imperdiet sed. Mi in nulla posuere sollicitudin. Egestas sed sed risus pretium quam vulputate dignissim. Purus ut faucibus pulvinar elementum integer.\r\n\r\nRisus viverra adipiscing at in tellus integer feugiat scelerisque varius. Nisl tincidunt eget nullam non nisi. Pharetra vel turpis nunc eget lorem dolor. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Arcu dui vivamus arcu felis bibendum ut tristique et. Ut porttitor leo a diam sollicitudin tempor id eu. Lacus suspendisse faucibus interdum posuere lorem. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Bibendum arcu vitae elementum curabitur. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Volutpat ac tincidunt vitae semper quis lectus nulla. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Risus nullam eget felis eget nunc lobortis mattis aliquam faucibus. Enim ut tellus elementum sagittis vitae. Tellus in metus vulputate eu. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Ipsum consequat nisl vel pretium lectus quam.', 'images/', '', 'none'),
(7, 'AC Valhalla ÐÐ½Ð³Ð»Ð¸Ð¹ÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci eu lobortis elementum nibh tellus. Vitae nunc sed velit dignissim sodales. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Id velit ut tortor pretium viverra suspendisse. Proin gravida hendrerit lectus a. Lectus mauris ultrices eros in cursus. Lacus vel facilisis volutpat est velit egestas dui id ornare. Sed cras ornare arcu dui vivamus. Nunc pulvinar sapien et ligula ullamcorper malesuada. Placerat in egestas erat imperdiet sed. Mi in nulla posuere sollicitudin. Egestas sed sed risus pretium quam vulputate dignissim. Purus ut faucibus pulvinar elementum integer.\r\n\r\nRisus viverra adipiscing at in tellus integer feugiat scelerisque varius. Nisl tincidunt eget nullam non nisi. Pharetra vel turpis nunc eget lorem dolor. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Arcu dui vivamus arcu felis bibendum ut tristique et. Ut porttitor leo a diam sollicitudin tempor id eu. Lacus suspendisse faucibus interdum posuere lorem. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Bibendum arcu vitae elementum curabitur. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Volutpat ac tincidunt vitae semper quis lectus nulla. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Risus nullam eget felis eget nunc lobortis mattis aliquam faucibus. Enim ut tellus elementum sagittis vitae. Tellus in metus vulputate eu. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Ipsum consequat nisl vel pretium lectus quam.', 'images/', '', 'none'),
(8, 'Some Test Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci eu lobortis elementum nibh tellus. Vitae nunc sed velit dignissim sodales. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Id velit ut tortor pretium viverra suspendisse. Proin gravida hendrerit lectus a. Lectus mauris ultrices eros in cursus. Lacus vel facilisis volutpat est velit egestas dui id ornare. Sed cras ornare arcu dui vivamus. Nunc pulvinar sapien et ligula ullamcorper malesuada. Placerat in egestas erat imperdiet sed. Mi in nulla posuere sollicitudin. Egestas sed sed risus pretium quam vulputate dignissim. Purus ut faucibus pulvinar elementum integer.\r\n\r\nRisus viverra adipiscing at in tellus integer feugiat scelerisque varius. Nisl tincidunt eget nullam non nisi. Pharetra vel turpis nunc eget lorem dolor. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Arcu dui vivamus arcu felis bibendum ut tristique et. Ut porttitor leo a diam sollicitudin tempor id eu. Lacus suspendisse faucibus interdum posuere lorem. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Bibendum arcu vitae elementum curabitur. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Volutpat ac tincidunt vitae semper quis lectus nulla. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Risus nullam eget felis eget nunc lobortis mattis aliquam faucibus. Enim ut tellus elementum sagittis vitae. Tellus in metus vulputate eu. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Ipsum consequat nisl vel pretium lectus quam.', 'images/', '', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maininfoposts`
--
ALTER TABLE `maininfoposts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maininfoposts`
--
ALTER TABLE `maininfoposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
