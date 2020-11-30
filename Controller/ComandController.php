 <?php

require_once 'showController.php';

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
    $userlog=$this->user->checkLog();
    if ($userlog!=false) {
        $delete=$params[':id'];
        $this->modelProducto->borrarProductoDB($delete);
        $productos=$this->modelProducto->getProductosDB();
    }
    $this->view->showProductosLocation();
    }

    function insertarProducto(){
        $userlog=$this->user->checkLog();
        if ($userlog!=false) {
            if($_FILES['imgProducto']['type'] == "image/jpg" || $_FILES['imgProducto']['type'] == "image/jpeg" || $_FILES['imgProducto']['type'] == "image/png"){
                $prod=$this->modelProducto->agregarProductoDB($_POST['nombreProducto'],$_POST['detalleProducto'],$_POST['presentacionProducto'],$_POST['precioProducto'],$_POST['marcaProducto'],$_FILES['imgProducto']['tmp_name']);
                $filePath = "images/" . uniqid("", true) . "." 
                . strtolower(pathinfo($_FILES['imgProducto']['name'], PATHINFO_EXTENSION));

                move_uploaded_file($_FILES["imgProducto"]["tmp_name"],$filePath);
                
                ar_dump($prod);
                // var_dump($_FILES["imgProducto"]["tmp_name"]);
                // var_dump($_FILES["imgProducto"]["name"]);
                // var_dump($filePath);
                die();
            }
            else
                $this->modelProducto->agregarProductoDB($_POST['nombreProducto'],$_POST['detalleProducto'],$_POST['presentacionProducto'],$_POST['precioProducto'],$_POST['marcaProducto']);
            $productos=$this->modelProducto->getProductosDB();
        }
        $this->view->showProductosLocation();
    }

    function insertarMarca(){
        $userlog=$this->user->checkLog();
        if ($userlog!=false) {
            $this->modelMarca->agregarMarcaDB($_POST['nombreMarca'],$_POST['descripcionMarca'],$_POST['origenMarca'],$_POST['puntajeMarca']);
        }
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->showMarcasLocation();
    }

    function borrarMarca($params){
        $userlog=$this->user->checkLog();
        if ($userlog!=false) {
            $delete=$params[':id'];
            $this->modelMarca->borrarMarcaDB($delete);
        }
        $marcas=$this->modelMarca->getMarcaDB();
        $this->view->showMarcasLocation();
    }

    function editarMarca($params){
        $userlog=$this->user->checkLog();
        if ($userlog!=false) {
            $marcas=$this->modelMarca->getMarcaDB();
            $marca=$params[':id'];
            foreach ($marcas as $marc) {
                if($marc->id_marca==$marca){
                    $marca=$marc;
                }
            }
            $this->view->renderEditarMarca($marca,$marcas,$userlog);
        }else{
            $this->view->renderHome();
        }
    }

    function editarYGuardarMarcas(){
        $userlog=$this->user->checkLog();
        if ($userlog != false){
            $this->modelMarca->editarMarcaDB($_POST['idMarca'],$_POST['nombreMarca'],$_POST['descripcionMarca'],$_POST['origenMarca'],$_POST['puntajeMarca']);
            $marcas=$this->modelMarca->getMarcaDB();
        }
        $this->view->showMarcasLocation();
    }
    
    function editarYGuardarProductos(){//Guarda en Base en datos
        $userlog=$this->user->checkLog();
        if ($userlog!=false) {
            $this->modelProducto->editarProductosDB($_POST['idProducto'],$_POST['nombreProducto'],$_POST['detalleProducto'],$_POST['presentacionProducto'],$_POST['precioProducto'],$_POST['marcaProducto']);
            $productos=$this->modelProducto->getProductosDB();
        }
        $this->view->showProductosLocation();
    }

    function editarProductos($params){
        $userlog=$this->user->checkLog();
        if ($userlog!=false) {
            $productos=$this->modelProducto->getProductosDB();
            $producto=$params[':id'];
            foreach ($productos as $prod) {
                if($prod->id==$producto){
                    $producto=$prod;
                }
            }
            $marcas=$this->modelMarca->getMarcaDB();
            $this->view->renderEditar($producto,$marcas,$userlog);
        }else{
            $this->view->renderHome();
        }
    }

}