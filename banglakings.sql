-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 03:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banglakings`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `description`, `publication_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Banglakings Software', '<p>Embedding YouTube videos in modals requires additional JavaScript not in Bootstrap to automatically stop playback and more.&nbsp;<a href=\"https://stackoverflow.com/questions/18622508/bootstrap-3-and-youtube-in-modal\">See this helpful Stack Overflow post</a>&nbsp;for more information.</p>', 1, NULL, '2019-03-31 06:47:55', '2019-03-31 06:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `street`, `location`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'banglakings@gmail.com', '0285693147', '<p>Road 13 House 8/1/A Level-2 Dhanmondi 27 </p>', 'Dhaka Bangladesh', 1, '2019-04-01 06:46:58', '2019-04-01 06:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_upload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_upload`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, '1553930107_logo_maxresdefault.jpg', 0, '2019-03-29 23:04:39', '2019-04-01 05:05:08'),
(2, '1553930264_logo_1.jpg', 0, '2019-03-29 23:08:38', '2019-04-01 05:19:32'),
(3, '1553930384_logo_images.jpg', 0, '2019-03-30 01:19:44', '2019-03-30 01:20:09'),
(4, '1554116690_logo_BKS-web.png', 1, '2019-04-01 05:04:53', '2019-04-01 05:19:36');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_28_103015_create_logos_table', 2),
(4, '2019_03_30_075552_create_teams_table', 3),
(5, '2019_03_31_124008_create_abouts_table', 4),
(6, '2019_04_01_044835_create_works_table', 5),
(7, '2019_04_01_123834_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_photo`, `name`, `designation`, `publication_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1554121666_teammember_mahmudullah.png', 'Mr. Riad', 'Software Developer', 1, NULL, '2019-03-30 03:20:08', '2019-04-01 06:27:46'),
(2, '1554121645_teammember_bV4NddlW9p7uyNWYJDyfTN2jgra4JPRkmqJPlpXT.jpeg', 'Mr. Rahim', 'Web Developer', 1, NULL, '2019-03-30 03:37:39', '2019-04-01 06:27:26'),
(4, '1554121629_teammember_2-88.jpg', 'Mr. Nasir Hossain', 'CMS Developer', 1, NULL, '2019-03-30 04:35:52', '2019-04-01 06:27:09'),
(5, '1553942306_teammember_5-18.jpg', 'Mr. Tamim', 'Graphic Designer', 1, NULL, '2019-03-30 04:38:27', '2019-03-30 04:38:27'),
(6, '1553942352_teammember_1536734921-Mashrafe_Mortaza_AP0033.jpeg', 'Mr. Mashrafi', 'Android Developer', 1, NULL, '2019-03-30 04:39:12', '2019-03-30 04:39:12'),
(7, '1553943757_teammember_images (1).jpg', 'Mr. Rubel', 'Software Developer', 1, NULL, '2019-03-30 05:02:37', '2019-04-01 06:20:12'),
(8, '1554031837_teammember_taskin-ahmed.jpg', 'Mr. Taskin', 'Developer', 1, NULL, '2019-03-31 05:30:39', '2019-04-01 06:20:08'),
(10, '1554121702_teammember_shakib-al-hasan-ban.png', 'Mr. Sakib Al Hasan', 'Back end Developer', 1, NULL, '2019-04-01 06:28:22', '2019-04-01 06:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Banglakings', 'banglakings@gmail.com', NULL, '$2y$10$WglY3fC7XmapdVuoWZoRMu5EjH3Ow6ZstE/stG4gVdJx9NARWCXUi', NULL, '2019-03-28 03:28:20', '2019-03-28 03:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_upload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `project_upload`, `project_title`, `publication_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '1554119909_projectimg_portfolio-thumbnail-04-dark.jpg', 'WordPress Theme Development', 1, NULL, '2019-03-31 23:29:57', '2019-04-01 05:58:29'),
(3, '1554119898_projectimg_portfolio-thumbnail-01-dark.jpg', 'Social Marketing', 1, NULL, '2019-04-01 00:44:37', '2019-04-01 05:58:19'),
(4, '1554119886_projectimg_portfolio-thumbnail-03-dark.jpg', 'Web Application Development', 1, NULL, '2019-04-01 00:45:01', '2019-04-01 05:58:07'),
(5, '1554119871_projectimg_portfolio-item.jpg', 'Mobile App Development', 1, NULL, '2019-04-01 00:47:49', '2019-04-01 05:57:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
