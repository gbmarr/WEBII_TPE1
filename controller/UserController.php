<?php
//require_once './security/Security.php';
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
        session_start();
        $session = $this->security->sessionExists($_SESSION["User"]);
        if($session != null){
            if($id != null){
                $User = $this->model->getUser($id, null);
                $this->view->verPerfil($User);
            }else{
                header("Location", BASE_URL);
            }
        }
    }

    /*function iniciarSesion(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){
            $User = new User();
            $User->email = $_POST['email'];
            $User->password = $_POST['password'];
            
            $Logueado = $this->model->getUser(null, $User->email);
            
            $existe = $this->security->PassVerify($User->password, $Logueado->password);
            
            if($existe) {
                session_start();
                $_SESSION["User"] = $User->email;
                $Productos = $this->productmodel->getProducts();
                $this->productview->verCards($Productos);
            }else{
                header("Location", BASE_URL."/login");
            }
        }
    }*/

    function iniciarSesion(){
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    
            $email = $_POST['email'];
            $password = $_POST['password'];
            $Logueado = $this->model->getUser(null, $email);
            
            
            if ($Logueado) {
                $userModel = new UserModel();
                $userModel->updatePassword($email, $password); 
                echo "Usuario encontrado: " . $Logueado->email . "<br>";
                echo "Hash en la base de datos: " . $Logueado->password . "<br>";
                echo "Contraseña ingresada: " . $password . "<br>";
                $hashedPassword = $Logueado->password;
                
                if (password_verify($password, $hashedPassword)) {
                    echo "entra";    
                    $_SESSION["User"] = $Logueado->email;
                    $_SESSION['user_id'] = $Logueado->idUsuario;
                    $_SESSION['user_admin'] = $Logueado->admin;
    
                    $Productos = $this->productmodel->getProducts();
                    $this->productview->verListado($Productos, $Logueado->idUsuario);
                } else {
                    echo "Contraseña incorrecta";
                    $this->view->mostrarError("Usuario o contraseña incorrectos");
                }
            } else {
                echo "Usuario no encontrado";
                $this->view->mostrarError("Usuario o contraseña incorrectos");
            }
        } else {
            $this->view->mostrarError("Falta el correo electrónico o la contraseña");
        }
    }
}