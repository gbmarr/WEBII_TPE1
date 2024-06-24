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
        try {
            $pdo = new PDO("mysql:host=".SQL_HOST."", SQL_USER, SQL_PASS);

            $sql = file_get_contents('data/database.sql');

            $pdo->exec($sql);

            $this->database = new PDO("mysql:host=".SQL_HOST.";dbname=".SQL_DBNAME."", SQL_USER, SQL_PASS);
            if($this->isTableEmpty('categories') && $this->isTableEmpty('products') && $this->isTableEmpty('users')){
                $this->insertData();
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function isTableEmpty($table){
        $sql = "SELECT COUNT(*) FROM $table";
        $isCharge = $this->database->prepare($sql);
        $isCharge->execute();
        return $isCharge->fetchColumn() == 0;
    }

    private function insertData(){
        try {
            $this->database->exec(
                "INSERT INTO `categories` (`name`) VALUES
                ('Electrónica'),
                ('Ropa'),
                ('Hogar');"
            );
            $this->database->exec(
                "INSERT INTO `products` (`name`, `description`, `idcategory`, `stock`, `price`) VALUES
                ('Televisor', 'Televisor LED de 42 pulgadas', 1, TRUE, 200),
                ('Camiseta', 'Camiseta de algodón 100%', 2, TRUE, 30.00),
                ('Sofá', 'Sofá de 3 plazas color gris', 3, TRUE, 500.10),
                ('Auriculares', 'Auriculares con cancelación de ruido', 1, TRUE, 1500);"
            );
            $this->database->exec("
                INSERT INTO `users` (`name`, `surname`, `email`, `pass`, `admin`) VALUES
                ('Admin', 'User', 'admin@admin.com', 'webadmin', TRUE),
                ('Gabriel', 'M', 'gb@web.com', 'password123', FALSE),
                ('G', 'Marrero', 'gm@web.com', 'password456', FALSE);
            ");
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