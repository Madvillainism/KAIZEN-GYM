-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 23:16:31
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kaizen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `idAdmin` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`idAdmin`, `usuario`, `pass`) VALUES
(1, 'luis', '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idArea` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `nAcceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idArea`, `nombre`, `nAcceso`) VALUES
(1, 'SPA NV1', 1),
(2, 'SPA NV2', 2),
(3, 'SPA NV3', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `saldo` decimal(10,0) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `discapacidad` enum('SI','NO') NOT NULL,
  `entrenador` enum('SI','NO') NOT NULL,
  `membresia` enum('NORMAL','GOLD','PLATINUM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `saldo`, `cedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `discapacidad`, `entrenador`, `membresia`) VALUES
(60, '0', '2', 'qwqw', 'qwqwq', '1111-5678901', 'sasqe', 'sdsd|@as', 'NO', 'SI', 'PLATINUM'),
(61, '0', 'w', 'qwqw', 'Andres', '1122-1111111', 'sasqe', 'prueba2@loquesea.com', 'NO', 'NO', 'NORMAL'),
(62, '0', '11111111', 'qwqw', 'Placeres', '1122-4564564', 'sasqe', 'prueba2@loquesea.com', 'NO', 'NO', 'NORMAL'),
(64, '0', '2', 'Profesor', 'Placeres', '1122-5678901', '1111111', 'prueba@loquesea.com', 'NO', 'SI', ''),
(65, '0', '245685', 'Profesor', 'Placeres', '1122-1111111', 'sasqe', 'prueba@loquesea.com', 'NO', 'NO', 'NORMAL'),
(66, '0', '2', 'Profesor', 'Andres', '1122-5678901', '1111111', 'prueba2@loquesea.com', 'NO', 'NO', 'NORMAL'),
(67, '0', '245685', 'Manuela', 'Andres', '1234-1098765', 'Micasa', 'prueba@loquesea.com', 'SI', 'SI', 'PLATINUM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenador`
--

CREATE TABLE `entrenador` (
  `idEntrenador` int(11) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `sueldo` decimal(10,0) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrenador`
--

INSERT INTO `entrenador` (`idEntrenador`, `cedula`, `sueldo`, `nombre`, `apellido`, `telefono`, `correo`) VALUES
(1, '123456', '20', 'Manuelito', 'Perez', '0414-6666666', 'cocainomano@petare.com'),
(3, '123456', '20', 'Manuelito', 'asasasa', '0414-6666666', 'cocainomano@petare.com'),
(4, 'cocodr2', '1', 'Profesor', 'Andres', '1122-4564564', 'sdsd|@as'),
(9, '2456851', '1243123123', 'carmono', 'Andres', '1122-13131', 'sdsd|@as');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `idMembresia` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `nAcceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `membresia`
--

INSERT INTO `membresia` (`idMembresia`, `nombre`, `precio`, `nAcceso`) VALUES
(7, 'NORMAL', '10', 1),
(8, 'GOLD', '20', 2),
(9, 'PLATINUM', '30', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idArea`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `entrenador`
--
ALTER TABLE `entrenador`
  ADD PRIMARY KEY (`idEntrenador`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`idMembresia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `entrenador`
--
ALTER TABLE `entrenador`
  MODIFY `idEntrenador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `idMembresia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
