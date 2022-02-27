-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 01:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutration`
--

-- --------------------------------------------------------

--
-- Table structure for table `sections_imgs`
--

CREATE TABLE `sections_imgs` (
  `id` int(11) NOT NULL,
  `img` varchar(191) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections_imgs`
--

INSERT INTO `sections_imgs` (`id`, `img`, `type`, `created_at`, `updated_at`) VALUES
(3, 'upload/sections/1645921707621ac5ab686f2.jpg', 0, '2022-02-27 01:28:27', '2022-02-27 01:28:27'),
(4, 'upload/sections/1645921759621ac5df1581d.jpg', 0, '2022-02-27 01:29:19', '2022-02-27 01:29:19'),
(5, 'upload/sections/1645921759621ac5df5909b.jpg', 0, '2022-02-27 01:29:19', '2022-02-27 01:29:19'),
(8, 'upload/sections/1645922841621aca1954052.jpg', 1, '2022-02-27 01:47:21', '2022-02-27 01:47:21'),
(10, 'upload/sections/1645922880621aca4033293.jpg', 1, '2022-02-27 01:48:00', '2022-02-27 01:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sections_imgs`
--
ALTER TABLE `sections_imgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sections_imgs`
--
ALTER TABLE `sections_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
