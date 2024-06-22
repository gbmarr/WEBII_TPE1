<?php
require_once 'View.php';

class ProductView extends View{

    function showAllProducts($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('products/productCards.tpl');
    }

    function showProductDetail($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('products/productDetail.tpl');
    }

    function showProductForm($product = null, $categories = []){
        $this->smarty->assign('product', $product ? $product : null);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('products/productForm.tpl');
    }
}