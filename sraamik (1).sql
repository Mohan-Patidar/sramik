-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2021 at 04:35 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sraamik`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `farmers`
--

DROP TABLE IF EXISTS `farmers`;
CREATE TABLE IF NOT EXISTS `farmers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `farmer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `farmer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `samagr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tehsil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` text COLLATE utf8mb4_unicode_ci,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_holder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `farmer_id`, `date`, `image`, `farmer_name`, `mobile`, `aadhar_no`, `work_time`, `land`, `samagr`, `village`, `posto`, `tehsil`, `district`, `state`, `pincode`, `gender`, `work`, `labour_no`, `class`, `year`, `marks`, `max`, `percentage`, `bank_name`, `ifsc`, `acc_no`, `branch`, `bank_add`, `pan`, `acc_holder`, `ex_work`, `created_at`, `updated_at`) VALUES
(1, '12', '2021-09-13', '', 'kaluram', '08305482009', '22424242442', NULL, 'India', '33453433', 'Petlawad', NULL, NULL, NULL, 'Madhya Pradesh', '457773', 'महिला', '[\"soyabin\",\"pyaj\"]', NULL, '[{\"class\":\"sgrsd\",\"year\":\"9988\",\"marks\":\"888\",\"max\":\"88888\",\"percentage\":\"88\"},{\"class\":null,\"year\":null,\"marks\":null,\"max\":null,\"percentage\":null},{\"class\":null,\"year\":null,\"marks\":null,\"max\":null,\"percentage\":null}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-05 03:13:01', '2021-09-05 03:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `labours`
--

DROP TABLE IF EXISTS `labours`;
CREATE TABLE IF NOT EXISTS `labours` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `labour_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leader_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leader_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `samagr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tehsil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_holder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_15_100735_create_labours_table', 1),
(5, '2021_04_23_113542_create_farmers_table', 1),
(6, '2021_04_24_045328_create_contact_us_table', 1),
(7, '2021_07_28_160203_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_farmers`
--

DROP TABLE IF EXISTS `register_farmers`;
CREATE TABLE IF NOT EXISTS `register_farmers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `farmer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_farmers`
--

INSERT INTO `register_farmers` (`id`, `farmer_name`, `address`, `gender`, `work`) VALUES
(1, 'kaluram', 'Patel Restaurant Gandhi chowk Petlawad', 'on', 'pyaj'),
(2, 'kaluram', 'Patel Restaurant Gandhi chowk Petlawad', 'on', 'soyabin,pyaj'),
(3, 'kaluram', 'Petlawad', 'male', 'bagbani'),
(4, 'kaluram', 'Petlawad', 'male', 'bagbani'),
(5, 'dfdf', 'sddgf', 'male', 'gehu'),
(6, 'kaluram', 'Petlawad', 'male', 'bagbani'),
(7, 'kaluram', 'Petlawad', 'male', 'bagbani');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_number_unique` (`phone_number`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '', NULL, '$2y$10$4Nvg6wSvmMVvfOigOw7L7.sj7U2GbkblDXTcwJRin.iktX06qhpeO', NULL, '2021-08-08 08:39:37', '2021-08-08 08:39:37'),
(2, 'Nayan', 'patidar123@gmail.com', 'farmer', '+918305482009', NULL, '$2y$10$Znep7Ey0Uvo.W5UxwLly2.wDrUoa.W3RAPkq3bnDQvWdUatv1nhvO', NULL, '2021-09-03 04:16:42', '2021-09-03 04:16:42'),
(3, 'admin12', 'durgeshmandal12@gmail.com', 'farmer', '+918770725268', NULL, '$2y$10$Mw16lj9zIPeUgX.RO8KLr.Mo4ISgUjJEvPIEbmFDANlwMmBVTGnaG', NULL, '2021-09-03 05:40:13', '2021-09-03 05:40:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
