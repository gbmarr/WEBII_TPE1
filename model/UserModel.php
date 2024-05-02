<?php
require_once 'Database.php';
require_once 'User.php';

class UserModel{
    private $Database;

    function __construct(){
        $this->Database = new Database();
    }

    function getUser($User){

    }

    function insertUser(){

    }

    function updateUser($User){

    }

    function setAdmin($id){
        
    }

    function deleteUser($id){

    }
}