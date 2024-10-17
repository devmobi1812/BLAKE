<?php
    require_once("libs/Smarty.class.php");
    class CancionesView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('base', BASE_URL);
        }

        function mostrarCanciones($canciones, $esAdmin, $estaLogueado){
            $titulo = "Canciones";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('canciones', $canciones);
            $this->smarty->display('templates/canciones.tpl');
        }

        function mostrarCancion($cancion, $esAdmin, $estaLogueado){
            $titulo = "Ver Cancion";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('cancion', $cancion);
            $this->smarty->display('templates/cancion.tpl');
        }

        function crearCancion($opciones, $error =""){
            $titulo = "Crear Canción";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('opciones', $opciones);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/crearCancion.tpl');
        }

        function editarCancion($cancion, $opciones, $error=""){
            $titulo = "Editar Canción";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('error', $error);
            $this->smarty->assign('opciones', $opciones);
            $this->smarty->assign('cancion', $cancion);
            $this->smarty->display('templates/editarCancion.tpl');
        }

        
    }
?>