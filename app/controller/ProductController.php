<?php
require_once './app/view/ProductView.php';
require_once './app/model/ProductModel.php';

class ProductController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new ProductView();
        $this->model = new ProductModel();
    }


    function viewAllProducts(){
        $products = $this->model->getAllProducts();
        $this->view->showAllProducts($products = null);
    }

    function viewAllProductsAdmin(){

    }
    
    function detailProduct($id){

    }

    function createProduct(){

    }

    function storeProduct(){

    }

    function editProduct($id){

    }

    function updateProduct(){

    }

    function deleteProduct($id){

    }

    function errorProduct(){
        
    }
}