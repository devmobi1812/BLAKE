<?php

class ConexionModel{

    private $db;

    function __construct(){
        $this->db = $this->crearConexion();
    }
    private function crearConexion(){
        try{
            $this->db = new PDO('mysql:host=localhost;port=3306;dbname=blake',
            'root',
            '');
            $this->deploy();
        }catch(PDOException $e){
            $this->db->rollback();
            error_log($e->getMessage());
            return null;
        }

        return $this->db;
    }

    function getConexion(){
        return $this->db;
    }

    private function deploy() {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if(count($tables) == 0) {
            $sql =<<<END
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
            (1, 'Abre Los Ojos', 1, '3:13', 1, 'https://open.spotify.com/intl-es/track/0q2yOxbeNrZt4eJ5nrBcS0'),
            (2, 'De Tripas Corazón', 2, '3:51', 1, 'https://open.spotify.com/intl-es/track/4RAHORQsEEpnfMb5YogOng'),
            (3, 'Puta Locura', 3, '3:42aa', 1, 'https://open.spotify.com/intl-es/album/78odlGYv0HBAsSiz3OYy5Z'),
            (4, 'Sin Filtro', 4, '2:21', 1, 'https://open.spotify.com/intl-es/track/6zyvhr6qb64QgRMHqg5QI7?si=4246e390c2f14f14'),
            (5, 'Envenenado', 4, '3:17', 1, 'https://open.spotify.com/intl-es/track/2rr18vaPoW4Bfkuw8lvMxq?si=a7a2849f921f4a01'),
            (6, 'Pan y Circo', 4, '3:54', 1, 'https://open.spotify.com/intl-es/track/61czNl4XyppR0YV8X5JVsm?si=faf4a61dc2e24638'),
            (7, 'Contando Estrellas', 4, '3:29', 1, 'https://open.spotify.com/intl-es/track/3Euzf2M0L0CKUzz53y8hp8?si=b00d74883cdb441f'),
            (8, 'Ding - Dong', 4, '3:11', 1, 'https://open.spotify.com/intl-es/track/6ao4BRAKWQyVFt9NSkruue?si=df82791a97934b24'),
            (9, 'En Mi Nube', 4, '3:12', 1, 'https://open.spotify.com/intl-es/track/3BTbzCiHkpUJHLKWwgGnfi?si=cd21ecb1d80149bf'),
            (10, 'Cenizas', 4, '4:58', 1, 'https://open.spotify.com/intl-es/track/5MerrDZAHhevWORLgNNBV3?si=5b1939c367a84b9d'),
            (11, 'Esquizofrenia', 4, '4:00', 1, 'https://open.spotify.com/intl-es/track/2YaBoMt1ERiQNcYG175Cqb?si=d332630fbefa451a'),
            (12, 'No Hay Color', 4, '3:07', 1, 'https://open.spotify.com/intl-es/track/3U2LDE9TWnRluTqs7D2SXx?si=6b1a2cca704f4129'),
            (13, 'Bye', 4, '3:43', 1, 'https://open.spotify.com/intl-es/track/6hA1yIWANj4rTcFJcHzUoN?si=55ca6d8879584801'),
            (14, 'Magia Oscura', 4, '3:26', 1, 'https://open.spotify.com/intl-es/track/3yYF9mRIfQZKL5fMX5g5V7?si=3f4774dd4c154f93'),
            (15, 'Allí Donde Estés', 4, '2:49', 1, 'https://open.spotify.com/intl-es/track/1JTcPX4oixtw0Pn482pwZZ?si=887ea68b880848b1'),
            (16, 'Visceral', 4, '3:08', 1, 'https://open.spotify.com/intl-es/track/0SFmweVGBAqNGi7QxmO17j?si=36c176ef0c9a46e4'),
            (17, 'Lengua de Serpiente', 5, '3:59', 1, 'https://open.spotify.com/intl-es/track/1btXIMqhheMHFTSYRfYd7j?si=7ac7b41300f74b47'),
            (18, 'En el Clavo', 6, '4:18', 1, 'https://open.spotify.com/intl-es/track/5ucAspGDdhcaGgTn5gUVdl?si=fa48cc1f91274468'),
            (19, 'En Bucle', 7, '3:11', 1, 'https://open.spotify.com/intl-es/track/52ze3hXW5svKGv14pFXHlp?si=f2e32afcb438466e'),
            (20, 'Rema', 8, '3:28', 1, 'https://open.spotify.com/intl-es/track/6JwxU6BVnUsXiGOK9IuC3F?si=6fb0af4e0d634ac0'),
            (21, 'Dime Donde Voy', 9, '2:57', 1, 'https://open.spotify.com/intl-es/track/5IuYgPlPHqGHZFzpaNSmuO?si=cf4096b79efc4614'),
            (22, 'Te Fuiste', 10, '2:34', 1, 'https://open.spotify.com/intl-es/track/5iKYx3QS9sIqas1p1XqJJC?si=4ef6254796a4442c'),
            (23, 'Boom', 11, '3:38', 1, 'https://open.spotify.com/intl-es/track/6UywFSmgk8nYZrT7ZacmE5?si=8eb50f96ca944b44'),
            (24, 'Todos Somos Carne', 11, '3:42', 1, 'https://open.spotify.com/intl-es/track/5yvWcgLq6eMhDjPI4La5ah?si=f4e365227ab94a07'),
            (25, 'El Coco', 11, '3:06', 1, 'https://open.spotify.com/intl-es/track/2KDClQ86Rhz5YhrCKrGdC9?si=5c66f854d5414bf3'),
            (26, 'God School', 11, '3:46', 1, 'https://open.spotify.com/intl-es/track/0qOZGMnKJJBMNloavKVt7T?si=26353c50d61349ca'),
            (27, 'Gran Show', 11, '2:54', 1, 'https://open.spotify.com/intl-es/track/2zF0BtwDh7G9M9oQc1BR5Y?si=ede76841d6da4e1a'),
            (28, 'Droga Pura', 11, '2:54', 1, 'https://open.spotify.com/intl-es/track/0f8sVPeBYs0gBv1SuVzp5a?si=d3096b7992dd48d1'),
            (29, 'Puro', 11, '3:02', 1, 'https://open.spotify.com/intl-es/track/3NKj87GE2HFTf8gCO5fmEv?si=6508417cff874668'),
            (30, 'Poesia Maquiavélica', 11, '4:07', 1, 'https://open.spotify.com/intl-es/track/15uN7Baq5EA1ZHMxIKGaJK?si=438c3732b9e44504'),
            (31, 'Paz', 11, '2:56', 1, 'https://open.spotify.com/intl-es/track/0IZOZVeLFg0gRoZMeMySf5?si=7f466f784c144d75'),
            (32, 'Talismán', 11, '3:07', 1, 'https://open.spotify.com/intl-es/track/0fH3co4LPvD7EstwszTRZO?si=ba7ccc2c94cb4d9e'),
            (33, 'Puto Enfermo', 12, '3:13', 1, 'https://open.spotify.com/intl-es/track/6bKqMzrkmga8BXFOG7VMr4?si=fb1be51cfe2b4d6a'),
            (34, 'Abre el Telón', 13, '2:40', 1, 'https://open.spotify.com/intl-es/track/0qyKtYUGAn6LvhtSMT3zZs?si=4ebffc6278df4047'),
            (35, 'No Han Mamao', 13, '2:40', 1, 'https://open.spotify.com/intl-es/track/6YahY7BY9Nu5M4v2DozDEc?si=6be8be2a7c144471'),
            (36, 'Leviosá', 13, '3:08', 1, 'https://open.spotify.com/intl-es/track/3xGMJ89fn0jv0kmSVk0mzT?si=c5b7006a725c4908'),
            (37, 'Yugular', 13, '2:46', 1, 'https://open.spotify.com/intl-es/track/7gX1HBYw43q9li7kaJgYFn?si=e5e85a8aad084983'),
            (38, 'Disolución', 13, '3:36', 1, 'https://open.spotify.com/intl-es/track/14A55Se7iZ6iZhoz64p8XF?si=5299d2a1c8ce409f'),
            (39, 'Russellii', 13, '2:44', 1, 'https://open.spotify.com/intl-es/track/5yQtaIt9YUR0Yr1Ny7dZ9e?si=d2c30511c04f4307'),
            (40, 'Morte', 13, '3:07', 1, 'https://open.spotify.com/intl-es/track/6hx7f2y8cgMgX1GoHALD8p?si=91ea9512065a4bb6'),
            (41, 'Gánatelo', 13, '3:15', 1, 'https://open.spotify.com/intl-es/track/0AZEqZae3EElAeEFHfFXrs?si=388e8fe40e784b7a'),
            (42, 'Y Yo Qué', 13, '4:20', 1, 'https://open.spotify.com/intl-es/track/2F7FATKfgSuOHOOndOAT3K?si=4955b2c287f34f31'),
            (43, 'Jugón', 13, '3:00', 1, 'https://open.spotify.com/intl-es/track/5OuFZRLeKPeuXDCE8ndhZa?si=f34091737dd44349'),
            (44, 'Si Miras Abajo', 13, '2:55', 1, 'https://open.spotify.com/intl-es/track/3K20iJMFYaoHoUHNnuc88p?si=27276ee8d70b4c33'),
            (45, 'En La Diana', 13, '2:34', 1, 'https://open.spotify.com/intl-es/track/3xWXmJ4DasY4sJPEub01mP?si=d6c9bc4e9bb94b0b'),
            (46, 'Exit', 13, '3:47', 1, 'https://open.spotify.com/intl-es/track/0b96IJPWKIldsGq5Nkb3DG?si=7034dc190be543dc'),
            (47, 'Esmeralda', 14, '3:08', 1, 'https://open.spotify.com/intl-es/track/3FPi6QxKTIORgH4KDReY1a?si=873a24bf951743f4'),
            (48, 'Te Fuiste - Remix', 15, '4:07', 1, 'https://open.spotify.com/intl-es/track/6sxPP8Hmh6TkAbAnsi98yl?si=d3f5b6f8d658497b'),
            (49, 'Lacura', 16, '4:03', 1, 'https://open.spotify.com/intl-es/track/7KDxxFwV7hVKcGnIlujSMh?si=3ce15af29bc5478a'),
            (50, 'God Ends Here', 16, '3:57', 1, 'https://open.spotify.com/intl-es/track/2DjHk4m02k1qX34ZCqDLgR?si=82f67fba39b14f8f'),
            (51, 'Haber Estudiado', 16, '3:09', 1, 'https://open.spotify.com/intl-es/track/46ENsDb9hEVSdwIi01e9sX?si=0bdc27c4b8e540e9'),
            (52, 'Mi Puta Mesa', 16, '2:44', 1, 'https://open.spotify.com/intl-es/track/6VKJ58IHLIMR00vvj8Qu1q?si=5a782430f8d940a1'),
            (53, 'Factores', 16, '3:16', 1, 'https://open.spotify.com/intl-es/track/5tqvsPALdNPe7UE6xmEnxq?si=90f0ac9e9079471d');

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
            (1, 'Abre Los Ojos', 2017, 1, 'https://i.scdn.co/image/ab67616d0000b27306b4402c9e1b51469e92b91d'),
            (2, 'De Tripas Corazón', 2017, 1, 'https://i.scdn.co/image/ab67616d0000b273f4bbe843e62d794bc44655f5'),
            (3, 'Puta Locura', 2017, 1, 'https://i.scdn.co/image/ab67616d0000b2735ffb3e6963082994a7384e24'),
            (4, 'Visceral', 2017, 1, 'https://i.scdn.co/image/ab67616d0000b273fbbc2b0ab78135c1fb458726'),
            (5, 'Lengua de Serpiente', 2018, 1, 'https://i.scdn.co/image/ab67616d0000b273e109adcfb59a070a05f527a7'),
            (6, 'En el Clavo', 2018, 1, 'https://i.scdn.co/image/ab67616d0000b2739e95c5f24cf8ed8c876fed6f'),
            (7, 'En Bucle', 2018, 1, 'https://i.scdn.co/image/ab67616d0000b2733b9aa7b1dce2769c586abafb'),
            (8, 'Rema', 2018, 1, 'https://i.scdn.co/image/ab67616d0000b273913f737c3f2091418a72865e'),
            (9, 'Dime Donde Voy', 2018, 1, 'https://i.scdn.co/image/ab67616d0000b273442173ffefad1f3da35158e3'),
            (10, 'Te Fuiste', 2017, 1, 'https://i.scdn.co/image/ab67616d0000b2730b3542cb6956dadcafbdac54'),
            (11, 'Talismán', 2019, 1, 'https://i.scdn.co/image/ab67616d0000b2734dd4cb7e2bd62764deff2380'),
            (12, 'Puto Enfermo', 2020, 1, 'https://i.scdn.co/image/ab67616d0000b273a2dd5f42c52cc7d0fccb7cd5'),
            (13, 'Daboia Russelli', 2021, 1, 'https://i.scdn.co/image/ab67616d0000b273f14001bf29fab5fc0905383d'),
            (14, 'Esmeralda', 2024, 1, 'https://i.scdn.co/image/ab67616d0000b27391d04d5e2c777021ba416c8e'),
            (15, 'Te Fuiste (Remix)', 2024, 1, 'https://i.scdn.co/image/ab67616d0000b2738ff80321ed7c7382a5edf7a0'),
            (16, 'Cookings', 2023, 1, 'https://i.scdn.co/image/ab67616d0000b2736f29c51912962fd02a66a0c0');

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
            (1, 'admin', '@', '$2y$10\$u5tlmWcoD6JttfeawFVsf.ILx5JPkTMfmb3a6Nmk5qIxJncBnuEl.', 1);

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
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

            --
            -- AUTO_INCREMENT de la tabla `disco`
            --
            ALTER TABLE `disco`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

            --
            -- AUTO_INCREMENT de la tabla `rol`
            --
            ALTER TABLE `rol`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

            --
            -- AUTO_INCREMENT de la tabla `usuario`
            --
            ALTER TABLE `usuario`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
            END;
            $this->db->query($sql);
        }
    }
}

?>