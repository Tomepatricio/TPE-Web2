<?php

Class ModelComment {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_productos;charset=utf8', 'root', '');
    }

    function sendCommentDB($comment,$idProducto,$valoracion){
        $sentencia=$this->db->prepare("INSERT INTO comment(comentario,id_producto,valoracion)VALUES(?,?,?)");
        $sentencia->execute(array($comment,$idProducto,$valoracion));
    }

    function getCommentsDB(){
        $sentencia=$this->db->prepare("SELECT * FROM comment");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function deleteCommentDB($commentId){
        $sentencia=$this->db->prepare("DELETE FROM comment WHERE id=?");
        $sentencia->execute(array($commentId));
    }
}