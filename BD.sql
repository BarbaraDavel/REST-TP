-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2021 a las 16:23:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `estado`) VALUES
(5, 'Vehiculos', 1),
(6, 'Inmuebles', 1),
(7, 'Hogar, Muebles y Jardín', 1),
(8, 'Electrodomésticos', 1),
(9, 'Herramientas y Construcción', 1),
(10, 'Juguetes', 1),
(11, 'Bebés', 1),
(12, 'Libros', 1),
(13, 'Belleza y Cuidado Personal', 1),
(14, 'Supermercado', 1),
(15, 'Agro', 1),
(16, 'Servicios', 1),
(17, 'Productos Sustentables', 1),
(18, 'Animales y Mascotas', 1),
(19, 'Antiguedades', 1),
(20, 'Arte, Libreria y Merceria', 1),
(21, 'Camaras, Celulares y Accesorios', 1),
(22, 'Computación', 1),
(23, 'Videojuegos y Consolas', 1),
(24, 'Deporte y Fitness', 1),
(25, 'Decoración', 1),
(26, 'Joyas y Relojes', 1),
(27, 'Instrumentos Musicales', 1),
(28, 'Ropa y Accesorios', 1),
(29, 'Salud y Equipo Médico', 1),
(30, 'Souvenirs, Cotillón y Fiestas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `nro` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendimiento`
--

CREATE TABLE `emprendimiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `sitio_web` varchar(100) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `nro_telefono` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `logo` blob NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_empresa_id` int(11) NOT NULL,
  `direccion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre`) VALUES
(1, 'Alba Posse'),
(2, 'Almafuerte'),
(3, 'Florentino Ameghino'),
(4, 'Apostoles'),
(5, 'Aristobulo Del Valle'),
(6, 'Arroyo Del Medio'),
(7, 'Azara'),
(8, 'Bernardo De Irigoyen'),
(9, 'Bonpland'),
(10, 'Caa-Yari'),
(11, 'Campo Grande'),
(12, 'Campo Ramon'),
(13, 'Campo Viera'),
(14, 'Candelaria'),
(15, 'Capiovi'),
(16, 'Caraguatay'),
(17, 'Cerro Azul'),
(18, 'Cerro Cora'),
(19, 'Colonia Alberdi'),
(20, 'Colonia Aurora'),
(21, 'Colonia Delicia'),
(22, 'Colonia Polana'),
(23, 'Colonia Victoria'),
(24, 'Colonia Wanda'),
(25, 'Concepcion De La Sierra'),
(26, 'Corpus'),
(27, 'Dos Arroyos'),
(28, 'Dos De Mayo'),
(29, 'El Alcazar'),
(30, 'Eldorado'),
(31, 'El Soberbio'),
(32, 'Puerto Esperanza'),
(33, 'Fachinal'),
(34, 'Garuhape'),
(35, 'Garupa'),
(36, 'General Alvear'),
(37, 'San Antonio'),
(38, 'General Urquiza'),
(39, 'Gobernador Lopez'),
(40, 'Gobernador Roca'),
(41, 'Guarani'),
(42, 'Hipolito Yrigoyen'),
(43, 'Puerto Iguazu'),
(44, 'Itacaruare'),
(45, 'Jardin America'),
(46, 'Leandro N. Alem'),
(47, 'Puerto Leoni'),
(48, 'Puerto Libertad'),
(49, 'Loreto'),
(50, 'Los Helechos'),
(51, 'Colonia Martires'),
(52, 'Mojon Grande'),
(53, 'Montecarlo'),
(54, '9 De Julio'),
(55, 'Obera'),
(56, 'Olegario Victor Andrade'),
(57, 'Panambi'),
(58, 'Puerto Piray'),
(59, 'Posadas'),
(60, 'Profundidad'),
(61, 'Puerto Rico'),
(62, 'Ruiz De Montoya'),
(63, 'Santiago De Liniers'),
(64, 'San Ignacio'),
(65, 'San Javier'),
(66, 'San Jose'),
(67, 'San Martin'),
(68, 'San Pedro'),
(69, 'Santa Ana'),
(70, 'Santa Maria'),
(71, 'Santo Pipo'),
(72, 'Tres Capones'),
(73, '25 De Mayo'),
(74, 'San Vicente'),
(75, 'Cte. Andresito Guacurari'),
(76, 'Pozo Azul'),
(77, 'Salto Encantado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `emprendimiento_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempresa`
--

CREATE TABLE `tipoempresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `localidad_id` (`localidad_id`);

--
-- Indices de la tabla `emprendimiento`
--
ALTER TABLE `emprendimiento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id` (`usuario_id`),
  ADD UNIQUE KEY `tipo_empresa_id` (`tipo_empresa_id`),
  ADD UNIQUE KEY `direccion_id` (`direccion_id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emprendimiento_id` (`emprendimiento_id`),
  ADD UNIQUE KEY `categoria_id` (`categoria_id`) USING BTREE;

--
-- Indices de la tabla `tipoempresa`
--
ALTER TABLE `tipoempresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `emprendimiento`
--
ALTER TABLE `emprendimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoempresa`
--
ALTER TABLE `tipoempresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion-localidad` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `emprendimiento`
--
ALTER TABLE `emprendimiento`
  ADD CONSTRAINT `emprendimiento-direccion` FOREIGN KEY (`direccion_id`) REFERENCES `direccion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emprendimiento-tipoempresa` FOREIGN KEY (`tipo_empresa_id`) REFERENCES `tipoempresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emprendimiento-usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto-categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto-emprendimiento` FOREIGN KEY (`emprendimiento_id`) REFERENCES `emprendimiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
