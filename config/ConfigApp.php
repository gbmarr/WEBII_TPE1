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