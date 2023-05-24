-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 22:18:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `exau5`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idPro` int(10) NOT NULL,
  `foto` varchar(80) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idPro`, `foto`, `nombre`, `precio`, `categoria`) VALUES
(0, 'images/vinilica/1.png', 'Pro 1000 Plus® 19 Litros', '2259.00', 0),
(1, 'images/vinilica/2.png', 'Pro 1000 Plus® 1 Litro', '144.00', 0),
(2, 'images/vinilica/3.png', 'Cubetón Pro 1000 Plus® 22.8 Litros', '2259.00', 0),
(3, 'images/vinilica/4.png', 'Durex Master® 1 Litro', '103.50', 0),
(4, 'images/vinilica/5.png', 'Durex Master® 19 Litros', '1650.50', 0),
(5, 'images/vinilica/6.png', 'Durex Master® 4 Litros', '381.00', 0),
(6, 'images/vinilica/7.png', 'ME 70® 19 Litros', '785.00', 0),
(7, 'images/vinilica/8.png', 'ME 70® 4 Litros', '183.00', 0),
(8, 'images/vinilica/9.png', 'Practika® 1 Litro', '72.50', 0),
(9, 'images/vinilica/10.png', 'Practika® 4 Litros', '256.50', 0),
(10, 'images/vinilica/11.png', 'Practika® 19 Litros', '1060.50', 0),
(11, 'images/vinilica/12.png', 'Pro 1000 Plus® 1 Litro', '144.00', 0),
(50, 'images/esmaltes/1.png', 'Acqua 100® TOTAL 1 Litro', '221.50', 1),
(51, 'images/esmaltes/2.png', 'Acqua 100® TOTAL 4 Litros', '830.00', 1),
(52, 'images/esmaltes/3.png', 'Comex 100® Primario Secado Extra Rápido 19 Litros', '3476.00', 1),
(53, 'images/esmaltes/4.png', 'Comex 100® TOTAL 1 Litro', '249.50', 1),
(54, 'images/esmaltes/5.png', 'Comex® 100 Aluminio 4 Litros', '920.00', 1),
(55, 'images/esmaltes/6.png', 'Comex® 100 Metal Rustic 19 Litros', '3238.00', 1),
(56, 'images/esmaltes/7.png', 'Comex® 100 Oro Brillante 4 Litros', '920.00', 1),
(101, 'images/aerosol/1.png', 'Aero Comex® Alta Temperatura Aluminio', '145.50', 2),
(102, 'images/aerosol/2.png', 'Aero Comex® Aluminio', '94.00', 2),
(103, 'images/aerosol/3.png', 'Aero Comex® Blanco Brillante', '94.00', 2),
(104, 'images/aerosol/4.png', 'Aero Comex® Cromo', '96.00', 2),
(105, 'images/aerosol/5.png', 'Aero Comex® Negro Mate', '150.00', 2),
(106, 'images/aerosol/6.png', 'Aero Comex® Vitral Glass', '146.50', 2),
(107, 'images/aerosol/7.png', 'Aero Comex® Amarillo Seguridad', '246.60', 2),
(108, 'images/aerosol/8.png', 'Aero Comex® Azul Holandés', '234.50', 2),
(151, 'images/texturas/1.png', 'Ok Xpand 330 mililitros', '294.50', 3),
(152, 'images/texturas/2.png', 'OK® Concreto 950 mililitros', '257.00', 3),
(153, 'images/texturas/3.png', 'Pintura Para Pizarrón 4 Litros', '976.00', 3),
(154, 'images/texturas/4.png', 'Supertex 19 Litros', '727.50', 3),
(155, 'images/texturas/5.png', 'Texturi® Ultraligera 4 Litros', '268.50', 3),
(156, 'images/texturas/6.png', '+Pracktico® Multi Acabado 3 en 1 - 19 Litros', '1234.00', 3),
(201, 'images/maderas/1.jpg', 'Polyform Tinte al Aceite ®CC', '154.00', 4),
(252, 'images/maderas/2.jpg', 'River Cera', '1843.00', 4),
(253, 'images/maderas/3.jpg', 'Polyform® Barniz Tinte Base Agua', '231.00', 4),
(254, 'images/maderas/4.jpg', 'Polyform® fondo de poliuretano F-218', '2912.00', 4),
(255, 'images/maderas/5.jpg', 'River Tapaporo de Aceite para Madera', '223.50', 4),
(301, 'images/solventes/1.png', 'Comex Aguarrás Sintético 4 Litros', '321.00', 5),
(302, 'images/solventes/2.png', 'Comex® Aguarrás Sintético 500 mililitros', '44.50', 5),
(303, 'images/solventes/3.png', 'Comex® Aguarrás Sintético 960 mililitros', '79.50', 5),
(304, 'images/solventes/4.png', 'Comex® Thinner Americano 4 Litros', '329.00', 5),
(305, 'images/solventes/5.png', 'Comex® Thinner Americano 500 mililitros', '45.00', 5),
(306, 'images/solventes/6.png', 'Comex® Thinner Americano 960 mililitros', '80.50', 5),
(307, 'images/solventes/7.png', 'Comex® Thinner estándar 4 Litros', '219.00', 5),
(308, 'images/solventes/8.png', 'Comex® Thinner estándar 960 mililitros', '53.00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `sexo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasena`, `apellidos`, `fecha_nacimiento`, `direccion`, `sexo`) VALUES
(0, 'Ixchel', 'danna@gmail.com', 'qwer1234', 'Garcia', '2023-06-09', 'Lerma, mexico', 'femenino'),
(0, 'Jairo', 'david@hotmail.com', 'asdf1234', 'Aguilar', '2023-07-10', 'Hacienda La gavia', 'masculino'),
(0, 'Jairo', 'jairo@hotmail.com', '1234567890', '', NULL, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idPro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `UNIQUE` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
