<?php

require_once 'RouterClass.php';
require_once './Controller/ApiController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();

$r->addRoute("productos", "GET", "ApiController", "getProductos");
$r->addRoute("productos/:id", "GET", "ApiController", "getProductosById");
$r->addRoute("productos/:id", "DELETE", "ApiController", "deleteProducto");

$r->addRoute("productos", "POST", "ApiController", "insertarProducto");
$r->addRoute("productos/:id", "PUT", "ApiController", "updateProducto");

$r->addRoute("productos", "POST", "ApiController", "insertarProducto");
$r->addRoute("productos/:id", "PUT", "ApiController", "updateProducto");

$r->addRoute("comment","POST","ApiController", "sendComment");
$r->addRoute("comment","GET","ApiController", "getComment");
$r->addRoute("comment/:id", "DELETE", "ApiController", "deleteComment");

$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);