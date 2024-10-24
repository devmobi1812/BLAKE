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
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

            --
            -- AUTO_INCREMENT de la tabla `disco`
            --
            ALTER TABLE `disco`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

            --
            -- AUTO_INCREMENT de la tabla `rol`
            --
            ALTER TABLE `rol`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

            --
            -- AUTO_INCREMENT de la tabla `usuario`
            --
            ALTER TABLE `usuario`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

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