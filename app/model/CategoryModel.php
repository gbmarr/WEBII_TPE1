<?php
require_once 'Model.php';

class CategoryModel extends Model {


    function getAllCategories(){
        $query = "SELECT `idCat`, `descripcionCat` FROM `categoria`";
        $categories = $this->executeQuery($query);
        return $categories->fetchAll(PDO::FETCH_OBJ);
    }

    function getCategoryByID($id){
        $query = "SELECT `idCat`, `descripcionCat` FROM `categoria` WHERE `idCat` = ?";
        $category = $this->executeQuery($query, [$id]);
        return $category->fetch(PDO::FETCH_OBJ);
    }

    function addCategory($newCategory){
        $query = "INSERT INTO `categoria` (`descripcionCat`) VALUES (?)";
        $this->executeQuery($query, [$newCategory]);
    }

    function updateCategory($id, $newName){
        $query = "UPDATE `categoria` SET `descripcionCat` = ? WHERE `idCat` = ?";
        $this->executeQuery($query, [$newName, $id]);
    }

    function deleteCategory($id){
        $query = "DELETE FROM `categoria` WHERE `idCat` = ?";
        $this->executeQuery($query, [$id]);
    }
}