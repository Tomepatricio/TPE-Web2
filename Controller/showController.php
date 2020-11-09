<?php

require_once './View/View.php';
require_once './Model/ModelProducto.php';
require_once './Model/ModelMarca.php';
require_once 'UserController.php';


Class showController {//cambiar nombre al controller

    private $view;
    private $modelProducto;
    private $modelMarca;
    private $user;

    function __construct(){
        $this->view=new View();
        $this->modelProducto=new ModelProducto();
        $this->modelMarca=new ModelMarca();
        $this->user=new UserController();
    }

    function goHome(){
        $userlog=$this->user->checkLog();
        $this->view->renderHome($userlog);
    }

    function showProductos($params){
        $userlog=$this->user->checkLog();
        if (isset($params[':id'])) {
            $marcaSelec=$params[':id'];
        }else {
            $marcaSelec=null;
        }
        $productos=$this->modelProducto->getProductosDB();
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->renderProductos($productos,$marcas,$marcaSelec,$userlog);
    }

    function showDescripcionProducto($params){
        $userlog=$this->user->checkLog();
        $productos=$this->modelProducto->getProductosDB();
        $producto=$params[':id'];
        foreach ($productos as $prod) {
            if ($prod->id==$producto){
                $producto=$prod;
            }
        }
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->renderDescripcionProducto($producto,$marcas,$userlog);
    }

    function showServicios(){
        $userlog=$this->user->checkLog();
        $this->view->renderServicios($userlog);
    }

    function showMarcas(){
        $userlog=$this->user->checkLog();
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->renderMarcas($marcas,$userlog);
    }

    function showGaleria(){
        $userlog=$this->user->checkLog();
        $this->view->renderGaleria($userlog);
    }

    function showRegistro(){
        $userlog=$this->user->checkLog();
        $users=$this->user->getUsers();
        $this->view->renderUsers($users,$userlog);
    }

}