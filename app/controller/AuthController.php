<?php
require_once 'app/view/AuthView.php';
require_once 'app/model/UserModel.php';

class AuthController{
    private $view;
    private $user;

    function __construct(){
        $this->user = new UserModel();
        $this->view = new AuthView();
    }

    function login(){
        $this->view->showLoginForm();
    }

    function authenticate(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->user->getUserByEmail($email);
        if(isset($user) && $password === $user->pass){
            session_start();
            $_SESSION['user'] = $user;
            header('Location: ' . BASE_URL . '/home');
        }else{
            $this->view->showLoginForm();
        }
    }

    function checkAdmin(){
        session_start();
        if(!isset($_SESSION['user']) || !($_SESSION['user']->admin)){
            header("Location: " . BASE_URL . "/");
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . '/');
    }

    // function authenticate(){
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    // }
}