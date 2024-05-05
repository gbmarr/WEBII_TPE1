<?php
require_once 'templates/HTMLTemplates.php';

class UserView{

    function verPerfil($User){
        if($User){
            HTMLprofile($User);
        }else{
            HTMLerrorPage();
        }
    }

    function loguearPerfil(){
        HTMLformLogin();
    }

}