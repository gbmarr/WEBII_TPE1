<?php
// definicion de la URLBASE para trabajar con ella desde 'acciones'
session_start();
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));