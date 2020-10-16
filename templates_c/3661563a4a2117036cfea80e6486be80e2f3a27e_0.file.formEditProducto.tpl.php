<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 02:16:47
  from 'C:\xampp\htdocs\web2\TPE git\TPE-Web2\templates\formEditProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88e66f542ca5_49223135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3661563a4a2117036cfea80e6486be80e2f3a27e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE git\\TPE-Web2\\templates\\formEditProducto.tpl',
      1 => 1602807387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f88e66f542ca5_49223135 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="container" action="editar" method="post">
    <div class="form-group">
    <small class="form-text text-muted">ID</small>
    <input type="hidden" class="form-control" name="idProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Nombre del Producto</small>
    <input type="text" class="form-control" name="nombreProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
">
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Descripcion del Producto</small>
    <input type="text" class="form-control" name="detalleProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
">
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Presentacion del Producto</small>
    <input type="number" class="form-control" name="presentacionProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->presentacion;?>
">
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Precio del Producto</small>
    <input type="number" class="form-control" name="precioProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
">
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Marca del Producto</small>
    <select name="marcaProducto">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <option name="marcaProducto" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombreMarca;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </div>
    <button type="submit" class="btn btn-warning">Editar</button>
</form><?php }
}
