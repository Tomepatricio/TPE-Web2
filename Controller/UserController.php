<?php

Class UserController {

    private $view;
    private $model;

    function __construct(){
        $this->view=new View();
        $this->model=new Model();
    }

    function loginUser(){
        $user=$_POST['user'];
        $pass=$_POST['password'];
        if (isset($user)) {
            $userDB=$this->model->verificarUserBD($user);
            if (isset($userDB)&& $userDB) {
                if (password_verify($pass,$userDB->password)) {
                    session_start();
                    $_SESSION['name']=$userDB->username;
                    $_SESSION['LAST_ACTIVITY']=time();
                    $this->view->renderHome($userDB->username,"Correcto");//pasar el usuario
                }
                else{
                    $this->view->renderHome(null,"Contraseña Incorrecta");    
                }
            }else{
                $this->view->renderHome(null,"Usuario Incorrecto");
            }
        }
    }

    function checkLog(){
        session_start();
        if (!isset($_SESSION['name'])) {
           session_destroy();
           return null;
        }else{
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000)) {
                $this->logout();
            }
            $_SESSION['LAST_ACTIVITY'] = time();
        }
        return $_SESSION['name'];
    }

    function logout(){
        if(!isset($_SESSION['name'])){
            session_start();
        };
        session_destroy();
        $this->view->renderHome();
    }

    function showMarcas(){
        $this->checkLog();
        $marcas=$this->model->getMarcaDB();
        $this->view->renderMarcas($marcas);
    }
}