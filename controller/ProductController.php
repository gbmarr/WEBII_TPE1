<?php
// métodos que serán llamados desde el router(+ configapp)
// llamado a la DB y recepción de los datos que retorne
// llamado a las vistas y envío por parámetros de los datos recibidos desde la DB
require_once './security/Security.php';
require_once './view/ProductView.php';
require_once './model/ProductModel.php';
require_once './model/Product.php';
require_once './BASE_URL.php';

class ProductController{

    private $view;
    private $model;
    private $security;

    function __construct(){
        $this->view = new ProductView();
        $this->model = new ProductModel();
        $this->security = new Security();
    }

    function mostrarHome(){
        $Productos = $this->model->getProducts();
        $this->view->verCards($Productos);
    }

    function mostrarLista(){
        $Productos = $this->model->getProducts();
        session_start();
        $session = $this->security->sessionExists($_SESSION["User"]);
        if($session != null){
            $this->view->verListado($Productos);
        }else{
            $this->view->verCards($Productos);
        }
    }

    // REVISAR
    // REVISAR
    // REVISAR
    // REVISAR
    function cargarFormularioProducto($id = null){
        $Categorias = $this->model->getCategorias();
        session_start();
        $session = $this->security->sessionExists($_SESSION["User"]);
        if($session != null){
            if($id){
                $Producto = $this->model->getProductByID($id);
                $this->view->formularioProducto($Producto, $Categorias);
            }else{
                $this->view->formularioProducto(null, $Categorias);
            }
        }else{
            header("Location", BASE_URL);
        }
    }

    function agregarProducto(){
        session_start();
        $session = $this->security->sessionExists($_SESSION["User"]);
        if($session != null){
            try {
                if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)){
                    $Producto = new Product();
                    $Producto->nombre = $_POST['name'];
                    $Producto->descripcion = $_POST['description'];
                    $Producto->precio = $_POST['price'];
                    $Producto->stock = $_POST['stock'];
                    $Producto->categoria = $_POST['category'];
                }
                $this->model->insertProduct($Producto);
                $Productos = $this->model->getProducts();
                $this->view->verCards($Productos);
            } catch (\Throwable $e) {
                echo "Error: " . $e;
            }
        }else{
            header("Location", BASE_URL);
        }
    }

    function editarProducto(){
        session_start();
        $session = $this->security->sessionExists($_SESSION["User"]);
        if($session != null){
            try {
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){
                    $Producto = new Product();
                    $Producto->idProducto = $_POST['idProduct'];
                    $Producto->nombre = $_POST['name'];
                    $Producto->descripcion = $_POST['description'];
                    $Producto->precio = $_POST['price'];
                    $Producto->stock = $_POST['stock'];
                    $Producto->categoria = $_POST['category'];
                }
                $this->model->updateProduct($Producto);
                $Productos = $this->model->getProducts();
                $this->view->verCards($Productos);
            } catch (\Throwable $e) {
                echo "Error: " . $e;
            }
        }else{
            header("Location", BASE_URL);
        }
    }

    function verProducto($id){
        $Producto = $this->model->getProductByID($id);
        $this->view->verDetalle($Producto);
    }

    function eliminarProducto($id){
        session_start();
        $session = $this->security->sessionExists($_SESSION["User"]);
        if($session != null){
            if(isset($id)){
                $this->model->deleteProduct($id);
            }
            $Productos = $this->model->getProducts();
            $this->view->verCards($Productos);
        }else{
            header("Location", BASE_URL);
        }
    }
}