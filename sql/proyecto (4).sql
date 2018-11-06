-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2018 a las 22:25:19
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
('Oral'),
('Robotica'),
('Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `nombre_proyecto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `n5` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `CIF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `nombre_proyecto`, `n1`, `n2`, `n3`, `n4`, `n5`, `CIF`) VALUES
(1, 'lol', 'meme', 'fdf', 'fdfd', 'fdfd', 'fdfd', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueces`
--

CREATE TABLE `jueces` (
  `nombre_juez` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `CIF` int(11) NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `jueces`
--

INSERT INTO `jueces` (`nombre_juez`, `CIF`, `nombre_categoria`) VALUES
('name', 123, 'Oral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat1`
--

CREATE TABLE `rescat1` (
  `id_rescat` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `CIF` int(11) NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat2`
--

CREATE TABLE `rescat2` (
  `id_rescat2` int(11) NOT NULL,
  `CIF` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat3`
--

CREATE TABLE `rescat3` (
  `id_rescat3` int(11) NOT NULL,
  `CIF` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat4`
--

CREATE TABLE `rescat4` (
  `id_rescat3` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `CIF` int(11) NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rescat5`
--

CREATE TABLE `rescat5` (
  `id_rescat4` int(11) NOT NULL,
  `CIF` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre_categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `resultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usr` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `CIF` int(11) NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usr`, `nombre`, `pass`, `CIF`, `nombre_categoria`) VALUES
('user', 'name', 'pass', 123, 'Oral');

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
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `jueces`
--
ALTER TABLE `jueces`
  ADD PRIMARY KEY (`nombre_juez`),
  ADD UNIQUE KEY `nombre_juez` (`nombre_juez`),
  ADD UNIQUE KEY `CIF` (`CIF`);

--
-- Indices de la tabla `rescat1`
--
ALTER TABLE `rescat1`
  ADD PRIMARY KEY (`id_rescat`);

--
-- Indices de la tabla `rescat2`
--
ALTER TABLE `rescat2`
  ADD PRIMARY KEY (`id_rescat2`);

--
-- Indices de la tabla `rescat3`
--
ALTER TABLE `rescat3`
  ADD PRIMARY KEY (`id_rescat3`);

--
-- Indices de la tabla `rescat4`
--
ALTER TABLE `rescat4`
  ADD PRIMARY KEY (`id_rescat3`);

--
-- Indices de la tabla `rescat5`
--
ALTER TABLE `rescat5`
  ADD PRIMARY KEY (`id_rescat4`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`CIF`),
  ADD UNIQUE KEY `CIF` (`CIF`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rescat1`
--
ALTER TABLE `rescat1`
  MODIFY `id_rescat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rescat2`
--
ALTER TABLE `rescat2`
  MODIFY `id_rescat2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rescat3`
--
ALTER TABLE `rescat3`
  MODIFY `id_rescat3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rescat4`
--
ALTER TABLE `rescat4`
  MODIFY `id_rescat3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rescat5`
--
ALTER TABLE `rescat5`
  MODIFY `id_rescat4` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
