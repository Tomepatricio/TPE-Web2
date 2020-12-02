<?php
    require_once 'RouterClass.php';
    require_once 'Controller/showController.php';
    require_once 'Controller/ComandController.php';
    require_once 'Controller/UserController.php';

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    
    $r = new Router();

    // rutas
    $r->addRoute("servicios", "GET", "showController", "showServicios");
    $r->addRoute("galeria", "GET", "showController", "showGaleria");
    $r->addRoute("productos", "GET", "showController", "showProductos");
    $r->addRoute("marcas", "GET", "showController", "showMarcas");
    $r->addRoute("marcas/:id", "GET", "showController", "showProductos");
    $r->addRoute("producto/:id", "GET", "showController", "showDescripcionProducto");
    $r->addRoute("productosig/:id", "GET", "showController", "showDescripcionProductoSig");
    $r->addRoute("productoant/:id", "GET", "showController", "showDescripcionProductoAnt");
    $r->addRoute("registro", "GET", "showController", "showRegistro");
    
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
    $r->addRoute("registro/addUser","POST", "UserController", "insertarUser");
    $r->addRoute("update/:username","GET", "UserController", "updateUser");
    $r->addRoute("registroEliminar/:username","GET", "UserController", "deleteUser");
    
    //Ruta por defecto.
    $r->setDefaultRoute("showController", "goHome");

    //Advance
    //$r->addRoute("autocompletar", "GET", "NewController", "AutoCompletar");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>