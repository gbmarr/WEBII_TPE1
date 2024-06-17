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
        break;
    case 'list':
        // muestra los productos en formato lista solo para usuarios admin
        break;
    case 'add':
        // muestra formulario para agregar nuevo producto
        break;
    case 'edit':
        // muestra formulario para editar  producto existente
        break;
    case 'detail':
        // muestra vista de un solo producto
        break;
    case 'delete':
        // elimina un producto existente
        break;
    case 'login':
        // muestra formulario de login para iniciar sesion
        break;
    default:
        // redirige a la pantalla home
        break;
}
