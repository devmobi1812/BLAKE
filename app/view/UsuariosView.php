<?php 
    require_once("libs/Smarty.class.php");
    class UsuariosView extends ConexionModel{
        
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function login(){
            $titulo = "Acceder";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->display('templates/login.tpl');
        }

        function registrar(){
            $titulo="Registrar";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->display('templates/registrar.tpl');
        }
    }
?>