<?php
/* Smarty version 4.5.3, created on 2024-06-06 17:04:03
  from 'C:\xampp\htdocs\WEBII_TPE1\templates\productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6661cfe3061f67_76544593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8884e4e5b1f4bd2de11665a14f434d3d9de3a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEBII_TPE1\\templates\\productlist.tpl',
      1 => 1717686238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661cfe3061f67_76544593 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="listproduct__container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Precio</th>
                     <?php if ($_smarty_tpl->tpl_vars['admin']->value == 1) {?> 

                        <th>Acciones</th>

                     <?php }?> 

                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'Producto');
$_smarty_tpl->tpl_vars['Producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Producto']->value) {
$_smarty_tpl->tpl_vars['Producto']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Producto']->value->idProducto;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Producto']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Producto']->value->descripcion;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Producto']->value->categoria;?>
</td>
                        <?php if (($_smarty_tpl->tpl_vars['Producto']->value->stock == 1)) {?>
                            <td><i class="bx bx-check-circle"></i></td>
                        <?php } else { ?>
                            <td><i class="bx bx-x-circle"></i></td>
                        <?php }?>
                        <td><?php echo $_smarty_tpl->tpl_vars['Producto']->value->precio;?>
</td>
                         <?php if (($_smarty_tpl->tpl_vars['admin']->value == 1)) {?> 
                            <td class="listproduct__btncontainer">
                            <a class="btn__edit" href="productform/<?php echo $_smarty_tpl->tpl_vars['Producto']->value->idProducto;?>
">Editar</a>
                            <a class="btn__delete" href="delete/<?php echo $_smarty_tpl->tpl_vars['Producto']->value->idProducto;?>
">Eliminar</a>
                            </td>
                         <?php }?> 
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
         <?php if (($_smarty_tpl->tpl_vars['admin']->value == 1)) {?> 
        <a class="btn__insert" href="<?php echo BASE_URL;?>
/productform">Agregar producto</a>
            
         <?php }?> 
</section><?php }
}
