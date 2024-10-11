<?php
require_once("app/view/DiscosView.php");
require_once("app/model/DiscosModel.php");
require_once("app/controller/UsuariosController.php");

    class DiscosController{
        private $vista;
        private $modelo;

        function __construct(){
            $this->vista = new DiscosView();
            $this->modelo = new DiscosModel();
        }

        function mostrarDiscos(){
            $usuariosController = new UsuariosController();
            $discos = $this->modelo->getDiscos();
            $esAdmin = false;
            $estaLogueado = false;
            if($usuariosController->chequearLogueado()){
                $esAdmin = $usuariosController->chequearRol();
                $estaLogueado=true;
            }
            $this->vista->mostrarDiscos($discos,$esAdmin, $estaLogueado);
        }

        public function verDisco($id){
            $usuariosController = new UsuariosController();
            $disco = $this->modelo->getCancionesDisco($id);

            $esAdmin = false;
            $estaLogueado = false;
            if($usuariosController->chequearLogueado()){
                $esAdmin = $usuariosController->chequearRol();
                $estaLogueado=true;
            }

            $this->vista->mostrarDisco($disco,$esAdmin, $estaLogueado);
        }
        
        public function crearDisco(){
            $usuariosController = new UsuariosController();
            if(!$usuariosController->chequearLogueado()){
                $usuariosController->verificarUsuarios();
            }else if($usuariosController->chequearRol()){
                $this->vista->crearDisco();
            }else{
                print("No tienes los permisos suficientes");
                $this->mostrarDiscos();
            }
            
        }
    
        public function guardarDisco(){
            if(!empty($_POST['nombre']) && !empty($_POST['anio'])){
                $nombre = $_POST['nombre'];
                $anio = $_POST['anio'];
                $imagen="";
                if(empty($_POST['imagen'])){
                    $imagen="https://i.scdn.co/image/ab67616d0000b273e73a74043b1b7f721627b8f4";
                }else{
                    $imagen = $_POST['imagen'];
                }
                
        
                $disco = new stdClass();
                $disco->nombre=$nombre;
                $disco->anio=$anio;
                $disco->imagen=$imagen;
        
                $this->modelo->insertarDisco($disco);
                header('Location: '.BASE_URL."discos");
            }else{
                // DEBO MOSTRAR EL ERROR DE QUE HAY UN CAMPO VACIO
            }
            
    
        }

        public function editarDisco($id){
            $usuariosController = new UsuariosController();
            if(!$usuariosController->chequearLogueado()){
                $usuariosController->verificarUsuarios();
            }else if($usuariosController->chequearRol()){
                $disco = $this->modelo->getDisco($id);
                $this->vista->editarDisco($disco);
            }else{
                print("No tienes los permisos suficientes");
                $this->mostrarDiscos();
            }
        }
        public function actualizarDisco(){
            if(!empty($_POST['nombre']) && !empty($_POST['anio']) && !empty($imagen = $_POST['imagen'])){
                $id=$_POST['id'];
                $nombre = $_POST['nombre'];
                $anio = $_POST['anio'];
                $imagen = $_POST['imagen'];

                $disco = new stdClass();
                $disco->id=$id;
                $disco->nombre=$nombre;
                $disco->anio=$anio;
                $disco->imagen=$imagen;

                $this->modelo->actualizarDisco($disco);
                header('Location: '.BASE_URL."discos");
            }
        }

        public function eliminarDisco($id){
            $usuariosController = new UsuariosController();

            if(!$usuariosController->chequearLogueado()){
                $usuariosController->verificarUsuarios();
            }else if($usuariosController->chequearRol()){
                $this->modelo->eliminarDisco($id);
            }else{
                print("No tienes los permisos suficientes");
                $this->mostrarDiscos();
            }

            
        }
            
    }
?>