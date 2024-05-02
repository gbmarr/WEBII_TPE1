<?php
require_once 'templates/HTMLTemplates.php';
// métodos que muestran las vistas en html con php embebido

class ProductView{
    
    function verCards($Productos){
        if($Productos != null){
            HTMLcardList($Productos);
        }else{
            HTMLerrorPage();
        }
    }
}