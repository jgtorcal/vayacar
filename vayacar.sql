-- --------------------------------------------------------
-- Host:                         departamentodeinternet.com
-- Versión del servidor:         5.5.54 - MySQL Community Server (GPL) by Atomicorp
-- SO del servidor:              Linux
-- HeidiSQL Versión:             11.3.0.6463
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para vayacar
CREATE DATABASE IF NOT EXISTS `vayacar` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vayacar`;

-- Volcando estructura para tabla vayacar.coches
CREATE TABLE IF NOT EXISTS `coches` (
  `id_coche` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` int(10) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `puertas` int(11) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `visibilidad` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_color` int(11) DEFAULT NULL,
  `id_provincia` int(11) DEFAULT NULL,
  `id_condicion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_coche`),
  KEY `id_marca` (`id_marca`),
  KEY `id_color` (`id_color`),
  KEY `id_provincia` (`id_provincia`),
  KEY `id_condicion` (`id_condicion`),
  CONSTRAINT `FK_color` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id_color`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_condicion` FOREIGN KEY (`id_condicion`) REFERENCES `condiciones` (`id_condicion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_marca` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_provincia` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id_provincia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla vayacar.coches: ~0 rows (aproximadamente)

-- Volcando estructura para tabla vayacar.colores
CREATE TABLE IF NOT EXISTS `colores` (
  `id_color` int(3) NOT NULL AUTO_INCREMENT,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_color`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vayacar.colores: ~0 rows (aproximadamente)

-- Volcando estructura para tabla vayacar.condiciones
CREATE TABLE IF NOT EXISTS `condiciones` (
  `id_condicion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_condicion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla vayacar.condiciones: ~4 rows (aproximadamente)
INSERT INTO `condiciones` (`id_condicion`, `nombre`) VALUES
	(1, 'Seminuevo'),
	(2, 'Buen estado'),
	(3, 'Pendiente de reparación'),
	(4, 'KM-0');

-- Volcando estructura para tabla vayacar.contactos
CREATE TABLE IF NOT EXISTS `contactos` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_coche` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contacto`),
  KEY `id_estado` (`id_estado`),
  KEY `FK_coche` (`id_coche`),
  CONSTRAINT `FK_coche` FOREIGN KEY (`id_coche`) REFERENCES `coches` (`id_coche`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_estado` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla vayacar.contactos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla vayacar.contenidos
CREATE TABLE IF NOT EXISTS `contenidos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `mapa` varchar(1000) DEFAULT NULL,
  `quienes_somos` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vayacar.contenidos: ~1 rows (aproximadamente)
INSERT INTO `contenidos` (`id`, `telefono`, `email`, `direccion`, `mapa`, `quienes_somos`) VALUES
	(1, '6600245853333335', 'info@vayacar.com33333335', 'Dirección postal Calle Inventada 08020 Barcelona333335', '&amp;lt;iframe src=&amp;quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23981.495383163154!2d1.9632107554628124!3d41.29391776737325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a482d1d5efb68b%3A0x400fae021a40790!2sGav%C3%A1%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1648586108215!5m2!1ses!2ses&amp;quot; width=&amp;quot;100%&amp;quot; height=&amp;quot;450&amp;quot; style=&amp;quot;border:0;&amp;quot; allowfullscreen=&amp;quot;&amp;quot; loading=&amp;quot;lazyyyyyyyy5555&amp;quot; referrerpolicy=&amp;quot;no-referrer-when-downgrade&amp;quot;&amp;gt;&amp;lt;/iframe&amp;gt;', '&amp;lt;p&amp;gt;5555554Lorem ipsum dolor sit amet, consrrrrrrrectetur adipisicing elit. Explicabo iure laboriosam voluptate, quas neque perferendis id repellat nobis doloribus nemo, tenetur, voluptatum deleniti? Nam quisquam magni officia nobis, maxime perspiciatis?&amp;lt;/p&amp;gt;');

-- Volcando estructura para tabla vayacar.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla vayacar.estados: ~3 rows (aproximadamente)
INSERT INTO `estados` (`id_estado`, `nombre`, `color`) VALUES
	(1, 'Pendiente', '#DC3545'),
	(2, 'Gestionando', '#FFC107'),
	(3, 'Finalizado', '#28A745');

-- Volcando estructura para tabla vayacar.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla vayacar.marcas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla vayacar.provincias
CREATE TABLE IF NOT EXISTS `provincias` (
  `id_provincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla vayacar.provincias: ~50 rows (aproximadamente)
INSERT INTO `provincias` (`id_provincia`, `nombre`) VALUES
	(1, 'Álava'),
	(2, 'Albacete'),
	(3, 'Alicante'),
	(4, 'Almería'),
	(5, 'Asturias'),
	(6, 'Ávila'),
	(7, 'Badajoz'),
	(8, 'Barcelona'),
	(9, 'Burgos'),
	(10, 'Cáceres'),
	(11, 'Cádiz'),
	(12, 'Cantabria'),
	(13, 'Castellón'),
	(14, 'Ciudad Real'),
	(15, 'Córdoba'),
	(16, 'Cuenca'),
	(17, 'Girona'),
	(18, 'Granada'),
	(19, 'Guadalajara'),
	(20, 'Guipúzcua'),
	(21, 'Huelva'),
	(22, 'Huesca'),
	(23, 'Islas Baleares'),
	(24, 'Jaén'),
	(25, 'La Coruña'),
	(26, 'La Rioja'),
	(27, 'Las Palmas'),
	(28, 'León'),
	(29, 'Lleida'),
	(30, 'Lugo'),
	(31, 'Madrid'),
	(32, 'Málaga'),
	(33, 'Murica'),
	(34, 'Navarra'),
	(35, 'Ourense'),
	(36, 'Palencia'),
	(37, 'Pontevedra'),
	(38, 'Salamanca'),
	(39, 'Santa Cruz de Tenerife'),
	(40, 'Segovia'),
	(41, 'Sevilla'),
	(42, 'Soria'),
	(43, 'Tarragona'),
	(44, 'Teruel'),
	(45, 'Toledo'),
	(46, 'Valencia'),
	(47, 'Valladolid'),
	(48, 'Vizcaya'),
	(49, 'Zamora'),
	(50, 'Zaragoza');

-- Volcando estructura para tabla vayacar.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla vayacar.roles: ~2 rows (aproximadamente)
INSERT INTO `roles` (`id_rol`, `nombre`) VALUES
	(1, 'Admin'),
	(2, 'SuperAdmin');

-- Volcando estructura para tabla vayacar.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_rol` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK_usuarios_roles` (`id_rol`),
  CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla vayacar.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `id_rol`) VALUES
	(1, 'Jordi', 'jgtorcal@gmail.com', '1234', 2),
	(2, 'Mike', 'mike@gmail.com', '1234', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
