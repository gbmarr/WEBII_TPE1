<?php
require_once './view/UserView.php';
require_once './view/ProductView.php';
require_once './model/ProductModel.php';
require_once './model/UserModel.php';
require_once './model/User.php';
require_once './BASE_URL.php';

class UserController{
    private $view;
    private $productview;
    private $productmodel;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
        $this->productmodel = new ProductModel();
        $this->productview = new ProductView();
    }
    
    function cargarFormUsuario(){
        $this->view->loguearPerfil();
    }

    function verPerfil($id = null){
        if($id != null){
            $User = $this->model->getUser($id, null);
            $this->view->verPerfil($User);
        }else{
            $this->cargarFormUsuario();
        }
    }

    function iniciarSesion(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){
            $User = new User();
            $User->email = $_POST['email'];
            $User->password = $_POST['password'];
            $Logueado = $this->model->getUser(null, $User->email);
            if($Logueado){
                $Productos = $this->productmodel->getProducts();
                $this->productview->verListado($Productos, $Logueado->idUsuario);
            }
        }
    }
}