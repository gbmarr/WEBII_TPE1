<?php
require_once 'Model.php';

class CategoryModel extends Model {


    function getAllCategories(){
        $query = "SELECT `idcat`, `name` FROM `categoria`";
        $categories = $this->executeQuery($query);
        return $categories->fetchAll(PDO::FETCH_OBJ);
    }

    function getCategoryByID($id){
        $query = "SELECT `idcat`, `name` FROM `categories` WHERE `idcat` = ?";
        $category = $this->executeQuery($query, [$id]);
        return $category->fetch(PDO::FETCH_OBJ);
    }

    function addCategory($newCategory){
        $query = "INSERT INTO `categoria` (`name`) VALUES (?)";
        $this->executeQuery($query, [$newCategory]);
    }

    function updateCategory($id, $newName){
        $query = "UPDATE `categoria` SET `name` = ? WHERE `idcat` = ?";
        $this->executeQuery($query, [$newName, $id]);
    }

    function deleteCategory($id){
        $query = "DELETE FROM `categoria` WHERE `idcat` = ?";
        $this->executeQuery($query, [$id]);
    }
}