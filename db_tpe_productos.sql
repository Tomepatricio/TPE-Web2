-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 20:16:50
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tpe_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombreMarca` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `origen` varchar(30) NOT NULL,
  `puntaje` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombreMarca`, `descripcion`, `origen`, `puntaje`) VALUES
(1, 'Menzerna', 'Perfección en el pulido: Menzerna se ha comprometido con esta demanda desde 1888. La empresa\r\nha estado estableciendo los más altos estándares en\r\ndesarrollo y producción de compuestos de pulido para\r', 'Alemania', 91),
(2, '3D', 'Es una empresa que se dedica a la distribución de marcas de productos para el Detailing automotor llegando a todas las ciudades de nuestro país. Ya sea a través de nuestras tiendas oficiales o a través de distribuidores.', 'Estados Unidos', 85),
(3, 'Koch Chemie', 'Koch-Chemie desarrolla desde 1968 productos de limpieza y mantenimiento de alta calidad para los sectores de productos químicos de lavado, acondicionamiento de vehículos, talleres y la industria.', 'Alemania', 89),
(7, 'Chemical Guys', 'Chemical Guys are more than a brand, it\'s a lifestyle with a worldwide following. Driven by adventure, a passion for shine, and a love for the road ahead, we welcome any and all who share this passion to become part of our family.', 'Estados Unidos', 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `detalle` varchar(400) NOT NULL,
  `presentacion` int(30) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `detalle`, `presentacion`, `precio`, `id_marca`) VALUES
(1, 'Pink Car Soap', '3D PINK CAR SOAP es un shampoo viscoso súper concentrado que desprende suavemente la tierra y contaminantes sin dañar la pintura de su vehículo.\r\nSus componentes activos encapsulan y remueven los cont', 500, 1030, 2),
(2, 'Orange Degrease', '3D Orange Degreaser es un excelente desengrasante para uso interior y exterior.\r\nSu composición de cítricos y solventes orgánicos lo hacen el producto ideal para remover manchas de grasa, brea, resina de árboles y pegamentos flexibles (residuos de calcomanías).', 750, 1000, 2),
(3, 'Heavy Cut 400', 'Menzerna Heavy Cut 400 es un nuevo pulidor de corte innovador, libre de VOCs (Compuestos Orgánicos Volátiles). Menzerna Heavy Cut 400 elimina marcas de lija y swirls en el menor tiempo posible sin el uso de disolventes agresivos. Alto rendimiento sin olores desagradables, mejorando la experiencia de usuario en comparación con el 400 tradicional.\r\nCorte: 8/10. Acabado: 8/10.', 250, 2395, 1),
(4, 'Shampoo Wash \'n Wax', 'Shampoo con Cera ideal para mantenimiento de Vehiculos con Tratamientos previos', 500, 1070, 2),
(15, 'M3', 'Pulimento microabrasivo sin aceite de silicona El pulimento antihologramas de brillo intenso es un producto para el micropulido a máquina de última generación concebido para eliminar de forma duradera manchas de enturbiamiento por el pulido, hologramas, pequeños arañazos y secciones lijadas de grano de hasta 3.000 de cualquier sistema de pintura (incluidos los resistentes a los arañazos).', 1000, 4200, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('patricio', '$2b$10$sP0wjRVEyCp1cV1fMkHTxeBWWw8FHa2izFQ0PQDz2zgonyZ4byno2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
