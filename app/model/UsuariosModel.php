<?php
    class UsuariosModel extends ConexionModel{
        
        function getUsuarios(){
            try{
                $conexion=$this->getConexion();
                $conexion->beginTransaction();
                    $query= $conexion->prepare('SELECT * FROM usuario');
                    $query->execute();
                    $usuarios=$query->fetchAll(PDO::FETCH_OBJ);
                $conexion->commit();

                return $usuarios;
            }catch (PDOException $e){
                $conexion->rollback();
                //error_log($e->getMessage());
            }
        }
        function getUsuario($nombre){
            try{
                $conexion=$this->getConexion();
                $conexion->beginTransaction();
                    $query= $conexion->prepare('SELECT * FROM usuario WHERE nombre =?');
                    $query->execute([$nombre]);
                    $usuario=$query->fetch(PDO::FETCH_OBJ);
                $conexion->commit();

                return $usuario;
            }catch (PDOException $e){
                $conexion->rollback();
                error_log($e->getMessage());

            }
        }

        function crearUsuario($usuario){
            try{
                $conexion=$this->getConexion();
                $conexion->beginTransaction();
                    $query= $conexion->prepare('INSERT INTO usuario(id,nombre, password, email, rol) VALUES (NULL, ?,?,?,?)');
                    $query->execute([$usuario->nombre, $usuario->password, $usuario->email,$usuario->rol]);
                    
                $conexion->commit();
            }catch (PDOException $e){
                $conexion->rollback();
                error_log($e->getMessage());
                //print($e->getMessage());
            }
        }

        
    }
?>