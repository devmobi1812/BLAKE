<?php
    function connect(){
        return new PDO('mysql:host=localhost;port=3306;dbname=tareas',
                    'root',
                    '');
    }

    function getTareas(){
        $connection = connect();
        $query = $connection -> prepare('SELECT * FROM tareas WHERE 1');
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_OBJ);
    }

    

    function insertTarea($titulo, $contenido, $prioridad){
        $connection = connect();
        $query = $connection->prepare('INSERT INTO tareas(titulo, contenido, prioridad) VALUES(?, ?, ?)');
        $query -> execute([$titulo, $contenido, $prioridad]);
    }

    function removeTarea($id){
        $connection = connect();
        $query = $connection->prepare('DELETE FROM tareas WHERE id=?');
        $query -> execute([$id]);
    }

    function updateTarea($tarea){
        try{
            $connection = connect();
            $connection->beginTransaction();
            $query = $connection->prepare('UPDATE tareas SET titulo=?, contenido=?, prioridad=? WHERE id=?');
            $query -> execute([$tarea->titulo, $tarea->contenido, $tarea->prioridad, $tarea->id]);
            $connection->commit();
        }catch(PDOException $e){
            $connection->rollback();
            error_log($e->getMessage());
        }
    }

    function getTarea($id){
        try{
            $connection = connect();
            $connection->beginTransaction();
            $query = $connection->prepare('SELECT * FROM tareas WHERE id=?');
            $query -> execute([$id]);
            $tarea = $query-> fetch(PDO::FETCH_OBJ);
            $connection->commit();

            return $tarea;
        }catch(PDOException $e){
            $connection->rollback();
            error_log($e->getMessage());
        }
    }
?>