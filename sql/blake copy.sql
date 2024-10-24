-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2024 a las 20:17:12
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blake`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`id`, `nombre`) VALUES
(1, 'Blake');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fk_disco` int(11) NOT NULL,
  `duracion` varchar(12) NOT NULL,
  `fk_artista` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id`, `nombre`, `fk_disco`, `duracion`, `fk_artista`, `link`) VALUES
(1, 'Te Fuiste', 1, '2:34', 1, 'https://open.spotify.com/intl-es/track/5iKYx3QS9sIqas1p1XqJJC?si=c11e34aa9a604f8a'),
(2, 'Boom', 2, '3:38', 1, 'https://open.spotify.com/intl-es/track/6UywFSmgk8nYZrT7ZacmE5?si=9d29b18609d24e8a'),
(3, 'Todos Somos Carne', 2, '3:42', 1, 'https://open.spotify.com/intl-es/track/5yvWcgLq6eMhDjPI4La5ah?si=8d47417831b846a1'),
(4, 'El Coco', 2, '3:06', 1, 'https://open.spotify.com/intl-es/track/2KDClQ86Rhz5YhrCKrGdC9?si=c65524db2bcf4ff7'),
(5, 'God School', 2, '3:46', 1, 'https://open.spotify.com/intl-es/track/0qOZGMnKJJBMNloavKVt7T?si=758f620013c749a2'),
(6, 'Sin Filtro', 3, '2:21', 1, 'https://open.spotify.com/intl-es/track/6zyvhr6qb64QgRMHqg5QI7?si=be773f114ec94197'),
(7, 'Te Fuiste - Remix', 5, '4:07', 1, 'https://open.spotify.com/intl-es/track/6sxPP8Hmh6TkAbAnsi98yl?si=e1f33e242118419f'),
(8, 'Abre el Telón', 4, '2:40', 1, 'https://open.spotify.com/intl-es/track/0qyKtYUGAn6LvhtSMT3zZs?si=8c2dd2585bf44a93'),
(12, 'Exit', 4, '3:47', 1, 'https://open.spotify.com/intl-es/track/0b96IJPWKIldsGq5Nkb3DG?si=d73c37b454bd4a05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disco`
--

CREATE TABLE `disco` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `anio` bigint(50) NOT NULL,
  `fk_artista` int(11) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `disco`
--

INSERT INTO `disco` (`id`, `nombre`, `anio`, `fk_artista`, `imagen`) VALUES
(1, 'Te Fuiste', 2016, 1, 'https://i.scdn.co/image/ab67616d0000b2736295fabad94ff476ebad6a61'),
(2, 'Talisman', 2019, 1, 'https://i.scdn.co/image/ab67616d0000b2734dd4cb7e2bd62764deff2380'),
(3, 'Visceral', 2017, 1, 'https://i.scdn.co/image/ab67616d0000b273fbbc2b0ab78135c1fb458726'),
(4, 'Daboia Russelii', 2021, 1, 'https://i.scdn.co/image/ab67616d0000b273f14001bf29fab5fc0905383d'),
(5, 'Te Fuiste - Remix', 2024, 1, 'https://i.scdn.co/image/ab67616d0000b2738ff80321ed7c7382a5edf7a0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'Usuario con nivel de administrador.'),
(2, 'Usuario', 'Usuario común.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`, `rol`) VALUES
(1, 'Ayrton', '@', '$2y$10$ZsEhnQcfex7SEBqqS5eTe.pKafOrJptAfV0srie4PNwuR29SxlL1S', 1),
(2, 'Valentino', '@', '$2y$10$iETu2kDAITUvvI/PIpYJ/uaXKEYQcZYfQFIO5KQtlIKboZap0D0Ky', 2),
(3, 'Seba', '@', '$2y$10$SugE2UZD1DHt9ByUAxGv0Odj8qp1XTeSD0lOpdgkRQLvkHPLgs36q', 2),
(4, 'Teresa', '@', '$2y$10$kZDv1qYtQ.AKsqPJ42mhseqO5goEJRxL8aHA455oXozOXeMmHyYQ2', 2),
(5, 'Gaby', '@', '$2y$10$YwC2J380/9f5P/iufUV90erHfZOrmgOd/7rXra9/MqxICAx1NCz7O', 2),
(6, 'valen', '@', '$2y$10$JXro5hB2ufJcLx6kfqnDtuGCCQyjSsjRN/HiLh9eSkXPtsIhLDkYu', 2),
(7, '<h1>hola</h1>', '@', '$2y$10$bjcdUKPpJ4mhApwa1idA0uzeyldn5pxHjtnPX.A83cV8PML016fJK', 2),
(8, 'DELETE FROM `artista`', '@', '$2y$10$bvC1D1EUtv28wyuH9/yOtOE.l1YARPDrIrrAQ7Sy11ird38X3cI/C', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artis` (`fk_artista`),
  ADD KEY `fk_album` (`fk_disco`);

--
-- Indices de la tabla `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artista_fk` (`fk_artista`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `disco`
--
ALTER TABLE `disco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `artis` FOREIGN KEY (`fk_artista`) REFERENCES `artista` (`id`),
  ADD CONSTRAINT `fk_album` FOREIGN KEY (`fk_disco`) REFERENCES `disco` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `disco`
--
ALTER TABLE `disco`
  ADD CONSTRAINT `artista_fk` FOREIGN KEY (`fk_artista`) REFERENCES `artista` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
