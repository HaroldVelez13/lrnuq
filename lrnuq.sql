-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-03-2019 a las 05:33:11
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lrnuq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `report_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `description`, `url_name`, `created_at`, `updated_at`, `report_id`) VALUES
(1, 'report_1', 'report_1.jpg', '2019-03-19 05:00:00', '2019-03-22 05:00:00', 7),
(2, 'report_2', 'report_2.jpg', '2019-03-15 05:00:00', '2019-03-22 05:00:00', 7),
(3, 'report_3', 'report_3.jpg', '2019-03-14 05:00:00', '2019-03-29 05:00:00', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_10_31_162633_scaffoldinterfaces', 1),
(4, '2019_03_14_225921_create_permission_tables', 1),
(5, '2019_03_20_070149_plants', 2),
(6, '2019_03_20_070832_nets', 3),
(7, '2019_03_20_071206_reports', 4),
(8, '2019_03_20_071322_images', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nets`
--

CREATE TABLE `nets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_learning` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_layers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `establishment_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampling_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plant_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `nets`
--

INSERT INTO `nets` (`id`, `name`, `type`, `rate_learning`, `itera`, `number_layers`, `establishment_time`, `sampling_time`, `reference`, `plant_id`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'red chida', 'tipo muy chida', 'aja', 'sicas', '45', '45', '120', '5', 2, 1, '2019-03-22 07:33:08', '2019-03-23 06:49:43'),
(10, 'red', 'de tipo', '12', '2', '21', '21', '21', 'una', 2, 1, '2019-03-23 03:40:08', '2019-03-23 03:40:08'),
(11, 'mas red', 'de otro tipo', 'reatete', 'iterateete', 'muchas', 'demaciado', 'alguito', 'otra red', 2, 1, '2019-03-23 04:06:24', '2019-03-23 04:06:24'),
(12, 'una net', 'iji', 'jiji', 'jijij', 'ijij', 'ijij', 'hfg', 'fgh', 2, 1, '2019-03-23 06:50:41', '2019-03-23 06:56:00'),
(13, 'asdfasdf', 'sdfasdf', 'sdfasdf', 'asdfasdfas', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 2, 1, '2019-03-28 03:53:56', '2019-03-28 03:53:56'),
(14, 'ddfgsdf', 'dfgsds', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfgsdf', 'sdfgsdfg', 'sdfgsdfg', 6, 7, '2019-03-30 03:58:56', '2019-03-30 03:58:56'),
(15, 'Full name', 'Full name', 'Full name', 'Full name', 'Full name', 'Full name', 'Full name', 'Full name', 6, 7, '2019-03-30 04:23:24', '2019-03-30 04:23:24'),
(16, 'algooo', 'algooo', 'algooo', 'algooo', 'algooo', 'algooo', 'algooo', 'algoooalgooo', 10, 7, '2019-03-30 04:42:35', '2019-03-30 04:42:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plants`
--

CREATE TABLE `plants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plants`
--

