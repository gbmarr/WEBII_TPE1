<?php
require_once './libs/Smarty.class.php';
// métodos que muestran las vistas en html con php embebido

class ProductView{


    function Header(){
        $header = new Smarty();
        $header->display("../templates/header.tpl");
    }

    function Footer(){
        $footer = new Smarty();
        $footer->display("../templates/footer.tpl");
    }

    function ErrorPage(){
        $error = new Smarty();
        $error->display("../templates/error.tpl");
    }
    
    function verCards($Productos){
        $this->Header();
        if($Productos != null){
            $smarty = new Smarty();
            $smarty->assign("Productos", $Productos);
            $smarty->display("../templates/productcards.tpl");
        }else{
            $this->ErrorPage();
        }
        $this->Footer();
    }

    function verListado($Productos){
        $this->Header();
        if($Productos != null){
            $list = new Smarty();
            $list->assign("Productos", $Productos);
            $list->display("../templates/productlist.tpl");
        }else{
            $this->ErrorPage();
        }
        $this->Footer();
    }

    function verDetalle($Producto){
        $this->Header();
        if($Producto != null){
            $product = new Smarty();
            $product->assign("Producto", $Producto);
            $product->display("../templates/productdetail.tpl");
        }else{
            $this->ErrorPage();
        }
        $this->Footer();
    }

    function formularioProducto($Producto=null, $Categorias=null){
        $this->Header();
        if($Producto != null){
            $form = new Smarty();
            $form->assign("Producto", $Producto);
            $form->assign("Categorias", $Categorias);
            $form->display("../templates/productform.tpl");
        } elseif ($Producto == null){
            $form = new Smarty();
            $form->assign("Categorias", $Categorias);
            $form->assign("Producto", $Producto);
            $form->display("../templates/productform.tpl");
        }else{
            $this->ErrorPage();
        }
        $this->Footer();
    }
}