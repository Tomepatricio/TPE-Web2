<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 22:22:25
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\formEditProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f875e01317863_02123399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1abcc61d13c44742473ca6020110577f9973583a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\formEditProducto.tpl',
      1 => 1602706943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f875e01317863_02123399 (Smarty_Internal_Template $_smarty_tpl) {
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
    <small class="form-text text-white">Marca del Producto</small>
    <select name="marcaProducto">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <option name="marcaProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreMarca;?>
"</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </div>
    <button type="submit" class="btn btn-warning">Editar</button>
</form><?php }
}
