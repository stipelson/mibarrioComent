-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-09-2014 a las 15:29:28
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `Nombre` varchar(50) NOT NULL,
  `Sistema` tinyint(1) NOT NULL,
  `Perfiles` tinyint(1) NOT NULL,
  `Productos` tinyint(1) NOT NULL,
  `Inventario` tinyint(1) NOT NULL,
  `Facturacion` tinyint(1) NOT NULL,
  `Reportes` tinyint(1) NOT NULL,
`ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`Nombre`, `Sistema`, `Perfiles`, `Productos`, `Inventario`, `Facturacion`, `Reportes`, `ID`) VALUES
('cositus', 1, 1, 1, 1, 1, 1, 1),
('Root', 1, 1, 1, 1, 1, 1, 2),
('tercero', 1, 1, 1, 0, 0, 0, 3),
('cuarto', 0, 0, 0, 1, 1, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Documento` double NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Usuario` varchar(8) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Pregunta` varchar(150) NOT NULL,
  `Respuesta` varchar(150) NOT NULL,
  `Tipo_Documento` varchar(5) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Foto` varchar(400) NOT NULL,
  `Telefono` double NOT NULL,
  `Correo_Electronico` varchar(30) NOT NULL,
  `Genero` varchar(1) NOT NULL,
  `perfiles_Nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Documento`, `Nombres`, `Apellidos`, `Usuario`, `Password`, `Pregunta`, `Respuesta`, `Tipo_Documento`, `Ciudad`, `Direccion`, `Edad`, `Foto`, `Telefono`, `Correo_Electronico`, `Genero`, `perfiles_Nombre`) VALUES
(66725237, 'Beatriz Eliana', 'Rincon', 'beatriz', '12345', 'Lugar de nacimiento?', 'belen', 'CC', 'Tulua', 'Calle 33 #22-0 - Barrio', 35, 'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/484581_116115091853200_1230645316_n.jpg?oh=9bd01ed488658003224494ae6f39f777&oe=54CF8688&__gda__=1418923097_61697874751c8628ccb14f80d1c53', 3173895745, 'beatrizeliana11@gmail.com', 'F', 2),
(1111111113, 'Rootencio', 'Adminez', 'root', '123456', 'asdfasdfa?', 'batman', 'CC', 'Tulua', 'Calle 11 #1-1 - Barrio', 20, 'http://1.bp.blogspot.com/-VuCZ5URwvL4/UOwmLOZMGqI/AAAAAAAAAHE/0tuJa1FKU9A/s1600/tumblr_m0sykzhXsU1r4', 2147483647, 'asdf@root.com', 'M', 2),
(1116255844, 'federico', 'alfonso', 'federico', 'fedemil3', 'direccion de la casa', 'se me olvido', 'CC', 'Tulua', 'calle no se que de la trini', 27, 'URL IMGEN', 3125678341, 'correo@ferderico.me', 'M', 3),
(1116266234, 'Jhonier', 'Valencia', 'jhonier', '123456', 'Segundo nombre?', 'edinson', 'CC', 'Tulua', 'Calle 33 #333-33 - Barrio', 20, 'sdfgsdgfdgs', 2147483647, 'jevalenciac@gmail.com', 'M', 2),
(1116268101, 'Yair', 'Mondragon ', 'yair', 'mondra', 'Primera Mascota?', 'perrito', 'CC', 'Tulua', 'Calle 22 #22-2 - Barrio', 20, 'https://scontent-b-dfw.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/12058_288531341277248_255174317_n.jpg?oh=4ce2e3746e3e1592bbdf726faa9a5549&oe=54849F93', 2307004, 'blackandwhite654@gmail.com', 'M', 2),
(1116488415, 'Stiven', 'Flores', 'stiven', '1234', 'Comida favorita?', 'rapida', 'CC', 'Tulua', 'Carrera 44 #44-44 - Barrio', 20, '', 2147483647, 'stiven123@gmail.com', 'M', 1),
(2147483647, 'Andres', 'Vasquez', 'andress', '12345', 'Primer amigo de la infancia?', 'jhon', 'CC', 'Tulua', 'Calle 44 #44-44 - Barrio', 20, 'https://sp.yimg.com/ib/th?id=HN.608055352352440543&pid=15.1&P=0', 2147483647, 'andresvasquez12345@gmail.com', 'M', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Documento`), ADD KEY `perfiles_Nombre` (`perfiles_Nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
