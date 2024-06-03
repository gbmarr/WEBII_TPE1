<?php
// clase config con parametros y acciones

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        '' => "mostrarHome",
        'home' => "mostrarHome",
        'list' => "mostrarLista",
        'productform' => "cargarFormularioProducto",
        'add' => "agregarProducto",
        'edit' => "editarProducto",
        'detail' => "verProducto",
        'delete' => "eliminarProducto",
        'login' => "cargarFormUsuario",
        'profile' => "verPerfil",
        'enter' => "iniciarSesion"
    ];
}

// constantes pertenecientes a la DB

const SQL_USER = "root";
const SQL_PASS = "";
const SQL_DBNAME = "webii_productsdb;charset=utf8";
const SQL_HOST = "localhost";