<?php
/* Smarty version 4.5.3, created on 2024-06-05 19:16:05
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_66609d55c26b29_48047625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5c1eb64e6dceff826c003d577f5ec2cd0d80a52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\header.tpl',
      1 => 1717607760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66609d55c26b29_48047625 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>
/view/styles/styles.css">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Product App</title>
    </head>
    <body>
    <header class="header">
        <h1>Product App</h1>
        <nav class="navbar">
            <ul class="navbar__list">
                <li class="navbar__list__item"><a href="<?php echo BASE_URL;?>
">Inicio</a></li>
                <li class="navbar__list__item"><a href="<?php echo BASE_URL;?>
/list">Productos</a></li>
                                    <li class="navbar__list__item"><a href="<?php echo BASE_URL;?>
/profile/<?php echo $_smarty_tpl->tpl_vars['User']->value->id;?>
">Perfil</a></li>
                                    <li class="navbar__list__item"><a href="<?php echo BASE_URL;?>
/login">Login</a></li>
                            </ul>
        </nav>
    </header>
    <main class="main__container">

    <?php }
}
