<?php
require_once './libs/Smarty.class.php';

class UserView{

    function Header(){
        $header = new Smarty();
        $header->display("../templates/header.tpl");
    }

    function Footer(){
        $footer = new Smarty();
        $footer->display("../templates/footer.tpl");
    }

    function verPerfil($User){
        session_start();
        $this->Header();
        if(isset($_SESSION["User"]) && $User){
            $perfil = new Smarty();
            $perfil->assign("User", $User);
            $perfil->display("../templates/profile.tpl");
        }else{
            $error = new Smarty();
            $error->display("../templates/loginform.tpl");
        }
        $this->Footer();
    }

    function loguearPerfil(){
        $this->Header();
        $login = new Smarty();
        $login->display("../templates/loginform.tpl");
        $this->Footer();
    }

}