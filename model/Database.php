<?php
require_once './config/ConfigApp.php';

class Database{
    private $host;
    private $dbUser;
    private $dbPass;
    private $dbName;
    private $conn;
    
    function Connect(){
        $this->host = SQL_HOST;
        $this->dbName = SQL_DBNAME;
        $this->dbUser = SQL_USER;
        $this->dbPass = SQL_PASS;
        try{
            $conexion = "mysql:host={$this->host};dbname={$this->dbName}";
            $this->conn = new PDO($conexion, $this->dbUser, $this->dbPass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            die();
        }
    }
    
    function executeQuery($query, $params = []){
        try {
            $this->Connect();
            $consulta = $this->conn->prepare($query);
            $consulta->execute($params);
            return $consulta;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}