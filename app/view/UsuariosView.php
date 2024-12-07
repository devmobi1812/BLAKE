<?php 
    require_once("libs/Smarty.class.php");
    class UsuariosView extends ConexionModel{
        
        private $smarty;
        private $titulo;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('base', BASE_URL);
            $this->titulo= "BLAKE - ";
        }

        function login($error=""){
            $this->titulo.= "Acceder";
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/auth/login.tpl');
        }

        function registrar($error = ""){
            $this->titulo.="Registrar";
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/auth/registrar.tpl');
        }

        function error($error, $texto){
            $this->titulo.="Error";
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('numero', $error);
            $this->smarty->assign('texto', $texto);
            $this->smarty->display("templates/error/general.tpl");
        }
    }
?>