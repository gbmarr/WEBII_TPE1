<?php
require_once './security/Security.php';
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
    private $security;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
        $this->productmodel = new ProductModel();
        $this->productview = new ProductView();
        $this->security = new Security();
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
        session_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){
            $User = new User();
            $User->email = $_POST['email'];
            $User->password = password_hash($_POST['password'], PASSWORD_ARGON2I);

            $Logueado = $this->model->getUser(null, $User->email);
            
            if($this->security->PassVerify($User->password, $Logueado->password)) {
                $_SESSION["User"] = $User->email;
                // header("Location", BASE_URL);
                $Productos = $this->productmodel->getProducts();
                $this->productview->verListado($Productos, $Logueado->idUsuario);
            }else{
                echo "acá quedó (x-x)";
                header("Location", BASE_URL."/login");
            }
        }
    }
}