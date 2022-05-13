-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2022 a las 14:11:35
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteria`
--
CREATE DATABASE IF NOT EXISTS `ferreteria` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `ferreteria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `NIF` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `CP` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `poblacion` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `provincia` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `NIF`, `nombre`, `direccion`, `CP`, `poblacion`, `provincia`, `telefono`) VALUES
(1, '11.120.336-Z', 'Candela Buendía Salinas', 'Avda. Constitución 35', '30200', 'Yecla', 'Murcia', '968682563'),
(2, 'B-30.220.330', 'Decomur S.L.', 'P. Ind. Oeste Nave 24', '30250', 'Jumilla', 'Murcia', '968332232'),
(3, '25.995.987-Z', 'Julio Pastor Gómez', 'C/ Ramón Gaya, 34', '30360', 'Lorquí', 'Murcia', '968523364'),
(4, 'A-25.987-654', 'construcciones López S.A.', 'P. I. La Capellanía, nave 20', '30600', 'Archena', 'Murcia', '968523698'),
(5, 'A-30.253.336', 'Construcciones el Derribo, S.A:', 'Avda Tito Livio, 32', '30025', 'Murcia', 'Murcia', '968254103'),
(6, 'B-40.369.330', 'Reformas Alcázar S.L:', 'Plaza Zocodover, 34', '40098', 'Toledo', 'Toledo', '925336254'),
(7, 'B-03.336.367', 'Construcciones Hamman S.L:', 'C/ Julio Romero de Torres, 4ºB', '3692', 'Lucena', 'Córdoba', '963253665'),
(8, 'B-52.336.691', 'Interiorismo Buonarotti S.L.', 'C/ Poeta Vicente Medina, 55', '52003', 'Villadiego', 'Salamanca', '952369447'),
(9, 'A-28.336.210', 'Dorico’s S.A', 'C/ Toledo, Edif. Carlos V, 3ºH', '28036', 'Madrid', 'Madrid', '913253669'),
(10, 'B-05.336.336', 'Pintura Rafael S.L.', 'C/ Camí de Fondo, Edif.. Neptuno 3ºC', '5236', 'Campello', 'Alicante', '965332975'),
(11, '13.258.976-Z', 'Miguel Ramírez Candel', 'C/ Carmona, 12', '22036', 'Alora', 'Santa Cruz de Tenerife', '963253665'),
(12, 'A-30.256.330', 'Trazos decoradores S.A.', 'Avda Gran Vía Salzillo, 34 Edif. Aurora', '30025', 'Murcia', 'Murcia', '968523665'),
(13, 'A-23.253.336', 'Olimpo Interiores S.A:', 'C/ Victoria Soler, 33', '22052', 'Cartama', 'Santa Cruz de Tenerife', '963253002'),
(14, 'A-23.363.336', 'Muebles Hidalgo S.A.', 'C/ Rosas, 33', '22036', 'Alora', 'Santa Cruz de Tenerife', '963256360');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_facturas`
--

CREATE TABLE `detalle_facturas` (
  `id_factura` int(11) DEFAULT NULL,
  `Codigo_producto` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Cantidad` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_facturas`
--

INSERT INTO `detalle_facturas` (`id_factura`, `Codigo_producto`, `Cantidad`) VALUES
(1, 'PPB-1', 25),
(1, 'PPB-2', 50),
(1, 'PAB-1', 100),
(1, 'PAR-1', 65),
(2, 'PPB-2', 50),
(2, 'PPA-2', 100),
(2, 'PPM-2', 120),
(3, 'PPB-1', 250),
(3, 'PPB-2', 300),
(3, 'PPA-1', 250),
(3, 'PPA-2', 300),
(4, 'PAR-1', 352),
(5, 'PAR-1', 220),
(5, 'PAB-1', 500),
(6, 'PAB-1', 300),
(6, 'PPB-1', 300),
(6, 'PPA-2', 400),
(7, 'PPB-1', 100),
(7, 'PPB-2', 200),
(7, 'PPA-1', 250),
(7, 'PPA-2', 300),
(8, 'PPB-1', 100),
(9, 'PPB-1', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `Id` int(11) NOT NULL,
  `Id_cliente` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Descuento` int(11) NOT NULL,
  `IVA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`Id`, `Id_cliente`, `Fecha`, `Descuento`, `IVA`) VALUES
(1, 1, '2010-01-22', 0, 7),
(2, 5, '2015-02-22', 5, 7),
(3, 4, '2020-02-19', 15, 7),
(4, 4, '2012-03-19', 20, 7),
(5, 10, '2015-03-19', 0, 0),
(6, 1, '2020-03-19', 10, 7),
(7, 7, '2025-03-22', 5, 7),
(8, 5, '2025-03-22', 5, 7),
(9, 5, '2025-03-22', 25, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `descripcion`, `precio`) VALUES
('PAB-1', 'Pintura acrílica blanca 1 Kg', '8.45'),
('PAR-1', 'Pintura acrílica roja 1 Kg', '15.40'),
('PPA-1', 'Pintura plástica azul 5', '8.65'),
('PPA-2', 'Pintura plástica azul 10 Kg.', '15.40'),
('PPB-1', 'Pintura plástica blanca 1 Kg.', '3.30'),
('PPB-2', 'Pintura plástica blanca 5 Kg.', '6.45'),
('PPB-3', 'Pintura plástica blanca 10 Kg', '11.30'),
('PPM-1', 'Pintura plástica amarillo 5 Kg', '10.45'),
('PPM-2', 'Pintura plástica amarillo 10 K', '19.40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(40) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `pass`) VALUES
(1, 'Chris', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_facturas`
--
ALTER TABLE `detalle_facturas`
  ADD KEY `id_factura` (`id_factura`,`Codigo_producto`),
  ADD KEY `Codigo_producto` (`Codigo_producto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_cliente` (`Id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_facturas`
--
ALTER TABLE `detalle_facturas`
  ADD CONSTRAINT `detalle_facturas_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_facturas_ibfk_2` FOREIGN KEY (`Codigo_producto`) REFERENCES `productos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`Id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
