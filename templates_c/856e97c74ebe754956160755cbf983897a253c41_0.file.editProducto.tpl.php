<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 00:53:14
  from 'C:\xampp\htdocs\web2\TPE git\TPE-Web2\templates\editProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87815a36fb44_73960473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856e97c74ebe754956160755cbf983897a253c41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE git\\TPE-Web2\\templates\\editProducto.tpl',
      1 => 1602465685,
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
function content_5f87815a36fb44_73960473 (Smarty_Internal_Template $_smarty_tpl) {
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
