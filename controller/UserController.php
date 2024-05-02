<?php
require_once './view/UserView.php';
require_once './model/UserModel.php';
require_once './model/User.php';
require_once './BASE_URL.php';

class UserController{
    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
    }
    
    function loguearUsuario(){

    }

    function verPerfil($id){
        
    }
}