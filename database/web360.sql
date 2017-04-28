-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 06:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web360`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', '2017-04-23 16:17:51', '2017-04-23 16:17:51'),
(2, 'TP Hồ Chí Minh', '2017-04-23 16:17:51', '2017-04-23 16:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `city_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quận Ba Đình', '2017-04-23 16:18:33', '2017-04-23 16:18:33'),
(2, 1, 'Quận Bắc Từ Liêm', '2017-04-23 16:18:33', '2017-04-23 16:18:33'),
(3, 2, 'Quận Thủ Đức', '2017-04-23 16:19:18', '2017-04-23 16:19:18'),
(4, 2, 'Quận Gò Vấp', '2017-04-23 16:19:18', '2017-04-23 16:19:18'),
(5, 1, 'Quận Nam Từ Liêm', '2017-04-23 16:19:52', '2017-04-23 16:19:52'),
(6, 1, 'Quận Tây Hồ', '2017-04-23 16:19:52', '2017-04-23 16:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `group_post`
--

CREATE TABLE `group_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_post`
--

INSERT INTO `group_post` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bất Động Sản Mua - Bán', '2017-04-23 16:20:21', '2017-04-23 16:20:21'),
(2, 'Bất Động Sản Cho Thuê', '2017-04-23 16:20:21', '2017-04-23 16:20:21');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_23_154607_create_cities_table', 2),
(4, '2017_04_23_154700_create_districts_table', 3),
(5, '2017_04_23_155000_create_type_of_customer_table', 4),
(6, '2017_04_23_155054_create_group_post_table', 5),
(7, '2017_04_23_155125_create_type_of_realestate_table', 6),
(8, '2017_04_23_155356_create_realestate_status_table', 7),
(9, '2017_04_23_155502_create_posts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `realestate_status` int(10) UNSIGNED NOT NULL,
  `area` double NOT NULL,
  `realestate_address` int(10) UNSIGNED NOT NULL,
  `type_of_realestate` int(10) UNSIGNED NOT NULL,
  `type_of_customer` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `realestate_status`, `area`, `realestate_address`, `type_of_realestate`, `type_of_customer`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test Post', 'Đây là post phục vụ việc test', 1, 1000, 1, 1, 1, 100000000, '2017-04-23 16:29:49', '2017-04-23 16:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `realestate_status`
--

CREATE TABLE `realestate_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `realestate_status`
--

INSERT INTO `realestate_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chưa Sử Dụng', '2017-04-23 16:21:03', '2017-04-23 16:21:03'),
(2, 'Đã Sử Dụng', '2017-04-23 16:21:03', '2017-04-23 16:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_customer`
--

CREATE TABLE `type_of_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_customer`
--

INSERT INTO `type_of_customer` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cá Nhân', '2017-04-23 16:21:25', '2017-04-23 16:21:25'),
(2, 'Môi Giới', '2017-04-23 16:21:25', '2017-04-23 16:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_realestate`
--

CREATE TABLE `type_of_realestate` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_post_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_realestate`
--

INSERT INTO `type_of_realestate` (`id`, `group_post_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cần Bán', '2017-04-23 16:25:24', '2017-04-23 16:25:24'),
(2, 1, 'Cần Mua', '2017-04-23 16:25:24', '2017-04-23 16:25:24'),
(3, 2, 'Cần Thuê', '2017-04-23 16:25:48', '2017-04-23 16:25:48'),
(4, 2, 'Cho Thuê', '2017-04-23 16:25:48', '2017-04-23 16:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nhật Thành', 'nhatthanh28594@gmail.com', '01692875715', '123456', 'BẮc Từ Liêm, Hà Nội', NULL, '2017-04-23 16:28:52', '2017-04-23 16:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_city_id_foreign` (`city_id`);

--
-- Indexes for table `group_post`
--
ALTER TABLE `group_post`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_realestate_status_foreign` (`realestate_status`),
  ADD KEY `posts_realestate_address_foreign` (`realestate_address`),
  ADD KEY `posts_type_of_realestate_foreign` (`type_of_realestate`),
  ADD KEY `posts_type_of_customer_foreign` (`type_of_customer`);

--
-- Indexes for table `realestate_status`
--
ALTER TABLE `realestate_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_customer`
--
ALTER TABLE `type_of_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_realestate`
--
ALTER TABLE `type_of_realestate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_of_realestate_group_post_id_foreign` (`group_post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `group_post`
--
ALTER TABLE `group_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `realestate_status`
--
ALTER TABLE `realestate_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type_of_customer`
--
ALTER TABLE `type_of_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type_of_realestate`
--
ALTER TABLE `type_of_realestate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_realestate_address_foreign` FOREIGN KEY (`realestate_address`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_realestate_status_foreign` FOREIGN KEY (`realestate_status`) REFERENCES `realestate_status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_type_of_customer_foreign` FOREIGN KEY (`type_of_customer`) REFERENCES `type_of_customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_type_of_realestate_foreign` FOREIGN KEY (`type_of_realestate`) REFERENCES `type_of_realestate` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `type_of_realestate`
--
ALTER TABLE `type_of_realestate`
  ADD CONSTRAINT `type_of_realestate_group_post_id_foreign` FOREIGN KEY (`group_post_id`) REFERENCES `group_post` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
