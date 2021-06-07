-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2021 at 04:17 AM
-- Server version: 5.7.34
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextige_sramik`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `class` longtext COLLATE utf8mb4_unicode_ci,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `farmer_id`, `date`, `image`, `farmer_name`, `mobile`, `aadhar_no`, `work_time`, `land`, `samagr`, `village`, `posto`, `tehsil`, `district`, `state`, `pincode`, `gender`, `work`, `labour_no`, `class`, `year`, `marks`, `max`, `percentage`, `bank_name`, `ifsc`, `acc_no`, `branch`, `bank_add`, `pan`, `acc_holder`, `ex_work`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-05-06', '1622301196.png', 'gfdg', '09301271118', '54646464654', '7', '54', '546646456546', 'Jhabua', '452001', 'Petlawad', 'jhabua', 'Madhya Pradesh', '457775', 'महिला', '[\"soyabin\",\"pyaj\",\"lahsun\"]', '5', '[{\"class\":\"12\",\"year\":\"2018\",\"marks\":\"23\",\"max\":\"100\",\"percentage\":\"23\"},{\"class\":\"12\",\"year\":\"2018\",\"marks\":\"23\",\"max\":\"100\",\"percentage\":\"23\"},{\"class\":\"12\",\"year\":\"2018\",\"marks\":\"23\",\"max\":\"100\",\"percentage\":\"23\"}]', NULL, NULL, NULL, NULL, NULL, 'ggsgs', '1233', 'fgffg', 'dhdh', 'ddhdhdhd', 'dhddhdh', 'dhdfdhd', '2021-05-29 08:04:24', '2021-05-29 09:43:16'),
(3, '554', '2021-04-28', '1622456473.jpg', 'ffgg', '8770725266', '657747768658', '56', '6546', '1234563', 'Indore', 'dsgsgsg', 'ggfgdg', 'Jhabua', 'Madhya Pradesh', '452001', 'पुरुष', '[\"pyaj\",\"lahsun\",\"tractor\"]', '5', '[{\"class\":\"10\",\"year\":\"2010\",\"marks\":\"256\",\"max\":\"400\",\"percentage\":\"60\"},{\"class\":null,\"year\":null,\"marks\":null,\"max\":null,\"percentage\":null},{\"class\":null,\"year\":null,\"marks\":null,\"max\":null,\"percentage\":null}]', NULL, NULL, NULL, NULL, 'jila', 'hjkuig', '435453353', 'hdhhfdhd', 'hhhdhdhd', '456321', '3535', 'karigar', '2021-05-31 08:21:13', '2021-05-31 08:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `labours`
--

CREATE TABLE `labours` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `class` longtext COLLATE utf8mb4_unicode_ci,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labours`
--

INSERT INTO `labours` (`id`, `labour_id`, `date`, `image`, `leader_name`, `leader_contact`, `labour_name`, `dob`, `mobile_no`, `aadhar_no`, `f_name`, `age`, `samagr`, `village`, `posto`, `tehsil`, `district`, `state`, `pincode`, `gender`, `work`, `experience`, `class`, `year`, `marks`, `max`, `percentage`, `bank_name`, `ifsc`, `acc_no`, `branch`, `bank_add`, `pan`, `acc_holder`, `ex_work`, `created_at`, `updated_at`) VALUES
(7, '1', '2021-05-05', '', 'Mohan', '1234567890', 'Balmukund', '2021-05-09', '09301271118', '585928549737', 'Shankar lal', '30', '4520201', 'Alasykhedi', '452001', 'Petlawad', 'jhabua', 'Madhya Pradesh', '457775', 'पुरुष', '[\"plumber\"]', '12', '[{\"class\":\"12\",\"year\":\"2018\",\"marks\":\"23\",\"max\":\"100\",\"percentage\":\"23\"},{\"class\":\"13\",\"year\":\"2019\",\"marks\":\"34\",\"max\":\"100\",\"percentage\":\"34\"},{\"class\":\"14\",\"year\":\"2020\",\"marks\":\"12\",\"max\":\"100\",\"percentage\":\"45\"}]', NULL, NULL, NULL, NULL, 'sdgsgs', 'IDB203', '1234567890', 'petlawad', 'Ramngar', 'DYEPP3585A', 'Balmukund', NULL, '2021-05-29 06:43:57', '2021-05-31 10:26:12'),
(9, '12', '2021-05-31', '1622463844.bmp', 'Ramesh', '123456789', 'Prakash', '2021-05-12', '5353353', '355535535', 'ghghjg', '12', '445555', 'khk', 'jkhk', 'khjkh', 'hkjhj', 'hjk', '123455', 'पुरुष', '[\"driver\",\"worker\",\"mechanic\",\"electrician\"]', '6', '[{\"class\":\"10\",\"year\":\"25545\",\"marks\":\"454\",\"max\":\"5454\",\"percentage\":\"54\"},{\"class\":null,\"year\":null,\"marks\":null,\"max\":null,\"percentage\":null},{\"class\":null,\"year\":null,\"marks\":null,\"max\":null,\"percentage\":null}]', NULL, NULL, NULL, NULL, 'ddfgd', 'fdgdfg', '5255', 'dfgf', 'dgf', '5252252', 'nncb', 'gffhfh', '2021-05-31 10:24:04', '2021-05-31 10:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 3),
(20, '2014_10_12_100000_create_password_resets_table', 3),
(21, '2019_08_19_000000_create_failed_jobs_table', 3),
(22, '2021_04_15_100735_create_labours_table', 3),
(23, '2021_04_23_113542_create_farmers_table', 3),
(24, '2021_04_24_045328_create_contact_us_table', 3),
(18, '2021_05_29_101504_add_paid_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Balu', 'balmukund1998@gmail.com', NULL, '$2y$10$yqkh0gwZIbTDlkJHpEViJuYdTmotrsb/dLXVbrAvb8z6QoMhyvVH6', 'Customer', NULL, '2021-05-29 05:06:37', '2021-05-29 05:06:37'),
(2, 'admin', 'admin@admin.com', NULL, '$2y$10$ljxqPtWlWM4nlqISQD6TKeuH7zPebrqzW2yhdTMTjlNbAwckhydhK', 'Admin', NULL, '2021-05-29 13:30:53', '2021-05-29 13:30:53'),
(3, 'balu', 'krikironline@gmail.com', NULL, '$2y$10$ma.Rmf9ccPPUSk9uz8i8L.56LkeazNDnOeHRhEUR9oc0U8AQfX2UC', 'Customer', NULL, '2021-06-03 04:19:20', '2021-06-03 04:19:20'),
(4, 'balu', 'admin123456@admin.com', NULL, '$2y$10$iOK4PhTL5Xr7lwQMJc310.2rY97W2PeDGCxtgI48iH8IU/t2wAywe', 'Customer', NULL, '2021-06-03 04:20:20', '2021-06-03 04:20:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labours`
--
ALTER TABLE `labours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `labours`
--
ALTER TABLE `labours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
