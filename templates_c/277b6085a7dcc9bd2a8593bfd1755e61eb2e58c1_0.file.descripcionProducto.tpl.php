<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 22:15:38
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\descripcionProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f875c6a6eaf52_84286400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277b6085a7dcc9bd2a8593bfd1755e61eb2e58c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\descripcionProducto.tpl',
      1 => 1602464420,
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
function content_5f875c6a6eaf52_84286400 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender("file:formEditProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
