-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-10-2020 a las 18:56:19
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.3.20-1+ubuntu19.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cicuatro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-09-29-004614', 'App\\Database\\Migrations\\People', 'default', 'App', 1601340742, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `cod_per` int NOT NULL,
  `tipoid_per` int NOT NULL,
  `id_per` varchar(50) NOT NULL,
  `nom_per` varchar(100) NOT NULL,
  `ape_per` varchar(100) NOT NULL,
  `cat_per` varchar(5) NOT NULL,
  `edad_per` int NOT NULL,
  `car_per` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`cod_per`, `tipoid_per`, `id_per`, `nom_per`, `ape_per`, `cat_per`, `edad_per`, `car_per`) VALUES
(1, 1, '108948987609', 'Juan', 'Gomez', 'A', 31, 'Administrador'),
(2, 2, '9807877764', 'Maria', 'Sierra', 'D', 19, 'Gerente'),
(3, 3, '87906', 'Pedro', 'Rodríguez', 'B', 24, 'Analista'),
(4, 4, '6776689999', 'Carlos', 'Mendieta', 'C', 50, 'Coordinador'),
(5, 1, '109984764748', 'Johana', 'Hernández', 'A', 28, 'Asesor'),
(6, 1, '109989474849', 'Laura', 'Rojas', 'A', 33, 'Asesor'),
(7, 1, '107484948948', 'Patricia', 'Gonzalez', 'C', 44, 'Asesor'),
(8, 2, '9808585999', 'Diana', 'Torres', 'B', 41, 'Analista'),
(9, 1, '2', '3', '2', '2', 2, '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`cod_per`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `cod_per` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
