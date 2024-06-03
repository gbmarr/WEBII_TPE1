<?php
/* Smarty version 4.5.3, created on 2024-06-03 21:58:32
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\productcards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_665e2068191f43_19847829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67d6e12fbc6c8cc434e9367995d9cac21eaa01be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\productcards.tpl',
      1 => 1717444184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e2068191f43_19847829 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="cardlist__container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'Producto');
$_smarty_tpl->tpl_vars['Producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Producto']->value) {
$_smarty_tpl->tpl_vars['Producto']->do_else = false;
?>
            <div class="card__container">
                <h2 class="card__name"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->nombre;?>
</h2>
                <div>
                    <label for="description">Descripción:</label>
                    <article class="card__description"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->descripcion;?>
</article>
                </div>
                <div>
                    <label for="category">Categoría:</label>
                    <p class="card__category"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->categoria;?>
</p>
                </div>
                <div>
                    <label for="stock">Stock disponible:</label>
                    <?php if (($_smarty_tpl->tpl_vars['Producto']->value->stock == 1)) {?>
                        <i class="bx bx-check-circle"></i>
                    <?php } else { ?>
                        <i class="bx bx-x-circle"></i>
                    <?php }?>
                </div>
                <div class="card__btndetail__container">
                <a class="btn__detail" href="detail/<?php echo $_smarty_tpl->tpl_vars['Producto']->value->idProducto;?>
">Ver Detalle</a>
                <p class="card__price"><?php echo $_smarty_tpl->tpl_vars['Producto']->value->precio;?>
</p>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
