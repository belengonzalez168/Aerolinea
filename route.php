<?php

    require_once "./Controller/loginController.php";    
    require_once "./Controller/vuelingController.php";
    require_once "./Controller/destinationController.php";
   
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'home'; 

    if (!empty($_GET['action'])) { 
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    switch ($params[0]) {
        case 'home':
            $vuelingController = new VuelingController();
            $vuelingController->showHome();
            break;
        case 'formulariovuelo':
            $vuelingController = new VuelingController();
            $vuelingController->showFormVuelo();
            break;
        case 'login':
            $loginController = new LoginController();
            $loginController->Showformlogin();
            break;
        case 'validacion':
            $loginController = new loginController();
            $loginController->controlingreso();
            break;
        case 'logout':
            $loginController = new loginController();
            $loginController->logout();
            break;
        case 'verdetalle':
            $vuelingController= new VuelingController();
            $vuelingController->verDetalle($params[1]);
            break;
        case 'insertvuelo':
            $vuelingController = new VuelingController();
            $vuelingController->ingresarVuelo();
            break;
        case 'eliminarvuelo':
            $vuelingController = new VuelingController();         
            $vuelingController->eliminarVuelo($params[1]);
            break;
        case 'editarvuelo':
            $vuelingController = new VuelingController();
            $vuelingController->consultarVuelo($params[1]);
            break;
        case 'guardarcambiosvuelo':
            $vuelingController = new VuelingController();
            $vuelingController->guardarEdicionVuelo($params[1]);
            break; 
        case 'verdestinos':
            $destinationController= new DestinationController();
            $destinationController->verDestinos();
            break;
        case 'formulariodestino':;
            $destinationController = new DestinationController();
            $destinationController->showFormDestino();
            break;
        case 'ingresardestino':
            $destinationController = new DestinationController();
            $destinationController->ingresarDestino();
            break;
        case 'vervuelospordestino':
            $vuelingController= new VuelingController();        
            $vuelingController->vuelosPorDestino($params[1]);
            break;
        case 'eliminardestino': 
            $destinationController = new DestinationController();
            $destinationController->consultaEliminarDestino($params[1]);
            break;
        case 'confirmaeliminardestino': 
            $destinationController = new DestinationController();
            $destinationController->eliminarDestino($params[1]);
            break;               
        case 'editardestino':
            $destinationController = new DestinationController();
            $destinationController->consultarDestino($params[1]);
            break;         
        case 'guardarcambiosdestino':
            $destinationController = new DestinationController();       
            $destinationController->guardarEdicionDestino($params[1]);
            break;
        default:
            echo('404 Page not found');
            break;
    }
        
