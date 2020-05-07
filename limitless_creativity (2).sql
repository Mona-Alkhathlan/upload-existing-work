-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 07:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limitless_creativity`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_upload`
--

CREATE TABLE `image_upload` (
  `image_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_upload`
--

INSERT INTO `image_upload` (`image_id`, `image`, `image_text`, `user_id`) VALUES
(3, '1.png', 'Testing db', 2),
(4, '', '', 2),
(5, '', 'heyyyy', 2),
(6, '1338655.jpg', 'rthb', 3),
(7, '', 'dtrhgbfv ', 4),
(8, '', 'srdfhetdjh', 4),
(68, '49.png', 'Kitchen - Wooden\r\n', 1),
(69, '50.png', 'Living room - Jungle style\r\n', 1),
(70, '51.png', 'Kitchen - Classic\r\n', 1),
(71, '52.png', 'Living room - Bookshelf\r\n', 1),
(72, '53.png', 'Spa - Waiting room\r\n', 1),
(73, '54.png', 'Living room - Classic', 1),
(74, 'WhatsApp Image 2020-03-28 at 8.33.15 AM (1).jpg', 'My Design 1', 5),
(75, 'WhatsApp Image 2020-03-28 at 8.33.15 AM (2).jpg', 'My Design 2', 5),
(76, 'WhatsApp Image 2020-03-28 at 8.33.16 AM.jpg', 'My Design 3', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `job` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `image_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `job`, `email`, `username`, `password`, `image_index`) VALUES
(1, 'Mona', 'ALKhathlan', 'Desginer', 'monaalsbi3y@gmail.com', 'Mona Saud', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(2, 'Reem', 'Ali', 'Photographer', 'reem@reem.com', 'reemali', '202cb962ac59075b964b07152d234b70', 1),
(3, 'taemno', 'munira', 'Master Artist', 'munira@munira.com', 'taemno', '202cb962ac59075b964b07152d234b70', 0),
(4, 'Jon', 'doe', 'Artist', 'artist@e.com', 'Jon Doe', '202cb962ac59075b964b07152d234b70', 2),
(5, 'L.', 'I', 'Desginer', 'Shahd@a.com', 'Desginer Shahd', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_upload`
--
ALTER TABLE `image_upload`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_upload`
--
ALTER TABLE `image_upload`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
