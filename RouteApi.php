<?php

require_once 'RouterClass.php';
require_once './Controller/ApiController.php';

$r = new Router();

$r->addRoute("productos", "GET", "ApiController", "getProductos");
$r->addRoute("productos/:id", "GET", "ApiController", "getProductosById");
$r->addRoute("productos/:id", "DELETE", "ApiController", "deleteProducto");

$r->addRoute("productos", "POST", "ApiController", "insertarProducto");
$r->addRoute("productos/:id", "PUT", "ApiController", "updateProducto");
$r->addRoute("comment","POST","ApiController", "sendComment");
$r->addRoute("comment","GET","ApiController", "getComment");

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 