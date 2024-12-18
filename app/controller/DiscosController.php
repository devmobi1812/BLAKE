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

            if($disco){
                $this->vista->mostrarDisco($disco,$esAdmin, $estaLogueado);
            }else{
                $usuariosController->verError("", "Todavia no existen canciones para este disco.");
            }

            
        }
        
        public function crearDisco(){
            $usuariosController = new UsuariosController();
            if(!$usuariosController->chequearLogueado()){
                $usuariosController->verificarUsuarios();
            }else if($usuariosController->chequearRol()){
                $this->vista->crearDisco();
            }else{
                $usuariosController->verError("403", "No tienes los permisos suficientes para ejecutar dicha acción.");
            }
            
        }
    
        public function guardarDisco(){
            if(!empty($_POST['nombre']) && !empty($_POST['anio'])){
                $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
                $anio = htmlspecialchars($_POST['anio'], ENT_QUOTES, 'UTF-8');
                $imagen="";
                if(empty($_POST['imagen'])){
                    //$imagen="https://i.scdn.co/image/ab67616d0000b273e73a74043b1b7f721627b8f4";
                    $imagen="/blake/resources/img/discogenerico.png";
                }else{
                    $imagen = htmlspecialchars($_POST['imagen'], ENT_QUOTES, 'UTF-8');
                }
                
        
                $disco = new stdClass();
                $disco->nombre=$nombre;
                $disco->anio=$anio;
                $disco->imagen=$imagen;
        
                $this->modelo->insertarDisco($disco);
                header('Location: '.BASE_URL."discos");
            }else{
                $this->vista->crearDisco("Complete todos los campos requeridos para crear el disco.");
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
                $usuariosController->verError("403", "No tienes los permisos suficientes para ejecutar dicha acción.");
            }
        }
        public function actualizarDisco(){
            $id=$_POST['id'];
            if(!empty($_POST['nombre']) && !empty($_POST['anio'])){
                $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
                $anio = htmlspecialchars($_POST['anio'], ENT_QUOTES, 'UTF-8');
                $imagen="";
                if(empty($_POST['imagen'])){
                    //$imagen="https://i.scdn.co/image/ab67616d0000b273e73a74043b1b7f721627b8f4";
                    $imagen="/blake/resources/img/discogenerico.png";
                }else{
                    $imagen = htmlspecialchars($_POST['imagen'], ENT_QUOTES, 'UTF-8');
                }

                $disco = new stdClass();
                $disco->id=$id;
                $disco->nombre=$nombre;
                $disco->anio=$anio;
                $disco->imagen=$imagen;

                $this->modelo->actualizarDisco($disco);
                header('Location: '.BASE_URL."discos");
            }else{
                $disco = $this->modelo->getDisco($id);
                $this->vista->editarDisco($disco, "Complete todos los campos requeridos para actualizar el disco.");
            }
        }

        public function eliminarDisco($id){
            $usuariosController = new UsuariosController();

            if(!$usuariosController->chequearLogueado()){
                $usuariosController->verificarUsuarios();
            }else if($usuariosController->chequearRol()){
                $this->modelo->eliminarDisco($id);
                header('Location: '.BASE_URL."discos");
            }else{
                $usuariosController->verError("403", "No tienes los permisos suficientes para ejecutar dicha acción.");
            }

            
        }
            
    }
?>