<?php
    require_once("libs/Smarty.class.php");
    class CancionesView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function mostrarCanciones($canciones){
            $titulo = "Canciones";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('canciones', $canciones);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/canciones.tpl');
        }

        function mostrarCancion($cancion,){
            $titulo = "Ver Cancion";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('cancion', $cancion);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/cancion.tpl');
        }

        function crearCancion($opciones){
            $titulo = "Crear Canción";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('opciones', $opciones);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/crearCancion.tpl');
        }

        function editarCancion($cancion, $opciones){
            $titulo = "Editar Canción";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('opciones', $opciones);
            $this->smarty->assign('cancion', $cancion);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/editarCancion.tpl');
        }

        
    }
?>