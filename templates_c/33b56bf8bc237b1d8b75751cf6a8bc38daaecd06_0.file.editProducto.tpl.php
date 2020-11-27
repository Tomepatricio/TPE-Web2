<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-14 03:33:18
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\editProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faf41eea92cb0_15467202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b56bf8bc237b1d8b75751cf6a8bc38daaecd06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\editProducto.tpl',
      1 => 1605118594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formEditProducto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5faf41eea92cb0_15467202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table container">
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
          <tr class="text-center bg-warning font-weight-bold">
              <th scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</th>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
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


<?php $_smarty_tpl->_subTemplateRender("file:formEditProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
