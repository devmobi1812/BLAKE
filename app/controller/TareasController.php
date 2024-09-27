<?php 
require_once("view/TareasView.php");
require_once("model/TareasModel.php");
class TareasController{
    private $vista;
    private $modelo;
    
    function __construct(){
        $this->vista = new TareasView();
        $this->modelo = new TareasModel();
    }

    public function index(){
        $tareas = $this->modelo->getTareas();
        $this->vista->mostrarTareas($tareas);
    }
}
?>