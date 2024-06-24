<?php
/* Smarty version 4.5.3, created on 2024-06-24 19:29:10
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\layouts\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6679ace63c35b1_10340198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8765e9b5e64ac8c8f27ba79c3ce04be2b5ab32f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\layouts\\head.tpl',
      1 => 1719249061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679ace63c35b1_10340198 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Stock Product</title>
	<meta charset="UTF-8">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="./styles/styles.css">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>
    <h1>Product App</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo BASE_URL;?>
home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL;?>
home">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL;?>
list">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL;?>
category">Categorias</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL;?>
login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL;?>
logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="container mt-4"><?php }
}
