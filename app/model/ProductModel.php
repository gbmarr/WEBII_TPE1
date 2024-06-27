<?php
require_once 'Model.php';

class ProductModel extends Model {


    function getAllProducts(){
        $query = "SELECT `idproduct`, P.`name`, `description`, P.`idcategory`, C.`idcat`, C.`name` catdescription, `price`, `stock` FROM `products` P, `categories` C WHERE `idcategory` = `idcat`";
        $products = $this->executeQuery($query);
        return $products->fetchAll(PDO::FETCH_OBJ);
    }

    function getProductByID($idproduct){
        $query = "SELECT `idproduct`, P.`name`, `description`, P.`idcategory`, C.`idcat`, C.`name` catdescription, `price`, `stock` FROM `products` P, `categories` C WHERE `idcategory` = `idcat` AND `idproduct` = ?";
        $product = $this->executeQuery($query, [$idproduct]);
        return $product->fetch(PDO::FETCH_OBJ);
    }

    function addProduct($name, $description, $idcategory, $price, $stock){
        $query = "INSERT INTO `products` (`name`, `description`, `idcategory`, `price`, `stock`) VALUES (?, ?, ?, ?, ?)";
        $this->executeQuery($query, [$name, $description, $idcategory, $price, $stock]);
    }

    function updateProduct($idproduct, $name, $description, $idcategory, $price, $stock){
        $query = "UPDATE `products` SET `name` = ?, `description` = ?, `idcategory` = ?, `price` = ?, `stock` = ? WHERE `idproduct` = ?";
        $this->executeQuery($query, [$name, $description, $idcategory, $price, $stock, $idproduct]);
    }

    function deleteProduct($idproduct){
        $query = "DELETE FROM `products` WHERE `idproduct` = ?";
        $this->executeQuery($query, [$idproduct]);
    }
}