-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 04:55 PM
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
(11, '2022-01-20 15:07:41', '2022-01-20 15:07:41', 'Deborah', '0325215412', 'xipufa@mailinator.com', 'asjldkm');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_23_173524_laratrust_setup_tables', 1),
(2, '2020_12_29_173353_create_colors_table', 1),
(3, '2020_12_29_173353_create_notifications_table', 1),
(4, '2020_12_29_173353_create_overs_table', 1),
(5, '2020_12_29_173353_create_sliders_table', 1),
(6, '2020_12_29_173353_create_tokens_table', 1),
(7, '2021_07_27_102501_create_contacts_table', 1),
(8, '2021_07_27_102501_create_services_images_table', 1),
(9, '2021_07_27_102501_create_services_table', 1),
(10, '2021_07_27_102501_create_works_table', 1),
(11, '2021_07_27_102511_create_foreign_keys', 1),
(12, '2021_08_18_031802_create_products_table', 2),
(13, '2021_08_18_120544_create_prod_imgs_table', 2),
(14, '2021_08_15_040324_create_basic_categories_table', 3),
(15, '2022_01_25_012611_create_sections_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `routes` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`, `routes`) VALUES
(1, 'ادارة الاقسام', 'ادارة الاقسام', 'ادارة الاقسام', NULL, NULL, 'categories.index,categories.edit,categories.create,categories.destroy'),
(2, 'ادارة الاقسام الفرعية', 'ادارة الاقسام الفرعية', 'ادارة الاقسام الفرعية', NULL, NULL, 'subCategories.index,subCategories.edit,subCategories.create,subCategories.destroy'),
(3, 'ادارة التصنيفات', 'ادارة التصنيفات', 'ادارة التصنيفات', NULL, NULL, 'subSubCategories.index,subSubCategories.edit,subSubCategories.create,subSubCategories.destroy'),
(4, 'ادارة الماركات', 'ادارة الماركات', 'ادارة الماركات', NULL, NULL, 'brands.index,brands.edit,brands.create,brands.destroy'),
(7, 'ادارة السليدر', 'ادارة السليدر', 'ادارة السليدر', NULL, NULL, 'sliders.index,sliders.edit,sliders.create,sliders.destroy'),
(8, 'ادارة المنتجات', 'ادارة المنتجات', 'ادارة  المنتجات ', NULL, NULL, 'items.index,items.edit,items.create,items.destroy,items.size,galaries.index,galaries.destroy,items.add.size,items.add.color,items.update.color,items.edit.size,items.update.size,items.destroy.size,galaries.store,galaries.destroy'),
(9, 'عرض الطلبات ', 'عرض الطلبات ', 'عرض الطلبات ', NULL, NULL, 'orders.index,order.item'),
(10, 'ادارة حالة الطلب', 'ادارة حالة الطلب', 'ادارة حالة الطلب', NULL, NULL, 'orders.update,order.edit'),
(11, 'حذف الطلبات', 'حذف الطلبات', 'حذف الطلبات', NULL, NULL, 'orders.destroy'),
(12, 'ادارة المشرفين', 'ادارة المشرفين', 'ادارة المشرفين', NULL, NULL, 'users.index,users.edit,users.create,users.destroy'),
(13, 'ادارة الصلاحيات', 'ادارة الصلاحيات', 'ادارة الصلاحيات', NULL, NULL, 'roles.index,roles.edit,roles.create,roles.destroy');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(90) NOT NULL,
  `title_en` varchar(90) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `brief_en` text,
  `brief_ar` text,
  `img` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `brief_en`, `brief_ar`, `img`, `created_at`, `updated_at`) VALUES
