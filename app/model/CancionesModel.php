<?php 
require_once("ConexionModel.php");
class CancionesModel extends ConexionModel{
    private $conexion;
    
    public function getCanciones(){
        try{
            //  se conecta
            $conexion = $this->getConexion();
            //  inicia la transaccion
            $conexion->beginTransaction();
                $query = $conexion -> prepare('SELECT cancion.id, cancion.nombre, artista.nombre AS artista_nombre, disco.nombre AS disco_nombre, cancion.duracion 
                                                        FROM cancion
                                                        INNER JOIN disco ON cancion.fk_disco = disco.id
                                                        INNER JOIN artista ON cancion.fk_artista = artista.id;
                                                        ');
                $query -> execute();
                $canciones = $query -> fetchAll(PDO::FETCH_OBJ);

            //  cierra la transaccion
            $conexion->commit();

            return $canciones;
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
        
    }

    public function getCancion($id){
        try {
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query = $conexion->prepare('SELECT cancion.id, cancion.nombre, artista.nombre AS artista_nombre, disco.nombre AS disco_nombre, cancion.duracion, disco.anio AS disco_anio, cancion.link 
                                                        FROM cancion
                                                        INNER JOIN disco ON cancion.fk_disco = disco.id
                                                        INNER JOIN artista ON cancion.fk_artista = artista.id
                                                        WHERE cancion.id = ?;
                                                        ');
                $query->execute([$id]);
                $cancion = $query->fetch(PDO::FETCH_ASSOC);
            $conexion->commit();

            return $cancion;
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
    }

    public function getOpciones(){
        try{
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query=$conexion->prepare('SELECT id, nombre FROM disco;');
                $query->execute();
                $opciones=$query->fetchAll(PDO::FETCH_OBJ);
            $conexion->commit();
            
            
            return $opciones;
            
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
    }

    public function insertarCancion($cancion){
        try{
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query=$conexion->prepare('INSERT INTO cancion (id, nombre, fk_disco, fk_artista,duracion, link) VALUES (NULL, ?,?,?,?,?);');
                $query->execute([$cancion->nombre,$cancion->disco,1,$cancion->duracion,$cancion->link]);
            $conexion->commit();
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
    }

    public function actualizarCancion($cancion){
        try{
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query=$conexion->prepare('UPDATE `cancion` SET `nombre`=?,`fk_disco`=?,`duracion`=?,`fk_artista`=?,`link`=? WHERE id =?');
                $query->execute([$cancion->nombre,$cancion->disco,$cancion->duracion,1,$cancion->link,$cancion->id]);
            $conexion->commit();
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
    }

    public function eliminarCancion($id){
        try{
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query=$conexion->prepare('DELETE FROM cancion WHERE id =?');
                $query->execute([$id]);
            $conexion->commit();
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
    }





}
?>