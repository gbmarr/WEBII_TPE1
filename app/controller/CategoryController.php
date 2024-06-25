<?php
require_once 'app/model/CategoryModel.php';
require_once 'app/view/CategoryView.php';

class CategoryController{
    private $categoryModel;
    private $categoryView;

    function __construct(){
        $this->categoryModel = new CategoryModel();
        $this->categoryView = new CategoryView();
    }

    function viewAllCategories(){
        $categories = $this->categoryModel->getAllCategories();
        $this->categoryView->showAllCategories($categories);
    }

    function createCategory(){
        $this->categoryView->showCategoryForm();
    }

    function storeCategory(){
        $categoryName = $_POST['name'];
        $this->categoryModel->addCategory($categoryName);
        header('Location: ' . BASE_URL . '');
    }

    function editCategory($id){
        $category = $this->categoryModel->getCategoryByID($id);
        $this->categoryView->showCategoryForm($category);
    }

    function updateCategory($id){
        $categoryName = $_POST['name'];
        $this->categoryModel->updateCategory($id, $categoryName);
        header('Location: ' . BASE_URL . '');
    }

    function deleteCategory($id){
        $this->categoryModel->deleteCategory($id);
        header('Location: ' . BASE_URL . '');
    }

    function errorCategory(){
        
    }
}