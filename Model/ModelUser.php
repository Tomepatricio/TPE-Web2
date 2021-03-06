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

    function getUserByUsernameDB($username){
        $sentencia= $this->db->prepare("SELECT * FROM user WHERE username=?");
        $sentencia->execute(array($username));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function insertarUserDB($username,$pass){
        $sentencia=$this->db->prepare('INSERT INTO user(username,password) VALUES(?,?)');
        $sentencia->execute(array($username,$pass));
    }

    function setAdminDB($username,$admin){
        $sentencia=$this->db->prepare('UPDATE user SET admin=? WHERE username=?');
        $sentencia->execute(array($admin,$username));
    }

    function deleteUserDB($username){
        $sentencia=$this->db->prepare('DELETE FROM user WHERE username=?');
        $sentencia->execute(array($username));
    }
}