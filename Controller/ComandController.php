 <?php

require_once 'Controller.php';

Class ComandController {

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

 function borrarProducto($params){
        $delete=$params[':id'];
        $this->modelProducto->borrarProductoDB($delete);
        $productos=$this->modelProducto->getProductosDB();
        $this->view->showProductosLocation();
    }

    function insertarProducto(){
        $this->modelProducto->agregarProductoDB($_POST['nombreProducto'],$_POST['detalleProducto'],$_POST['presentacionProducto'],$_POST['precioProducto'],$_POST['marcaProducto']);
        $productos=$this->modelProducto->getProductosDB();
        $this->view->showProductosLocation();
    }

    function insertarMarca(){
        $this->modelMarca->agregarMarcaDB($_POST['nombreMarca'],$_POST['descripcionMarca'],$_POST['origenMarca'],$_POST['puntajeMarca']);
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->showMarcasLocation();
    }

    function borrarMarca($params){
        $delete=$params[':id'];
        $this->modelMarca->borrarMarcaDB($delete);
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->showMarcasLocation();
    }

    function editarMarca($params){
        $userlog=$this->user->checkLog();
        $marcas=$this->modelMarca->getMarcaDB();
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
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->showMarcasLocation();
    }
    
    function editarYGuardarProductos(){//Guarda en Base en datos
        $this->model->editarProductosDB($_POST['idProducto'],$_POST['nombreProducto'],$_POST['detalleProducto'],$_POST['presentacionProducto'],$_POST['precioProducto'],$_POST['marcaProducto']);
        $productos=$this->modelProducto->getProductosDB();
        $this->view->showProductosLocation();
    }

    function editarProductos($params){
        $userlog=$this->user->checkLog();
        $productos=$this->modelProducto->getProductosDB();
        $producto=$params[':id'];
        foreach ($productos as $prod) {
            if($prod->id==$producto){
                $producto=$prod;
            }
        }
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->renderEditar($producto,$marcas,$userlog);
    }

}