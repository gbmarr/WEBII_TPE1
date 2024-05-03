<?php
// clase config con parametros y acciones

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        '' => "mostrarHome",
        'home' => "mostrarHome",
        'list' => "mostrarLista",
        'add' => "agregarProducto",
        'edit' => "editarProducto",
        'detail' => "verProducto",
        'delete' => "eliminarProducto",
        'login' => "loguearUsuario",
        'profile' => "verPerfil"
    ];
}