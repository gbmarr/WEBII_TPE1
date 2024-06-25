<?php

require_once 'app/controller/ProductController.php';
require_once 'app/controller/CategoryController.php';
require_once 'app/controller/AuthController.php';
require_once 'BASE_URL.php';

$categoryController = new CategoryController();
$authController = new AuthController();
$productController = new ProductController();

$action = empty($_GET['action']) ? '' : $_GET['action'];
$param = explode('/', $action);

switch ($param[0]) {
    case '':
    case 'home':
        // muestra el home con los productos en formato cards
        $productController->viewAllProducts();
        break;
    case 'list':
        // muestra los productos en formato lista solo para usuarios admin
        $productController->viewAllProductsAdmin();
        break;
    case 'add':
        // muestra formulario para agregar nuevo producto
        $productController->createProduct();
        break;
    case 'store':
        // almacena el nuevo producto
        $productController->storeProduct();
        break;
    case 'edit':
        // muestra formulario para editar  producto existente
        $id = isset($param[1]) ? $param[1] : 0;
        isset($id) ? $productController->editProduct($id) : $productController->createProduct();
        break;
    case 'update':
        // actualiza el producto
        $id = isset($param[1]) ? $param[1] : 0;
        isset($id) ? $productController->updateProduct($id) : $productController->viewAllProducts();
        break;
    case 'detail':
        // muestra vista de un solo producto
        isset($param[1]) ? $productController->detailProduct($param[1]) : $productController->errorProduct();
        break;
    case 'delete':
        // elimina un producto existente
        isset($param[1]) ? $productController->deleteProduct($param[1]) : $productController->errorProduct();
        break;
    case 'login':
        // muestra formulario de login para iniciar sesion
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'auth':
        $authController->authenticate();
        break;
    case 'category':
        if (isset($param[1])){
            switch($param[1]){
                case 'add':
                    $categoryController->createCategory();
                    break;
                case 'store':
                    $categoryController->storeCategory();
                    break;
                case 'edit':
                    isset($param[2]) ? $categoryController->editCategory($param[2]) : $categoryController->errorCategory();
                    break;
                case 'updatecat':
                    isset($param[2]) ? $categoryController->updateCategory($param[2]) : $categoryController->errorCategory();
                    break;
                case 'delete':
                    isset($param[2]) ? $categoryController->deleteCategory($param[2]) : $categoryController->errorCategory();
                    break;
                default:
                $categoryController->viewAllCategories();
                break;
            }
        }else{
            $categoryController->viewAllCategories();
        }
        break;
    default:
        // redirige a la pantalla home
        $productController->viewAllProducts();
        break;
}
