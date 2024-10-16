<?php
    require_once("app/controller/CancionesController.php");
    require_once("app/controller/DiscosController.php");
    require_once("app/controller/UsuariosController.php");
    define("BASE_URL", "//".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"])."/");
    
    $cancionesController = new CancionesController();
    $discosController = new DiscosController();
    $usuariosController = new UsuariosController();
    $action = $_GET['action'];
    if($action!=""){
        $parameters = explode('/',$action);
        /*
        switch($parameters[0]){
            case "inicio":
                $cancionesController->index();
                break;
            case "canciones":
                $cancionesController->index();
                break;
            case "cancion":
                switch(isset($parameters[1]) && $parameters[1]!=null){
                    case "crear":
                        $cancionesController->crearCancion();
                        break;
                    case "editar":
                        $cancionesController->editarCancion($parameters[1]);
                        break;
                    case "actualizar":
                        $cancionesController->actualizarCancion();
                        break;
                    case "eliminar":
                        $cancionesController->eliminarCancion($parameters[1]);
                        $cancionesController->index();
                        break;
                    default:
                        // VISUALIZAR
                        break;
                }
            case "discos":
                $discosController->mostrarDiscos();
                break;
            case "disco":
                switch(isset($parameters[1]) && $parameters[1]!=null){
                    case "crear":
                        $discosController->crearDisco();
                        break;
                    case "editar":
                        $discosController->editarDisco($parameters[1]);
                        break;
                    case "actualizar":
                        $discosController->actualizarDisco();
                        break;
                    case "eliminar":
                        $discosController->eliminarDisco($parameters[1]);
                        $discosController->mostrarDiscos();
                        break;
                    default:
                        // VISUALIZAR
                        break;
                }
            case "login":
                $usuariosController->verificarUsuarios();
                break;
            case "registrarse":
                break;
            case "salir":
                break;
        }*/
        switch($parameters[0]){
            case "inicio":
                $cancionesController->index();
                break;
            case "cancion":
                $cancionesController->verCancion($parameters[1]);
                break;
            case "discos":
                $discosController->mostrarDiscos();
                break;
            case "disco":
                $discosController->verDisco($parameters[1]);
                break;
            case "crear-cancion":
                $cancionesController->crearCancion();
                break;
            case "guardar-cancion":
                $cancionesController->guardarCancion();
                break;
            case "crear-disco":
                $discosController->crearDisco();
                break;
            case "guardar-disco":
                $discosController->guardarDisco();
                break;
            case "editar-cancion":
                $cancionesController->editarCancion($parameters[1]);
                break;
            case "actualizar-cancion":
                $cancionesController->actualizarCancion();
                break;
            case "editar-disco":
                $discosController->editarDisco($parameters[1]);
                break;
            case "actualizar-disco":
                $discosController->actualizarDisco();
                break;
            case "eliminar-cancion":
                $cancionesController->eliminarCancion($parameters[1]);
                $cancionesController->index();
                break;
            case "eliminar-disco":
                $discosController->eliminarDisco($parameters[1]);
                $discosController->mostrarDiscos();
                break;
            case "iniciar":
                $usuariosController->verificarUsuarios();
                break;
            case "validar":
                $usuariosController->validar();
                break;
            case "registrado":
                $usuariosController->registrar();
                break;
            case "registrar":
                $usuariosController->verRegistrar();
                break;
            case "salir":
                $usuariosController->salir();
                break;
            default:
                $cancionesController->index();
                break;
        }
    }else{
        $cancionesController->index();
    }
    

?>