-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.17-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para res_hoteles
CREATE DATABASE IF NOT EXISTS `res_hoteles` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `res_hoteles`;

-- Volcando estructura para tabla res_hoteles.comentario_hotel
CREATE TABLE IF NOT EXISTS `comentario_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(1000) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_hotel` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comentario` (`id_hotel`),
  KEY `fk_usuario_comentario` (`id_usuario`),
  CONSTRAINT `fk_comentario` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`),
  CONSTRAINT `fk_usuario_comentario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.comentario_hotel: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `comentario_hotel` DISABLE KEYS */;
INSERT INTO `comentario_hotel` (`id`, `descripcion`, `fecha`, `id_hotel`, `id_usuario`) VALUES
	(1, 'Todo excelente, servicio de primerísimo nivel, empleados preparados y capacitados para desarrollar s', '2019-09-17 14:49:16', 1, 1),
	(2, 'Este establecimiento dispone de canchas de tenis techadas y parque acuático gratuito con toboganes. El establecimiento cuenta con una alberca al aire libre y un chapoteadero. Otras opciones de esparcimiento incluyen sauna y sala de fitness. Las siguientes actividades de recreación se pueden practicar en el establecimiento o en los alrededores. Es posible que apliquen cargos.', '2019-09-17 14:55:59', 1, 2);
/*!40000 ALTER TABLE `comentario_hotel` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.email_hotel
CREATE TABLE IF NOT EXISTS `email_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_email_hotel` (`id_hotel`),
  CONSTRAINT `fk_email_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.email_hotel: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `email_hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_hotel` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.foto_hotel
CREATE TABLE IF NOT EXISTS `foto_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(500) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `imagen_principal` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_foto_hotel` (`id_hotel`),
  CONSTRAINT `fk_foto_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.foto_hotel: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `foto_hotel` DISABLE KEYS */;
INSERT INTO `foto_hotel` (`id`, `foto`, `id_hotel`, `imagen_principal`) VALUES
	(1, '../view/asset/riu3.jpg', 1, 'not'),
	(5, '../view/asset/riu2.jpg', 2, 'active'),
	(6, '../view/asset/riu.jpg', 2, 'not'),
	(9, '../view/asset/ham2.jpg', 3, 'active'),
	(10, '../view/asset/riu3.jpg', 1, 'active'),
	(11, '../view/asset/riu2.jpg', 1, 'not');
/*!40000 ALTER TABLE `foto_hotel` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.habitaciones
CREATE TABLE IF NOT EXISTS `habitaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `precio` double NOT NULL,
  `precio_oferta` double NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `cant_cama` int(11) NOT NULL,
  `tamaño` varchar(100) DEFAULT NULL,
  `cant_adulto` int(11) NOT NULL,
  `cant_niño` int(11) NOT NULL,
  `detalle` varchar(500) DEFAULT NULL,
  `disponibilidad` tinyint(1) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_habitaciones_hotel` (`id_hotel`),
  CONSTRAINT `fk_habitaciones_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.habitaciones: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `habitaciones` DISABLE KEYS */;
INSERT INTO `habitaciones` (`id`, `precio`, `precio_oferta`, `tipo`, `cant_cama`, `tamaño`, `cant_adulto`, `cant_niño`, `detalle`, `disponibilidad`, `id_hotel`, `foto`) VALUES
	(1, 2000, 1500, 'Junior Suit', 2, '100', 2, 2, 'Alimentos y bebidas: cafetera y tetera, minibar, servicio de habitación las 24 horas con botella de agua de cortesía', 5, 1, '../view/asset/ha1.jpg'),
	(4, 500, 450, 'Suit Delux', 1, '150', 1, 0, 'Descanso: cortinas blackout, servicio nocturno de cortesía y ropa de cama', 10, 1, '../view/asset/ha2.jpg'),
	(6, 5000, 4500, 'Siut Precidencial ', 1, '200', 1, 1, 'Baño: baño privado con tina y regadera combinadas, amenidades de baño de diseñador y secadora de cabello', 5, 1, '../view/asset/ha3.jpg');
/*!40000 ALTER TABLE `habitaciones` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.hoteles
CREATE TABLE IF NOT EXISTS `hoteles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `prestigio` int(11) NOT NULL,
  `localizacion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uidx_hotel_nombre` (`nombre`),
  FULLTEXT KEY `ftindex_hoteles` (`nombre`,`provincia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.hoteles: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `hoteles` DISABLE KEYS */;
