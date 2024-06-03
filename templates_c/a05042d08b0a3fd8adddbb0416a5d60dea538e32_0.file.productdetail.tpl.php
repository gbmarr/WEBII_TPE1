<?php
/* Smarty version 4.5.3, created on 2024-06-03 22:44:04
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\productdetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_665e2b14ba96e7_47438082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a05042d08b0a3fd8adddbb0416a5d60dea538e32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\productdetail.tpl',
      1 => 1717445845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e2b14ba96e7_47438082 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="article__container">
        <h2 class="article__name"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->nombre;?>
</h2>
        <article class="article__description"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->descripcion;?>
</article>
        <div class="article__category__container">
            <label for="category">Categoría:</label>
            <p class="article__category"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->categoria;?>
</p>
        </div>
        <div class="article__stock__container">
            <label for='stock'>Stock:</label>
            <?php if (($_smarty_tpl->tpl_vars['Producto']->value->stock == 1)) {?>
                <i class='bx bx-check-circle'></i>
            <?php } else { ?>
                <i class='bx bx-x-circle'></i>
            <?php }?>
        </div>
        <p class="article__price"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->precio;?>
</p>
    </section><?php }
}
