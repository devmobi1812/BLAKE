<?php 

require_once("libs/Smarty.class.php");
class TareasView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrarTareas($tareas){
        $titulito = "Lista de Tareas";
        $this->smarty->assign('titulo', $titulito);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->display('templates/index.tpl');
    }
}



?>