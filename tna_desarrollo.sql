-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2021 a las 23:51:56
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tna_desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(11) NOT NULL,
  `cantidad` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-03-19 18:59:31', '2021-03-19 18:59:31'),
(2, 1, '2021-03-19 19:00:52', '2021-03-19 19:00:52'),
(3, 1, '2021-03-19 19:03:54', '2021-03-19 19:03:54'),
(4, 1, '2021-03-19 19:04:16', '2021-03-19 19:04:16'),
(5, 1, '2021-03-19 19:04:50', '2021-03-19 19:04:50'),
(6, 1, '2021-03-19 19:08:24', '2021-03-19 19:08:24'),
(7, 1, '2021-03-19 19:12:26', '2021-03-19 19:12:26'),
(8, 1, '2021-03-19 19:12:30', '2021-03-19 19:12:30'),
(9, 1, '2021-03-19 19:48:27', '2021-03-19 19:48:27'),
(10, 1, '2021-03-19 19:48:49', '2021-03-19 19:48:49'),
(11, 1, '2021-03-19 19:48:54', '2021-03-19 19:48:54'),
(12, 1, '2021-03-19 19:48:55', '2021-03-19 19:48:55'),
(13, 1, '2021-03-19 19:48:57', '2021-03-19 19:48:57'),
(14, 1, '2021-03-19 19:51:55', '2021-03-19 19:51:55'),
(15, 1, '2021-03-19 19:57:39', '2021-03-19 19:57:39'),
(16, 1, '2021-03-19 20:12:38', '2021-03-19 20:12:38'),
(17, 1, '2021-03-19 20:12:42', '2021-03-19 20:12:42'),
(18, 1, '2021-03-19 20:20:47', '2021-03-19 20:20:47'),
(19, 1, '2021-03-19 20:27:05', '2021-03-19 20:27:05'),
(20, 1, '2021-03-19 20:27:08', '2021-03-19 20:27:08'),
(21, 1, '2021-03-19 20:30:13', '2021-03-19 20:30:13'),
(22, 1, '2021-03-19 20:30:18', '2021-03-19 20:30:18'),
(23, 1, '2021-03-19 20:30:44', '2021-03-19 20:30:44'),
(24, 1, '2021-03-19 20:30:44', '2021-03-19 20:30:44'),
(25, 1, '2021-03-19 20:31:38', '2021-03-19 20:31:38'),
(26, 1, '2021-03-19 20:44:27', '2021-03-19 20:44:27'),
(27, 1, '2021-03-19 20:46:26', '2021-03-19 20:46:26'),
(28, 1, '2021-03-19 20:50:56', '2021-03-19 20:50:56'),
(29, 1, '2021-03-19 20:50:58', '2021-03-19 20:50:58'),
(30, 1, '2021-03-19 20:51:00', '2021-03-19 20:51:00'),
(31, 1, '2021-03-19 16:07:07', '2021-03-19 16:07:07'),
(32, 1, '2021-03-19 16:43:20', '2021-03-19 16:43:20'),
(33, 1, '2021-03-19 16:43:28', '2021-03-19 16:43:28'),
(34, 1, '2021-03-19 17:01:35', '2021-03-19 17:01:35'),
(35, 1, '2021-03-19 17:02:18', '2021-03-19 17:02:18'),
(36, 1, '2021-03-19 17:06:39', '2021-03-19 17:06:39'),
(37, 1, '2021-03-19 18:00:48', '2021-03-19 18:00:48'),
(38, 1, '2021-03-19 18:04:35', '2021-03-19 18:04:35'),
(39, 1, '2021-03-19 18:04:41', '2021-03-19 18:04:41'),
(40, 1, '2021-03-19 18:04:45', '2021-03-19 18:04:45'),
(41, 1, '2021-03-19 18:05:04', '2021-03-19 18:05:04'),
(42, 1, '2021-03-19 18:05:24', '2021-03-19 18:05:24'),
(43, 1, '2021-03-19 18:05:27', '2021-03-19 18:05:27'),
(44, 1, '2021-03-19 18:06:38', '2021-03-19 18:06:38'),
(45, 1, '2021-03-19 18:06:42', '2021-03-19 18:06:42'),
(46, 1, '2021-03-19 18:07:12', '2021-03-19 18:07:12'),
(47, 1, '2021-03-19 18:07:17', '2021-03-19 18:07:17'),
(48, 1, '2021-03-19 18:07:20', '2021-03-19 18:07:20'),
(49, 1, '2021-03-19 18:07:36', '2021-03-19 18:07:36'),
(50, 1, '2021-03-19 18:07:52', '2021-03-19 18:07:52'),
(51, 1, '2021-03-19 18:08:34', '2021-03-19 18:08:34'),
(52, 1, '2021-03-19 18:09:12', '2021-03-19 18:09:12'),
(53, 1, '2021-03-19 18:10:08', '2021-03-19 18:10:08'),
(54, 1, '2021-03-19 18:10:22', '2021-03-19 18:10:22'),
(55, 1, '2021-03-19 18:11:27', '2021-03-19 18:11:27'),
(56, 1, '2021-03-19 18:11:30', '2021-03-19 18:11:30'),
(57, 1, '2021-03-19 18:11:45', '2021-03-19 18:11:45'),
(58, 1, '2021-03-19 18:14:41', '2021-03-19 18:14:41'),
(59, 1, '2021-03-19 18:14:59', '2021-03-19 18:14:59'),
(60, 1, '2021-03-19 18:15:54', '2021-03-19 18:15:54'),
(61, 1, '2021-03-19 18:17:28', '2021-03-19 18:17:28'),
(62, 1, '2021-03-19 18:19:11', '2021-03-19 18:19:11'),
(63, 1, '2021-03-19 18:21:30', '2021-03-19 18:21:30'),
(64, 1, '2021-03-19 18:21:45', '2021-03-19 18:21:45'),
(65, 1, '2021-03-19 18:21:59', '2021-03-19 18:21:59'),
(66, 1, '2021-03-19 18:22:03', '2021-03-19 18:22:03'),
(67, 1, '2021-03-19 18:22:22', '2021-03-19 18:22:22'),
(68, 1, '2021-03-19 18:22:48', '2021-03-19 18:22:48'),
(69, 1, '2021-03-19 18:23:17', '2021-03-19 18:23:17'),
(70, 1, '2021-03-19 18:23:20', '2021-03-19 18:23:20'),
(71, 1, '2021-03-19 18:25:11', '2021-03-19 18:25:11'),
(72, 1, '2021-03-19 18:26:14', '2021-03-19 18:26:14'),
(73, 1, '2021-03-19 18:26:19', '2021-03-19 18:26:19'),
(74, 1, '2021-03-19 18:26:29', '2021-03-19 18:26:29'),
(75, 1, '2021-03-19 18:26:33', '2021-03-19 18:26:33'),
(76, 1, '2021-03-19 18:26:43', '2021-03-19 18:26:43'),
(77, 1, '2021-03-19 18:28:13', '2021-03-19 18:28:13'),
(78, 1, '2021-03-19 18:39:53', '2021-03-19 18:39:53'),
(79, 1, '2021-03-19 18:41:57', '2021-03-19 18:41:57'),
(80, 1, '2021-03-19 19:24:35', '2021-03-19 19:24:35'),
(81, 1, '2021-03-19 19:44:58', '2021-03-19 19:44:58'),
(82, 1, '2021-03-19 19:45:03', '2021-03-19 19:45:03'),
(83, 1, '2021-03-19 19:45:24', '2021-03-19 19:45:24'),
(84, 1, '2021-03-19 19:45:28', '2021-03-19 19:45:28'),
(85, 1, '2021-03-19 19:48:39', '2021-03-19 19:48:39'),
(86, 1, '2021-03-20 16:58:07', '2021-03-20 16:58:07'),
(87, 1, '2021-03-23 17:15:43', '2021-03-23 17:15:43'),
(88, 1, '2021-03-24 13:42:53', '2021-03-24 13:42:53'),
(89, 1, '2021-03-24 13:45:06', '2021-03-24 13:45:06'),
(90, 1, '2021-03-24 14:22:47', '2021-03-24 14:22:47'),
(91, 1, '2021-03-27 14:19:47', '2021-03-27 14:19:47'),
(92, 1, '2021-03-27 14:22:08', '2021-03-27 14:22:08'),
(93, 1, '2021-03-27 14:22:19', '2021-03-27 14:22:19'),
(94, 1, '2021-03-27 14:22:47', '2021-03-27 14:22:47'),
(95, 1, '2021-03-27 14:23:33', '2021-03-27 14:23:33'),
(96, 1, '2021-03-27 14:28:36', '2021-03-27 14:28:36'),
(97, 1, '2021-03-27 14:28:51', '2021-03-27 14:28:51'),
(98, 1, '2021-03-27 14:31:13', '2021-03-27 14:31:13'),
(99, 1, '2021-03-27 14:31:38', '2021-03-27 14:31:38'),
(100, 1, '2021-03-27 14:31:42', '2021-03-27 14:31:42'),
(101, 1, '2021-03-29 13:39:01', '2021-03-29 13:39:01'),
(102, 1, '2021-03-29 13:39:09', '2021-03-29 13:39:09'),
(103, 1, '2021-03-29 13:41:26', '2021-03-29 13:41:26'),
(104, 1, '2021-03-29 13:42:53', '2021-03-29 13:42:53'),
(105, 1, '2021-03-29 14:54:23', '2021-03-29 14:54:23'),
(106, 1, '2021-03-29 14:55:06', '2021-03-29 14:55:06'),
(107, 1, '2021-03-29 18:26:01', '2021-03-29 18:26:01'),
(108, 1, '2021-03-29 18:26:25', '2021-03-29 18:26:25'),
(109, 1, '2021-03-29 19:44:00', '2021-03-29 19:44:00'),
(110, 1, '2021-03-29 19:44:18', '2021-03-29 19:44:18'),
(111, 1, '2021-03-29 19:45:50', '2021-03-29 19:45:50'),
(112, 1, '2021-03-29 20:27:03', '2021-03-29 20:27:03'),
(113, 1, '2021-03-29 20:28:24', '2021-03-29 20:28:24'),
(114, 1, '2021-03-29 20:28:48', '2021-03-29 20:28:48'),
(115, 1, '2021-03-29 20:29:01', '2021-03-29 20:29:01'),
(116, 1, '2021-03-29 20:30:19', '2021-03-29 20:30:19'),
(117, 1, '2021-03-29 20:30:30', '2021-03-29 20:30:30'),
(118, 1, '2021-03-29 20:30:43', '2021-03-29 20:30:43'),
(119, 1, '2021-03-29 20:31:12', '2021-03-29 20:31:12'),
(120, 1, '2021-03-29 20:31:32', '2021-03-29 20:31:32'),
(121, 1, '2021-03-29 20:31:35', '2021-03-29 20:31:35'),
(122, 1, '2021-03-29 20:31:39', '2021-03-29 20:31:39'),
(123, 1, '2021-03-29 20:31:41', '2021-03-29 20:31:41'),
(124, 1, '2021-03-29 20:33:42', '2021-03-29 20:33:42'),
(125, 1, '2021-03-29 20:34:31', '2021-03-29 20:34:31'),
(126, 1, '2021-03-29 20:35:13', '2021-03-29 20:35:13'),
(127, 1, '2021-03-29 20:42:30', '2021-03-29 20:42:30'),
(128, 1, '2021-03-29 20:43:34', '2021-03-29 20:43:34'),
(129, 1, '2021-03-29 20:45:04', '2021-03-29 20:45:04'),
(130, 1, '2021-03-29 20:46:41', '2021-03-29 20:46:41'),
(131, 1, '2021-03-29 20:47:04', '2021-03-29 20:47:04'),
(132, 1, '2021-03-29 20:47:52', '2021-03-29 20:47:52'),
(133, 1, '2021-03-29 20:48:29', '2021-03-29 20:48:29'),
(134, 1, '2021-03-29 20:48:51', '2021-03-29 20:48:51'),
(135, 1, '2021-03-29 20:49:31', '2021-03-29 20:49:31'),
(136, 1, '2021-03-29 20:50:04', '2021-03-29 20:50:04'),
(137, 1, '2021-03-29 20:50:27', '2021-03-29 20:50:27'),
(138, 1, '2021-03-29 20:54:16', '2021-03-29 20:54:16'),
(139, 1, '2021-03-29 20:54:43', '2021-03-29 20:54:43'),
(140, 1, '2021-03-29 20:55:17', '2021-03-29 20:55:17'),
(141, 1, '2021-03-29 20:55:59', '2021-03-29 20:55:59'),
(142, 1, '2021-03-29 20:56:18', '2021-03-29 20:56:18'),
(143, 1, '2021-03-29 20:56:48', '2021-03-29 20:56:48'),
(144, 1, '2021-03-29 20:57:18', '2021-03-29 20:57:18'),
(145, 1, '2021-03-29 20:57:42', '2021-03-29 20:57:42'),
(146, 1, '2021-03-29 20:58:31', '2021-03-29 20:58:31'),
(147, 1, '2021-03-29 21:33:54', '2021-03-29 21:33:54'),
(148, 1, '2021-03-29 21:38:43', '2021-03-29 21:38:43'),
(149, 1, '2021-03-29 21:38:52', '2021-03-29 21:38:52');

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
(4, '2021_03_08_160807_create_personas_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_interno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` bigint(20) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_recepcion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `cod_interno`, `documento`, `nombre`, `edad`, `fecha_recepcion`, `hospital`, `created_at`, `updated_at`) VALUES
(189, 'T4228100505', 123, 'Hijo de Jennifer Alexandra Roa', 1, '29/03/2021', 'Buenaventura', '2021-03-29 20:12:31', '2021-03-29 20:12:31'),
(190, 'T4228100506', 1234, 'Hijo de Paola Andrea Arrehondo', 1, '29/03/2021', 'Buga', '2021-03-29 20:12:31', '2021-03-29 20:12:31'),
(191, 'T4228100507', 2345, 'Hija de Laura Daniela Restrepo', 1, '29/03/2021', 'Palmira', '2021-03-29 20:12:31', '2021-03-29 20:12:31'),
(192, 'T4228100508', 3456, 'Hijo de Doris Patricia Guerra', 1, '29/03/2021', 'Cali', '2021-03-29 20:12:31', '2021-03-29 20:12:31'),
(193, 'T4228100509', 4567, 'Hija de Leidy Tatiana Cano', 1, '29/03/2021', 'Buenaventura', '2021-03-29 20:12:31', '2021-03-29 20:12:31'),
(194, 'T4228100510', 5678, 'Hijo de Norida Cristina Tillmas ', 1, '29/03/2021', 'Buga', '2021-03-29 20:12:31', '2021-03-29 20:12:31'),
(195, 'T4228100511', 6789, 'Hijo de Sandra Milena Ospina', 1, '29/03/2021', 'Palmira', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(196, 'T4228100512', 7900, 'Hijo de Heydi Vanessa Zuluaga', 1, '29/03/2021', 'Cali', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(197, 'T4228100513', 9011, 'Hijo de Eliana Yuliet Arenas', 1, '29/03/2021', 'Buenaventura', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(198, 'T4228100514', 10122, 'Hijo de Luz Angela Zapata', 1, '29/03/2021', 'Buga', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(199, 'T4228100515', 11233, 'Hija de Maria Victoria Alarcon', 1, '29/03/2021', 'Palmira', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(200, 'T4228100516', 12344, 'Hija de Yurmerys Carolina Miranda', 1, '29/03/2021', 'Cali', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(201, 'T4228100517', 13455, 'Hijo de Maria Alejandra Saldarriaga', 1, '29/03/2021', 'Buenaventura', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(202, 'T4228100518', 14566, 'Hijo de Maria Camila Lopez', 1, '29/03/2021', 'Buga', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(203, 'T4228100519', 15677, 'Hija de Maryi Alejandra Velazques', 1, '29/03/2021', 'Palmira', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(204, 'T4228100520', 16788, 'Hija de Paula Andrea Espinosa', 1, '29/03/2021', 'Cali', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(205, 'T4228100521', 17899, 'Hija de Maira Alejandra Perenguez', 1, '29/03/2021', 'Buenaventura', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(206, 'T4228100522', 19010, 'Hijo de Jennifer Alegria Burbano', 1, '29/03/2021', 'Buga', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(207, 'T4228100523', 20121, 'Hijo de Laura Camila Ortiz', 1, '29/03/2021', 'Palmira', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(208, 'T4228100524', 21232, 'Hija de Lesly Vanessa Gonzalez', 1, '29/03/2021', 'Cali', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(209, 'T4228100525', 22343, 'Hijo de Laura Maria Gonzalez', 1, '29/03/2021', 'Buenaventura', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(210, 'TH4228100015', 23454, 'Hija de Luisa Fernanda Riascos Torres', 1, '29/03/2021', 'Buga', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(211, 'TH4228100016', 24565, 'Hijo de Monica Andrea Pulgarin ', 1, '29/03/2021', 'Palmira', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(212, 'TH4228100017', 25676, 'Hija de Mayerlin Yineth Osorio', 1, '29/03/2021', 'Cali', '2021-03-29 20:12:32', '2021-03-29 20:12:32'),
(213, 'TH4228100018', 26787, 'Hijo de Valentina Zapata', 1, '29/03/2021', 'Buenaventura', '2021-03-29 20:12:32', '2021-03-29 20:12:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('prueba30@hotmail.es', '$2y$10$6PKzb7HrSPnIg99bf5wVfeSs16kJe4xwwOS7cZ2dcpMWSUd0tnhNG', '2021-03-17 01:18:09'),
('sss@gmail.com', '$2y$10$FPxheupYgsu7BgxakpNfHOw3TwHwsIhM5UpstUkRskvEn2Qn1wqcW', '2021-03-19 16:38:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Super usuario'),
(2, 'Administrador'),
(3, 'Estandar');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_rol`) VALUES
(1, 'Admin', 'Admin', NULL, '$2y$10$tgSRh92Bi9wtllYTPrCqzu4/nrZ.ra2mi9vRslRExZfDxqrnhZ6bi', 'ls7Ch6sjprBR7EBsWIo4kowmRnVFDjMMlDgnPoePM54oimr0XPtj8M1ixSHO', '2021-03-09 02:27:10', '2021-03-17 20:03:21', 1),
(36, 'David', 'sistemas2@inmuno.org', NULL, '$2y$10$rBcD5jXDRIHZbgKjx1FwE.mANTbyKEk9vrrBtni9i4sfCxlY67Jhm', '7UGNleASKKNWDTjWSobAenNimcrqN08icxB5vjRK3dWf58koBGQE7opOAmBI', '2021-03-16 20:24:49', '2021-03-19 17:01:15', 2),
(38, 'Ximena', 'Ximena717@gmail.com', NULL, '$2y$10$tgSRh92Bi9wtllYTPrCqzu4/nrZ.ra2mi9vRslRExZfDxqrnhZ6bi', 'sjU3Jsfuy4j6JrrRchGVbx4827viHwkq0vDh7NBhtYCS1WQQOgPc2UEVrsvL', '2021-03-17 01:32:26', '2021-03-18 19:46:54', 3),
(55, 'Andres', 'Andres@gmail.com', NULL, '$2y$10$7odI7k9/59gEdZjbu7xmhODxwrganxUQp.Ksc7UvGVxXQloB5NaOe', NULL, '2021-03-29 13:38:10', '2021-03-29 13:38:10', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
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
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_relacion` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_relacion` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
