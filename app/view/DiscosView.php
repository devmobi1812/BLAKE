<?php 
    require_once("libs/Smarty.class.php");
    
    class DiscosView{
        private $smarty;
        private $titulo;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('base', BASE_URL);
            $this->titulo= "BLAKE - ";
        }

        function mostrarDiscos($discos, $esAdmin, $estaLogueado){
            $this->titulo.= "Discos";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('discos', $discos);
            $this->smarty->display('templates/discos/discos.tpl');
        }

        function mostrarDisco($disco, $esAdmin, $estaLogueado){// 
            $this->titulo.= "Disco";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('discos', $disco);
            $this->smarty->display('templates/discos/disco.tpl');
        }

        function crearDisco($error=""){
            $this->titulo.= "Crear Disco";
            $this->smarty->assign('error', $error);
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->display('templates/discos/crear.tpl');
        }

        function editarDisco($disco, $error=""){
            $this->titulo.= "Editar Disco";
            $this->smarty->assign('error', $error);
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('disco', $disco);
            $this->smarty->display('templates/discos/editar.tpl');
        }
    }
?>