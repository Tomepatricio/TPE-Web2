<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 22:43:50
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f836e860330c4_74993318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b806a6ba5c1ba0863bdbbe6cbf6df6c11e3be43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\editar.tpl',
      1 => 1602449027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f836e860330c4_74993318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TESTTPE\\libs\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Detalle</th>
            <th scope="col">Presentacion</th>
            <th scope="col">Precio</th>
            <th scope="col">Marca</th>
        </tr>
    </thead>
    <tbody>
          <tr class="text-center">
              <th scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
              <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->detalle,100);?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->presentacion;?>
ml</td>
              <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreMarca;?>
</td>
          </tr>
    </tbody>
</table>


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


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
