-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 07:20:10
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_13_01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Alberto Sánchez', 'alberto@gmail.com', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(2, 'María Dueñas', 'maria@gmail.com', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(3, 'Fernando Postigo', 'fernando@gmail.com', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(4, 'Carlos Zafón', 'zafon@gmail.com', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(5, 'Oscar Wilde', 'oscar@gmail.com', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(6, 'Santiago Posteguillo', 'santi@gmail.com', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(7, 'Ildefonso Falcones', 'ildefonso@gmail.com', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(8, 'Borja Semper', 'borja@gmail.com', '2021-11-08 13:10:37', '2021-11-08 13:10:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_28_073646_create_rooms_table', 1),
(6, '2021_10_28_084206_create_clientes_table', 1),
(7, '2021_10_28_092245_create_servicios_table', 1),
(8, '2021_10_28_092350_create_reservas_table', 1),
(9, '2021_10_28_092432_create_reserva_servicio_table', 1),
(10, '2021_10_28_145442_create_pensions_table', 1),
(11, '2021_11_04_092046_add_cliente_id_at_reservas', 1),
(12, '2021_11_04_092753_add_room_id_at_reservas', 1),
(13, '2021_11_07_090834_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensions`
--

CREATE TABLE `pensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_pen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pensions`
--

INSERT INTO `pensions` (`id`, `tipo_pen`, `created_at`, `updated_at`) VALUES
(1, 'Pensión completa', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(2, 'Media Pensió', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(3, 'Sin pensión', '2021-11-08 13:10:36', '2021-11-08 13:10:36'),
(4, 'Menú', '2021-11-08 13:10:36', '2021-11-08 13:10:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'reservas.listado', 'web', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(2, 'reservas.editar', 'web', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(3, 'reservas.create', 'web', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(4, 'reservas.destroy', 'web', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(5, 'clientes.listado', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(6, 'clientes.edit', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(7, 'clientes.create', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(8, 'clientes.destroy', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(9, 'pensiones.listado', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(10, 'pensiones.edit', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(11, 'pensiones.create', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(12, 'pensiones.destroy', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(13, 'servicios.listado', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(14, 'servicios.edit', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(15, 'servicios.create', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(16, 'servicios.destroy', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(17, 'rooms.listado', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(18, 'rooms.edit', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(19, 'roles.listado', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(20, 'roles.editar', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38'),
(21, 'roles.update', 'web', '2021-11-08 13:10:38', '2021-11-08 13:10:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pension_id` bigint(20) UNSIGNED DEFAULT NULL,
  `room_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cliente_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fecha_ent` date DEFAULT NULL,
  `fecha_sal` date DEFAULT NULL,
  `estado_hab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `pension_id`, `room_id`, `cliente_id`, `fecha_ent`, `fecha_sal`, `estado_hab`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2021-11-01', '2021-11-07', 'ocupada', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(2, 2, 2, 2, '2021-11-08', '2021-11-10', 'libre', '2021-11-08 13:10:37', '2021-11-11 16:35:54'),
(3, 3, 3, 3, '2021-11-05', '2021-11-13', 'libre', '2021-11-08 13:10:37', '2021-11-11 16:40:01'),
(4, 3, 4, 6, '2021-11-01', '2021-11-01', 'libre', '2021-11-08 13:10:37', '2021-11-11 16:36:00'),
(5, 4, 5, 5, '2021-11-01', '2021-11-01', 'ocupada', '2021-11-08 13:10:37', '2021-11-11 16:30:49'),
(6, 2, 6, 6, '2021-11-01', '2021-11-01', 'libre', '2021-11-08 13:10:37', '2021-11-11 16:36:32'),
(7, 4, 7, 7, '2021-11-01', '2021-11-01', 'ocupada', '2021-11-08 13:10:37', '2021-11-11 16:31:20'),
(9, 2, 8, 8, '2021-11-01', '2021-11-16', 'libre', NULL, '2021-11-11 16:35:19'),
(10, 2, 8, 8, '2021-11-01', '2021-11-16', 'check-out', '2021-11-11 16:34:32', '2021-11-11 16:34:32'),
(11, 2, 6, 6, '2021-11-01', '2021-11-01', 'check-out', '2021-11-11 16:36:18', '2021-11-11 16:36:18'),
(12, 3, 3, 3, '2021-11-05', '2021-11-13', 'check-out', '2021-11-11 16:39:38', '2021-11-11 16:39:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_servicio`
--

CREATE TABLE `reserva_servicio` (
  `reserva_id` bigint(20) UNSIGNED NOT NULL,
  `servicio_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reserva_servicio`
--

INSERT INTO `reserva_servicio` (`reserva_id`, `servicio_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(2, 4, NULL, NULL),
(3, 3, NULL, NULL),
(3, 2, NULL, NULL),
(3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(2, 'Editor', 'web', '2021-11-08 13:10:37', '2021-11-08 13:10:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_hab` int(11) NOT NULL,
  `tipo_hab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id`, `num_hab`, `tipo_hab`, `created_at`, `updated_at`) VALUES
(1, 10, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(2, 20, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(3, 30, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(4, 40, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(5, 50, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(6, 60, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(7, 70, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(8, 80, 'sencilla', '2021-11-08 13:10:37', '2021-11-08 13:10:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_serv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `tipo_serv`, `created_at`, `updated_at`) VALUES
(1, 'lavandería', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(2, 'Spa', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(3, 'Alquiler de coche', '2021-11-08 13:10:37', '2021-11-08 13:10:37'),
(4, 'peluquería', '2021-11-08 13:10:37', '2021-11-08 13:10:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrador', 'admin@gmail.com', NULL, '$2y$10$7CNtFyl0anQGjikfszNzvu5WjCvEetJQukq66MAfOSHqDfU5orRmi', NULL, '2021-11-08 13:13:46', '2021-11-08 13:13:46'),
(2, 'Carlos', 'csegue55@gmail.com', NULL, '$2y$10$q7LWka84FjO5Zffl6dmUgeVoygqsKcOjgPjvT5cGwvbD5qAE7I3YO', NULL, '2021-11-08 13:17:02', '2021-11-08 13:17:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pensions`
--
ALTER TABLE `pensions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservas_cliente_id_foreign` (`cliente_id`),
  ADD KEY `reservas_room_id_foreign` (`room_id`),
  ADD KEY `pension_id` (`pension_id`);

--
-- Indices de la tabla `reserva_servicio`
--
ALTER TABLE `reserva_servicio`
  ADD KEY `reserva_servicio_reserva_id_foreign` (`reserva_id`),
  ADD KEY `reserva_servicio_servicio_id_foreign` (`servicio_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pensions`
--
ALTER TABLE `pensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`pension_id`) REFERENCES `pensions` (`id`),
  ADD CONSTRAINT `reservas_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `reserva_servicio`
--
ALTER TABLE `reserva_servicio`
  ADD CONSTRAINT `reserva_servicio_reserva_id_foreign` FOREIGN KEY (`reserva_id`) REFERENCES `reservas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_servicio_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
