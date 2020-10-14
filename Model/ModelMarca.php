<?php

Class ModelMarca{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_productos;charset=utf8', 'root', '');
    }
    
    function getMarcaDB(){
        $sentencia = $this->db->prepare("SELECT * FROM marca");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function agregarMarcaDB($nombre,$descripcion,$origen,$puntaje){
        $sentencia = $this->db->prepare("INSERT INTO marca(nombre, descripcion, origen, puntaje) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombre,$descripcion,$origen,$puntaje));
    }
    
    function borrarMarcaDB($id){
        $sentencia = $this->db->prepare("DELETE FROM marca WHERE id_marca=?");
        $sentencia->execute(array($id));
    }

    function editarMarcaDB($id,$nombre,$descripcion,$origen,$puntaje){
        $sentencia = $this->db->prepare("UPDATE marca SET nombre=?, descripcion=?, origen=?, puntaje=? WHERE id_marca=?");
        $sentencia->execute(array($nombre,$descripcion,$origen,$puntaje,$id));
    }

    function verificarUserBD($user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE username=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

}