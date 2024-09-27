<?php
require_once("ConexionModel.php");

class DiscosModel extends ConexionModel{
    
    public function getDiscos(){
        try{
            //  se conecta
            $conexion = $this->getConexion();
            //  inicia la transaccion
            $conexion->beginTransaction();
                $query = $conexion -> prepare('SELECT id, nombre, anio, imagen FROM disco ORDER BY anio DESC;');
                $query -> execute();
                $discos = $query -> fetchAll(PDO::FETCH_OBJ);

            //  cierra la transaccion
            $conexion->commit();

            return $discos;
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
        
    }

    public function getDisco($id){
        try{
            //  se conecta
            $conexion = $this->getConexion();
            //  inicia la transaccion
            $conexion->beginTransaction();
                $query = $conexion -> prepare('SELECT id, nombre, anio, imagen FROM disco WHERE id=?;');
                $query -> execute([$id]);
                $disco = $query -> fetch(PDO::FETCH_ASSOC);

            //  cierra la transaccion
            $conexion->commit();

            return $disco;
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
    }
    public function getCancionesDisco($id){
        try {
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query = $conexion -> prepare('SELECT cancion.id, cancion.nombre, artista.nombre AS artista_nombre, disco.nombre AS disco_nombre, cancion.duracion 
                                                FROM cancion
                                                INNER JOIN disco ON cancion.fk_disco = disco.id
                                                INNER JOIN artista ON cancion.fk_artista = artista.id
                                                WHERE disco.id = ?;
                                                ');
                $query->execute([$id]);
                $disco = $query -> fetchAll(PDO::FETCH_OBJ);
            $conexion->commit();


            return $disco;
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
    }

    public function insertarDisco($disco){
        try{
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query=$conexion->prepare('INSERT INTO disco (id, nombre, fk_artista, anio, imagen) VALUES (NULL, ?,?,?,?);');
                $query->execute([$disco->nombre,1,$disco->anio,$disco->imagen]);
            $conexion->commit();
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
            print($e);
        }
    }

    public function actualizarDisco($disco){
        try{
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query=$conexion->prepare('UPDATE `disco` SET `nombre`=?,`anio`=?,`fk_artista`=?,`imagen`=? WHERE id =?');
                $query->execute([$disco->nombre,$disco->anio,1,$disco->imagen,$disco->id]);
            $conexion->commit();
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
            print($e);
        }
    }

    public function eliminarDisco($id){
        try{
            $conexion = $this->getConexion();
            $conexion->beginTransaction();
                $query=$conexion->prepare('DELETE FROM disco WHERE id =?');
                $query->execute([$id]);
            $conexion->commit();
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
            print($e);
        }
    }
}

?>