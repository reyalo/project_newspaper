-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2022 at 07:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `active`, `created_at`, `updated_at`) VALUES
(2, 'Politics', 'alkddjfiejl', 0, '2022-07-01 00:50:13', '2022-08-08 05:47:06'),
(14, 'World', 'It contain world news', 1, '2022-07-03 01:41:53', '2022-07-03 01:41:53'),
(15, 'Economy', 'Vel magna ullam quia', 1, '2022-08-05 01:36:33', '2022-08-05 01:36:33'),
(16, 'Showbiz', 'Autem ut nisi ut quiAutem ut nisi ut quiAute', 1, '2022-08-05 01:37:16', '2022-08-05 01:38:01'),
(17, 'Halee Giles', 'Suscipit qui nihil a', 0, '2022-08-05 01:37:26', '2022-08-05 08:37:07'),
(18, 'Katelyn Baxter', 'Ipsa irure consequa', 0, '2022-08-05 01:37:29', '2022-08-05 08:37:06'),
(19, 'Robin Rivera', 'Proident ducimus m', 1, '2022-08-05 01:37:32', '2022-08-05 01:37:32'),
(20, 'Timothy Waller', 'Explicabo Fugiat u', 0, '2022-08-05 01:37:35', '2022-08-05 08:37:03'),
(21, 'Entertainment', 'Dolores aperiam eos', 0, '2022-08-05 01:37:38', '2022-08-08 05:50:30'),
(23, 'Sports', 'Amet tempore fugia', 1, '2022-08-08 05:49:04', '2022-08-08 05:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_07_01_034414_create_categories_table', 1),
(17, '2022_07_01_075631_create_posts_table', 2),
(18, '2022_08_05_081135_create_frontends_table', 2),
(19, '2022_08_06_052106_create_postcs_table', 3),
(20, '2022_08_06_052141_create_comments_table', 3),
(23, '2014_10_12_000000_create_users_table', 4),
(24, '2022_08_06_091346_create_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_name`, `post_title`, `category_id`, `short_description`, `long_description`, `post_image`, `active`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'Momo', 'Delicous', 19, 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', '[\"post_images\\/Momo_1740593824427496.jpg\"]', 0, 16, '2022-08-05 07:18:23', '2022-08-08 05:54:02'),
(2, 'Caesar Webb', 'Ipsa et amet eius', 18, 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', '[\"post_images\\/Caesar Webb_1740327379461526.jpg\"]', 1, 2, '2022-08-05 07:18:43', '2022-08-05 08:56:00'),
(3, 'Basil Watson', 'Ex atque dolor eaque', 22, 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', '[\"post_images\\/Basil Watson_1740327401241314.jpg\"]', 1, 8, '2022-08-05 07:19:04', '2022-08-06 09:46:53'),
(4, 'Dexter Munoz', 'Expedita non nisi qu', 15, 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', 'Alias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliquiAlias ut quia aliqui', '[\"post_images\\/Dexter Munoz_1740327420023601.jpg\"]', 1, 5, '2022-08-05 07:19:22', '2022-08-06 10:12:31'),
(5, 'Life is RUET', 'Perferendis ea magni', 16, 'Voluptate id maxime', 'Voluptate id maxime Voluptate id maxime Voluptate id maxime .Voluptate id maxime Voluptate id maxime Voluptate id maxime .Voluptate id maxime Voluptate id maxime Voluptate id maxime .Voluptate id maxime Voluptate id maxime Voluptate id maxime .Voluptate id maxime Voluptate id maxime Voluptate id maxime .Voluptate id maxime Voluptate id maxime Voluptate id maxime .', '[\"post_images\\/Life is RUET_1740330032655903.jpg\",\"post_images\\/Life is RUET_1740330032656016.jpg\",\"post_images\\/Life is RUET_1740330032656073.jpg\"]', 1, 155, '2022-08-05 08:00:54', '2022-08-08 05:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Black Jabbar', 'cheetaof71@gmail.com', NULL, '$2y$10$Kw5LrIEIxqR.Fr3zzZg2Xe8zRG5Xwk5iabgrpCMyNoFnKI73yli/W', 1, NULL, '2022-08-06 03:48:46', '2022-08-06 03:48:46'),
(2, 'wp-include', 'nademmdreyal2@gamil.com', NULL, '$2y$10$8MbMBtVqFQopQR/ROJlwGObR/GBXblzgzkbHbB0dhY8ycHOvuTSEm', 0, NULL, '2022-08-06 09:46:53', '2022-08-06 09:46:53'),
(3, 'Songram vai', 'jabbarisback@gmail.com', NULL, '$2y$10$BVp1JAKivQGF0gr1UenocuTLSC6HV2n/FzSM2gf1uF5DGSyVYTKbC', 0, NULL, '2022-08-08 05:20:58', '2022-08-08 05:20:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
