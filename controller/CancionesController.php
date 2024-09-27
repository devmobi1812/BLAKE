<?php 
require_once("view/CancionesView.php");
require_once("model/CancionesModel.php");
require_once("model/DiscosModel.php");
class CancionesController{
    private $vista;
    private $modelo;
    
    function __construct(){
        $this->vista = new CancionesView();
        $this->modelo = new CancionesModel();
    }

    public function index(){
        $canciones = $this->modelo->getCanciones();
        $this->vista->mostrarCanciones($canciones);
    }

    public function verCancion($id){
        $cancion = $this->modelo->getCancion($id);
        $this->vista->mostrarCancion($cancion);
    }

    public function crearCancion(){
        $opciones = $this->modelo->getOpciones();
        $this->vista->crearCancion($opciones);
    }

    public function guardarCancion(){
        $nombre = $_POST['nombre'];
        $disco = $_POST['disco'];
        $duracion = $_POST['duracion'];
        $link = $_POST['link'];

        $cancion = new stdClass();
        $cancion->nombre=$nombre;
        $cancion->disco=$disco;
        $cancion->duracion=$duracion;
        $cancion->link=$link;

        $this->modelo->insertarCancion($cancion);

    }
    public function editarCancion($id){
        $cancion = $this->modelo->getCancion($id);
        $opciones = $this->modelo->getOpciones();
        $this->vista->editarCancion($cancion, $opciones);
    }
    public function actualizarCancion(){
        if(!empty($_POST['nombre']) && !empty($_POST['disco']) && !empty($_POST['duracion']) && !empty($_POST['link'])){
            $id=$_POST['id'];
            $nombre = $_POST['nombre'];
            $disco = $_POST['disco'];
            $duracion = $_POST['duracion'];
            $link = $_POST['link'];

            $cancion = new stdClass();
            $cancion->id=$id;
            $cancion->nombre=$nombre;
            $cancion->disco=$disco;
            $cancion->duracion=$duracion;
            $cancion->link=$link;

            $this->modelo->actualizarCancion($cancion);
        }
    }

    public function eliminarCancion($id){
        $this->modelo->eliminarCancion($id);
    }
}
?>