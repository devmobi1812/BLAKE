<?php 
require_once("app/view/CancionesView.php");
require_once("app/model/CancionesModel.php");
require_once("app/model/DiscosModel.php");
require_once("app/controller/UsuariosController.php");
class CancionesController{
    private $vista;
    private $modelo;
    
    function __construct(){
        $this->vista = new CancionesView();
        $this->modelo = new CancionesModel();
    }
    function chequeo(){
        
    }
    public function index(){
        $usuariosController = new UsuariosController();
        $canciones = $this->modelo->getCanciones();
        $esAdmin = false;
        $estaLogueado = false;
        if($usuariosController->chequearLogueado()){
            $esAdmin = $usuariosController->chequearRol();
            $estaLogueado=true;
        }

        
        $this->vista->mostrarCanciones($canciones, $esAdmin, $estaLogueado);
    }

    public function verCancion($id){
        $usuariosController = new UsuariosController();
        $cancion = $this->modelo->getCancion($id);
        $esAdmin = false;
        $estaLogueado = false;
        if($usuariosController->chequearLogueado()){
            $esAdmin = $usuariosController->chequearRol();
            $estaLogueado=true;
        }
        $this->vista->mostrarCancion($cancion,$esAdmin, $estaLogueado);
    }

    public function crearCancion(){
        $usuariosController = new UsuariosController();
        if(!$usuariosController->chequearLogueado()){
            $usuariosController->verificarUsuarios();
        }else if($usuariosController->chequearRol()){
            $opciones = $this->modelo->getOpciones();
            $this->vista->crearCancion($opciones, "");
        }else{
            print("No tienes los permisos suficientes");
            $this->index();
        }
    }

    public function guardarCancion(){
        if(!empty($_POST['nombre']) && !empty($_POST['disco']) && !empty($_POST['duracion']) && !empty($_POST['link'])){
            //$nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
            
            $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
            $disco = htmlspecialchars($_POST['disco'], ENT_QUOTES, 'UTF-8');
            $duracion = htmlspecialchars($_POST['duracion'], ENT_QUOTES, 'UTF-8');
            $link = htmlspecialchars($_POST['link'], ENT_QUOTES, 'UTF-8');
    
            $cancion = new stdClass();
            $cancion->nombre=$nombre;
            $cancion->disco=$disco;
            $cancion->duracion=$duracion;
            $cancion->link=$link;
    
            $this->modelo->insertarCancion($cancion);
            header('Location: '.BASE_URL);
        }else{
            $opciones = $this->modelo->getOpciones();
            $this->vista->crearCancion($opciones, "Complete todos los campos requeridos.");
        }
        

    }
    public function editarCancion($id){
        $usuariosController = new UsuariosController();

        if(!$usuariosController->chequearLogueado()){
            $usuariosController->verificarUsuarios();
        }else if($usuariosController->chequearRol()){
            $cancion = $this->modelo->getCancion($id);
            $opciones = $this->modelo->getOpciones();
            $this->vista->editarCancion($cancion, $opciones);
        }else{
            print("No tienes los permisos suficientes");
            $this->index();
        }
        
    }
    public function actualizarCancion(){
        $id=$_POST['id'];
        if(!empty($_POST['nombre']) && !empty($_POST['disco']) && !empty($_POST['duracion']) && !empty($_POST['link'])){
            
            $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
            $disco = htmlspecialchars($_POST['disco'], ENT_QUOTES, 'UTF-8');
            $duracion = htmlspecialchars($_POST['duracion'], ENT_QUOTES, 'UTF-8');
            $link = htmlspecialchars($_POST['link'], ENT_QUOTES, 'UTF-8');

            $cancion = new stdClass();
            $cancion->id=$id;
            $cancion->nombre=$nombre;
            $cancion->disco=$disco;
            $cancion->duracion=$duracion;
            $cancion->link=$link;

            $this->modelo->actualizarCancion($cancion);
            header('Location: '.BASE_URL."canciones");
        }else{
            $cancion = $this->modelo->getCancion($id);
            $opciones = $this->modelo->getOpciones();
            $this->vista->editarCancion($cancion, $opciones, "Complete todos los campos requeridos.");
        }
    }

    public function eliminarCancion($id){
        $usuariosController = new UsuariosController();
        if(!$usuariosController->chequearLogueado()){
            $usuariosController->verificarUsuarios();
        }else if($usuariosController->chequearRol()){
            $this->modelo->eliminarCancion($id);
            header('Location: '.BASE_URL."canciones");
        }else{
            print("No tienes los permisos suficientes");
            $this->index();
        }
    }
}
?>