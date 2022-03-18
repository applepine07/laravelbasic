-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-03-17 04:48:14
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `db_0315`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `dogs`
--

CREATE TABLE `dogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
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
-- 資料表結構 `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `loves`
--

CREATE TABLE `loves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '愛好',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `loves`
--

INSERT INTO `loves` (`id`, `student_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', '打球', NULL, NULL),
(2, '1', 'PHP', NULL, NULL),
(7, '15', '15', '2022-03-17 01:26:05', '2022-03-17 01:26:05'),
(8, '15', '16', '2022-03-17 01:26:05', '2022-03-17 01:26:05'),
(9, '15', '17', '2022-03-17 01:26:05', '2022-03-17 01:26:05'),
(10, '15', '18', '2022-03-17 01:26:05', '2022-03-17 01:26:05'),
(11, '16', '35,36,67', '2022-03-17 01:27:32', '2022-03-17 01:27:32'),
(12, '17', '46', '2022-03-17 01:27:52', '2022-03-17 01:27:52'),
(13, '17', '47', '2022-03-17 01:27:52', '2022-03-17 01:27:52'),
(14, '17', '48', '2022-03-17 01:27:52', '2022-03-17 01:27:52'),
(15, '17', '49', '2022-03-17 01:27:52', '2022-03-17 01:27:52'),
(16, '14', '41', '2022-03-17 02:12:22', '2022-03-17 02:12:22'),
(17, '14', '42', '2022-03-17 02:12:22', '2022-03-17 02:12:22'),
(18, '14', '43', '2022-03-17 02:12:22', '2022-03-17 02:12:22'),
(19, '18', '16', '2022-03-17 03:30:27', '2022-03-17 03:30:27'),
(20, '19', '36', '2022-03-17 03:34:18', '2022-03-17 03:34:18');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_03_15_053440_create_cars_table', 1),
(16, '2022_03_15_054849_create_students_table', 2),
(17, '2022_03_15_055336_add_address_students_table', 2),
(22, '2022_03_15_062852_create_flights_table', 3),
(23, '2022_03_15_065238_create_dogs_table', 3),
(24, '2022_03_16_033020_create_phones_table', 3),
(27, '2022_03_16_055928_create_loves_table', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `personal_access_tokens`
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
-- 資料表結構 `phones`
--

CREATE TABLE `phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '電話',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `phones`
--

INSERT INTO `phones` (`id`, `student_id`, `name`, `created_at`, `updated_at`) VALUES
(6, '1', '55688', '2022-03-16 07:51:23', '2022-03-16 07:51:23'),
(7, '3', '12345', '2022-03-16 07:51:30', '2022-03-16 07:51:30'),
(8, '13', NULL, '2022-03-16 07:51:37', '2022-03-16 07:51:37'),
(10, '15', '14', '2022-03-17 01:26:05', '2022-03-17 01:26:05'),
(11, '16', '34', '2022-03-17 01:27:32', '2022-03-17 01:27:32'),
(12, '17', '45', '2022-03-17 01:27:52', '2022-03-17 01:27:52'),
(13, '14', '54', '2022-03-17 02:12:22', '2022-03-17 02:12:22'),
(14, '18', '15', '2022-03-17 03:30:27', '2022-03-17 03:30:27'),
(15, '19', '35', '2022-03-17 03:34:18', '2022-03-17 03:34:18');

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinese` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `name`, `chinese`, `english`, `math`, `address`, `created_at`, `updated_at`) VALUES
(1, 'amy', 91, 92, 12334, 'test', NULL, '2022-03-16 07:47:59'),
(2, 'bob', 81, 82, 123, 'test', NULL, '2022-03-16 07:49:17'),
(3, 'cat', 71, 72, 73, 'test', NULL, '2022-03-15 18:43:07'),
(5, 'egg', 51, 52, 53, NULL, '2022-03-14 23:29:34', '2022-03-14 23:29:34'),
(6, 'fax', 11, 12, 13, NULL, '2022-03-15 00:09:32', '2022-03-15 00:09:32'),
(7, 'kk', 100, 72, 73, 'test', '2022-03-15 17:06:35', '2022-03-15 18:43:07'),
(8, 'qq', 12, 13, 14, NULL, '2022-03-15 23:21:27', '2022-03-15 23:21:27'),
(9, 'aa', 22, 233, 33, NULL, '2022-03-15 23:25:04', '2022-03-15 23:25:04'),
(10, 'cc', 31, 32, 33, NULL, '2022-03-15 23:25:41', '2022-03-15 23:25:41'),
(11, 'cc', 31, 32, 33, NULL, '2022-03-16 07:27:06', '2022-03-16 07:27:06'),
(12, 'ddd', 1, 2, 3, NULL, '2022-03-16 07:28:29', '2022-03-16 07:28:29'),
(13, 'ddd', 1, 2, 3, NULL, '2022-03-16 07:28:41', '2022-03-16 07:28:41'),
(14, 's0317', 51, 52, 53, NULL, '2022-03-17 01:25:15', '2022-03-17 01:25:15'),
(15, 'B0317', 11, 12, 13, NULL, '2022-03-17 01:26:05', '2022-03-17 01:26:05'),
(16, 'f0317', 31, 32, 33, NULL, '2022-03-17 01:27:32', '2022-03-17 01:27:32'),
(17, '41', 42, 43, 44, NULL, '2022-03-17 01:27:52', '2022-03-17 01:27:52'),
(18, '11', 12, 13, 34, NULL, '2022-03-17 03:30:27', '2022-03-17 03:30:27'),
(19, '31', 32, 33, 54, NULL, '2022-03-17 03:34:18', '2022-03-17 03:34:18');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 資料表索引 `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `loves`
--
ALTER TABLE `loves`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 資料表索引 `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `loves`
--
ALTER TABLE `loves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
