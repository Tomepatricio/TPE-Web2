<?php

require_once './libs/smarty/Smarty.class.php';

Class View{

    private $titulo;

    function __construct(){
      $this->titulo="Garage Detail";
    }

    function renderHome($user=null,$message=""){
        $smarty=new Smarty();

        $smarty->assign('titulo',$this->titulo);
        $smarty->assign('message',$message);
        $smarty->assign('user',$user);

        $smarty->display('templates/home.tpl');
    }

    function renderServicios($user=null,$message=""){
      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);

      $smarty->display('templates/servicios.tpl');
    }

    function renderProductos($productos,$marcas,$idMarcaSelec,$user=null,$message=""){

      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('productos', $productos);
      $smarty->assign('filtro', $idMarcaSelec);
      $smarty->assign('marcas',$marcas);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);

      $smarty->display('templates/productos.tpl');
    }

    function renderDescripcionProducto($producto,$marcas,$user=null,$message=""){

      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('producto', $producto);
      $smarty->assign('marcas', $marcas);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);

      $smarty->display('templates/descripcionProducto.tpl');
    }

    function renderEditar($id,$marcas,$user=null,$message=""){
      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('producto', $id);
      $smarty->assign('marcas', $marcas);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);

      $smarty->display('templates/editProducto.tpl');
    }

    function renderEditarMarca($id,$marcas,$user=null,$message=""){
      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('idMarca', $id);
      $smarty->assign('marcas', $marcas);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);

      $smarty->display('templates/editMarca.tpl');
    }

    function renderMarcas($marcas,$user=null,$message=""){
      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('marcas',$marcas);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);

      $smarty->display('templates/marcas.tpl');
    }

    function renderGaleria($user=null,$message=""){
      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);

      $smarty->display('templates/galeria.tpl');
    }

    function renderUsers($users=null,$user=null,$message=""){
      $smarty=new Smarty();

      $smarty->assign('titulo',$this->titulo);
      $smarty->assign('message',$message);
      $smarty->assign('user',$user);
      $smarty->assign('users',$users);

      $smarty->display('templates/registro.tpl');
  }

    function ShowProductosLocation(){
      header("Location: ".BASE_URL."productos");
    }

    function ShowMarcasLocation(){
      header("Location: ".BASE_URL."marcas");
    }

    function ShowRegistroLocation(){
      header("Location: ".BASE_URL."registro");
    }
}