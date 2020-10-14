<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 23:18:07
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\descripcionProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83768f50fee4_56484651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277b6085a7dcc9bd2a8593bfd1755e61eb2e58c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\descripcionProducto.tpl',
      1 => 1602451084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f83768f50fee4_56484651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>

<div class="card text-center container" style="width: 40rem;">
  <img src="..." class="card-img-top" alt="...">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
</li>
    <li class="list-group-item">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreMarca;?>
</li>
  </ul>
  <a href="productos">Volver</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <form class="container" action="editar" method="post">
      <div class="form-group">
        <small class="form-text text-muted">ID</small>
        <input type="hidden" class="form-control" name="idProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Nombre del Producto</small>
        <input type="text" class="form-control" name="nombreProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Descripcion del Producto</small>
        <input type="text" class="form-control" name="detalleProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Presentacion del Producto</small>
        <input type="number" class="form-control" name="presentacionProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->presentacion;?>
>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Precio del Producto</small>
        <input type="number" class="form-control" name="precioProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
>
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
      <button type="submit" class="btn btn-warning">Editar</button>
    </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