INSERT INTO `hoteles` (`id`, `nombre`, `foto`, `provincia`, `calle`, `prestigio`, `localizacion`) VALUES
	(1, 'Riu palace all exclusive', '1', 'Punta Cana\r\n', '1', 5, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.811311432005!2d-68.45630568527613!3d18.717263987294743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea8ebbe2033a3db%3A0x5e15d739ded7ebfc!2sHotel%20Riu%20Palace%20Bavaro!5e0!3m2!1ses-419!2sdo!4v1568676842650!5m2!1ses-419!2sdo'),
	(2, 'Meliat', '2', 'Punta Cana', '2', 6, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.767754453506!2d-68.41021978527684!3d18.67441498731964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea8ec956bfc8b47%3A0xa459a2528b9f4a49!2sMeli%C3%A1%20Caribe%20Beach%20Resort!5e0!3m2!1ses-419!2sdo!4v1568676901719!5m2!1ses-419!2sdo'),
	(3, 'Hamaca', '3', 'Santo Domingo', 'Los prado', 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.759009944115!2d-69.60620788528038!3d18.449247887450625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf7e38aef7e231%3A0x380afa2b57a05246!2sBe%20Live%20Experience%20Hamaca%20Beach!5e0!3m2!1ses-419!2sdo!4v1568676994710!5m2!1ses-419!2sdo');
/*!40000 ALTER TABLE `hoteles` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.lugares_cercanos_hotel
CREATE TABLE IF NOT EXISTS `lugares_cercanos_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar` varchar(100) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lugares_cercanos` (`id_hotel`),
  CONSTRAINT `fk_lugares_cercanos` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.lugares_cercanos_hotel: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `lugares_cercanos_hotel` DISABLE KEYS */;
INSERT INTO `lugares_cercanos_hotel` (`id`, `lugar`, `id_hotel`) VALUES
	(2, 'Playa macao', 1),
	(4, 'Campo de golf', 1),
	(5, 'Acuario', 2),
	(6, 'Bomba de gazolina', 2);
/*!40000 ALTER TABLE `lugares_cercanos_hotel` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.reservaciones
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cant_persona` int(11) NOT NULL,
  `precio_persona` double NOT NULL,
  `total` double NOT NULL,
  `id_habitacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reservaciones_habitaciones` (`id_habitacion`),
  KEY `fk_reservaciones_usuarios` (`id_usuario`),
  CONSTRAINT `fk_reservaciones_habitaciones` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id`),
  CONSTRAINT `fk_reservaciones_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.reservaciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reservaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservaciones` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.servicio_hotel
CREATE TABLE IF NOT EXISTS `servicio_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicio` varchar(100) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicios_hotel` (`id_hotel`),
  CONSTRAINT `fk_servicios_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.servicio_hotel: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `servicio_hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio_hotel` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.tel_hotel
CREATE TABLE IF NOT EXISTS `tel_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(50) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tel_hotel` (`id_hotel`),
  CONSTRAINT `fk_tel_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hoteles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.tel_hotel: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tel_hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `tel_hotel` ENABLE KEYS */;

-- Volcando estructura para tabla res_hoteles.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla res_hoteles.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `correo`, `clave`, `tipo`, `nombre`, `apellido`) VALUES
	(1, 'admin@admin.com', '123456', 1, 'El administrados', 'Admin'),
	(2, 'juan@gmail.com', '123456', 2, 'Juan', 'Valdez');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para vista res_hoteles.vw_hotel_sm
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vw_hotel_sm` (
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`provincia` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`calle` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`prestigio` INT(11) NOT NULL,
	`foto` VARCHAR(500) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista res_hoteles.vw_hotel_sm
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vw_hotel_sm`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_hotel_sm` AS select `hoteles`.`nombre` AS `nombre`,`hoteles`.`provincia` AS `provincia`,`hoteles`.`calle` AS `calle`,`hoteles`.`prestigio` AS `prestigio`,`foto_hotel`.`foto` AS `foto` from (`hoteles` join `foto_hotel` on((`hoteles`.`id` = `foto_hotel`.`id_hotel`))) where ((`hoteles`.`nombre` like '%a%') and (`hoteles`.`provincia` like '%a%')) group by `foto_hotel`.`foto`;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
