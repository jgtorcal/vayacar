-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
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

-- Volcando estructura para tabla admin_vayacar.coches
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla admin_vayacar.coches: ~12 rows (aproximadamente)
INSERT INTO `coches` (`id_coche`, `referencia`, `modelo`, `descripcion`, `puertas`, `ano`, `precio`, `foto`, `visibilidad`, `id_marca`, `id_color`, `id_provincia`, `id_condicion`) VALUES
	(1, 562, 'Ateca', 'Diamlorem irure exercitationem condimentum, nostrud wisi pariatur maiores quae, eget illo mi, adipisci nam mi consectetur adipisci, dapibus placerat hac.', 5, 2007, 15000, '31eca307bc3b415df6f3b534f97c43ef.jpg', 1, 1, 3, 10, 4),
	(2, 808, 'X1', 'Nonummy! Laboriosam etiam rerum, penatibus dolor convallis esse! Fringilla dolor, illum, fugit. Provident pretium, quisque ridiculus aptent reiciendis! Necessitatibus proident.', 4, 2017, 13000, '69eee0bd6cf1ba6d86bffc127776e230.jpg', 1, 2, 1, 41, 2),
	(3, 52, 'Serie 1', 'Malesuada cupiditate debitis dignissim etiam quia in doloremque iaculis imperdiet congue nostra id lacus, repudiandae aliquam phasellus risus, minus voluptatibus.', 5, 2005, 12000, '0b7b5b7d2a7b017e46b0adc419d3eca5.jpg', 1, 2, 1, 5, 1),
	(4, 34, 'Berlingo', 'Impedit praesent, consectetur fugit iste. Quidem, suscipit mattis. Quasi vivamus, sed auctor. Quam mi reiciendis esse facilisis possimus rem penatibus.', 5, 2012, 15000, 'e153021a0ff18755e161a0115040dfdd.jpg', 1, 3, 4, 12, 1),
	(5, 256, 'C4 Picasso', 'Doloremque primis dui do parturient? Voluptate mollis incididunt sodales aenean maiores laboris suscipit. Tincidunt sagittis perferendis nunc veniam, cupidatat tristique.', 5, 2015, 18000, 'c291a9c0b346af5ba81ce05cae507cef.jpg', 1, 3, 2, 32, 2),
	(6, 452, 'Duster', 'Cubilia adipiscing est ultrices, porro accusantium, unde torquent nostrum platea quaerat feugiat interdum tortor beatae! Volutpat donec cupidatat? Cum vestibulum.', 4, 2009, 25000, 'be4a5f0e2068546e8f66b511de31cca1.jpg', 1, 4, 2, 44, 1),
	(7, 677, 'C-MAX', 'Accumsan scelerisque! Magni mattis fusce explicabo nullam tempore eaque! Voluptas cum curabitur pellentesque posuere blandit, exercitationem, magna repudiandae adipiscing tempore.', 5, 2008, 18000, '6e00e2f42b5e90338f1790f88f6248ea.jpg', 0, 5, 4, 1, 1),
	(8, 552, 'Fiesta', 'Velit magni convallis hymenaeos saepe, accusamus aliquet quam dolore eiusmod aliquam interdum aliquam, metus dictum nihil ea lobortis! Euismod cupidatat.', 3, 2006, 9000, '7c657a4260f5976bc4599f8e42509bd0.jpg', 0, 5, 4, 43, 1),
	(9, 122, 'Rio', 'Expedita maiores magna? Fames, leo ullam in sit atque, ipsum maiores! Mus libero hymenaeos aperiam necessitatibus laborum repellat ligula risus.', 3, 2017, 25000, 'd70a4928db92e278b70b9450e7f6e8cb.jpg', 0, 6, 2, 8, 1),
	(10, 555, 'Sportage', 'Mauris diam sit, doloremque mollitia unde possimus condimentum necessitatibus, ac nec aute, assumenda mollitia voluptate ligula ultrices justo recusandae inceptos.', 4, 2015, 25000, '60557648c28c30bb0a7e605e78383f1b.jpg', 1, 6, 5, 8, 1),
	(11, 233, 'Corsa', 'Tenetur accusamus, consequat lacinia? Laboris eleifend vestibulum. Amet quaerat proident, molestias aliquip! Duis deleniti taciti praesent perferendis ullamco? Facere veritatis.', 3, 2013, 11000, '5f47e1551b4e9ccf832a58af04a5ffd6.jpg', 1, 7, 2, 8, 1),
	(12, 566, '108', 'Tenetur occaecati, earum incididunt, nibh? Deserunt, quos conubia proin semper sapien aenean? Hymenaeos eum est, magnam quisquam optio! Litora? Nostra.', 4, 2018, 35000, 'b4370f9bdd81458dcedef2da62859c4c.jpg', 1, 8, 5, 8, 1);

