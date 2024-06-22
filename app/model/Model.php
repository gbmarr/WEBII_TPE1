<?php
require_once './config/config.php';

class Model{
    private $db;
    private $conn;

    function __construct(){
        $this->conn = $this->getConnection();
    }

    function getConnection(){
        try {
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}