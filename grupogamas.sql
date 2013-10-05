-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-10-2013 a las 18:32:10
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `grupogamas`
--
CREATE DATABASE IF NOT EXISTS `grupogamas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grupogamas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiones`
--

CREATE TABLE IF NOT EXISTS `conexiones` (
  `idConexion` int(15) NOT NULL AUTO_INCREMENT,
  `CF_idUsuario` int(15) NOT NULL,
  `fechaConexion` varchar(50) NOT NULL,
  `horaConexion` varchar(50) NOT NULL,
  `ultimaConexion` varchar(50) NOT NULL,
  PRIMARY KEY (`idConexion`),
  KEY `CF_idUsuario` (`CF_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `idDepartamento` int(10) NOT NULL AUTO_INCREMENT,
  `CF_supervisor` int(10) NOT NULL,
  `nombreDepartamento` varchar(100) NOT NULL,
  `descripcionDepartamento` varchar(100) NOT NULL,
  `gerenteDepartamento` varchar(100) NOT NULL,
  `correoDepartamento` varchar(100) NOT NULL,
  `extensionDepartamento` varchar(100) NOT NULL,
  `horarioDepartamento` varchar(150) NOT NULL,
  PRIMARY KEY (`idDepartamento`),
  KEY `CF_supervisor` (`CF_supervisor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idDepartamento`, `CF_supervisor`, `nombreDepartamento`, `descripcionDepartamento`, `gerenteDepartamento`, `correoDepartamento`, `extensionDepartamento`, `horarioDepartamento`) VALUES
(1, 1, 'SISTEMAS', 'DESARROLLO DE TECNOLOGIAS INNOVADORAS', 'GERARDO FRANCO CRUZ', 'soporte@grupogamas.com.mx', '152', '8:30 am - 6:30 pm'),
(2, 0, 'GERENCIA DE SERVICIOS', 'DEPARTAMENTO ENCARGADO DE MERCADOTECNIA, PUBLICIDAD Y DISEÑO GRAFICO', 'SERGIO FRANCO', 'mercadotecnia@grupogamas.com.mx', '132', '9:00 am a 6:00 pm'),
(3, 0, 'MANTENIMIENTO', 'DEPARTAMENTO ENCARGADO DEL MANTENIMIENTO DE LAS SUCURSALES Y OFICINAS', 'JUAN PABLO ', 'mantenimiento@grupogamas.com.mx', '117', 'INDEFINIDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `idNoticia` int(10) NOT NULL AUTO_INCREMENT,
  `Descripcion` longtext NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `linea` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`idNoticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `Descripcion`, `fecha`, `linea`, `status`) VALUES
(1, 'MIERCOLES 3 JULIO\r\nPROMOCION PIZZA A 125 Y TACOS AL 2X1', '04/07/2013', 'SUCURSAL', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridadniveles`
--

CREATE TABLE IF NOT EXISTS `seguridadniveles` (
  `idSeguridad` int(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `tipoUsuario` varchar(100) NOT NULL,
  PRIMARY KEY (`idSeguridad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguridadniveles`
--

INSERT INTO `seguridadniveles` (`idSeguridad`, `descripcion`, `tipoUsuario`) VALUES
(1, 'ADMINISTRADOR', 'GAMAS'),
(2, 'ADMINISTRADOR', 'TROMPOS'),
(3, 'USUARIO COMUN, VERIFICA REPORTES', 'USUARIO'),
(4, 'USUARIO DE SUCURSAL, SOLO LEVANTA REPORTES Y CIERRA', 'SUCURSAL'),
(5, 'USUARIO CAJERO', 'CAJERO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemasasignacion`
--

CREATE TABLE IF NOT EXISTS `sistemasasignacion` (
  `idSistemas` int(15) NOT NULL AUTO_INCREMENT,
  `CF_idSolicitud` int(15) NOT NULL,
  `personaResponsable` varchar(100) NOT NULL,
  `fechaAsignacion` varchar(100) NOT NULL,
  `horaAsignacion` varchar(100) NOT NULL,
  `estadoReporte` varchar(100) NOT NULL,
  PRIMARY KEY (`idSistemas`),
  KEY `CF_idSolicitud` (`CF_idSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sistemasasignacion`
--

INSERT INTO `sistemasasignacion` (`idSistemas`, `CF_idSolicitud`, `personaResponsable`, `fechaAsignacion`, `horaAsignacion`, `estadoReporte`) VALUES
(1, 1, 'FHARID', '12/01/13', '12:12:12:00', 'ASIGNADO'),
(2, 2, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemascolaboradores`
--

CREATE TABLE IF NOT EXISTS `sistemascolaboradores` (
  `idColaboradores` int(15) NOT NULL AUTO_INCREMENT,
  `CF_idReporte` int(15) NOT NULL,
  `CF_idUsuario` int(15) NOT NULL,
  PRIMARY KEY (`idColaboradores`),
  KEY `CF_idReporte` (`CF_idReporte`,`CF_idUsuario`),
  KEY `CF_idUsuario` (`CF_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemasreporte`
--

CREATE TABLE IF NOT EXISTS `sistemasreporte` (
  `idReporte` int(15) NOT NULL,
  `CF_idSistemas` int(15) NOT NULL,
  `diagnosticoReporte` longtext NOT NULL,
  `actividadReporte` longtext NOT NULL,
  `observacionReporte` longtext NOT NULL,
  PRIMARY KEY (`idReporte`),
  KEY `CF_idSistemas` (`CF_idSistemas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `idSolicitud` int(10) NOT NULL AUTO_INCREMENT,
  `CF_idDepartamento` int(10) NOT NULL,
  `CF_idUsuario` varchar(25) NOT NULL,
  `solicitante` varchar(100) NOT NULL,
  `fechas` varchar(50) NOT NULL,
  `horas` varchar(50) NOT NULL,
  `solicitud` longtext NOT NULL,
  PRIMARY KEY (`idSolicitud`),
  KEY `CF_idDepto` (`CF_idDepartamento`,`CF_idUsuario`),
  KEY `CF_idUsuario` (`CF_idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Solicitudes de Servicio' AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`idSolicitud`, `CF_idDepartamento`, `CF_idUsuario`, `solicitante`, `fechas`, `horas`, `solicitud`) VALUES
(1, 1, '0', 'Ejemplo', '', '', 'cierre de turno'),
(2, 1, '0', 'Ejemplo', '', '', 'cierre de turno'),
(3, 1, '0', 'Ejemplo', '', '', 'cierre de turno'),
(4, 1, '0', 'Ejemplo', '', '', 'cierre de turno'),
(5, 1, '0', 'Ejemplo', '2013-07-05 ', '12:53:47', 'cierre de turno'),
(6, 1, '0', 'Ejemplo', '2013-07-05 ', '12:53:47', 'cierre de turno'),
(7, 1, '0', 'Ejemplo', '2013-07-05 ', '12:54:04', 'cierre de turno'),
(8, 1, '0', 'Ejemplo', '2013-07-05 ', '15:48:38', 'asdas'),
(9, 1, '0', 'Ejemplo', '2013-07-05 ', '15:48:38', 'asdas'),
(10, 1, '0', 'Ejemplo', '2013-07-05 ', '15:48:38', 'asdas'),
(11, 1, '0', 'Ejemplo', '2013-07-05 ', '15:48:38', 'asdas'),
(12, 1, '0', 'Ejemplo', '2013-07-05 ', '15:48:38', 'asdas'),
(13, 1, '0', 'Ejemplo', '2013-07-05 ', '15:48:38', 'asdas'),
(14, 1, '0', 'ejemplo', '2013-07-05 ', '17:48:19', 'asdvaxcv zxcvzxcvzxcvz'),
(15, 1, '0', 'ejemplo', '2013-07-05 ', '17:48:19', 'asdvaxcv zxcvzxcvzxcvz'),
(16, 1, 'ROOT', 'ejemplo', '2013-07-05 ', '17:48:19', 'asdvaxcv zxcvzxcvzxcvz'),
(17, 1, 'ROOT', 'FHARID', '2013-07-11 ', '14:34:27', 'AAAAA'),
(18, 1, 'ROOT', 'sadasdasdasd', '2013-07-11 ', '15:00:56', 'asdasdasda'),
(19, 1, 'ROOT', 'sadasdasdasd', '2013-07-11 ', '15:01:21', 'asdasdasda'),
(20, 1, 'ROOT', 'sadasdasdasd', '2013-07-11 ', '15:01:39', 'asdasdasda'),
(21, 1, 'ROOT', 'zxczxczcz', '2013-07-11 ', '15:02:12', 'zxczxczxcz'),
(22, 1, 'ROOT', 'NKSDFKJASKJDF', '2013-07-29 ', '09:55:37', 'ASKJDFVHAKJSD'),
(23, 1, 'ROOT', 'NKSDFKJASKJDF', '2013-07-29 ', '09:55:37', 'ASKJDFVHAKJSD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisores`
--

CREATE TABLE IF NOT EXISTS `supervisores` (
  `idSupervisor` int(15) NOT NULL,
  `CF_idUsuario` int(15) NOT NULL,
  `CF_idDepartamento` int(15) NOT NULL,
  PRIMARY KEY (`idSupervisor`),
  KEY `CF_idUsuario` (`CF_idUsuario`,`CF_idDepartamento`),
  KEY `CF_idDepartamento` (`CF_idDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `supervisores`
--

INSERT INTO `supervisores` (`idSupervisor`, `CF_idUsuario`, `CF_idDepartamento`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(15) NOT NULL AUTO_INCREMENT,
  `CF_idDepartamento` int(10) NOT NULL,
  `CF_nivelSeguridad` int(10) NOT NULL,
  `nombreUsuario` varchar(150) NOT NULL,
  `apellidoUsuario` varchar(150) NOT NULL,
  `correoElectronico` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `contrasenia` varchar(350) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `CF_idDepartamento` (`CF_idDepartamento`,`CF_nivelSeguridad`),
  KEY `CF_nivelSeguridad` (`CF_nivelSeguridad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `CF_idDepartamento`, `CF_nivelSeguridad`, `nombreUsuario`, `apellidoUsuario`, `correoElectronico`, `username`, `contrasenia`, `telefono`, `estado`) VALUES
(1, 1, 1, 'root ', 'demo', 'demo@lostrompos.com.mx', 'root', '81dc9bdb52d04dc20036dbd8313ed055', '', 'ACTIVO'),
(2, 1, 1, 'FHARID NOE', 'CASTILLO SOSA', 'fcastillo@grupogamas.com.mx', 'fharid', '81dc9bdb52d04dc20036dbd8313ed055', '9991202066', 'ACTIVO'),
(3, 1, 1, 'DOVANY ', 'TUYIN SANTOS', 'dtuyin@grupogamas.com.mx', 'dova', '81dc9bdb52d04dc20036dbd8313ed055', '9991', 'ACTIVO'),
(4, 1, 1, 'GERARDO ', 'FRANCO', 'gfranco@grupogamas.com.mx', 'gerardo', '81dc9bdb52d04dc20036dbd8313ed055', '999', 'ACTIVO'),
(5, 1, 1, 'IVAN', 'RICALDE', 'iricalde@grupogamas.com.mx', 'ivan', '81dc9bdb52d04dc20036dbd8313ed055', '999', 'ACTIVO'),
(6, 1, 1, 'JUAN', 'PINO', 'jpino@grupogamas.com.mx', 'juan', '81dc9bdb52d04dc20036dbd8313ed055', '999', 'ACTIVO'),
(7, 1, 1, 'ISAIAS', 'UC', 'iuc@grupogamas.com.mx', 'isaias', '81dc9bdb52d04dc20036dbd8313ed055', '999', 'ACTIVO'),
(8, 2, 1, 'merca', 'merca', '', 'merca', '81dc9bdb52d04dc20036dbd8313ed055', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conexiones`
--
ALTER TABLE `conexiones`
  ADD CONSTRAINT `conexiones_ibfk_1` FOREIGN KEY (`CF_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sistemasasignacion`
--
ALTER TABLE `sistemasasignacion`
  ADD CONSTRAINT `sistemasasignacion_ibfk_1` FOREIGN KEY (`CF_idSolicitud`) REFERENCES `solicitudes` (`idSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sistemascolaboradores`
--
ALTER TABLE `sistemascolaboradores`
  ADD CONSTRAINT `sistemascolaboradores_ibfk_1` FOREIGN KEY (`CF_idReporte`) REFERENCES `sistemasreporte` (`idReporte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sistemasreporte`
--
ALTER TABLE `sistemasreporte`
  ADD CONSTRAINT `sistemasreporte_ibfk_1` FOREIGN KEY (`CF_idSistemas`) REFERENCES `sistemasasignacion` (`idSistemas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`CF_idDepartamento`) REFERENCES `departamentos` (`idDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`CF_nivelSeguridad`) REFERENCES `seguridadniveles` (`idSeguridad`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
