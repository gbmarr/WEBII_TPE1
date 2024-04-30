// clase config con parametros y acciones
<?php

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        '' => "mostrarHome",
        'list' => "mostrarLista",
        'loadproduct' => "cargarDatosProducto",
        'add' => "agregarProducto",
        'edit' => "editarProducto",
        'detail' => "verProducto",
        'delete' => "eliminarProducto",
        'login' => "loguearUsuario",
        'profile' => "verPerfil"
    ];
}