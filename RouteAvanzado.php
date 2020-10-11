
<?php
    require_once 'RouterClass.php';
    require_once 'Controller/Controller.php';
    require_once 'Controller/ComandController.php';
    require_once 'Controller/UserController.php';

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    
    $r = new Router();

    // rutas
    $r->addRoute("servicios", "GET", "Controller", "showServicios");
    $r->addRoute("galeria", "GET", "Controller", "showGaleria");
    $r->addRoute("productos", "GET", "Controller", "showProductos");
    $r->addRoute("marcas", "GET", "Controller", "showMarcas");
    $r->addRoute("marcas/:id", "GET", "Controller", "showProductos");
    $r->addRoute("producto/:id", "GET", "Controller", "showDescripcionProducto");

    $r->addRoute("insertar", "POST", "ComandController", "insertarProducto");
    $r->addRoute("editar/:id", "GET", "ComandController", "editarProductos");
    $r->addRoute("borrar/:id", "GET", "ComandController", "borrarProducto");
    $r->addRoute("editar", "POST", "ComandController", "editarYGuardarProductos");
    $r->addRoute("marcas/insertar", "POST", "ComandController", "insertarMarca");
    $r->addRoute("marcaseditar/:id", "GET", "ComandController", "editarMarca");
    $r->addRoute("marcasborrar/:id", "GET", "ComandController", "borrarMarca");
    $r->addRoute("marcaseditar", "POST", "ComandController", "editarYGuardarMarcas");

    $r->addRoute("login", "POST", "UserController", "loginUser");
    $r->addRoute("logout", "GET", "UserController", "logout");

    
    //Ruta por defecto.
    $r->setDefaultRoute("Controller", "goHome");

    //Advance
    //$r->addRoute("autocompletar", "GET", "NewController", "AutoCompletar");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>