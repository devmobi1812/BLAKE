<?php
    require_once("libs/Smarty.class.php");
    class CancionesView{
        private $smarty;
        private $titulo;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('base', BASE_URL);
            $this->titulo= "BLAKE - ";
        }

        function mostrarCanciones($canciones, $esAdmin, $estaLogueado){
            $this->titulo.="Canciones";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('canciones', $canciones);
            $this->smarty->display('templates/canciones/canciones.tpl');
        }

        function mostrarCancion($cancion, $esAdmin, $estaLogueado){
            $this->titulo.= "Ver Cancion";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('cancion', $cancion);
            $this->smarty->display('templates/canciones/cancion.tpl');
        }

        function crearCancion($opciones, $error =""){
            $this->titulo.= "Crear Canción";
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('opciones', $opciones);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/canciones/crear.tpl');
        }

        function editarCancion($cancion, $opciones, $error=""){
            $this->titulo.= "Editar Canción";
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('error', $error);
            $this->smarty->assign('opciones', $opciones);
            $this->smarty->assign('cancion', $cancion);
            $this->smarty->display('templates/canciones/editar.tpl');
        }

        
    }
?>