INSERT INTO `plants` (`id`, `name`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Red de ejemplo one two edit again', 'Esto es una red de ejemplo muy chula upa', 1, '2019-03-20 14:40:49', '2019-03-22 01:43:42'),
(5, 'Edit plant new', 'Que chevere esto ve', 1, '2019-03-20 19:45:58', '2019-03-22 01:16:12'),
(6, 'Un nombre muy grande, vamos a ver que pasa aaa', 'Un nombre muy grande, vamos a ver que pasaUn nombre muy grande, vamos a ver que pasa holin', 1, '2019-03-20 20:44:13', '2019-03-22 03:09:21'),
(7, 'planta ejemplo new', 'planta ejemplo newplanta ejemplo new', 1, '2019-03-22 01:05:05', '2019-03-22 01:05:05'),
(10, 'planta ejemplo new 5', 'planta ejemplo newplanta ejemplo new tres', 1, '2019-03-22 01:08:40', '2019-03-22 01:08:40'),
(12, 'One more bb', 'Oh yea bby rico', 1, '2019-03-22 02:49:51', '2019-03-22 03:52:33'),
(13, 'planta ejemplo', 'ejemplicimonimo', 1, '2019-03-23 04:05:35', '2019-03-23 04:05:51'),
(14, 'hooooooooooooooooooooooooooooooooooooooooo000000000000000000000000000000000000000000000000oooooooooooooooooooooooooolaaaaaaaaaaaaaaaa', 'hla', 1, '2019-03-28 04:01:09', '2019-03-28 04:01:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_learning` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reports`
--

INSERT INTO `reports` (`id`, `name`, `type`, `itera`, `rate_learning`, `net_id`, `created_at`, `updated_at`, `completed`) VALUES
(1, 'un report', 'netcita', 'sicas', 'mucho', NULL, '2019-03-23 05:51:27', '2019-03-23 06:59:26', 0),
(2, 'Editado', 'fgdsfsd', 'gdfgsd', 'gsdfg', 9, '2019-03-23 06:35:52', '2019-03-23 07:05:33', 0),
(3, 'editadicimo', 'asdasd', 'asdasd', 'asdasd', 9, '2019-03-23 06:55:28', '2019-03-23 07:05:44', 0),
(6, 'yuuuuuuu', 'uuuuuuuuuuu', 'uuuuuuuu', 'uuuuuuuu', 9, '2019-03-23 07:13:13', '2019-03-23 07:13:13', 0),
(7, 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 14, '2019-03-30 04:53:24', '2019-03-30 04:53:24', 0),
(8, 'unolindo', 'dasdasd', 'asdasd', 'asdasd', 9, '2019-03-31 01:50:06', '2019-03-31 01:50:06', 0),
(9, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 9, '2019-03-31 01:50:34', '2019-03-31 01:50:34', 0),
(10, 'fghfgh', 'fffffffff', 'ffffffff', 'ffffffff', 9, '2019-03-31 01:52:16', '2019-03-31 01:52:16', 0),
(11, 'ddd', 'ddd', 'ddd', 'ddd', 9, '2019-03-31 01:54:19', '2019-03-31 01:54:19', 0),
(12, 'dfghdf', 'dfghdfgh', 'dfghdfgh', 'fghdfgh', 9, '2019-03-31 01:57:52', '2019-03-31 01:57:52', 0),
(13, 'dfgdfgdfg', 'dfgdfgdf', 'dfgdfg', 'dfgdfg', 9, '2019-03-31 02:02:23', '2019-03-31 02:02:23', 0),
(14, 'dfgh', 'dfgh', 'dfgh', 'dfgh', 9, '2019-03-31 02:10:13', '2019-03-31 02:10:13', 0),
(15, 'ffffffff', 'fffffffff', 'ffffffffff', 'fffffffffff', 9, '2019-03-31 02:47:57', '2019-03-31 02:47:57', 0),
(16, 'asdf', 'asdf', 'asdf', 'asfd', 9, '2019-03-31 02:55:56', '2019-03-31 02:55:56', 0),
(17, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 9, '2019-03-31 02:56:16', '2019-03-31 02:56:16', 0),
(18, 'sdfgsdf', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 9, '2019-03-31 02:58:40', '2019-03-31 02:58:40', 0),
(19, 'sdfg', 'sdfg', 'sdfg', 'sdfg', 9, '2019-03-31 03:06:12', '2019-03-31 03:06:12', 0),
(20, 'sdfgsdf', 'sdfgsdf', 'sdfgsd', 'sdfgsdf', 9, '2019-03-31 03:09:31', '2019-03-31 03:09:31', 0),
(21, 'xcvbxcv', 'cvxc', 'xcvxcv', 'xcvxc', 9, '2019-03-31 03:15:51', '2019-03-31 03:15:51', 0),
(22, 'xcvbxcv', 'cvxc', 'xcvxcv', 'xcvxc', 9, '2019-03-31 03:16:19', '2019-03-31 03:16:19', 0),
(23, 'zxcvzxcv', 'zxcvzxcv', 'zxcvzxcv', 'zxcvzxcv', 9, '2019-03-31 03:16:39', '2019-03-31 03:16:39', 0),
(24, 'asdfasdf', 'asdfas', 'dfasd', 'afsdf', 9, '2019-03-31 03:20:21', '2019-03-31 03:20:21', 0),
(25, 'sdfg', 'sdfg', 'sdfg', 'sdfg', 9, '2019-03-31 03:22:03', '2019-03-31 03:22:03', 0),
(26, 'sdfg', 'sdfg', 'sdfg', 'sdfg', 9, '2019-03-31 03:22:40', '2019-03-31 03:22:40', 0),
(27, 'sdfsdfs', 'sdfsdf', 'sdfsdf', 'dfsdfsdf', 9, '2019-03-31 03:26:58', '2019-03-31 03:26:58', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrador', '2019-03-15 04:07:41', '2019-03-15 04:07:41'),
(2, 'usuario', '2019-03-15 04:07:47', '2019-03-15 04:07:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scaffoldinterfaces`
--

CREATE TABLE `scaffoldinterfaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tablename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `scaffoldinterfaces`
--

INSERT INTO `scaffoldinterfaces` (`id`, `package`, `migration`, `model`, `controller`, `views`, `tablename`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '/opt/lampp/htdocs/lrnuq/database/migrations/2019_03_20_070149_plants.php', '/opt/lampp/htdocs/lrnuq/app/Plant.php', '/opt/lampp/htdocs/lrnuq/app/Http/Controllers/PlantController.php', '/opt/lampp/htdocs/lrnuq/resources/views/plant', 'plants', '2019-03-20 12:01:49', '2019-03-20 12:01:49'),
(2, 'Laravel', '/opt/lampp/htdocs/lrnuq/database/migrations/2019_03_20_070832_nets.php', '/opt/lampp/htdocs/lrnuq/app/Net.php', '/opt/lampp/htdocs/lrnuq/app/Http/Controllers/NetController.php', '/opt/lampp/htdocs/lrnuq/resources/views/net', 'nets', '2019-03-20 12:08:32', '2019-03-20 12:08:32'),
(3, 'Laravel', '/opt/lampp/htdocs/lrnuq/database/migrations/2019_03_20_071206_reports.php', '/opt/lampp/htdocs/lrnuq/app/Report.php', '/opt/lampp/htdocs/lrnuq/app/Http/Controllers/ReportController.php', '/opt/lampp/htdocs/lrnuq/resources/views/report', 'reports', '2019-03-20 12:12:06', '2019-03-20 12:12:06'),
(4, 'Laravel', '/opt/lampp/htdocs/lrnuq/database/migrations/2019_03_20_071322_images.php', '/opt/lampp/htdocs/lrnuq/app/Image.php', '/opt/lampp/htdocs/lrnuq/app/Http/Controllers/ImageController.php', '/opt/lampp/htdocs/lrnuq/resources/views/image', 'images', '2019-03-20 12:13:23', '2019-03-20 12:13:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrador', 'suadmin@email.com', NULL, '$2y$10$01V2BX10JkvBDj6lX8rJyukWhSnLqKrxandRhKifptEJS/31V3Aem', 'tM3IE6cmq3976wGlAv88DigwG4NdAsnjlf7KViRyW8RF1aMIOX8wq3hHlSZJ', '2019-03-15 04:06:40', '2019-03-15 04:06:40'),
(2, 'usuario joji', 'user@mail.com', NULL, '$2y$10$b9SRJ9gQsmURkVL4gXHaue05jN2D8xx.GUQ/Vjue678uuxqKs.BXa', NULL, '2019-03-28 04:48:01', '2019-03-30 02:34:27'),
(3, 'preuba', 'prueba@mail.com', NULL, '$2y$10$ixja0UkYDAPXQoTpbU12T.qCrpJit31hcSPUQEvl8eWxOsJ9I/cPG', 'y29LNc6Ve9X40Z7FFubDDsP1GUt9gBLaEETlRuHNyVScVi4eoLVzqgqSS2Jy', '2019-03-30 00:21:53', '2019-03-30 00:21:53'),
(5, 'usuario editado', 'mas@mail.com', NULL, '$2y$10$Ac/7HSUPucInVVNcX5UUC.9Oq.F3rfe3J7zQyMU9YdW7ZgEArSZcC', NULL, '2019-03-30 02:48:40', '2019-03-30 02:54:22'),
(6, 'preuba de nuevo editado', 'nuevo@mail.com', NULL, '$2y$10$hnZM2TnxiTiOzZX6OQ54XuOFMr/z0HZoES.qNUVbMARYq1IOmqsxC', NULL, '2019-03-30 03:15:15', '2019-03-30 03:16:16'),
(7, 'usuario', 'uncorreo@mail.com', NULL, '$2y$10$tVxjNp7U5Cg/c8/m0dIview/CqbzyqgCDCt0TdNW1bPVWLi/57HNy', 'm0ZZDcxvl9DxIxJPR7oKn2QNRrE3CU2QfilyD3vX51Kr9yDyCyAnXcDRzv1i', '2019-03-30 03:57:57', '2019-03-30 22:01:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_has_roles`
--

INSERT INTO `user_has_roles` (`role_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 2),
(2, 3),
(2, 5),
(2, 6),
(2, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nets`
--
ALTER TABLE `nets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nets_plant_id_foreign` (`plant_id`),
  ADD KEY `nets_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indices de la tabla `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plants_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_net_id_foreign` (`net_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indices de la tabla `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `nets`
--
ALTER TABLE `nets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`);

--
-- Filtros para la tabla `nets`
--
ALTER TABLE `nets`
  ADD CONSTRAINT `nets_plant_id_foreign` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plants`
--
ALTER TABLE `plants`
  ADD CONSTRAINT `plants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_net_id_foreign` FOREIGN KEY (`net_id`) REFERENCES `nets` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
