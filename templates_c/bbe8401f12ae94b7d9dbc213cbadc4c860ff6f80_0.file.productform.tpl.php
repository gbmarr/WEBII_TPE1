<?php
/* Smarty version 4.5.3, created on 2024-06-03 23:09:48
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\productform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_665e311cd14b35_29151177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbe8401f12ae94b7d9dbc213cbadc4c860ff6f80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\productform.tpl',
      1 => 1717448305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e311cd14b35_29151177 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="product__container">
<form class="form__product" action="<?php echo BASE_URL;?>
/<?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> edit <?php } else { ?> add <?php }?>" method="POST">
                <div>
                    <label for="idProduct">Id:</label>
                    <input type="number" name="idProduct" readonly value=<?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Producto']->value->idProducto;?>
 <?php } else { ?> <?php }?> />
                </div>
                <div>
                <label for="name">Nombre:</label> 
                    <input type="text" name="name" value=<?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Producto']->value->nombre;?>
 <?php } else { ?> <?php }?> >
                </div>
                <div>
                    <label for="description">Descripción:</label>
                    <input type="text" name="description" value=<?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Producto']->value->descripcion;?>
 <?php } else { ?> <?php }?> >
                </div>
                <div>
                <label for="category">Categoría:</label>
                <select name="category">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idCat;?>

                <?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['Producto']->value->categoria;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 == $_prefixVariable2)) {?> selected <?php } else { ?> <?php }?> <?php } else { ?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                </div>
                <div>
                <label for="stock">Stock:</label>
                <div class="div__radiobtn">
                    <div>
            <input type="radio" value="1" name="stock" <?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> (<?php ob_start();
echo $_smarty_tpl->tpl_vars['Producto']->value->stock;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?> checked <?php } else { ?> <?php }?>) <?php } else { ?> <?php }?> ><p>Disponible</p>
                    </div>
                    <div>
                        <input type="radio" value="0" name="stock" <?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> (<?php ob_start();
echo $_smarty_tpl->tpl_vars['Producto']->value->stock;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 0) {?> checked <?php } else { ?> <?php }?>) <?php } else { ?> <?php }?> ><p>No disponible</p>
                    </div>
                </div>
                </div>
                <div>
                <label for="price">Precio:</label>
                <input type="number" name="price" value="<?php if (($_smarty_tpl->tpl_vars['Producto']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Producto']->value->precio;?>
 <?php } else { ?> <?php }?>">
                </div>
                <div>
                <button type="submit" class="btn__insert">Guardar cambios</button>
                </div>
            </form>
        </section><?php }
}
