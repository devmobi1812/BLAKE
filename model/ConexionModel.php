<?php

class ConexionModel{

    private $db;

    function __construct(){
        $this->db = $this->crearConexion();
    }
    private function crearConexion(){
        try{
            $PDO = new PDO('mysql:host=localhost;port=3306;dbname=blake',
            'root',
            '');
        }catch(PDOException $e){
            $this->db->rollback();
            error_log($e->getMessage());
            return null;
        }finally{
            return $PDO;
        }
    }

    function getConexion(){
        return $this->db;
    }
}

?>