-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2014 a las 23:10:02
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventariotransporte`
--
CREATE DATABASE IF NOT EXISTS `inventariotransporte` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventariotransporte`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoempleado`
--

CREATE TABLE IF NOT EXISTS `infoempleado` (
  `codigo` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `ci` varchar(20) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infoempleado`
--

INSERT INTO `infoempleado` (`codigo`, `nombre`, `apellido`, `email`, `telefono`, `sexo`, `ci`, `direccion`) VALUES
('24234', 'manuel', 'arangure', 'manuelgmez@unerg.com', '32234', 'm', '324234', 'wrfewrwer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infousuario`
--

CREATE TABLE IF NOT EXISTS `infousuario` (
  `codigo` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `ci` varchar(20) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infousuario`
--

INSERT INTO `infousuario` (`codigo`, `nombre`, `apellido`, `email`, `telefono`, `sexo`, `usuario`, `password`, `ci`, `direccion`) VALUES
('Âºrewrew', 'MANUEL', 'GMEX', 'isaacdekraken@hotmail.com', '2234234', 'm', 'MANUEL', 'MANUEL', '44523Âº', 'dfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresosherramientas`
--

CREATE TABLE IF NOT EXISTS `ingresosherramientas` (
  `proveedor` varchar(50) DEFAULT NULL,
  `fec_com` varchar(20) NOT NULL,
  `fec_sol` varchar(20) NOT NULL,
  `tip` varchar(100) DEFAULT NULL,
  `marc` varchar(100) DEFAULT NULL,
  `mod` varchar(50) DEFAULT NULL,
  `num_sol` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresosherramientas`
--

INSERT INTO `ingresosherramientas` (`proveedor`, `fec_com`, `fec_sol`, `tip`, `marc`, `mod`, `num_sol`, `status`) VALUES
('Ferrometales C.A', '2014-10-10', '2013-10-10', 'esmeril', 'makita', '01', '234234', 'activa'),
('Ferrometales S.A', '2014-3-3', '2014-3-3', 'Mecanica', 'Stanlley', 'Alicate', '45345', 'Ativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresosunidad`
--

CREATE TABLE IF NOT EXISTS `ingresosunidad` (
  `proveedor` varchar(50) DEFAULT NULL,
  `fec_com` varchar(20) NOT NULL,
  `fec_sol` varchar(20) NOT NULL,
  `tip` varchar(100) DEFAULT NULL,
  `marc` varchar(100) DEFAULT NULL,
  `mod_un` varchar(50) DEFAULT NULL,
  `Placa` varchar(50) DEFAULT NULL,
  `cap_un` varchar(50) DEFAULT NULL,
  `num_sol` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `num_un` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresosunidad`
--

INSERT INTO `ingresosunidad` (`proveedor`, `fec_com`, `fec_sol`, `tip`, `marc`, `mod_un`, `Placa`, `cap_un`, `num_sol`, `status`, `num_un`) VALUES
('Llano Motors C.A', '2014-02-11', '2013-05-12', 'Encava', 'YUTON', 'metrobus', '10T-DAE', '53 puestos', '35646', 'Activa', '01'),
('Llano Motors C.A', '2014-12-12', '2013-12-12', 'Camioneta', 'Ford', 'Silverado', '13J-FER', '700 kilos', '35345', 'Inactivo', '23'),
('Guarico Cars S.A', '2014-3-3', '2012-3-3', 'Auto pequeno', 'Chery', 'COUPE', '1WE-DAE', '6 PUESTOS', '343454', 'Inactivo', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `codigo`) VALUES
(1, 'admin', 'admin', '343124123'),
(2, 'MANUEL', 'MANUEL', 'Âºrewrew');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
