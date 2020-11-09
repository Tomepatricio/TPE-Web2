<?php

Class ModelUser{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe_productos;charset=utf8', 'root', '');
    }

    function verificarUserBD($user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE username=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getUsersDB(){
        $sentencia= $this->db->prepare("SELECT * FROM user");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertarUserDB($username,$pass){
        $sentencia=$this->db->prepare('INSERT INTO user(username,password) VALUES(?,?)');
        $sentencia->execute(array($username,$pass));
    }
}