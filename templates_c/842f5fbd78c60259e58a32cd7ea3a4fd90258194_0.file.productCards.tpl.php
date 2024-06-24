<?php
/* Smarty version 4.5.3, created on 2024-06-24 19:44:34
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\products\productCards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6679b08270fc78_51145354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '842f5fbd78c60259e58a32cd7ea3a4fd90258194' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\products\\productCards.tpl',
      1 => 1719250830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/head.tpl' => 1,
    'file:../layouts/footer.tpl' => 1,
  ),
),false)) {
function content_6679b08270fc78_51145354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../layouts/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
<div class="row">
<?php if (($_smarty_tpl->tpl_vars['products']->value != null && !empty($_smarty_tpl->tpl_vars['products']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</h5>
                    <p class="card-text">Descripción: <?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</p>
                    <p class="card-text">Precio: <?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
</p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->idProducto;?>
" class="btn btn-primary">Detalle</a>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:../layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
