<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 20:36:21
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\formAddProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc2a6b5e02d32_72977196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead1bde857669c5a3c789422a6b53a4a6c0d18f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\formAddProducto.tpl',
      1 => 1606525055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc2a6b5e02d32_72977196 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="container" action="insertar" method="post" enctype="multipart/form-data">
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
><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombreMarca;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
  <div class="form-group">
    <small class="form-text">Adjuntar Imagen:</small>
    <input type="file" class="" name="imgProducto" id="imgUpload">
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form><?php }
}
