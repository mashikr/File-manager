-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 07:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filemanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `type`, `size`) VALUES
(3, 'mypic2.PNG', 'image', '697.73KB'),
(6, 'img1.jpg', 'image', '1.76MB'),
(9, 'amito vala na.PNG', 'image', '341.78KB'),
(16, 'coverr-aerial-view-of-rocky-mountains-1585320758193.mp4', 'video', '10.06MB'),
(17, 'coverr-rocky-mountains-1585645475258.mp4', 'video', '10.66MB'),
(19, 'Dil Diyan Gallan Song - Tiger Zinda Hai - Salman Khan, Katrina Kaif - Atif, Vishal & Shekhar, Irshad.mp4', 'video', '17.4MB'),
(20, 'Ami tomay na dekhi, tumi amar na hou [lyrics version ] - YouTube.mkv', 'video', '8.33MB'),
(23, 'Ami Banglar Gaan Gai (music.com.bd).mp3', 'audio', '5.9MB'),
(24, '01 - Tahsan - Alo (music.com.bd).mp3', 'audio', '4.2MB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