-- Volcando estructura para tabla admin_vayacar.colores
CREATE TABLE IF NOT EXISTS `colores` (
  `id_color` int(3) NOT NULL AUTO_INCREMENT,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_color`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla admin_vayacar.colores: ~5 rows (aproximadamente)
INSERT INTO `colores` (`id_color`, `color`) VALUES
	(1, 'Negro'),
	(2, 'Blanco'),
	(3, 'Gris'),
	(4, 'Azul'),
	(5, 'Rojo');

-- Volcando estructura para tabla admin_vayacar.condiciones
CREATE TABLE IF NOT EXISTS `condiciones` (
  `id_condicion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_condicion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla admin_vayacar.condiciones: ~4 rows (aproximadamente)
INSERT INTO `condiciones` (`id_condicion`, `nombre`) VALUES
	(1, 'Seminuevo'),
	(2, 'Buen estado'),
	(3, 'Pendiente de reparación'),
	(4, 'KM-0');

-- Volcando estructura para tabla admin_vayacar.contactos
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla admin_vayacar.contactos: ~1 rows (aproximadamente)
INSERT INTO `contactos` (`id_contacto`, `nombre`, `telefono`, `email`, `mensaje`, `id_estado`, `id_coche`) VALUES
	(1, 'Jordi', '123456', 'jgtorcal@gmail.com', 'test', 2, 2),
	(2, 'Pedro', '45678123', 'pedro@gmail.com', 'Me interesa!', 1, 12);

-- Volcando estructura para tabla admin_vayacar.contenidos
CREATE TABLE IF NOT EXISTS `contenidos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `mapa` varchar(1000) DEFAULT NULL,
  `quienes_somos` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla admin_vayacar.contenidos: ~0 rows (aproximadamente)
INSERT INTO `contenidos` (`id`, `telefono`, `email`, `direccion`, `mapa`, `quienes_somos`) VALUES
	(1, '555 245 245', 'info@vayacar.com', 'Carrer de Pau Vergós, 66, 08850 Gavà, Barcelona', '&amp;lt;iframe src=&amp;quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23981.495383163154!2d1.9632107554628124!3d41.29391776737325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a482d1d5efb68b%3A0x400fae021a40790!2sGav%C3%A1%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1648586108215!5m2!1ses!2ses&amp;quot; width=&amp;quot;100%&amp;quot; height=&amp;quot;450&amp;quot; style=&amp;quot;border:0;&amp;quot; allowfullscreen=&amp;quot;&amp;quot; loading=&amp;quot;lazyyyyyyyy5555&amp;quot; referrerpolicy=&amp;quot;no-referrer-when-downgrade&amp;quot;&amp;gt;&amp;lt;/iframe&amp;gt;', '&amp;lt;p&amp;gt;VayaCar somos un concesionario ubicado en gava donde tenemos un amplio stock de veh&iacute;culos de ocasi&oacute;n de todas las marcas y colores.&amp;lt;/p&amp;gt;\r\n&amp;lt;p&amp;gt;20 a&ntilde;os de experiencia en el sector nos avala como una empresa de confianza dentro del sector de la venta de veh&iacute;culos de ocasi&oacute;n, donde todos nuestros clientes salen satisfechos con la compra y las facilidades burocr&aacute;ticas de cambio de nombre, mantenimiento y entrega.&amp;lt;/p&amp;gt;\r\n&amp;lt;p&amp;gt;&iexcl;No dudes en venir a vernos!&amp;lt;/p&amp;gt;');

-- Volcando estructura para tabla admin_vayacar.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla admin_vayacar.estados: ~3 rows (aproximadamente)
INSERT INTO `estados` (`id_estado`, `nombre`, `color`) VALUES
	(1, 'Pendiente', '#DC3545'),
	(2, 'Gestionando', '#FFC107'),
	(3, 'Finalizado', '#28A745');

-- Volcando estructura para tabla admin_vayacar.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla admin_vayacar.marcas: ~10 rows (aproximadamente)
INSERT INTO `marcas` (`id_marca`, `nombre`, `logo`) VALUES
	(1, 'Seat', '3acb2b64e768134cb42d57706996c8d3.png'),
	(2, 'BMW', '5848844e2b3aaab9f0e0d54f3af75598.png'),
	(3, 'Citroen', 'bb19c72e54275e65f54fdc76a3939756.png'),
	(4, 'Dacia', 'f1bd2191c4009dddac15b51b12e04074.png'),
	(5, 'Ford', '60141b94e8c30111d45efe14d66ead85.png'),
	(6, 'KIA', '817b40281c324591078c3219aa17861a.png'),
	(7, 'Opel', 'e07f7a14088967167000445b1cad6d2d.png'),
	(8, 'Peugeot', '5ba755032c2e74b5fe8cfa739a7ccc0d.png'),
	(9, 'Renault', '3ad793680ef12efabd2fa01612b84775.png'),
	(10, 'Toyota', '5aa7e0c0a31c45bffeb4142f3f47f438.png');

-- Volcando estructura para tabla admin_vayacar.provincias
CREATE TABLE IF NOT EXISTS `provincias` (
  `id_provincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla admin_vayacar.provincias: ~50 rows (aproximadamente)
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

-- Volcando estructura para tabla admin_vayacar.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla admin_vayacar.roles: ~2 rows (aproximadamente)
INSERT INTO `roles` (`id_rol`, `nombre`) VALUES
	(1, 'Admin'),
	(2, 'SuperAdmin');

-- Volcando estructura para tabla admin_vayacar.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_rol` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK_usuarios_roles` (`id_rol`),
  CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla admin_vayacar.usuarios: ~3 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `id_rol`) VALUES
	(1, 'Jordi', 'jgtorcal@gmail.com', '1234', 2),
	(2, 'Mike', 'mike@gmail.com', '12345', 1),
	(3, 'Test', 'test@gmail.com', '1234', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
