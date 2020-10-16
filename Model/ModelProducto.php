<?php

Class ModelProducto{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_productos;charset=utf8', 'root', '');
    }

    function getProductosDB(){
        $sentencia = $this->db->prepare("SELECT producto.id, producto.nombre, producto.detalle, producto.presentacion, producto.precio, producto.id_marca, marca.nombreMarca FROM producto INNER JOIN marca ON producto.id_marca=marca.id_marca");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function agregarProductoDB($nombre,$detalle,$presentacion,$precio,$id_marca){
        $sentencia = $this->db->prepare("INSERT INTO producto(nombre, detalle, presentacion, precio, id_marca) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre,$detalle,$presentacion,$precio,$id_marca));
    }
    
    function borrarProductoDB($id){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id=?");
        $sentencia->execute(array($id));
    }

    function editarProductosDB($id,$nombre,$detalle,$presentacion,$precio,$id_marca){
        $sentencia = $this->db->prepare("UPDATE producto SET nombre=?, detalle=?, presentacion=?, precio=?, id_marca=? WHERE id=?");
        $sentencia->execute(array($nombre,$detalle,$presentacion,$precio,$id_marca,$id));
    }

}