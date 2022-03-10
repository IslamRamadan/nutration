-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 02:02 PM
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
-- Table structure for table `boquets`
--

CREATE TABLE `boquets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearance` tinyint(1) DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boquets`
--

INSERT INTO `boquets` (`id`, `title_en`, `title_ar`, `description_en`, `description_ar`, `appearance`, `img`, `height_img`, `created_at`, `updated_at`) VALUES
(10, 'The first bouquet', 'الباقه الاولي', '<p>The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;The first bouquet&nbsp;</p>', '<p>الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;الباقه الاولي&nbsp;</p>', 1, 'uploads/boquets/images/16468255404538.jpg', NULL, '2022-01-22 15:29:04', '2022-03-09 12:32:21'),
(11, 'The second bouquet', 'الباقه الثانيه', '<p>The second bouquet&nbsp;The second bouquet&nbsp;The second bouquet&nbsp;The second bouquet&nbsp;The second bouquet&nbsp;The second bouquet&nbsp;</p>', '<p>الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;الباقه الثانيه&nbsp;</p>', 1, 'uploads/boquets/images/164682560270412.jpg', NULL, '2022-03-09 12:33:22', '2022-03-09 12:33:22'),
(12, 'The third bouquet', 'الباقه الثالثه', '<p>The third bouquet&nbsp;The third bouquet&nbsp;The third bouquet&nbsp;The third bouquet&nbsp;The third bouquet&nbsp;The third bouquet&nbsp;The third bouquet&nbsp;The third bouquet&nbsp;The third bouquet&nbsp;</p>', '<p>الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;الباقه الثالثه&nbsp;</p>', 1, 'uploads/boquets/images/164682572851010.jpg', NULL, '2022-03-09 12:34:10', '2022-03-09 12:35:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boquets`
--
ALTER TABLE `boquets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boquets`
--
ALTER TABLE `boquets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