(2, 'صندوق الستايروفومم', 'Styrofoam Box', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل.&nbsp;كما أنها تستخدم على نطاق واسع في إنتاج مواد الستايروفوم التي تستخدم لمرة واحدة (أكواب بلاستيكية ، شوك ، ملاعق ، إلخ) المستخدمة لأغراض الحماية.&nbsp;تحتل مكانة مهمة في إنتاج قطع غيار السيارات ومواد الديكور.</p>\r\n\r\n<hr />\r\n<p>بعد إنتاج منتجات مختلفة دون الإضرار بالمستهلك وهي عبارة عن مادة تعبئة توفر الخصائص الفيزيائية ليتم نقلها دون تشويه.&nbsp;لها مجموعة واسعة من الاستخدامات بما في ذلك الآيس كريم والمأكولات البحرية وصناعة الفاكهة والخضروات واللحوم ومنتجات اللحوم ومنتجات الألبان ، حيث إنها مقاومة للضغط والصدمات والسقوط والصدمات وخاصية العزل الحراري والضوء ويمكن تصميمها لكل منها شكل المنتج.</p>\r\n\r\n<p>&nbsp;</p>', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<hr />\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', 'Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems.', 'الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام. يستخدم بشكل عام في أنظمة التدفئة والعزل', 'upload/posts/16454644206213cb643982e.jpg', '2022-01-19 15:59:27', '2022-11-14 22:00:00'),
(3, 'صندوق الستايروفومم', 'Styrofoam Box', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل</p>', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<hr />\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', 'Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems.', 'الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام. يستخدم بشكل عام في أنظمة التدفئة والعزل', 'upload/posts/16454644356213cb73e5304.jpg', '2021-12-08 16:43:32', '2022-04-13 18:27:15'),
(4, 'صندوق الستايروفومم', 'Styrofoam Box', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل</p>', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<hr />\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', 'Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems.', 'الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام. يستخدم بشكل عام في أنظمة التدفئة والعزل', 'upload/posts/16454644526213cb84c22df.jpg', '2021-09-02 16:50:02', '2022-03-07 18:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `post_imgs`
--

CREATE TABLE `post_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_imgs`
--

INSERT INTO `post_imgs` (`id`, `description_en`, `description_ar`, `img`, `post_id`, `created_at`, `updated_at`) VALUES
(4, NULL, NULL, 'upload/advertising/164243650361e597977b747.webp', 4, '2022-01-17 17:21:43', '2022-01-17 17:21:43'),
(5, NULL, NULL, 'upload/advertising/164259720561e80b55c5664.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(6, NULL, NULL, 'upload/advertising/164259720761e80b5733ffd.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(7, NULL, NULL, 'upload/advertising/164259720761e80b574f8d6.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(8, NULL, NULL, 'upload/advertising/164259720761e80b576dd50.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(9, NULL, NULL, 'upload/advertising/164259723461e80b72a29f5.webp', 3, '2022-01-19 14:00:34', '2022-01-19 14:00:34'),
(10, NULL, NULL, 'upload/advertising/164259723461e80b72bf06a.webp', 3, '2022-01-19 14:00:34', '2022-01-19 14:00:34'),
(11, NULL, NULL, 'upload/advertising/164259723461e80b72d3ed1.webp', 3, '2022-01-19 14:00:34', '2022-01-19 14:00:34'),
(12, NULL, NULL, 'upload/advertising/164259723461e80b72ee410.webp', 3, '2022-01-19 14:00:35', '2022-01-19 14:00:35'),
(13, NULL, NULL, 'upload/advertising/164259726461e80b90c68db.webp', 4, '2022-01-19 14:01:04', '2022-01-19 14:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'مدير', 'مدير', 'كل الصلاحيات', '2021-01-28 11:47:43', '2021-01-28 11:47:43'),
(2, 'محرر', 'محرر', 'محرر', '2021-01-30 15:02:42', '2021-01-30 15:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 0, ''),
(2, 1, ''),
(2, 2, ''),
(1, 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_content_ar` text COLLATE utf8mb4_unicode_ci,
  `service_content_en` text COLLATE utf8mb4_unicode_ci,
  `service_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_content_en` text COLLATE utf8mb4_unicode_ci,
  `about_content_ar` text COLLATE utf8mb4_unicode_ci,
  `about_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `service_content_ar`, `service_content_en`, `service_img`, `about_content_en`, `about_content_ar`, `about_img`, `created_at`, `updated_at`) VALUES
(1, '<p>ينظر مدرب الصحة إلى التمارين والأكل والعافية والطعام ليس فقط كالسعرات الحرارية وفقدان الوزن ، ولكن أيضًا من الناحية العاطفية والعقلية والجسدية والروحية. يتكامل مع Nutrition Health Coach الذي يقدم خدمات في المنطقة يعرف مثل الحالة الذهنية وخلفية التاريخ الصحي وأنماط النوم.</p>\r\n\r\n<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>النشاط البدني</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n</ul>', '<p>A health coach looks at exercise, eating, wellness and food not only as calories and weight loss, but also emotionally, mentally, physically and spiritually. Integrates with Nutrition Health Coach which provides area-defined services such as state of mind, background health history and sleep patterns.</p>\r\n\r\n<h2>Related areas of use</h2>\r\n\r\n<ul>\r\n	<li>physical activity</li>\r\n	<li>electric motors</li>\r\n	<li>conveyors</li>\r\n	<li>hydraulic parts and equipment, servicemen</li>\r\n</ul>', 'uploads/sections/images/16454804922728.jpg', '<p>A health coach looks at exercise, eating, wellness and food not only as calories and weight loss, but also emotionally, mentally, physically and spiritually. Integrates with Nutrition Health Coach which provides area-defined services such as state of mind, background health history and sleep patterns.</p>\r\n\r\n<h2>Related areas of use</h2>\r\n\r\n<ul>\r\n	<li>physical activity</li>\r\n	<li>electric motors</li>\r\n	<li>conveyors</li>\r\n	<li>hydraulic parts and equipment, servicemen</li>\r\n</ul>', '<p>ينظر مدرب الصحة إلى التمارين والأكل والعافية والطعام ليس فقط كالسعرات الحرارية وفقدان الوزن ، ولكن أيضًا من الناحية العاطفية والعقلية والجسدية والروحية. يتكامل مع Nutrition Health Coach الذي يقدم خدمات في المنطقة يعرف مثل الحالة الذهنية وخلفية التاريخ الصحي وأنماط النوم.</p>\r\n\r\n<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>النشاط البدني</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n</ul>', 'uploads/sections/images/16454804802651.jpg', '2022-01-25 00:50:19', '2022-02-21 22:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section1_en` text COLLATE utf8mb4_unicode_ci,
  `section1_ar` text COLLATE utf8mb4_unicode_ci,
  `section2_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section2_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section2_content_en` text COLLATE utf8mb4_unicode_ci,
  `section2_content_ar` text COLLATE utf8mb4_unicode_ci,
  `section2_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `name_en`, `name_ar`, `title_en`, `title_ar`, `category_id`, `content_en`, `content_ar`, `img`, `background_img`, `section1_en`, `section1_ar`, `section2_title_en`, `section2_title_ar`, `section2_content_en`, `section2_content_ar`, `section2_img`) VALUES
(85, '2022-01-18 15:58:42', '2022-02-19 22:33:30', 'General Equipment cleaning1', 'تنظيف المعدات العامة1', 'cleaner working equipment 1', 'معدات عمل أنظف 1', 4, 'Health Coach look at exercise, eating, wellness and food not just as calories and weight loss, but also emotional, mental, physical, and spiritual terms. An Integrative with Nutrition Health Coach who’s providing services in area knows like state of mind, health history background, as well as sleep patterns.Health Coach look at exercise, eating, wellness and food not just as calories and weight loss, but also emotional, mental, physical, and spiritual terms. An Integrative with Nutrition Health Coach who’s providing services in area knows like state of mind, health history background, as well as sleep patterns.\r\n\r\nHealth Coach look at exercise, eating, wellness and food not just as calories and weight loss, but also emotional, mental, physical, and spiritual terms. An Integrative with Nutrition Health Coach who’s providing services in area knows like state of mind, health history background, as well as sleep patterns.', 'ينظر مدرب الصحة إلى التمارين والأكل والعافية والطعام ليس فقط كالسعرات الحرارية وفقدان الوزن ، ولكن أيضًا من الناحية العاطفية والعقلية والجسدية والروحية. يتكامل مع Nutrition Health Coach الذي يقدم خدمات في المنطقة يعرف مثل الحالة الذهنية وخلفية التاريخ الصحي وأنماط النوم.\r\n', 'uploads/services/images/16426129765164.webp', 'uploads/services/images/164261297622827.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مركبات النقل البلدية</h3>\r\n	</li>\r\n</ul>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261297638628.webp'),
(86, '2022-01-18 16:01:35', '2022-01-20 13:35:32', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 3, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426130079693.webp', 'uploads/services/images/164261300780727.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261300836428.webp'),
(87, '2022-01-18 16:21:51', '2022-01-19 18:24:23', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 3, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426130622362.webp', 'uploads/services/images/164261306287627.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261306238328.webp'),
(89, '2022-01-20 00:38:02', '2022-01-20 00:43:37', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 4, 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426354801075.webp', 'uploads/services/images/16426354827095.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261306238328.webp');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wats` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_app_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_app_en` text COLLATE utf8mb4_unicode_ci,
  `address_en` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `wats`, `about_app_ar`, `contact_phone`, `contact_email`, `fb_link`, `tw_link`, `insta_link`, `yt_link`, `name`, `logo`, `address`, `name_en`, `about_app_en`, `address_en`, `description_ar`, `description_en`) VALUES
(2, '2020-05-22 08:50:20', '2020-12-22 16:16:36', '123456789', '<p>ينظر مدرب الصحة إلى التمارين والأكل والعافية والطعام ليس فقط كالسعرات الحرارية وفقدان الوزن ، ولكن أيضًا من الناحية العاطفية والعقلية والجسدية والروحية. يتكامل مع Nutrition Health Coach الذي يقدم خدمات في المنطقة يعرف مثل الحالة الذهنية وخلفية التاريخ الصحي وأنماط النوم.</p>\r\n\r\n<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>النشاط البدني</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n</ul>', '123456789', 'bluezone.adv@gmail.com', 'https://www.facebook.com/bluezone.web', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com//', 'لايف', 'uploads/logos/images//1645459535174logo.png', 'برجاء ادخال العنوان من صفحه الاعدادات في الداشبورد', 'Life', '<p>A health coach looks at exercise, eating, wellness and food not only as calories and weight loss, but also emotionally, mentally, physically and spiritually. Integrates with Nutrition Health Coach which provides area-defined services such as state of mind, background health history and sleep patterns.</p>\r\n\r\n<h2>Related areas of use</h2>\r\n\r\n<ul>\r\n	<li>physical activity</li>\r\n	<li>electric motors</li>\r\n	<li>conveyors</li>\r\n	<li>hydraulic parts and equipment, servicemen</li>\r\n</ul>', 'برجاء ادخال العنوان من صفحه الاعدادات في الداشبورد', 'جمله عن الموقع جمله عن الموقع جمله عن الموقع جمله عن الموقع جمله عن الموقع', 'short description about website short description about website short description about website short description about website');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity` tinyint(4) DEFAULT '1',
  `num` int(11) NOT NULL,
  `img` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `activity`, `num`, `img`, `text`) VALUES
(5, '2021-07-31 10:30:54', '2022-02-19 23:00:49', 1, 3, 'upload/sliders/1645308049621168919b633.jpg', 'slider3'),
(6, '2021-07-31 10:31:17', '2022-02-19 23:01:03', 1, 4, 'upload/sliders/16453080636211689f64551.jpg', 'slider4'),
(7, '2022-02-19 23:01:32', '2022-02-19 23:01:32', 1, 1, 'upload/sliders/1645308092621168bc21603.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appearance` tinyint(1) DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `link`, `appearance`, `img`, `created_at`, `updated_at`) VALUES
(11, 'https://www.yallakora.com/', 1, 'uploads/socials/images/164549024174913.jpg', '2022-02-22 01:30:26', '2022-02-22 01:37:21'),
(12, 'https://www.youm7.com/', 1, 'uploads/socials/images/16454899784319.jpg', '2022-02-22 01:32:59', '2022-02-22 01:32:59'),
(13, 'https://www.youm7.com/', 1, 'uploads/socials/images/16454900901697.jpg', '2022-02-22 01:34:50', '2022-02-22 01:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `job_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'islam', 'eslam.iniesta@gmail.com', 1, NULL, '$2y$10$p9Xj5VVwfp6Bsqk5m3uXpO68A1LNhmtPM0Au7XH1TwWoLMbGqMXsW', NULL, NULL, NULL),
(2, 'Carolyn Buchanan', 'zita@mailinator.com', 2, NULL, '$2y$10$4zI6i4LlmWgbvFBwHOR/zOt9uBNY5YidPr7.5Mx8BDeiZ7yXltVA.', NULL, '2022-02-22 01:29:26', '2022-02-22 01:29:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_imgs`
--
ALTER TABLE `post_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_imgs`
--
ALTER TABLE `post_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
