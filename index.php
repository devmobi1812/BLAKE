<?php
/*
require_once("php/connection.php");
require_once("libs/Smarty.class.php");
  function agregarTarea(){
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $prioridad = $_POST["prioridad"];

    if(!(empty($titulo)) && !(empty($contenido)) && !(empty($prioridad))){
      insertTarea($titulo, $contenido, $prioridad);
    }

    header('location: http:'.BASE_URL);
  }
  function eliminarTarea($id){
    if(!empty($id) && is_numeric($id)){
      removeTarea($id);
    }
    header('location: http:'.BASE_URL);
  }

  function editarTarea($id){
    $tarea = getTarea($id);
    $titulito = "Editar Tarea";
    $smarty = new Smarty();
    $smarty->assign('titulo', $titulito);
    $smarty->assign('tarea', $tarea);
    $smarty->display(
      'templates/edit.tpl'
    );
  }

  function actualizarTarea(){
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $prioridad = $_POST["prioridad"];
    $id=$_POST["id"];

    if(!(empty($titulo)) && !(empty($contenido)) && !(empty($prioridad)) && !(empty($id))){
      $tarea= new stdClass();
      $tarea->id= $id;
      $tarea->titulo= $titulo;
      $tarea->contenido= $contenido;
      $tarea->prioridad= $prioridad;
      
      updateTarea($tarea);
    }

    header('location: http:'.BASE_URL);
  }

  function crearTarea(){
      $smarty = new Smarty();
      $titulito = "Agregar Tarea";
      $smarty->assign('titulo', $titulito);
      $smarty->display(
        'templates/create.tpl'
      );
  }
  /*function inicio(){
    $tareas = getTareas();
    $titulito = "Lista de Tareas";
    $smarty = new Smarty();
    $smarty->assign('titulo', $titulito);
    
    $smarty->assign('tareas', $tareas);
    $smarty->display(
      'templates/index.tpl'
    );
  }
  */
  
?>
