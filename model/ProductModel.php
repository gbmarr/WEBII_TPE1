<?php
// manipulacion de la base de datos
// creación de la conexión a la base de datos 
// llamado a la base de datos y paso por parámetros de datos necesarios
// método de lectura de productos
// método de inserción de producto
// método de actualización de producto
// método de eliminación de producto

require_once 'Database.php';
require_once 'Product.php';
require_once 'Categoria.php';

class ProductModel{
    private $Database;

    function __construct(){
        $this->Database = new Database();
    }

    function getProducts(){
        try {
            $query = "SELECT `idProducto`, `nombre`, `descripcion`, `precio`, `stock`, `idCategoria`, `descripcionCat` FROM `productos`, `categoria` WHERE `idCategoria` = `idCat`";
            $sentencia = $this->Database->executeQuery($query);
            $Productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $listaProductos = [];

            foreach($Productos as $item){
                $nuevo = new Product();
                $nuevo->idProducto = $item['idProducto'];
                $nuevo->nombre = $item['nombre'];
                $nuevo->descripcion = $item['descripcion'];
                $nuevo->precio = $item['precio'];
                $nuevo->stock = $item['stock'];
                $nuevo->categoria = $item['descripcionCat'];

                $listaProductos[] = $nuevo;
            }

            return $listaProductos;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function getProductByID($id){
        try {
            $query = "SELECT `idProducto`, `nombre`, `descripcion`, `precio`, `stock`, `idCategoria`, `descripcionCat` FROM `productos`, `categoria` WHERE `idCategoria`=`idCat` AND `idProducto`=?";
            $params = [$id];
            $sentencia = $this->Database->executeQuery($query, $params[0]);
            $Producto = $sentencia->fetch(PDO::FETCH_ASSOC);

            $nuevo = new Product();
            $nuevo->idProducto = $Producto['idProducto'];
            $nuevo->nombre = $Producto['nombre'];
            $nuevo->descripcion = $Producto['descripcion'];
            $nuevo->precio = $Producto['precio'];
            $nuevo->stock = $Producto['stock'];
            $nuevo->categoria = $Producto['descripcionCat'];
            
            return $nuevo;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function getCategorias(){
        try {
            $query = "SELECT `idCat`, `descripcionCat` FROM `categoria`";
            $sentencia = $this->Database->executeQuery($query);
            $Categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            $listaCategorias = [];
            
            foreach($Categorias as $categoria){
                $nuevo = new Categoria();
                $nuevo->idCat = $categoria['idCat'];
                $nuevo->descripcion = $categoria['descripcionCat'];
                
                $listaCategorias[] = $nuevo;
            }

            return $listaCategorias;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    function insertProduct($Producto){
        try {
            $query = "INSERT INTO `productos`(`nombre`, `descripcion`, `precio`, `stock`, `idCategoria`, `categoria_idCat`) VALUES (?,?,?,?,?,?)";
            $params = [
                $Producto->nombre,
                $Producto->descripcion,
                $Producto->precio,
                $Producto->stock,
                $Producto->categoria,
                $Producto->categoria
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
            return null;
        }
    }

    function updateProduct($Producto){
        try {
            // falta la consulta de UPDATE
            $query = "UPDATE `productos` SET `nombre`= ?,`descripcion`= ?,`precio`= ?,`stock`= ?,`idCategoria`= ?,`categoria_idCat`= ? WHERE `idProducto` = ?";
            $params = [
                $Producto->nombre,
                $Producto->descripcion,
                $Producto->precio,
                $Producto->stock,
                $Producto->categoria,
                $Producto->categoria,
                $Producto->idProducto
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
            return null;
        }
    }

    function deleteProduct($id){
        try {
            $query = "DELETE FROM `productos` WHERE `idProducto`=?";
            $params = [$id];
            $sentencia = $this->Database->executeQuery($query, $params[0]);
            if($sentencia){
                return true;
            }else{
                return false;
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}