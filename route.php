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
        
        switch($parameters[0]){
            case "inicio":
                $cancionesController->index();
                break;
            case "canciones":
                $cancionesController->index();
                break;
            case "cancion":
                if(isset($parameters[1]) && $parameters[1]!=null){
                    switch($parameters[1]){
                        case "crear":
                            $cancionesController->crearCancion();
                            break;
                        case "guardar":
                            $cancionesController->guardarCancion();
                            break;
                        case "editar":
                            $cancionesController->editarCancion($parameters[2]);
                            break;
                        case "actualizar":
                            $cancionesController->actualizarCancion();
                            break;
                        case "eliminar":
                            $cancionesController->eliminarCancion($parameters[2]);
                            break;
                        case "ver":
                            $cancionesController->verCancion($parameters[2]);
                            break;
                        default:
                            $usuariosController->verError();
                            break;
                    }
                }else{
                    $cancionesController->index();
                    break;
                }
                break;
            case "discos":
                $discosController->mostrarDiscos();
                break;
            case "disco":
                if(isset($parameters[1]) && $parameters[1]!=null){
                    switch($parameters[1]){
                        case "crear":
                            $discosController->crearDisco();
                            break;
                        case "guardar":
                            $discosController->guardarDisco();
                            break;
                        case "editar":
                            $discosController->editarDisco($parameters[2]);
                            break;
                        case "actualizar":
                            $discosController->actualizarDisco();
                            break;
                        case "eliminar":
                            $discosController->eliminarDisco($parameters[2]);
                            break;
                        case "ver":
                            $discosController->verDisco($parameters[2]);
                            break;
                        default:
                            $usuariosController->verError();
                            break;
                    }
                }else{
                    $discosController->mostrarDiscos();
                    break;
                }
                break;
            case "login":
                if(isset($parameters[1]) && $parameters[1]!=null){
                    switch($parameters[1]){
                        case "validar":
                            $usuariosController->validar();
                            break;
                        default:
                            break;
                    }
                }else{
                    $usuariosController->verificarUsuarios();
                    break;
                }
                break;
            case "registrar":
                if(isset($parameters[1]) && $parameters[1]!=null){
                    switch($parameters[1]){
                        case "validar":
                            $usuariosController->registrar();
                            break;
                        default:
                            break;
                    }
                }else{
                    $usuariosController->verRegistrar();
                    break;
                }
                break;
            case "salir":
                $usuariosController->salir();
                break;
            default:
                $usuariosController->verError();
                break;
        }
    }else{
        $cancionesController->index();
    }
        /*
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
        */
    

    

?>