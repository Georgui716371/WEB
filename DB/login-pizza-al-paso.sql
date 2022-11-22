-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-11-2022 a las 20:59:08
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

DROP TABLE IF EXISTS `contactanos`;
CREATE TABLE IF NOT EXISTS `contactanos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numero` int NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `mensaje` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

DROP TABLE IF EXISTS `reclamos`;
CREATE TABLE IF NOT EXISTS `reclamos` (
  `IDreclamo` int NOT NULL AUTO_INCREMENT,
  `Apellidos` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Teléfono` varchar(10) NOT NULL,
  `TipDocumento` varchar(15) NOT NULL,
  `NumDocumento` varchar(12) NOT NULL,
  `Dirección` varchar(40) NOT NULL,
  `TipoBien` varchar(12) NOT NULL,
  `MontoReclamo` varchar(10) NOT NULL,
  `Reclamación` varchar(150) NOT NULL,
  `Boleta` varchar(20) NOT NULL,
  `FechaPedido` varchar(10) NOT NULL,
  `Detalle` varchar(150) NOT NULL,
  `PedidoConcreto` varchar(150) NOT NULL,
  `FechaIncidente` varchar(12) NOT NULL,
  PRIMARY KEY (`IDreclamo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `reclamos`
--

INSERT INTO `reclamos` (`IDreclamo`, `Apellidos`, `Nombres`, `Correo`, `Teléfono`, `TipDocumento`, `NumDocumento`, `Dirección`, `TipoBien`, `MontoReclamo`, `Reclamación`, `Boleta`, `FechaPedido`, `Detalle`, `PedidoConcreto`, `FechaIncidente`) VALUES
(1, 'Ramírez Noa  ', 'Fernando Caseda ', 'ramirezCAseda@gmail.com', '987587412', 'DNI', '78897845', 'producto', 'recibo ', '456', 'reclamo', '76413', '2022-11-10', 'monto para reclamo ', 'reembolso ', '2022-11-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `ID` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `comensales` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`ID`, `nombre`, `comensales`, `numero`, `fecha`) VALUES
(0, 'Georgui Azel Pacheco Sandoval', '12', '963741852', '2022-11-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `created_at`) VALUES
(14, 'Gutiérrez Mendoza ', 'Fernando Juan ', 'mendozaFernando@gmail.com', 'azelps', '2022-11-20 15:29:26'),
(13, 'Pacheco Sandoval ', 'Georgui Azel ', 'azelps071del@gmail.com', '124578', '2022-11-19 19:15:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
