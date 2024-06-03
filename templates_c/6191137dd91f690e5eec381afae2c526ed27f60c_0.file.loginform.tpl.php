<?php
/* Smarty version 4.5.3, created on 2024-06-04 01:07:16
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\loginform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_665e4ca4c0d452_00054563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6191137dd91f690e5eec381afae2c526ed27f60c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\loginform.tpl',
      1 => 1717455790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e4ca4c0d452_00054563 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="login__container">
    <h2>Login</h2>
    <form class="form__login" action="enter" method="POST">
        <div>
            <label for="email">Correo electrónico:</label>
            <input type="text" name="email" placeholder="Ingresa tu correo" required autocomplete="false">
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
        </div>
        <div>
            <button type="submit" class="btn__insert">Ingresar</button>
        </div>
    </form>
</section><?php }
}
