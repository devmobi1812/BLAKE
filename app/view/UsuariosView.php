<?php 
    require_once("libs/Smarty.class.php");
    class UsuariosView extends ConexionModel{
        
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('base', BASE_URL);
        }

        function login($error=""){
            $titulo = "Acceder";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/auth/login.tpl');
        }

        function registrar($error = ""){
            $titulo="Registrar";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/auth/registrar.tpl');
        }

        function errorServidor($error, $texto){
            $titulo="Error";
            $this->smarty->assign('titulo', $titulo);
            $this->smarty->assign('numero', $error);
            $this->smarty->assign('texto', $texto);
            $this->smarty->display("templates/error/errorServidor.tpl");
        }
    }
?>