<?php
// métodos que serán llamados desde el router(+ configapp)
// llamado a la DB y recepción de los datos que retorne
// llamado a las vistas y envío por parámetros de los datos recibidos desde la DB
require_once './view/ProductView.php';
require_once './model/ProductModel.php';
require_once './model/Product.php';
require_once './BASE_URL.php';

class ProductController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new ProductView();
        $this->model = new ProductModel();
    }

    function mostrarHome(){
        $Productos = $this->model->getProducts();
        $this->view->verCards($Productos);
    }

    function mostrarLista(){
        $Productos = $this->model->getProducts();
        $this->view->verListado($Productos);
    }

    function agregarProducto(){

    }

    function editarProducto($id){

    }

    function verProducto($id){
        $Producto = $this->model->getProductByID($id);
        $this->view->verDetalle($Producto);
    }

    function eliminarProducto($id){

    }
}