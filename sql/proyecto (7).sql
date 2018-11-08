-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2018 a las 23:09:57
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`nombre_categoria`) VALUES
('Innovacion'),
('Poster Cientifico'),
('Presentacion Escrita'),
('Presentacion Oral'),
('Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `nombre_proyecto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n5` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usr` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `total_cat1` int(11) NOT NULL,
  `total_cat2` int(11) NOT NULL,
  `total_cat3` int(11) NOT NULL,
  `total_cat4` int(11) NOT NULL,
  `total_cat5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`nombre_proyecto`, `n1`, `n2`, `n3`, `n4`, `n5`, `usr`, `total_cat1`, `total_cat2`, `total_cat3`, `total_cat4`, `total_cat5`) VALUES
('aaaaa', 'aaaaaaaa', 'aaaaaa', 'aaa', 'aaaa', 'aaa', 'juez', 0, 0, 0, 0, 0),
('lol', 'lolazo', '', '', '', '', 'juez', 29, 45, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueces`
--

CREATE TABLE `jueces` (
  `nombre_juez` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `usr` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `CIF` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jueces`
--

INSERT INTO `jueces` (`nombre_juez`, `nombre_categoria`, `usr`, `CIF`) VALUES
('lolol', 'Tecnologia', 'juez', 232323232),
('jueza', 'Presentacion Oral', 'juez2', 12345),
('jueeez', 'Presentacion Escrita', 'juez3', 24424242),
('juez', 'Innovacion', 'juez4', 14134134),
('aaaaaaaa', 'Poster Cientifico', 'jueza', 41412412);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usr` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `CIF` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usr`, `nombre`, `pass`, `nombre_categoria`, `CIF`) VALUES
('FADAFDF', 'Yancy', 'EQ413', 'Robotica', 341413),
('juez', 'lolol', '123', 'Tecnologia', 232323232),
('juez2', 'jueza', '123', 'Presentacion Oral', 12345),
('juez3', 'jueeez', '123', 'Presentacion Escrita', 24424242),
('juez4', 'juez', '123', 'Innovacion', 14134134),
('jueza', 'aaaaaaaa', '123', 'Poster Cientifico', 41412412),
('sdaaddq', 'DSSDASD', 'D32134', 'Robotica', 4132412),
('user566', 'leooo', '123456', '0', NULL),
('usr', 'usuario', '123', '0', 0),
('usuario', 'usuario', '123', 'Robotica', 2147483647),
('wwwwwwwww', 'jueza', '1344131342', 'Presentacion Oral', 12412421);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`nombre_categoria`),
  ADD UNIQUE KEY `nombre_categoria` (`nombre_categoria`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`nombre_proyecto`);

--
-- Indices de la tabla `jueces`
--
ALTER TABLE `jueces`
  ADD PRIMARY KEY (`usr`),
  ADD UNIQUE KEY `nombre_juez` (`nombre_juez`),
  ADD UNIQUE KEY `CIF` (`CIF`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr`),
  ADD UNIQUE KEY `usr` (`usr`),
  ADD UNIQUE KEY `CIF` (`CIF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
