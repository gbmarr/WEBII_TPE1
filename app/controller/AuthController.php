<?php
require_once 'app/view/AuthView.php';

class AuthController{
    private $view;

    function __construct(){
        $this->view = new AuthView();
    }

    function login(){
        $this->view->showLoginForm();
    }

    function logout(){
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . '');
    }

    // function authenticate(){
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    // }
}