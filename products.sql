-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 12:18 PM
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
-- Database: `turk`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
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
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_en`, `title_ar`, `description_en`, `description_ar`, `appearance`, `img`, `height_img`, `created_at`, `updated_at`) VALUES
(3, 'Olivo Container', 'حاوية أوليفو', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل.&nbsp;كما أنها تستخدم على نطاق واسع في إنتاج مواد الستايروفوم التي تستخدم لمرة واحدة (أكواب بلاستيكية ، شوك ، ملاعق ، إلخ) المستخدمة لأغراض الحماية.&nbsp;تحتل مكانة مهمة في إنتاج قطع غيار السيارات ومواد الديكور.</p>\r\n\r\n<p>بعد إنتاج منتجات مختلفة دون الإضرار بالمستهلك وهي عبارة عن مادة تعبئة توفر الخصائص الفيزيائية ليتم نقلها دون تشويه.&nbsp;لها مجموعة واسعة من الاستخدامات بما في ذلك الآيس كريم والمأكولات البحرية وصناعة الفاكهة والخضروات واللحوم ومنتجات اللحوم ومنتجات الألبان ، حيث إنها مقاومة للضغط والصدمات والسقوط والصدمات وخاصية العزل الحراري والضوء ويمكن تصميمها لكل منها شكل المنتج.</p>\r\n\r\n<p>&nbsp;</p>', 1, 'uploads/products/images/16425480798477.webp', NULL, '2022-01-19 00:08:18', '2022-01-20 18:02:08'),
(10, 'Nam ullam tempore n', 'Proident quod iusto', '<p>kjm,</p>', '<p>jm</p>', 1, 'uploads/products/images/16428617445807.webp', NULL, '2022-01-22 15:29:04', '2022-01-22 15:29:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
