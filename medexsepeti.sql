-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2023 at 06:13 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medexsepeti`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `desc`, `created_at`, `updated_at`, `image`) VALUES
(1, 'drug', 'Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2023-03-26 14:32:05', '2023-03-26 14:32:05', 'uploads/brand/_Brand_205-1679848325.jpg'),
(2, 'TRIUMEQ, Triumeq PD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2023-03-26 14:48:58', '2023-03-26 14:48:58', 'uploads/brand/_Brand_619-1679849338.jpg'),
(3, 'CIBINQO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2023-03-26 14:49:43', '2023-03-26 14:49:43', 'uploads/brand/_Brand_575-1679849383.jpg'),
(4, 'Sectral', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2023-03-26 14:50:49', '2023-03-26 14:50:49', 'uploads/brand/_Brand_644-1679849449.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Analgesics', '2023-03-26 15:02:12', '2023-03-26 15:02:12'),
(2, 'Antidepressants', '2023-03-26 15:02:25', '2023-03-26 15:02:25'),
(3, 'Antihistamines', '2023-03-26 15:02:32', '2023-03-26 15:02:32'),
(4, 'Antipsychotics', '2023-03-26 15:02:40', '2023-03-26 15:02:40'),
(5, 'Cardiovascular', '2023-03-26 15:02:50', '2023-03-26 15:02:50'),
(6, 'Diuretics', '2023-03-26 15:03:06', '2023-03-26 15:03:06'),
(7, 'Hormones', '2023-03-26 15:03:14', '2023-03-26 15:03:14'),
(8, 'Immunomodulators', '2023-03-26 15:03:23', '2023-03-26 15:03:23'),
(9, 'Vaccines', '2023-03-26 15:03:32', '2023-03-26 15:03:32'),
(10, 'Vaccines', '2023-03-26 15:03:41', '2023-03-26 15:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_22_125456_create_categories_table', 1),
(6, '2023_03_22_125505_create_products_table', 1),
(7, '2023_03_24_125047_create_settings_table', 2),
(8, '2023_03_25_105412_add_column_to_products_table', 3),
(9, '2023_03_26_161050_create_brands_table', 4),
(10, '2023_03_26_161609_add_column_to_brands_table', 5),
(11, '2023_03_26_172406_add_column_to_products_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount` double(8,2) DEFAULT '0.00',
  `visitors` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `barcode`, `short_desc`, `long_text`, `image`, `quantity`, `price`, `category_id`, `created_at`, `updated_at`, `discount`, `visitors`) VALUES
(1, 'Super Admin', 'iVBORw0KGgoAAAANSUhEUgAAATgAAAAeAQMAAACCM5C2AAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAD5JREFUOI1j+MzDfP4Mj/1hY/4P53mYeezP29gYMx84YPD5z58zzGdsmA0O/zl84M95hlF1o+pG1Y2qG2B1AHadQFW0KhTIAAAAAElFTkSuQmCC', 'sfghgfd', 'sdfg', 'defaults/product.png', 12, 12343.00, 9, '2023-03-24 12:53:07', '2023-03-24 12:53:07', 0.00, 0),
(2, 'gehad', 'iVBORw0KGgoAAAANSUhEUgAAALQAAAAeAQMAAAC/hKb5AAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAClJREFUKJFj+MzDzG/A8+GAwQeewzbMDIfP/Plvw3/mA8Oo+Kj4EBQHAOhiQhiIdn0QAAAAAElFTkSuQmCC', 'asdfghj', 'sdfgh', 'uploads/product/_Prodcut_146-1679670369.png', 12, 12343.00, 4, '2023-03-24 13:06:09', '2023-03-24 13:06:09', 10.00, 10),
(3, 'iphone', 'iVBORw0KGgoAAAANSUhEUgAAAMoAAAAeAQMAAABXBBPSAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAC1JREFUKJFj+MzDzPCZ5/Afgw88B/4bHzDm+XDAnufDB3vjAwyjUqNSo1IwKQBZBIN80oIzqAAAAABJRU5ErkJggg==', 'sdfghjk', 'dfghjkls', 'uploads/product/_Prodcut_73-1679746240.jpg', 15, 234422.00, 2, '2023-03-25 10:10:40', '2023-03-25 10:10:40', 0.00, 1987),
(4, 'Medical Pills', 'iVBORw0KGgoAAAANSUhEUgAAAWQAAAAeAQMAAAAhG/ZwAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAERJREFUOI3tyrEJQDEIBUDBVnCVD2kfZHXBVsgqggskK/z+dVecjOmGdXyGQMqxFVgymTOl9dilO70cXi3c3Nzc3D/2BS6dUY9YycaiAAAAAElFTkSuQmCC', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'uploads/product/_Prodcut_594-1679851114.jpg', 12, 12343.00, 7, '2023-03-26 15:18:34', '2023-03-26 15:18:34', NULL, 17777),
(5, 'Acetaminophen', 'iVBORw0KGgoAAAANSUhEUgAAAWQAAAAeAQMAAAAhG/ZwAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAERJREFUOI3tyrEJAEEIBEDBdMFWhEst/mHTg2tFMBXuv4XPzSYYKagHNBaFTaRVuXmC2pv94UCfhYuwnTJ79uzZs3/sF+u0VtV1DTLjAAAAAElFTkSuQmCC', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'uploads/product/_Prodcut_67-1679851207.jpg', 144, 12.00, 6, '2023-03-26 15:20:07', '2023-03-26 15:20:07', 10.00, 155),
(6, 'Humira', 'iVBORw0KGgoAAAANSUhEUgAAAMoAAAAeAQMAAABXBBPSAAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAC1JREFUKJFj+MzDfOAMj/1h+/NnDtgc5rE/Y3zA2P7AB3vjAwyjUqNSo1IwKQC4h3lKnfxxYgAAAABJRU5ErkJggg==', 'ong established fact that a reader will be distracted by the readable c', 'ong established fact that a reader will be distracted by the readable cong established fact that a reader will be distracted by the readable c', 'uploads/product/_Prodcut_759-1679851699.jpg', 144, 200.00, 3, '2023-03-26 15:28:19', '2023-03-26 15:28:19', 6.00, 1908192869);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('image','text') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'slider_1', 'image', 'uploads/slider/_Slider_987-1679745183.jpg', '2023-03-25 09:53:04', '2023-03-25 09:53:04'),
(2, 'slider_1', 'image', 'uploads/slider/_Slider_950-1679745778.jpg', '2023-03-25 10:02:58', '2023-03-25 10:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
