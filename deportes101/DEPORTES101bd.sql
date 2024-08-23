-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2024 a las 18:02:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deportes101bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id_carrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_producto`
--

CREATE TABLE `carrito_producto` (
  `id_carritoProducto` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `carrito_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'remera'),
(2, 'pantalón'),
(3, 'buzo'),
(4, 'chaleco'),
(5, 'short'),
(6, 'calzas'),
(7, 'mallas'),
(8, 'campera'),
(9, 'ropa interior'),
(10, 'ropa térmica'),
(11, 'guantes'),
(12, 'gorro'),
(13, 'medias'),
(14, 'zapatillas'),
(15, 'sandalias'),
(16, 'visera'),
(17, 'gorra'),
(18, 'cinturón'),
(19, 'pelota'),
(20, 'raqueta'),
(21, 'red'),
(22, 'aro de básquet'),
(23, 'guantes de portero'),
(24, 'casco'),
(25, 'patines'),
(26, 'bicicleta'),
(27, 'soga'),
(28, 'pesas'),
(29, 'bandas elásticas'),
(30, 'colchoneta'),
(31, 'set de boxeo'),
(32, 'pala de pádel'),
(33, 'set de arquería'),
(34, 'patineta'),
(35, 'esquís'),
(36, 'tabla de snowboard'),
(37, 'kayak'),
(38, 'tabla de surf'),
(39, 'equipo de buceo'),
(40, 'conos de entrenamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `id_deporte` int(11) NOT NULL,
  `deporte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`id_deporte`, `deporte`) VALUES
(1, 'fútbol'),
(2, 'cricket'),
(3, 'baloncesto'),
(4, 'hockey'),
(5, 'tenis'),
(6, 'voleibol'),
(7, 'ping-pong'),
(8, 'béisbol'),
(9, 'golf'),
(10, 'bádminton'),
(11, 'rugby'),
(12, 'balonmano'),
(13, 'boxeo'),
(14, 'atletismo'),
(15, 'natación'),
(16, 'ciclismo'),
(17, 'esquí'),
(18, 'artes marciales'),
(19, 'surf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico`
--

CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL,
  `carritoProducto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(100) NOT NULL,
  `img_marca` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre_marca`, `img_marca`) VALUES
(1, 'Adidas', 'adidas.jpg'),
(2, 'Asics', 'asics.jpg'),
(3, 'Columbia', 'columbia.jpg'),
(4, 'Fila', 'fila.jpg'),
(5, 'Golty', 'golty.jpg'),
(6, 'Jordan', 'jordan.jpg'),
(7, 'Kappa', 'kappa.jpg'),
(8, 'New Balance', 'newbalance.jpg'),
(9, 'Nike', 'nike.jpg'),
(10, 'Puma', 'puma.jpg'),
(11, 'Reebok', 'reebok.jpg'),
(12, 'The North Face', 'thenorthface.jpg'),
(13, 'Under Armour', 'underarmour.jpg'),
(14, 'Wilson', 'wilson.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `precio_producto` decimal(8,2) NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `cantidadComprada` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `deporte_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `contrasenia_usuario` varchar(255) NOT NULL,
  `correo_usuario` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `carrito_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id_carrito`);

--
-- Indices de la tabla `carrito_producto`
--
ALTER TABLE `carrito_producto`
  ADD PRIMARY KEY (`id_carritoProducto`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `carrito_id` (`carrito_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`id_deporte`);

--
-- Indices de la tabla `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`),
  ADD KEY `carritoProducto_id` (`carritoProducto_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `deporte_id` (`deporte_id`),
  ADD KEY `marca_id` (`marca_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `carrito_id` (`carrito_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_producto`
--
ALTER TABLE `carrito_producto`
  MODIFY `id_carritoProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `id_deporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_producto`
--
ALTER TABLE `carrito_producto`
  ADD CONSTRAINT `carrito_producto_ibfk_1` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id_carrito`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_producto_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`carritoProducto_id`) REFERENCES `carrito_producto` (`id_carritoProducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id_marca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id_categoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`deporte_id`) REFERENCES `deportes` (`id_deporte`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id_carrito`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
