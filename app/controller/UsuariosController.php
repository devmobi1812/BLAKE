<?php
    require_once('app/model/UsuariosModel.php');
    require_once('app/view/UsuariosView.php');
    class UsuariosController{
        private $modelo;
        private $vista;

        function __construct(){
            $this->modelo= new UsuariosModel();
            $this->vista= new UsuariosView();
        }

        function estaLogeado(){
            if (isset($_SESSION["logueado"]) && $_SESSION["logueado"] === true){
                return true;
            }
            return false;
        }
        function verificarUsuarios(){
            $usuarios = $this->modelo->getUsuarios();
            if($usuarios){
                $this->verLogin();
            }else{
                $this->verRegistrar();
            }
        }
        private function verLogin(){
            $this->vista->login();
        }

        function verRegistrar(){
            $this->vista->registrar();
        }

        function verError($numero="", $texto=""){
            if(empty($numero) && empty($texto)){
                $numero="404";
                $texto="La pagina solicitada no existe.";
            }
            
            $this->vista->errorServidor($numero, $texto);
        }

        function registrar(){
            $usuarios = $this->modelo->getUsuarios();
            if($usuarios){
                $this->procesoRegistracion(2);
            }else{
                $this->procesoRegistracion(1);
            }
            
        }

        function procesoRegistracion($rol){
            if(!empty($_POST['nombre']) && !empty($_POST['password']) && !empty($_POST['verificar-password'])){
                $nombre=$_POST['nombre'];
                $password=$_POST['password'];
                $verificarPassword=$_POST['verificar-password'];

                if($password==$verificarPassword){
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    
                    $usuario=new stdClass();
                    $usuario->nombre=$nombre;
                    $usuario->password=$hash;
                    $usuario->email="@";
                    $usuario->rol=$rol;

                    $this->modelo->crearUsuario($usuario);

                    $this->validar();

                }else{
                    $this->vista->registrar("Las contraseñas no coinciden.");
                }
                
            }else{
                $this->vista->registrar("Complete todos los campos requeridos para registrarse.");
            }
        }
        

        function validar(){
            if(!empty($_POST['nombre']) && !empty($_POST['password'])){
                $nombre=$_POST['nombre'];
                $password=$_POST['password'];

                $usuario =$this->modelo->getUsuario($nombre);

                if($usuario && password_verify($password,($usuario->password))){
                    session_start();
                    $_SESSION["logueado"] = true;
                    $_SESSION["usuario"] = $nombre;
                    //print("USUARIO LOGEADO: ".$nombre);
                    header('Location: '.BASE_URL."canciones");
                }else{
                    $this->vista->login("Los datos ingresados son incorrectos.");
                }
            }else{
                $this->vista->login("Complete todos los campos requeridos para iniciar sesión.");
            }
        }

        function salir(){
            session_start();
            //  Si usuario esta definido, cerrar session.
            if(isset($_SESSION['usuario'])){
                session_destroy();
            }
            $this->vista->login();
            
        }

        function chequearLogueado() {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            //  Si usuario no esta definido, retorna falso pq no hay nadie con login
            if (!isset($_SESSION['usuario'])) {
                //print("No hay nadie login");
                return false;
            }else{
                //  Si usuario  esta definido, retorna true pq hay alguien con login
                return true;
            }
        }

        function chequearRol(){
            $rolAdmin=1;
            $user = $this->modelo->getUsuario($_SESSION['usuario']);
            if($user && ($user->rol==$rolAdmin)){
                //  Si el rol era 1, entonces retorna verdadero
                return true;
            }
            return false;
        }
    
    }
?>