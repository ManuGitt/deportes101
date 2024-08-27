-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2024 a las 17:04:46
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

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id_carrito`) VALUES
(1);

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
  `categoria` varchar(50) NOT NULL,
  `tipoproducto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `tipoproducto_id`) VALUES
(1, 'remera', 2),
(2, 'pantalón', 2),
(3, 'buzo', 2),
(4, 'chaleco', 2),
(5, 'short', 2),
(6, 'calzas', 2),
(7, 'mallas', 2),
(8, 'campera', 2),
(9, 'ropa interior', 2),
(10, 'ropa térmica', 2),
(11, 'guantes', 2),
(12, 'gorro', 2),
(13, 'medias', 2),
(14, 'zapatillas', 2),
(15, 'sandalias', 2),
(16, 'visera', 2),
(17, 'gorra', 2),
(18, 'cinturón', 2),
(19, 'pelota', 1),
(20, 'raqueta', 1),
(21, 'red', 1),
(22, 'aro de básquet', 1),
(23, 'guantes de portero', 2),
(24, 'casco', 2),
(25, 'patines', 1),
(26, 'bicicleta', 0),
(27, 'soga', 0),
(28, 'pesas', 0),
(29, 'bandas elásticas', 0),
(30, 'colchoneta', 0),
(31, 'set de boxeo', 0),
(32, 'pala de pádel', 0),
(33, 'set de arquería', 0),
(34, 'patineta', 0),
(35, 'esquís', 0),
(36, 'tabla de snowboard', 0),
(37, 'kayak', 0),
(38, 'tabla de surf', 0),
(39, 'equipo de buceo', 0),
(40, 'conos de entrenamiento', 0);

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
  `tipoproducto_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `deporte_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_producto`, `stock_producto`, `cantidadComprada`, `tipoproducto_id`, `categoria_id`, `deporte_id`, `marca_id`) VALUES
(1, 'Zapatillas de Running Adidas', 62000.00, 50, 200, 2, 14, 14, 1),
(2, 'Pelota de Fútbol Nike', 35000.00, 100, 500, 1, 19, 1, 9),
(3, 'Camiseta de Fútbol Boca Juniors', 55000.00, 80, 350, 2, 1, 1, 9),
(4, 'Raqueta de Tenis Wilson', 75000.00, 30, 100, 1, 20, 5, 14),
(5, 'Pelota de Básquet Spalding', 40000.00, 80, 300, 1, 19, 3, 9),
(6, 'Red de Voleibol Mikasa', 50000.00, 10, 60, 1, 21, 6, 9),
(7, 'Zapatillas de Básquet Nike', 70000.00, 40, 180, 2, 14, 3, 9),
(8, 'Bicicleta de Montaña Trek', 150000.00, 15, 20, 1, 26, 16, 9),
(9, 'Guantes de Boxeo Everlast', 45000.00, 25, 90, 2, 31, 13, 9),
(10, 'Casco de Ciclismo Giro', 38000.00, 50, 130, 2, 24, 16, 9),
(11, 'Malla de Natación Speedo', 29000.00, 60, 200, 2, 7, 15, 9),
(12, 'Saco de Boxeo RDX', 95000.00, 5, 40, 1, 31, 13, 9),
(13, 'Pelota de Rugby Gilbert', 42000.00, 70, 250, 1, 19, 11, 9),
(14, 'Protector Bucal Shock Doctor', 12000.00, 100, 400, 1, 39, 11, 9),
(15, 'Pelota de Handball Molten', 36000.00, 50, 150, 1, 19, 12, 9),
(16, 'Zapatillas de Fútbol Adidas', 64000.00, 45, 210, 2, 14, 1, 1),
(17, 'Short de Tenis Nike', 32000.00, 70, 100, 2, 5, 5, 9),
(18, 'Canilleras de Fútbol Puma', 18000.00, 90, 300, 1, 40, 1, 10),
(19, 'Bolsa de Deporte Reebok', 26000.00, 50, 200, 1, 11, 1, 11),
(20, 'Camiseta de Básquet Los Angeles Lakers', 48000.00, 60, 220, 2, 1, 3, 9),
(21, 'Medias de Compresión Under Armour', 20000.00, 80, 180, 2, 13, 14, 13),
(22, 'Pelota de Vóley Molten', 34000.00, 75, 270, 1, 19, 6, 9),
(23, 'Zapatillas de Running Asics', 67000.00, 35, 120, 2, 14, 14, 2),
(24, 'Casco de Rugby Canterbury', 45000.00, 30, 140, 2, 24, 11, 9),
(25, 'Mochila Deportiva Nike', 33000.00, 40, 170, 2, 34, 14, 9),
(26, 'Guantes de Arquería Reusch', 50000.00, 20, 90, 2, 33, 11, 9),
(27, 'Pantalón de Entrenamiento Adidas', 35000.00, 55, 210, 2, 2, 14, 1),
(28, 'Zapatillas de Vóley Mizuno', 59000.00, 30, 110, 2, 14, 6, 9),
(29, 'Casco de Escalada Petzl', 80000.00, 10, 40, 2, 24, 16, 9),
(30, 'Camiseta de Running New Balance', 28000.00, 65, 190, 2, 1, 14, 8),
(31, 'Pesa Rusa de 12kg', 70000.00, 20, 60, 1, 28, 14, 9),
(32, 'Zapatillas de Ciclismo Shimano', 83000.00, 25, 50, 2, 14, 16, 9),
(33, 'Bolsa de Dormir Doite', 70000.00, 15, 70, 1, 31, 14, 9),
(34, 'Zapatillas de Fútbol Puma', 65000.00, 50, 220, 2, 14, 1, 10),
(35, 'Camiseta de Tenis Roger Federer', 55000.00, 30, 150, 2, 1, 5, 9),
(36, 'Gorra Deportiva Adidas', 20000.00, 100, 350, 2, 17, 14, 1),
(37, 'Cuerda para Saltar Reebok', 15000.00, 70, 200, 1, 27, 14, 11),
(38, 'Traje de Neopreno Rip Curl', 120000.00, 10, 30, 2, 10, 19, 9),
(39, 'Short de Boxeo Venum', 34000.00, 60, 150, 2, 5, 13, 9),
(40, 'Bicicleta de Ruta Scott', 190000.00, 8, 12, 1, 26, 16, 9),
(41, 'Zapatillas de Trail Running Salomon', 75000.00, 25, 90, 2, 14, 14, 9),
(42, 'Camiseta de Básquet Chicago Bulls', 49000.00, 45, 160, 2, 1, 3, 9),
(43, 'Guantes de Ciclismo Pearl Izumi', 27000.00, 50, 180, 2, 11, 16, 9),
(44, 'Botella de Agua Deportiva Nalgene', 18000.00, 120, 400, 1, 11, 14, 9),
(45, 'Short de Fútbol Nike', 30000.00, 70, 190, 2, 5, 1, 9),
(46, 'Zapatillas de Skateboarding Vans', 55000.00, 40, 140, 2, 14, 16, 9),
(47, 'Mochila para Escalada Mammut', 92000.00, 15, 40, 2, 34, 14, 9),
(48, 'Chaleco Salvavidas Helly Hansen', 80000.00, 10, 20, 2, 4, 14, 9),
(49, 'Zapatillas de Running Reebok', 68000.00, 30, 110, 2, 14, 14, 11),
(50, 'Camisa de Entrenamiento Under Armour', 35000.00, 50, 180, 2, 1, 14, 13),
(51, 'Canilleras de Fútbol Nike', 16000.00, 90, 320, 1, 40, 1, 9),
(52, 'Red de Badminton Yonex', 38000.00, 15, 70, 2, 21, 10, 9),
(53, 'Zapatillas de Básquet Jordan', 70000.00, 35, 100, 1, 14, 3, 6),
(54, 'Bicicleta de Triatlón Cervelo', 220000.00, 5, 8, 2, 26, 16, 9),
(55, 'Gafas de Natación Arena', 22000.00, 60, 300, 1, 39, 15, 9),
(56, 'Banda Elástica de Resistencia Theraband', 15000.00, 100, 200, 2, 29, 14, 9),
(57, 'Guantes de Boxeo Twins Special', 47000.00, 25, 70, 2, 31, 13, 9),
(58, 'Pantalón de Running Salomon', 38000.00, 40, 140, 2, 2, 14, 9),
(59, 'Camiseta de Fútbol River Plate', 55000.00, 80, 280, 2, 1, 1, 9),
(60, 'Malla de Natación Adidas', 29000.00, 70, 200, 2, 7, 15, 1),
(61, 'Camiseta de Básquet Golden State Warriors', 47000.00, 45, 160, 2, 1, 3, 9),
(62, 'Zapatillas de Fútbol Nike', 67000.00, 40, 220, 2, 14, 1, 9),
(63, 'Casco de Bicicleta Specialized', 46000.00, 30, 120, 2, 24, 16, 9),
(64, 'Gafas de Sol Deportivas Oakley', 65000.00, 20, 80, 1, 11, 16, 9),
(65, 'Raqueta de Squash Dunlop', 43000.00, 35, 150, 2, 20, 5, 9),
(66, 'Zapatillas de Running Hoka One One', 72000.00, 25, 90, 1, 14, 14, 9),
(67, 'Pelota de Golf Titleist', 60000.00, 50, 300, 2, 19, 9, 9),
(68, 'Zapatillas de Fútbol Puma', 64000.00, 45, 210, 2, 14, 1, 10),
(69, 'Zapatillas de Running Nike', 70000.00, 30, 110, 2, 14, 14, 9),
(70, 'Guantes de Portero Adidas', 32000.00, 35, 140, 2, 23, 1, 1),
(71, 'Campera de Esquí The North Face', 85000.00, 20, 50, 1, 8, 17, 12),
(72, 'Set de Esquí Rossignol', 240000.00, 5, 15, 2, 35, 17, 9),
(73, 'Pantalón de Escalada Prana', 36000.00, 25, 90, 2, 2, 16, 9),
(74, 'Chaleco Salvavidas Sevylor', 78000.00, 10, 30, 2, 4, 14, 9),
(75, 'Casco de Bicicleta Bell', 45000.00, 30, 110, 2, 24, 16, 9),
(76, 'Campera de Running Asics', 50000.00, 35, 100, 2, 8, 14, 2),
(77, 'Zapatillas de Trail Running La Sportiva', 74000.00, 20, 70, 2, 14, 14, 9),
(78, 'Medias de Compresión Nike', 21000.00, 80, 150, 2, 13, 14, 9),
(79, 'Camiseta de Fútbol Adidas', 54000.00, 75, 250, 2, 1, 1, 1),
(80, 'Guantes de Ciclismo Gore', 28000.00, 45, 130, 2, 11, 16, 9),
(81, 'Zapatillas de Running Mizuno', 66000.00, 25, 110, 2, 14, 14, 9),
(82, 'Gorra de Ciclismo Castelli', 18000.00, 60, 150, 2, 17, 16, 9),
(83, 'Camiseta de Running Asics', 29000.00, 50, 170, 2, 1, 14, 2),
(84, 'Gafas de Natación Speedo', 21000.00, 55, 240, 2, 39, 15, 9),
(85, 'Pantalón de Tenis Lacoste', 32000.00, 35, 100, 2, 2, 5, 9),
(86, 'Banda Elástica de Resistencia Rogue', 16000.00, 85, 230, 1, 29, 14, 9),
(87, 'Pelota de Básquet Wilson', 43000.00, 45, 190, 2, 19, 3, 14),
(88, 'Zapatillas de Fútbol Nike', 67000.00, 45, 200, 2, 14, 1, 9),
(89, 'Campera de Ciclismo Castelli', 65000.00, 30, 90, 2, 8, 16, 9),
(90, 'Guantes de Boxeo Cleto Reyes', 49000.00, 25, 80, 2, 31, 13, 9),
(91, 'Pantalón de Running Nike', 34000.00, 40, 150, 2, 2, 14, 9),
(92, 'Mochila Deportiva Under Armour', 33000.00, 40, 160, 2, 34, 14, 13),
(93, 'Short de Fútbol Nike', 31000.00, 60, 170, 2, 5, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposproductos`
--

CREATE TABLE `tiposproductos` (
  `id_tipoProducto` int(11) NOT NULL,
  `tipoProducto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposproductos`
--

INSERT INTO `tiposproductos` (`id_tipoProducto`, `tipoProducto`) VALUES
(1, 'accesorio'),
(2, 'indumentaria');

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
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `tipoproducto_id` (`tipoproducto_id`);

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
  ADD KEY `marca_id` (`marca_id`),
  ADD KEY `tipoproducto_id` (`tipoproducto_id`);

--
-- Indices de la tabla `tiposproductos`
--
ALTER TABLE `tiposproductos`
  ADD PRIMARY KEY (`id_tipoProducto`);

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
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT de la tabla `tiposproductos`
--
ALTER TABLE `tiposproductos`
  MODIFY `id_tipoProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`deporte_id`) REFERENCES `deportes` (`id_deporte`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`tipoproducto_id`) REFERENCES `tiposproductos` (`id_tipoProducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id_carrito`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
