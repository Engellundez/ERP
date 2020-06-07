-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-06-2020 a las 15:05:29
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unioccidente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Recursos Humanos', NULL, NULL),
(2, 'Finanzas', NULL, NULL),
(3, 'Atención estudiantil', NULL, NULL),
(4, 'Administración', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidads`
--

CREATE TABLE `entidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreEntidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entidads`
--

INSERT INTO `entidads` (`id`, `nombreEntidad`, `created_at`, `updated_at`) VALUES
(1, 'Aguascalientes', NULL, NULL),
(2, 'Baja California', NULL, NULL),
(3, 'Baja California Sur', NULL, NULL),
(4, 'Campeche', NULL, NULL),
(5, 'Chiapas', NULL, NULL),
(6, 'Chihuahua', NULL, NULL),
(7, 'Coahuila', NULL, NULL),
(8, 'Colima', NULL, NULL),
(9, 'Ciudad de México', NULL, NULL),
(10, 'Durango', NULL, NULL),
(11, 'Estado de México', NULL, NULL),
(12, 'Guanajuato', NULL, NULL),
(13, 'Guerrero', NULL, NULL),
(14, 'Hidalgo', NULL, NULL),
(15, 'Jalisco', NULL, NULL),
(16, 'Michoacán', NULL, NULL),
(17, 'Morelos', NULL, NULL),
(18, 'Nayarit', NULL, NULL),
(19, 'Nuevo León', NULL, NULL),
(20, 'Oaxaca', NULL, NULL),
(21, 'Puebla', NULL, NULL),
(22, 'Querétaro', NULL, NULL),
(23, 'Quintana Roo', NULL, NULL),
(24, 'San Luis Potosi', NULL, NULL),
(25, 'Sinaloa', NULL, NULL),
(26, 'Sonora', NULL, NULL),
(27, 'Tabasco', NULL, NULL),
(28, 'Tamaulipas', NULL, NULL),
(29, 'Tlaxcala', NULL, NULL),
(30, 'Veracruz', NULL, NULL),
(31, 'Yucatán', NULL, NULL),
(32, 'Zacatecas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_03_192957_create_entidads_table', 1),
(4, '2020_06_03_193033_create_universidads_table', 1),
(5, '2020_06_03_193058_create_departamentos_table', 1),
(6, '2020_06_03_193127_create_puestos_table', 1),
(7, '2020_06_03_193128_create_recursos_humanos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Maestro', NULL, NULL),
(2, 'Rector', NULL, NULL),
(3, 'Coordinador', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_humanos`
--

CREATE TABLE `recursos_humanos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entidad_id` bigint(20) UNSIGNED NOT NULL,
  `universidad_id` bigint(20) UNSIGNED NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `puesto_id` bigint(20) UNSIGNED NOT NULL,
  `presupuesto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` bigint(20) NOT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recursos_humanos`
--

INSERT INTO `recursos_humanos` (`id`, `entidad_id`, `universidad_id`, `departamento_id`, `puesto_id`, `presupuesto`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `email`, `direccion`, `telefono`, `colonia`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 2, 1, '7000', 'Angel David', 'Escutia', 'Lundez', '1999-01-23', 'angel.lundez@hotmail.com', 'aramen #541', 4433867825, 'felix ireta', NULL, '2020-06-07 19:40:10'),
(3, 16, 3, 4, 3, '8000', 'Carlos', 'Porras', 'Lopez', '1997-03-05', 'elporrisimas@hotmail.com', 'alejandro Garza #56', 4435865546, 'centro', '2020-06-07 18:59:07', '2020-06-07 18:59:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidads`
--

CREATE TABLE `universidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `universidads`
--

INSERT INTO `universidads` (`id`, `nombre`, `ciudad`, `created_at`, `updated_at`) VALUES
(1, 'UNID Campus Morelia', 'Morelia', NULL, NULL),
(2, 'UNID Ocolusen', 'Morelia', NULL, NULL),
(3, 'UNID Centro', 'Uruapan', NULL, NULL);

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entidads`
--
ALTER TABLE `entidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recursos_humanos_email_unique` (`email`),
  ADD KEY `recursos_humanos_entidad_id_foreign` (`entidad_id`),
  ADD KEY `recursos_humanos_universidad_id_foreign` (`universidad_id`),
  ADD KEY `recursos_humanos_departamento_id_foreign` (`departamento_id`),
  ADD KEY `recursos_humanos_puesto_id_foreign` (`puesto_id`);

--
-- Indices de la tabla `universidads`
--
ALTER TABLE `universidads`
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
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entidads`
--
ALTER TABLE `entidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `universidads`
--
ALTER TABLE `universidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  ADD CONSTRAINT `recursos_humanos_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recursos_humanos_entidad_id_foreign` FOREIGN KEY (`entidad_id`) REFERENCES `entidads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recursos_humanos_puesto_id_foreign` FOREIGN KEY (`puesto_id`) REFERENCES `puestos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recursos_humanos_universidad_id_foreign` FOREIGN KEY (`universidad_id`) REFERENCES `universidads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
