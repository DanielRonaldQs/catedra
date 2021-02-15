-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2019 a las 02:13:46
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parrafo`
--

CREATE TABLE `parrafo` (
  `parrafoId` int(10) UNSIGNED NOT NULL,
  `parrafoPublicacion` int(10) UNSIGNED NOT NULL,
  `parrafoOrden` int(11) NOT NULL,
  `parrafoTexto` varchar(1000) NOT NULL,
  `parrafoEstado` varchar(50) NOT NULL DEFAULT 'ACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `publicacionId` int(10) UNSIGNED NOT NULL,
  `publicacionTitulo` varchar(200) NOT NULL,
  `publicacionTipo` varchar(50) NOT NULL,
  `publicacionFecha` date NOT NULL,
  `publicacionAutor` varchar(200) NOT NULL,
  `publicacionRango` int(11) NOT NULL,
  `publicacionImagen` varchar(100) DEFAULT NULL,
  `publicacionClaves` varchar(200) NOT NULL,
  `publicacionPortada` tinyint(1) NOT NULL,
  `publicacionEstado` varchar(50) NOT NULL DEFAULT 'ACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`publicacionId`, `publicacionTitulo`, `publicacionTipo`, `publicacionFecha`, `publicacionAutor`, `publicacionRango`, `publicacionImagen`, `publicacionClaves`, `publicacionPortada`, `publicacionEstado`) VALUES
(1, 'Asesorado Ricardo Huaman Rivera se titula en la Universidad Continental', 'NOTICIA', '2019-03-30', 'JESUS MANTARI', 2, 'banner1.jpg', 'titulado, continental', 1, 'ACTIVO'),
(2, 'Reunión de análisis crítico de titulados', 'EVENTO', '2019-03-30', 'JESUS MANTARI', 2, 'banner2.jpg', 'titulado', 1, 'ACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `parrafo`
--
ALTER TABLE `parrafo`
  ADD PRIMARY KEY (`parrafoId`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`publicacionId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `parrafo`
--
ALTER TABLE `parrafo`
  MODIFY `parrafoId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `publicacionId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
