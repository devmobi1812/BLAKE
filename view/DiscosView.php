<?php 
    require_once("libs/Smarty.class.php");
    
    class DiscosView{
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function mostrarDiscos($discos){
            $titulo = "Discos";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('discos', $discos);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/discos.tpl');
        }

        function mostrarDisco($disco){
            $titulo = "Disco";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('discos', $disco);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/disco.tpl');
        }

        function crearDisco(){
            $titulo = "Crear Disco";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/crearDisco.tpl');
        }

        function editarDisco($disco){
            $titulo = "Editar Disco";
            $usuario = "Iniciar sesión";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('disco', $disco);
            $this->smarty->assign('usuario', $usuario);
            $this->smarty->display('templates/editarDisco.tpl');
        }
    }
?>