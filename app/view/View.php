<?php
require_once './libs/Smarty.class.php';
require_once './BASE_URL.php';

class View{
    protected $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        // $this->smarty->assign('base', BASE_URL);
        $this->smarty->setTemplateDir('templates/');
    }
}