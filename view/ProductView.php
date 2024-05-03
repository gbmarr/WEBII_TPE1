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

    function verListado($Productos){
        if($Productos != null){
            HTMLlistProduct($Productos);
        }else{
            HTMLerrorPage();
        }
    }

    function verDetalle($Producto){
        if($Producto != null){
            HTMLdetailProduct($Producto);
        }else{
            HTMLerrorPage();
        }
    }

    function formularioProducto($Producto, $Categorias){
        if($Producto != null){
            HTMLformProduct($Producto, $Categorias);
        }else{
            HTMLformProduct(null, $Categorias);
        }
    }
}