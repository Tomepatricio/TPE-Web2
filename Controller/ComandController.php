 <?php

require_once 'Controller.php';

Class ComandController {

    private $view;
    private $model;
    private $user;

    function __construct(){
        $this->view=new View();
        $this->model=new Model();
        $this->user=new UserController();
    }

 function borrarProducto($params){
        $delete=$params[':id'];
        $this->model->borrarProductoDB($delete);
        $productos=$this->model->getProductosDB();
        $this->view->showProductosLocation();
    }

    function insertarProducto(){
        $this->model->agregarProductoDB($_POST['nombreProducto'],$_POST['detalleProducto'],$_POST['presentacionProducto'],$_POST['precioProducto'],$_POST['marcaProducto']);
        $productos=$this->model->getProductosDB();
        $this->view->showProductosLocation();
    }

    function insertarMarca(){
        $this->model->agregarMarcaDB($_POST['nombreMarca'],$_POST['descripcionMarca'],$_POST['origenMarca'],$_POST['puntajeMarca']);
        $marcas=$this->model->getMarcaDB();
        $this->view->showMarcasLocation();
    }

    function borrarMarca($params){
        $delete=$params[':id'];
        $this->model->borrarMarcaDB($delete);
        $marcas=$this->model->getMarcaDB();
        $this->view->showMarcasLocation();
    }

    function editarMarca($params){
        $userlog=$this->user->checkLog();
        $marcas=$this->model->getMarcaDB();
        $marca=$params[':id'];
        foreach ($marcas as $marc) {
            if($marc->id_marca==$marca){
                $marca=$marc;
            }
        }
        $this->view->renderEditarMarca($marca,$marcas,$userlog);
    }

    function editarYGuardarMarcas(){
        $this->model->editarMarcaDB($_POST['idMarca'],$_POST['nombreMarca'],$_POST['descripcionMarca'],$_POST['origenMarca'],$_POST['puntajeMarca']);
        $marcas=$this->model->getMarcaDB();
        $this->view->showMarcasLocation();
    }
    
    function editarYGuardarProductos(){//Guarda en Base en datos
        $this->model->editarProductosDB($_POST['idProducto'],$_POST['nombreProducto'],$_POST['detalleProducto'],$_POST['presentacionProducto'],$_POST['precioProducto'],$_POST['marcaProducto']);
        $productos=$this->model->getProductosDB();
        $this->view->showProductosLocation();
    }

    function editarProductos($params){
        $userlog=$this->user->checkLog();
        $productos=$this->model->getProductosDB();
        $producto=$params[':id'];
        foreach ($productos as $prod) {
            if($prod->id==$producto){
                $producto=$prod;
            }
        }
        $marcas=$this->model->getMarcaDB();
        $this->view->renderEditar($producto,$marcas,$userlog);
    }

}