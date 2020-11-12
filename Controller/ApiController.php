<?php

require_once './Model/ModelProducto.php';
require_once './View/APIView.php';
require_once 'ApiAbstractController.php';

Class ApiController extends ApiAbstractController {

    function __construct() {
        parent::__construct();
        $this->model= new ModelProducto();
        $this->view = new APIView();
    }

    function getProductos($params=null){
        $productos=$this->model->getProductosDB();
        $this->view->productosJSON($productos);
    }

    function getProductosById($params){
        $id=$params[':id'];
        $producto=$this->model->getProductoByIdDB($id);

        if($producto)
            $this->view->productosJSON($producto);
        else
            $this->view->productosJSON("No se encontro el producto con el id: $id");
    }

    function deleteProducto($params){
        $id=$params[':id'];
        $check=$this->checkExist($id);
        if($check){
            $producto=$this->model->borrarProductoDB($id);
            $this->view->productosJSON("borrado");
        }else
            $this->view->productosJSON("No se encontro el producto con el id: $id");
    }

    function insertarProducto(){
        $body=$this->getData();
        if(!empty($body)){
            $this->model->agregarProductoDB($body->nombre,$body->detalle,$body->presentacion,$body->precio,$body->id_marca);
            $this->view->productosJSON($body);
        }else
        $this->view->productosJSON("Error al agregar el ultimo elemento");
    }

    function updateProducto($params){
        $id=$params[':id'];
        $check=$this->checkExist($id);
        if($check){
            $body=$this->getData();
            $this->model->editarProductosDB($id,$body->nombre,$body->detalle,$body->presentacion,$body->precio,$body->id_marca);
            $this->view->productosJSON($body);
        }else{
            $this->view->productosJSON("No se encontro el producto con el id: $id");
        }
    }

    function checkExist($id){
        $productos=$this->model->getProductosDB();
        foreach ($productos as $producto) {
            if($producto->id==$id)
                return true;
        }
        return false;
    }
}