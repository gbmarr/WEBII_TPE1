<?php
require_once './app/view/ProductView.php';
require_once './app/model/ProductModel.php';
require_once './app/model/CategoryModel.php';
require_once './app/controller/AuthController.php';

class ProductController extends AuthController{

    private $view;
    private $productModel;
    private $categoryModel;

    function __construct(){
        $this->view = new ProductView();
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }


    function viewAllProducts(){
        $products = $this->productModel->getAllProducts();
        $this->view->showAllProducts($products);
    }

    function viewAllProductsAdmin(){
        $this->checkAdmin();
        $products = $this->productModel->getAllProducts();
        $this->view->showAllProductsAdmin($products);
    }
    
    function detailProduct($id){
        $product = $this->productModel->getProductByID($id);
        $this->view->showProductDetail($product);
    }

    function createProduct(){
        $this->checkAdmin();
        $categories = $this->categoryModel->getAllCategories();
        $this->view->showProductForm(null, $categories);
    }

    function storeProduct(){
        $this->checkAdmin();
        $name = $_POST['name'];
        $description = $_POST['description'];
        $idCategory = $_POST['idcategory'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $this->productModel->addProduct($name, $description, $idCategory, $stock, $price);
        header('Location: ' . BASE_URL . '/');
    }

    function editProduct($id){
        $this->checkAdmin();
        $product = $this->productModel->getProductByID($id);
        $categories = $this->categoryModel->getAllCategories();
        $this->view->showProductForm($product, $categories);
    }

    function updateProduct($id){
        $this->checkAdmin();
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $idCategory = $_POST['idCategory'];
        $stock = $_POST['stock'];
        $this->productModel->updateProduct($id, $name, $description, $idCategory, $price, $stock);
        header('Location: ' . BASE_URL . '');
    }

    function deleteProduct($id){
        $this->checkAdmin();
        $this->productModel->deleteProduct($id);
        header('Location: ' . BASE_URL . '');
    }

    function errorProduct(){
        // agregar logica para muestra de error
    }
}