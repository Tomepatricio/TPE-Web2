<?php

Class ModelComment {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_productos;charset=utf8', 'root', '');
    }

    function sendCommentDB($comment,$idProducto){
        $sentencia=$this->db->prepare("INSERT INTO comment(comentario,id_producto)VALUES(?,?)");
        $sentencia->execute(array($comment,$idProducto));
    }

    function getCommentsDB(){
        $sentencia=$this->db->prepare("SELECT * FROM comment");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}