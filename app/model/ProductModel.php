<?php
require_once 'Model.php';

class ProductModel extends Model {


    function getAllProducts(){
        $query = "SELECT * FROM `products`";
        $products = $this->executeQuery($query);
        return $products->fetchAll(PDO::FETCH_OBJ);
    }

    function getProductByID($idproduct){
        $query = "SELECT * FROM `products` WHERE `idproduct` = ?";
        $product = $this->executeQuery($query, [$idproduct]);
        return $product->fetch(PDO::FETCH_OBJ);
    }

    function addProduct($name, $description, $idcategory, $price, $stock){
        $query = "INSERT INTO `products` (`name`, `description`, `idcategory`, `price`, `stock`) VALUES (?, ?, ?, ?, ?)";
        $this->executeQuery($query, [$name, $description, $idcategory, $price, $stock]);
    }

    function updateProduct($idproduct, $name, $description, $idcategory, $price, $stock){
        $query = "UPDATE `products` SET `name` = ?, `description` = ?, `idcategory` = ?, `price` = ?, `stock` = ?, `stock` = ? WHERE `idproduct` = ?";
        $this->executeQuery($query, [$name, $description, $idcategory, $price, $stock, $idproduct]);
    }

    function deleteProduct($idproduct){
        $query = "DELETE FROM `products` WHERE `idproduct` = ?";
        $this->executeQuery($query, [$idproduct]);
    }
}