<?php
require_once './config/ConfigApp.php';

class Model{
    protected $database;

    function __construct(){
        try {
            $this->deploy();
            $data = "mysql:host=".SQL_HOST.";dbname=".SQL_DBNAME.";charset=utf8";
            $this->database = new PDO($data, SQL_USER, SQL_PASS);
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function deploy(){
        $sql = file_get_contents('data/database.sql');
        try {
            $data = "mysql:host=".SQL_HOST."";
            $this->database = new PDO($data, SQL_USER, SQL_PASS);
            $this->database->exec($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function useDatabase(){
        try {
            $dbExist = $this->database->query("SHOW DATABASES LIKE '".SQL_DBNAME."'");
            if(!($dbExist->rowCount() > 0)){
                $this->database->exec("CREATE DATABASE ".SQL_DBNAME."");
            }
            $this->database->query("USE ".SQL_DBNAME."");

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
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