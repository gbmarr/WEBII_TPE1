// logica de ruteo del proyecto utilizando ConfigApp con acciones y parametros
<?php

require_once 'config/ConfigApp.php';
require_once 'controller/ArticlesController.php';
require_once 'view/ArticlesView.php';

$controller = new ArticleController();
// si no podemos utilizar objetos, en el if debemos llamar a cada acción en particular con if-elseif, if-elseif...

function parseUrl($url){
    $arrDatos = explode('/',$url);
    $arrParseado[ConfigApp::$ACTION] = $arrDatos[0];
    $arrParseado[ConfigApp::$PARAMS] = isset($arrDatos[1]) ? array_slice($arrDatos, 1) : null;

    return $arrParseado;
}

$urlDatos = parseUrl($_GET[ConfigApp::$ACTION]);
$action = $urlDatos[ConfigApp::$ACTION];

if(array_key_exists($action, ConfigApp::$ACTIONS)){
    $params = $urlDatos[ConfigApp::$PARAMS];
    $method = ConfigApp::$ACTIONS[$action];

    if(isset($params) && $params != null){
        $controller->$method($params);
    }else{
        $controller->$method();
    }
}else{
    echo "<h1>ERROR EN LA CARGA DE DATOS</h1>";
}