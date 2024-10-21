<?php 
    require_once("libs/Smarty.class.php");
    
    class DiscosView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('base', BASE_URL);
        }

        function mostrarDiscos($discos, $esAdmin, $estaLogueado){
            $titulo = "Discos";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('discos', $discos);
            $this->smarty->display('templates/discos.tpl');
        }

        function mostrarDisco($disco, $esAdmin, $estaLogueado){// 
            $titulo = "Disco";
            $this->smarty->assign('esAdmin', $esAdmin);
            $this->smarty->assign('estaLogueado', $estaLogueado);
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('discos', $disco);
            $this->smarty->display('templates/disco.tpl');
        }

        function crearDisco(){
            $titulo = "Crear Disco";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->display('templates/crearDisco.tpl');
        }

        function editarDisco($disco, $error=""){
            $titulo = "Editar Disco";
            $this->smarty->assign('error', $error);
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('disco', $disco);
            $this->smarty->display('templates/editarDisco.tpl');
        }
    }
?>