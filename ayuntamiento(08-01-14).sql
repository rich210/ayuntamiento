-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2014 a las 21:01:16
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ayuntamiento`
--
CREATE DATABASE IF NOT EXISTS `ayuntamiento` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ayuntamiento`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE IF NOT EXISTS `tbl_cliente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mac` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `compatibilidad` varchar(20) DEFAULT NULL,
  `fabricante` varchar(45) DEFAULT NULL,
  `sistema_operativo_id` int(10) unsigned NOT NULL,
  `usuario_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cliente_usuario_idx` (`usuario_id`),
  KEY `FK_cliente_sistemaOperativo_idx` (`sistema_operativo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_equipo_conexion`
--

CREATE TABLE IF NOT EXISTS `tbl_equipo_conexion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_equipo_conexion` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado`
--

CREATE TABLE IF NOT EXISTS `tbl_estado` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `pais_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_estado_pais_idx` (`pais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_civil`
--

CREATE TABLE IF NOT EXISTS `tbl_estado_civil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_estado_civil` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_estado_civil`
--

INSERT INTO `tbl_estado_civil` (`id`, `nombre_estado_civil`, `descripcion`, `cancelado`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'Casado', 'Estado civil en el cual sigue en perfecto matrimonio', 0, '2014-01-08 20:43:11', '2014-01-08 20:43:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_event_log`
--

CREATE TABLE IF NOT EXISTS `tbl_event_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `punto_acceso_id` int(10) unsigned NOT NULL,
  `cliente_id` int(10) unsigned NOT NULL,
  `tipo_evento_id` int(10) unsigned NOT NULL,
  `detalles` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_eventLog_puntoAcceso_idx` (`punto_acceso_id`),
  KEY `FK_eventLog_tipoEvento_idx` (`tipo_evento_id`),
  KEY `FK_eventLog_cliente_idx` (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grupo`
--

CREATE TABLE IF NOT EXISTS `tbl_grupo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` tinytext,
  `fecha_modificacion` datetime NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grupo_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_grupo_usuario` (
  `grupo_id` int(10) unsigned NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  KEY `FK_tblGrupoUsuario_tblGrupo_idx` (`grupo_id`),
  KEY `FK_grupoUsuario_usuario_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hotspot`
--

CREATE TABLE IF NOT EXISTS `tbl_hotspot` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `html` text NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `caducidad` date NOT NULL,
  `predeterminado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interes`
--

CREATE TABLE IF NOT EXISTS `tbl_interes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_interes` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interes_persona`
--

CREATE TABLE IF NOT EXISTS `tbl_interes_persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `persona_id` int(10) unsigned NOT NULL,
  `interes_id` int(10) unsigned NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_interesPersona_persona_idx` (`persona_id`),
  KEY `FK_interesPersona_interes_idx` (`interes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipio`
--

CREATE TABLE IF NOT EXISTS `tbl_municipio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `pais_id` int(10) unsigned NOT NULL,
  `estado_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_municipio_pais_idx` (`pais_id`),
  KEY `FK_municipio_estado_idx` (`estado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_nacionalidad`
--

CREATE TABLE IF NOT EXISTS `tbl_nacionalidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_nacionalidad` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_nivel_estudio`
--

CREATE TABLE IF NOT EXISTS `tbl_nivel_estudio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_nivel_estudio` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ocupacion`
--

CREATE TABLE IF NOT EXISTS `tbl_ocupacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_ocupacion` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pagina_interes_red`
--

CREATE TABLE IF NOT EXISTS `tbl_pagina_interes_red` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pagina_id` int(10) unsigned NOT NULL,
  `interes_id` int(10) unsigned NOT NULL,
  `red_id` int(10) unsigned NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pir_interes_idx` (`interes_id`),
  KEY `FK_pir_red_idx` (`red_id`),
  KEY `FK_pir_pagina_idx` (`pagina_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pagina_web`
--

CREATE TABLE IF NOT EXISTS `tbl_pagina_web` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `link` varchar(255) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pais`
--

CREATE TABLE IF NOT EXISTS `tbl_pais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_pais` varchar(45) NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE IF NOT EXISTS `tbl_persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` tinytext NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `bloqueo` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `nivel_estudios_id` int(10) unsigned NOT NULL,
  `ocupacion_id` int(10) unsigned NOT NULL,
  `estado_civil_id` int(10) unsigned NOT NULL,
  `nacionalidad_id` int(10) unsigned NOT NULL,
  `equipo_conexion_id` int(10) unsigned NOT NULL,
  `usabilidad_servicio_id` int(10) unsigned NOT NULL,
  `pais_id` int(10) unsigned NOT NULL,
  `estado_id` int(10) unsigned NOT NULL,
  `municipio_id` int(10) unsigned NOT NULL,
  `poblacion_id` int(10) unsigned NOT NULL,
  `unidad_habitacional_id` int(10) unsigned NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_persona_nivelEstudio_idx` (`nivel_estudios_id`),
  KEY `FK_persona_ocupacion_idx` (`ocupacion_id`),
  KEY `FK_persona_estadoCivil_idx` (`estado_civil_id`),
  KEY `FK_persona_nacionalidad_idx` (`nacionalidad_id`),
  KEY `FK_persona_equipoConexion_idx` (`equipo_conexion_id`),
  KEY `FK_persona_usabilidadServicio_idx` (`usabilidad_servicio_id`),
  KEY `FK_persona_pais_idx` (`pais_id`),
  KEY `FK_persona_estado_idx` (`estado_id`),
  KEY `FK_persona_municipio_idx` (`municipio_id`),
  KEY `FK_persona_poblacion_idx` (`poblacion_id`),
  KEY `FK_persona_unidadHabitacional_idx` (`unidad_habitacional_id`),
  KEY `FK_persona_usuario_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_poblacion`
--

CREATE TABLE IF NOT EXISTS `tbl_poblacion` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `pais_id` int(10) unsigned NOT NULL,
  `estado_id` int(10) unsigned NOT NULL,
  `municipio_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_poblacion_pais_idx` (`pais_id`),
  KEY `FK_poblacion_estado_idx` (`estado_id`),
  KEY `FK_poblacion_municipio_idx` (`municipio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_punto_acceso`
--

CREATE TABLE IF NOT EXISTS `tbl_punto_acceso` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcionProducto` varchar(50) DEFAULT NULL,
  `ipPublica` varchar(20) NOT NULL,
  `codigoProducto` varchar(30) NOT NULL,
  `mac` varchar(20) NOT NULL,
  `modelo` varchar(10) NOT NULL,
  `numeroSerial` varchar(15) NOT NULL,
  `lanIp` varchar(20) NOT NULL,
  `red_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_puntoAcceso_red_idx` (`red_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_red`
--

CREATE TABLE IF NOT EXISTS `tbl_red` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `direccion` tinytext NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  `zona_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_red_zona_idx` (`zona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_red_hotspot`
--

CREATE TABLE IF NOT EXISTS `tbl_red_hotspot` (
  `hotspot_id` int(10) unsigned NOT NULL,
  `red_id` int(10) unsigned NOT NULL,
  KEY `FK_redHotspot_hotspot_idx` (`hotspot_id`),
  KEY `FK_redHotspot_red_idx` (`red_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sistema_operativo`
--

CREATE TABLE IF NOT EXISTS `tbl_sistema_operativo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `comentarios` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_evento`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_evento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(45) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_unidad_habitacional`
--

CREATE TABLE IF NOT EXISTS `tbl_unidad_habitacional` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `codigo_postal` varchar(8) NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `pais_id` int(10) unsigned NOT NULL,
  `estado_id` int(10) unsigned NOT NULL,
  `municipio_id` int(10) unsigned NOT NULL,
  `poblacion_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_unidad_pais_idx` (`pais_id`),
  KEY `FK_unidad_estado_idx` (`estado_id`),
  KEY `FK_unidad_municipio_idx` (`municipio_id`),
  KEY `FK_unidad_poblacion_idx` (`poblacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usabilidad_servicio`
--

CREATE TABLE IF NOT EXISTS `tbl_usabilidad_servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_uso_servicio` varchar(50) NOT NULL,
  `descripcion` tinytext,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(80) NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_zona_ciudad`
--

CREATE TABLE IF NOT EXISTS `tbl_zona_ciudad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` tinytext,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `cancelado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD CONSTRAINT `FK_cliente_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `tbl_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cliente_sistemaOperativo` FOREIGN KEY (`sistema_operativo_id`) REFERENCES `tbl_sistema_operativo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  ADD CONSTRAINT `FK_estado_pais` FOREIGN KEY (`pais_id`) REFERENCES `tbl_pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_event_log`
--
ALTER TABLE `tbl_event_log`
  ADD CONSTRAINT `FK_eventLog_puntoAcceso` FOREIGN KEY (`punto_acceso_id`) REFERENCES `tbl_punto_acceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_eventLog_tipoEvento` FOREIGN KEY (`tipo_evento_id`) REFERENCES `tbl_tipo_evento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_eventLog_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `tbl_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_grupo_usuario`
--
ALTER TABLE `tbl_grupo_usuario`
  ADD CONSTRAINT `FK_grupoUsuario_grupo` FOREIGN KEY (`grupo_id`) REFERENCES `tbl_grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_grupoUsuario_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `tbl_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_interes_persona`
--
ALTER TABLE `tbl_interes_persona`
  ADD CONSTRAINT `FK_interesPersona_persona` FOREIGN KEY (`persona_id`) REFERENCES `tbl_persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_interesPersona_interes` FOREIGN KEY (`interes_id`) REFERENCES `tbl_interes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_municipio`
--
ALTER TABLE `tbl_municipio`
  ADD CONSTRAINT `FK_municipio_pais` FOREIGN KEY (`pais_id`) REFERENCES `tbl_pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_municipio_estado` FOREIGN KEY (`estado_id`) REFERENCES `tbl_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_pagina_interes_red`
--
ALTER TABLE `tbl_pagina_interes_red`
  ADD CONSTRAINT `FK_pir_pagina` FOREIGN KEY (`pagina_id`) REFERENCES `tbl_pagina_web` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_pir_interes` FOREIGN KEY (`interes_id`) REFERENCES `tbl_interes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_pir_red` FOREIGN KEY (`red_id`) REFERENCES `tbl_red` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD CONSTRAINT `FK_persona_nivelEstudio` FOREIGN KEY (`nivel_estudios_id`) REFERENCES `tbl_nivel_estudio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_ocupacion` FOREIGN KEY (`ocupacion_id`) REFERENCES `tbl_ocupacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_estadoCivil` FOREIGN KEY (`estado_civil_id`) REFERENCES `tbl_estado_civil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_nacionalidad` FOREIGN KEY (`nacionalidad_id`) REFERENCES `tbl_nacionalidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_equipoConexion` FOREIGN KEY (`equipo_conexion_id`) REFERENCES `tbl_equipo_conexion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_usabilidadServicio` FOREIGN KEY (`usabilidad_servicio_id`) REFERENCES `tbl_usabilidad_servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_pais` FOREIGN KEY (`pais_id`) REFERENCES `tbl_pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_estado` FOREIGN KEY (`estado_id`) REFERENCES `tbl_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_municipio` FOREIGN KEY (`municipio_id`) REFERENCES `tbl_municipio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_poblacion` FOREIGN KEY (`poblacion_id`) REFERENCES `tbl_poblacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_unidadHabitacional` FOREIGN KEY (`unidad_habitacional_id`) REFERENCES `tbl_unidad_habitacional` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_persona_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `tbl_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_poblacion`
--
ALTER TABLE `tbl_poblacion`
  ADD CONSTRAINT `FK_poblacion_pais` FOREIGN KEY (`pais_id`) REFERENCES `tbl_pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_poblacion_estado` FOREIGN KEY (`estado_id`) REFERENCES `tbl_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_poblacion_municipio` FOREIGN KEY (`municipio_id`) REFERENCES `tbl_municipio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_punto_acceso`
--
ALTER TABLE `tbl_punto_acceso`
  ADD CONSTRAINT `FK_puntoAcceso_red` FOREIGN KEY (`red_id`) REFERENCES `tbl_red` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_red`
--
ALTER TABLE `tbl_red`
  ADD CONSTRAINT `FK_red_zona` FOREIGN KEY (`zona_id`) REFERENCES `tbl_zona_ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_red_hotspot`
--
ALTER TABLE `tbl_red_hotspot`
  ADD CONSTRAINT `FK_redHotspot_hotspot` FOREIGN KEY (`hotspot_id`) REFERENCES `tbl_hotspot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_redHotspot_red` FOREIGN KEY (`red_id`) REFERENCES `tbl_red` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_unidad_habitacional`
--
ALTER TABLE `tbl_unidad_habitacional`
  ADD CONSTRAINT `FK_unidad_pais` FOREIGN KEY (`pais_id`) REFERENCES `tbl_pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_unidad_estado` FOREIGN KEY (`estado_id`) REFERENCES `tbl_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_unidad_municipio` FOREIGN KEY (`municipio_id`) REFERENCES `tbl_municipio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_unidad_poblacion` FOREIGN KEY (`poblacion_id`) REFERENCES `tbl_poblacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
