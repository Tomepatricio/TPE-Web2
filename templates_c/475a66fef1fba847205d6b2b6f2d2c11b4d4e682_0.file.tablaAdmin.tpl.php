<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 16:04:38
  from 'C:\xampp\htdocs\web2\TPE\templates\tablaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75e1f6e35172_83257129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475a66fef1fba847205d6b2b6f2d2c11b4d4e682' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\tablaAdmin.tpl',
      1 => 1601561076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f75e1f6e35172_83257129 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="container" action="insertar" method="post">
  <div class="form-group">
    <small class="form-text">Nombre del Producto</small>
    <input type="text" class="form-control" name="nombreProducto" placeholder='"Ejemplo, Final Touch"'>
  </div>
  <div class="form-group">
    <small class="form-text">Descripcion del Producto</small>
    <input type="text" class="form-control" name="detalleProducto" placeholder="Descripcion del producto...">
  </div>
  <div class="form-group">
    <small class="form-text">Presentacion del Producto</small>
    <input type="number" class="form-control" name="presentacionProducto" placeholder="Ejemplo, 500ml">
  </div>
  <div class="form-group">
    <small class="form-text">Precio del Producto</small>
    <input type="number" class="form-control" name="precioProducto" placeholder="Ejemplo, 1000">
  </div>
  <div class="form-group">
    <small class="form-text text-white">Marca del Producto</small>
    <select name="marcaProducto">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <option name="marcaProducto" value=<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form><?php }
}
