-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 01:52 PM
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `name`, `phone`, `email`, `comment`) VALUES
(4, '2021-07-29 22:25:45', '2021-07-29 22:25:45', 'Inez Figueroa', '+1 (269) 30', 'maxode@mailinator.com', 'Placeat sint atque'),
(5, '2021-07-29 22:27:19', '2021-07-29 22:27:19', 'Islam Ramadan', '01100618113', 'eslam.iniesta@gmail.com', 'Islam Ramadan Islam Ramadan Islam Ramadan Islam Ramadan'),
(6, '2021-08-01 15:13:00', '2021-08-01 15:13:00', 'Eagan Brock', '+1 (835) 44', 'nucaquny@mailinator.com', 'Quo blanditiis ut re'),
(7, '2021-08-01 15:13:32', '2021-08-01 15:13:32', 'Eagan Brock', '+1 (835) 44', 'nucaquny@mailinator.com', 'Quo blanditiis ut re'),
(8, '2021-08-01 15:13:43', '2021-08-01 15:13:43', 'Adria Chandler', '+1 (843) 30', 'maranulivo@mailinator.com', 'Distinctio Quia exc'),
(9, '2022-01-20 14:51:03', '2022-01-20 14:51:03', 'احمد', '01100618113', 'eslam.iniestaa@gmail.com', 'ok'),
(10, '2022-01-20 15:06:03', '2022-01-20 15:06:03', 'Deborah', '0325215412', 'xipufa@mailinator.com', 'asjldkm'),
(11, '2022-01-20 15:07:41', '2022-01-20 15:07:41', 'Deborah', '0325215412', 'xipufa@mailinator.com', 'asjldkm'),
(12, '2022-02-23 15:27:09', '2022-02-23 15:27:09', 'Islam Ramadan', '0325215412', 'xipufa@mailinator.com', 'kldfm,sdf'),
(13, '2022-02-23 15:28:21', '2022-02-23 15:28:21', 'Germaine Randolph', '+1 (236) 51', 'zelymak@mailinator.com', 'Vel quo ea delectus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
