<?php 
require_once("ConexionModel.php");
class TareasModel extends ConexionModel{
    private $conexion;
    
    public function getTareas(){
        try{
            //  se conecta
            $conexion = $this->getConexion();
            //  inicia la transaccion
            $conexion->beginTransaction();
                $query = $conexion -> prepare('SELECT * FROM tareas WHERE 1');
                $query -> execute();
                $tareas = $query -> fetchAll(PDO::FETCH_OBJ);
            //  cierra la transaccion
            $conexion->commit();

            return $tareas;
        }catch(PDOException $e){
            $conexion->rollback();
            error_log($e->getMessage());
        }
        
    }






}
?>