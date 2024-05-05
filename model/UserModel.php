<?php
require_once 'Database.php';
require_once 'User.php';

class UserModel{
    private $Database;

    function __construct(){
        $this->Database = new Database();
    }

    function getUser($id = null, $email = null){
        try {
            if($email != null){
                $query = "SELECT `idUsuario`, `email`, `password`, `nombre`, `apellido`, `admin` FROM `usuarios` WHERE `email` = ?";
                $params = [$email];
                $sentencia = $this->Database->executeQuery($query, $params);
            }elseif($id != null){
                $query = "SELECT `idUsuario`, `email`, `password`, `nombre`, `apellido`, `admin` FROM `usuarios` WHERE `idUsuario` = ?";
                $params = [$id];
                $sentencia = $this->Database->executeQuery($query, $params[0]);
            }
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

            if($resultado){
                $User = new User();
                $User->idUsuario = $resultado['idUsuario'];
                $User->email = $resultado['email'];
                $User->password = $resultado['password'];
                $User->nombre = $resultado['nombre'];
                $User->apellido = $resultado['apellido'];
                $User->admin = $resultado['admin'];

                return $User;
            }
            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function insertUser($User){
        try {
            $query = "INSERT INTO `usuarios`(`email`, `password`, `nombre`, `apellido`, `admin`) VALUES (?,?,?,?,?)";
            $params = [
                $User->email,
                $User->password,
                $User->nombre,
                $User->apellido,
                $User->admin
            ];
            $sentencia = $this->Database->executeQuery($query, $params);
            if($sentencia){
                return true;
            }else{
                return false;
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function updateUser($User){
        try {
            $query = "UPDATE `usuarios` SET `email`= ?,`password`= ?,`nombre`= ?,`apellido`= ?,`admin`= ? WHERE `idUsuario` = ?";
            $params = [
                $User->email,
                $User->password,
                $User->nombre,
                $User->apellido,
                $User->admin,
                $User->idUsuario
            ];
            $sentencia = $this->Database->executeQuery($query, $params);
            if($sentencia){
                return true;
            }else{
                return false;
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function setAdmin($id){
        try {
            $query = "UPDATE `usuarios` SET `admin`= ? WHERE `idUsuario` = ?";
            $admin = 1;
            $params = [$admin, $id];
            $sentencia = $this->Database->executeQuery($query, $params);
            if($sentencia){
                return true;
            }else{
                return false;
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function deleteUser($id){
        try {
            $query = "DELETE FROM `usuarios` WHERE `idUsuario`= ?";
            $params = [$id];
            $sentencia = $this->Database->executeQuery($query, $params);
            if($sentencia){
                return true;
            }else{
                return false;
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}