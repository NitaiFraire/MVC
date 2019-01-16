<h1>Bienvenido a la web MVC</h1>

<?php


require_once 'autoload.php';


if(isset($_GET['controller'])){

    $nombreControlador = $_GET['controller'] . 'Controller';
}else{

    echo "Error 404";
    exit();
}

if(class_exists($nombreControlador)){

    $controlador = new $nombreControlador();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    
        $action = $_GET['action'];
    
        $controlador->$action();

    }else{
        echo "Error 404";
    }
    
}else{

    echo "Error 404";
}


?>
