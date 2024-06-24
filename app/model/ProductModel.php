<?php
require_once 'Model.php';

class ProductModel extends Model {


    function getAllProducts(){
        $query = "SELECT * FROM `products`";
        $products = $this->executeQuery($query);
        return $products->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProductByID($idProducto){
        $query = "SELECT * FROM `products` WHERE `idProducto` = ?";
        $product = $this->executeQuery($query, [$idProducto]);
        return $product->fetch(PDO::FETCH_OBJ);
    }

    function addProduct($nombre, $descripcion, $idCategoria, $precio, $stock){
        $query = "INSERT INTO `products` (`nombre`, `descripcion`, `idCategoria`, `precio`, `stock`) VALUES (?, ?, ?, ?, ?)";
        $this->executeQuery($query, [$nombre, $descripcion, $idCategoria, $precio, $stock]);
    }

    function updateProduct($idProducto, $nombre, $descripcion, $idCategoria, $precio, $stock){
        $query = "UPDATE `products` SET `nombre` = ?, `descripcion` = ?, `idCategoria` = ?, `precio` = ?, `stock` = ?, `stock` = ? WHERE `idProducto` = ?";
        $this->executeQuery($query, [$nombre, $descripcion, $idCategoria, $precio, $stock, $idProducto]);
    }

    function deleteProduct($idProducto){
        $query = "DELETE FROM `products` WHERE `idProducto` = ?";
        $this->executeQuery($query, [$idProducto]);
    }
}