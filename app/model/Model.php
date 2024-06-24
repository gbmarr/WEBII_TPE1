<?php
require_once './config/config.php';

class Model{
    protected $database;
    protected $conn;

    function __construct(){
        try {
            $this->conn = "mysql:host=".SQL_HOST.";dbname=".SQL_DBNAME.";charset=utf8";
            $this->database = new PDO($this->conn, SQL_USER, SQL_PASS);
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // private function createOrUseDatabase($database){
    //     $this->database->exec("CREATE DATABASE IF NOT EXISTS $database");
    //     $this->database->exec("USE $database");
    // }

    // private function createTable(){

    // }

    // private function deploy(){
    //     $this->createOrUseDatabase('');
    //     $this->createTable();
    // }

    function executeQuery($query, $params = []){
        try {
            $action = $this->database->prepare($query);
            $action->execute($params);
            return $action;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}