-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 14:57:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viajesexperienciales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_08_024456_create_direccion', 1),
(3, '2023_11_08_025213_create_tb_cliente', 1),
(4, '2023_11_08_025659_create_tb_destino', 1),
(5, '2023_11_08_030503_create_tb_transporte', 1),
(6, '2023_11_08_030907_create_tb_boletos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_boletos`
--

CREATE TABLE `tb_boletos` (
  `id_boletos` bigint(20) UNSIGNED NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `fk_id_cliente` bigint(20) UNSIGNED NOT NULL,
  `fk_id_destino` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_boletos`
--

INSERT INTO `tb_boletos` (`id_boletos`, `precio`, `fecha_compra`, `fecha_salida`, `fk_id_cliente`, `fk_id_destino`, `created_at`, `updated_at`) VALUES
(1, 63, '1988-04-20', '2019-04-18', 18, 3, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(2, 68, '1987-07-25', '2012-07-15', 17, 11, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(3, 98, '1974-02-14', '2008-11-09', 14, 12, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(4, 27, '2016-04-03', '1990-02-09', 13, 16, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(5, 68, '1988-01-07', '1996-07-22', 2, 17, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(6, 39, '1989-10-31', '1985-05-08', 1, 11, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(7, 28, '2017-11-24', '2010-09-24', 10, 9, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(8, 11, '1989-11-23', '2009-11-13', 12, 19, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(9, 89, '1991-09-28', '2004-05-31', 3, 9, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(10, 37, '1992-11-25', '2001-10-22', 2, 5, '2023-11-08 06:42:56', '2023-11-08 06:42:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `app` varchar(255) NOT NULL,
  `apm` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) NOT NULL,
  `fk_id_direccion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nombre`, `app`, `apm`, `sexo`, `fk_id_direccion`, `created_at`, `updated_at`) VALUES
(1, 'Eldridge', 'Feeney', 'Stark', 'Masculino', 10, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(2, 'Dayton', 'Dach', 'Williamson', 'Masculino', 16, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(3, 'Jake', 'Zboncak', 'Yundt', 'Masculino', 17, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(4, 'Sedrick', 'Spinka', 'Miller', 'Femenino', 13, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(5, 'Karelle', 'Feil', 'Hamill', 'Femenino', 19, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(6, 'Adah', 'Willms', 'Walsh', 'Femenino', 5, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(7, 'Emmie', 'Reichert', 'Konopelski', 'Femenino', 2, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(8, 'Cielo', 'Runolfsdottir', 'Veum', 'Femenino', 11, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(9, 'Jairo', 'Satterfield', 'Klein', 'Masculino', 16, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(10, 'Devin', 'Ziemann', 'Ratke', 'Masculino', 2, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(11, 'Velda', 'Muller', 'Keebler', 'Femenino', 4, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(12, 'Kelvin', 'Leffler', 'Marvin', 'Femenino', 3, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(13, 'Yazmin', 'Murphy', 'Huel', 'Masculino', 16, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(14, 'Brandyn', 'Jakubowski', 'Aufderhar', 'Femenino', 17, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(15, 'Ulises', 'Schaden', 'Bruen', 'Masculino', 14, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(16, 'Christelle', 'Mills', 'Goyette', 'Masculino', 5, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(17, 'Eric', 'Gerlach', 'Marvin', 'Masculino', 13, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(18, 'Queenie', 'McCullough', 'Douglas', 'Femenino', 8, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(19, 'Brando', 'Wilkinson', 'Gerhold', 'Masculino', 15, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(20, 'Kian', 'Kertzmann', 'Wuckert', 'Femenino', 13, '2023-11-08 06:42:56', '2023-11-08 06:42:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_destino`
--

CREATE TABLE `tb_destino` (
  `id_destino` bigint(20) UNSIGNED NOT NULL,
  `destino` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_destino`
--

INSERT INTO `tb_destino` (`id_destino`, `destino`, `created_at`, `updated_at`) VALUES
(1, 'Philip Trail', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(2, 'Matt Point', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(3, 'Willy Road', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(4, 'Moises Lights', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(5, 'Nikita Parkways', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(6, 'Satterfield Prairie', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(7, 'Letha Hills', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(8, 'Runolfsson Islands', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(9, 'Hoeger Prairie', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(10, 'Abagail Place', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(11, 'Ava Plaza', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(12, 'Magdalen Causeway', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(13, 'Greenholt Plains', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(14, 'Adelbert Forge', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(15, 'Jaida Glens', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(16, 'Wisoky Wells', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(17, 'Gerhold Mission', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(18, 'Dach Drives', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(19, 'Mateo Parkway', '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(20, 'Franz Fall', '2023-11-08 06:42:56', '2023-11-08 06:42:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_direccion`
--

CREATE TABLE `tb_direccion` (
  `id_direccion` bigint(20) UNSIGNED NOT NULL,
  `calle` varchar(255) NOT NULL,
  `no_interior` int(11) DEFAULT NULL,
  `no_exterior` int(11) NOT NULL,
  `cop` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_direccion`
--

INSERT INTO `tb_direccion` (`id_direccion`, `calle`, `no_interior`, `no_exterior`, `cop`, `created_at`, `updated_at`) VALUES
(1, 'Robb Run', 74105, 69, 31443, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(2, 'Gusikowski Islands', 73854, 26563, 55603, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(3, 'Marks Island', 17480, 26582, 8294, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(4, 'Katrine Center', 91115, 52906, 51659, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(5, 'Connor Inlet', 7330, 38373, 42143, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(6, 'Reilly Isle', 85489, 24135, 60017, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(7, 'Rosanna Drives', 73139, 16859, 26518, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(8, 'Vanessa Landing', 84169, 1080, 75600, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(9, 'John Isle', 32626, 97283, 18934, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(10, 'Nakia Run', 1030, 43056, 39830, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(11, 'Bartoletti Lights', 66258, 57620, 46582, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(12, 'Henry Villages', 84016, 69871, 90156, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(13, 'Harris Circles', 21941, 3924, 92775, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(14, 'Elna Court', 57766, 10515, 39984, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(15, 'Koch Stravenue', 45051, 35936, 61116, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(16, 'Dandre Light', 99160, 59960, 9477, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(17, 'Kutch Mount', 86665, 99281, 85274, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(18, 'Hansen Knolls', 89435, 29427, 50420, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(19, 'Kyra Garden', 6248, 3473, 87395, '2023-11-08 06:42:55', '2023-11-08 06:42:55'),
(20, 'Catalina Mission', 60482, 44243, 70876, '2023-11-08 06:42:55', '2023-11-08 06:42:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_transporte`
--

CREATE TABLE `tb_transporte` (
  `id_transporte` bigint(20) UNSIGNED NOT NULL,
  `capacidad` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `no_asiento` int(11) NOT NULL,
  `fk_id_destino` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_transporte`
--

INSERT INTO `tb_transporte` (`id_transporte`, `capacidad`, `peso`, `no_asiento`, `fk_id_destino`, `created_at`, `updated_at`) VALUES
(1, '75', 90, 21, 10, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(2, '53', 2, 59, 9, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(3, '14', 63, 83, 19, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(4, '62', 24, 4, 4, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(5, '54', 74, 42, 15, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(6, '88', 51, 85, 18, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(7, '96', 7, 12, 7, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(8, '85', 73, 26, 7, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(9, '82', 94, 45, 2, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(10, '30', 34, 32, 19, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(11, '78', 89, 86, 9, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(12, '67', 20, 10, 2, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(13, '72', 72, 28, 16, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(14, '97', 28, 89, 17, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(15, '95', 42, 23, 14, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(16, '76', 21, 87, 20, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(17, '95', 36, 6, 20, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(18, '50', 58, 34, 14, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(19, '73', 53, 63, 2, '2023-11-08 06:42:56', '2023-11-08 06:42:56'),
(20, '39', 5, 38, 9, '2023-11-08 06:42:56', '2023-11-08 06:42:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `tb_boletos`
--
ALTER TABLE `tb_boletos`
  ADD PRIMARY KEY (`id_boletos`),
  ADD KEY `tb_boletos_fk_id_cliente_foreign` (`fk_id_cliente`),
  ADD KEY `tb_boletos_fk_id_destino_foreign` (`fk_id_destino`);

--
-- Indices de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `tb_cliente_fk_id_direccion_foreign` (`fk_id_direccion`);

--
-- Indices de la tabla `tb_destino`
--
ALTER TABLE `tb_destino`
  ADD PRIMARY KEY (`id_destino`),
  ADD UNIQUE KEY `tb_destino_destino_unique` (`destino`);

--
-- Indices de la tabla `tb_direccion`
--
ALTER TABLE `tb_direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD UNIQUE KEY `tb_direccion_calle_unique` (`calle`),
  ADD UNIQUE KEY `tb_direccion_no_exterior_unique` (`no_exterior`),
  ADD UNIQUE KEY `tb_direccion_cop_unique` (`cop`);

--
-- Indices de la tabla `tb_transporte`
--
ALTER TABLE `tb_transporte`
  ADD PRIMARY KEY (`id_transporte`),
  ADD UNIQUE KEY `tb_transporte_no_asiento_unique` (`no_asiento`),
  ADD KEY `tb_transporte_fk_id_destino_foreign` (`fk_id_destino`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_boletos`
--
ALTER TABLE `tb_boletos`
  MODIFY `id_boletos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tb_destino`
--
ALTER TABLE `tb_destino`
  MODIFY `id_destino` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tb_direccion`
--
ALTER TABLE `tb_direccion`
  MODIFY `id_direccion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `tb_transporte`
--
ALTER TABLE `tb_transporte`
  MODIFY `id_transporte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_boletos`
--
ALTER TABLE `tb_boletos`
  ADD CONSTRAINT `tb_boletos_fk_id_cliente_foreign` FOREIGN KEY (`fk_id_cliente`) REFERENCES `tb_cliente` (`id_cliente`),
  ADD CONSTRAINT `tb_boletos_fk_id_destino_foreign` FOREIGN KEY (`fk_id_destino`) REFERENCES `tb_destino` (`id_destino`);

--
-- Filtros para la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD CONSTRAINT `tb_cliente_fk_id_direccion_foreign` FOREIGN KEY (`fk_id_direccion`) REFERENCES `tb_direccion` (`id_direccion`);

--
-- Filtros para la tabla `tb_transporte`
--
ALTER TABLE `tb_transporte`
  ADD CONSTRAINT `tb_transporte_fk_id_destino_foreign` FOREIGN KEY (`fk_id_destino`) REFERENCES `tb_destino` (`id_destino`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
