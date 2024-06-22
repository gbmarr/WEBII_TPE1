<?php
require_once 'Model.php';

class ProductModel extends Model {


    function getAllProducts(){
        $query = "SELECT * FROM `productos`";
        $products = $this->executeQuery($query);
        return $products->fetchAll(PDO::FETCH_OBJ);
    }

    function getProductByID($idProducto){
        $query = "SELECT * FROM `productos` WHERE `idProducto` = ?";
        $product = $this->executeQuery($query, [$idProducto]);
        return $product->fetch(PDO::FETCH_OBJ);
    }

    function addProduct($nombre, $descripcion, $idCategoria, $stock, $precio){
        $query = "INSERT INTO `productos` (`nombre`, `descripcion`, `idCategoria`, `stock`, `precio`) VALUES (?, ?, ?, ?, ?)";
        $this->executeQuery($query, [$nombre, $descripcion, $idCategoria, $stock, $precio]);
    }

    function updateProduct($idProducto, $nombre, $idCategoria, $stock, $precio){
        $query = "UPDATE `productos` SET `nombre` = ?, `descripcion` = ?, `idCategoria` = ?, `stock` = ?, `precio` = ? WHERE `idProducto` = ?";
        $this->executeQuery($query, [$nombre, $idCategoria, $stock, $precio, $idProducto]);
    }

    function deleteProduct($idProducto){
        $query = "DELETE FROM `productos` WHERE `idProducto` = ?";
        $this->executeQuery($query, [$idProducto]);
    }
}