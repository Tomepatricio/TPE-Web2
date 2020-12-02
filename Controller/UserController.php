<?php

require_once './Model/ModelUser.php';

Class UserController {

    private $view;
    private $modelUser;

    function __construct(){
        $this->view=new View();
        $this->modelUser=new ModelUser();
    }

    function loginUser(){
        $user=$_POST['username'];
        $pass=$_POST['password'];
        if (isset($user)) {
            $userDB=$this->modelUser->verificarUserBD($user);
            if (isset($userDB)&& $userDB) {
                if (password_verify($pass,$userDB->password)) {
                    session_start();
                    $_SESSION['name']=$userDB->username;
                    $_SESSION['LAST_ACTIVITY']=time();
                    $this->view->renderHome($userDB,"Correcto");//pasar el usuario
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
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 500)) {
                $this->logout();
            }
            $_SESSION['LAST_ACTIVITY'] = time();
        }
        $user=$_SESSION['name'];
        $userDB=$this->modelUser->verificarUserBD($user);
        return $userDB;
    }

    function logout(){
        if(!isset($_SESSION['name'])){
            session_start();
        };
        session_destroy();
        $this->view->renderHome();
    }

    function getUsers(){
        $users=$this->modelUser->getUsersDB();
        return $users;
    }

    function insertarUser(){
        $username=$_POST['user'];
        $pass=$_POST['password'];
        if (isset($username)&&!empty($username)) {
            if (isset($pass)&&!empty($pass)) {
                $encriptedPass=password_hash($pass, PASSWORD_DEFAULT);
                $this->modelUser->insertarUserDB($username,$encriptedPass);
                $this->view->renderUsers(null,null,"Su registro se completo Correctamente");
            }else{
                $this->view->renderUsers(null,null,"Ingrese contraseña");
            }
        }else{
            $this->view->renderUsers(null,null,"Ingrese Usuario");
        }
<<<<<<< HEAD
=======
    }

    function updateUser($params){
        $username=$params[':username'];
        $user=$this->modelUser->getUserByUsernameDB ($username);
        $admin=!$user->admin;
        if($user!=null){
            $this->modelUser->setAdminDB($username,$admin);
        }
        $this->view->showRegistroLocation();
    }

    function deleteUser($params){
        $username=$params[':username'];
        $this->modelUser->deleteUserDB($username);
        $this->view->showRegistroLocation();
>>>>>>> develop
    }

    func
}