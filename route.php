<?php
    require_once("controller/CancionesController.php");
    require_once("controller/DiscosController.php");
    require_once("controller/UsuariosController.php");
    define("BASE_URL", "//".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]));
    
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
                if(!$usuariosController->chequearLogueado()){
                    $usuariosController->verificarUsuarios();
                }else if($usuariosController->chequearRol()){
                    $cancionesController->crearCancion();
                }else{
                    print("No tienes los permisos suficientes");
                    $cancionesController->index();
                }
                break;
            case "guardar-cancion":
                $cancionesController->guardarCancion();
                $cancionesController->index();
                break;
            case "crear-disco":
                if(!$usuariosController->chequearLogueado()){
                    $usuariosController->verificarUsuarios();
                }else if($usuariosController->chequearRol()){
                    $discosController->crearDisco();
                }else{
                    print("No tienes los permisos suficientes");
                    $cancionesController->index();
                }
                break;
            case "guardar-disco":
                $discosController->guardarDisco();
                $cancionesController->index();
                break;
            case "editar-cancion":
                if(!$usuariosController->chequearLogueado()){
                    $usuariosController->verificarUsuarios();
                }else if($usuariosController->chequearRol()){
                    $cancionesController->editarCancion($parameters[1]);
                }else{
                    print("No tienes los permisos suficientes");
                    $cancionesController->index();
                }
                break;
            case "actualizar-cancion":
                $cancionesController->actualizarCancion();
                $cancionesController->index();
                break;
            case "editar-disco":
                if(!$usuariosController->chequearLogueado()){
                    $usuariosController->verificarUsuarios();
                }else if($usuariosController->chequearRol()){
                    $discosController->editarDisco($parameters[1]);
                }else{
                    print("No tienes los permisos suficientes");
                    $cancionesController->index();
                }
                break;
            case "actualizar-disco":
                $discosController->actualizarDisco();
                $discosController->mostrarDiscos();
                break;
            case "eliminar-cancion":
                if(!$usuariosController->chequearLogueado()){
                    $usuariosController->verificarUsuarios();
                }else if($usuariosController->chequearRol()){
                    $cancionesController->eliminarCancion($parameters[1]);
                    $cancionesController->index();
                }else{
                    print("No tienes los permisos suficientes");
                    $cancionesController->index();
                }
                break;
            case "eliminar-disco":
                if(!$usuariosController->chequearLogueado()){
                    $usuariosController->verificarUsuarios();
                }else if($usuariosController->chequearRol()){
                    $discosController->eliminarDisco($parameters[1]);
                    $discosController->mostrarDiscos();
                }else{
                    print("No tienes los permisos suficientes");
                    $cancionesController->index();
                }
                break;
            case "iniciar":
                $usuariosController->verificarUsuarios();
                break;
            case "validar":
                $usuariosController->validar();
                $cancionesController->index();
                break;
            case "registrado":
                $usuariosController->registrar();
                $cancionesController->index();
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