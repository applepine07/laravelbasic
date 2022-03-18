-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-03-17 09:32:50
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `db_new_0302`
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
-- 資料表結構 `loves`
--

CREATE TABLE `loves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `students_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '愛好',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `loves`
--

INSERT INTO `loves` (`id`, `students_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', 'php', NULL, NULL),
(2, '1', 'html', NULL, NULL),
(3, '1', 'css', NULL, NULL),
(5, '10', '吃飯、睡覺、打東東', '2022-03-17 01:28:29', '2022-03-17 01:28:29'),
(6, '2', '吃飯、睡覺、打東東', '2022-03-17 02:13:27', '2022-03-17 02:13:27'),
(7, '3', '吃飯、睡覺、打東東', '2022-03-17 02:13:38', '2022-03-17 02:13:38'),
(8, '4', '吃飯、睡覺、打東東', '2022-03-17 02:13:43', '2022-03-17 02:13:43'),
(9, '5', '吃飯、睡覺、打大雄', '2022-03-17 02:13:55', '2022-03-17 02:13:55'),
(10, '6', '吃飯、睡覺、打東東', '2022-03-17 02:14:03', '2022-03-17 02:14:03'),
(11, '7', 'php', '2022-03-17 02:14:09', '2022-03-17 02:14:09'),
(12, '7', 'html', '2022-03-17 02:14:09', '2022-03-17 02:14:09'),
(13, '7', 'css', '2022-03-17 02:14:09', '2022-03-17 02:14:09'),
(14, '7', 'bootstrap', '2022-03-17 02:14:09', '2022-03-17 02:14:09'),
(15, '8', 'php', '2022-03-17 02:14:14', '2022-03-17 02:14:14'),
(16, '8', 'html', '2022-03-17 02:14:14', '2022-03-17 02:14:14'),
(17, '8', 'css', '2022-03-17 02:14:14', '2022-03-17 02:14:14'),
(18, '8', 'bootstrap', '2022-03-17 02:14:14', '2022-03-17 02:14:14');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_15_053426_create_cars_table', 2),
(15, '2022_03_16_033113_create_phones_table', 3),
(16, '2022_03_16_034852_add_phoneid_students_table', 3),
(17, '2022_03_15_054446_create_students_table', 4),
(19, '2022_03_16_062117_create_phones_table', 5),
(20, '2022_03_16_063445_create_loves_table', 5);

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
  `students_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '電話',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `phones`
--

INSERT INTO `phones` (`id`, `students_id`, `name`, `created_at`, `updated_at`) VALUES
(9, '10', '4444', '2022-03-17 01:28:29', '2022-03-17 01:28:29'),
(13, '1', '0911-111-111', '2022-03-17 01:57:24', '2022-03-17 01:57:24'),
(14, '2', '0922-222-222', '2022-03-17 02:13:27', '2022-03-17 02:13:27'),
(15, '3', '0933-333-333', '2022-03-17 02:13:38', '2022-03-17 02:13:38'),
(16, '4', '123456', '2022-03-17 02:13:43', '2022-03-17 02:13:43'),
(17, '5', '1111', '2022-03-17 02:13:55', '2022-03-17 02:13:55'),
(18, '6', '12345', '2022-03-17 02:14:03', '2022-03-17 02:14:03'),
(19, '7', '111111', '2022-03-17 02:14:09', '2022-03-17 02:14:09'),
(20, '8', '123456', '2022-03-17 02:14:14', '2022-03-17 02:14:14');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `name`, `chinese`, `english`, `math`, `created_at`, `updated_at`) VALUES
(1, '大雄', 22, 30, 11, '2022-03-15 22:00:48', '2022-03-15 22:00:48'),
(2, '哆啦', 100, 100, 100, '2022-03-15 22:00:58', '2022-03-15 22:00:58'),
(3, '靜香', 99, 99, 99, '2022-03-15 22:01:08', '2022-03-15 22:01:08'),
(4, '小夫', 58, 67, 78, '2022-03-15 22:01:18', '2022-03-15 22:01:18'),
(5, '胖虎', 85, 11, 20, '2022-03-15 22:01:27', '2022-03-15 22:01:27'),
(6, 'ddd', 30, 31, 50, '2022-03-17 00:45:23', '2022-03-17 00:45:23'),
(7, 'ddd', 30, 31, 50, '2022-03-17 00:45:55', '2022-03-17 00:45:55'),
(8, 'ddd', 30, 35, 88, '2022-03-17 01:27:10', '2022-03-17 01:27:10'),
(10, '晶', 30, 55, 89, '2022-03-17 01:28:29', '2022-03-17 01:28:29');

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
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ddd', 'ddd', NULL, 'ddd', 'ddd', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `loves`
--
ALTER TABLE `loves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
