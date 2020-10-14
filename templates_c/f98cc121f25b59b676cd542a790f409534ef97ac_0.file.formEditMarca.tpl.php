<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 03:02:59
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\formEditMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83ab43ea3488_18248477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f98cc121f25b59b676cd542a790f409534ef97ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\formEditMarca.tpl',
      1 => 1602464327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f83ab43ea3488_18248477 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="container" action="marcaseditar" method="post">
    <div class="form-group">
    <input type="hidden" class="form-control" name="idMarca" value=<?php echo $_smarty_tpl->tpl_vars['idMarca']->value->id_marca;?>
>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Nombre del Producto</small>
    <input type="text" class="form-control" name="nombreMarca" value=<?php echo $_smarty_tpl->tpl_vars['idMarca']->value->nombreMarca;?>
>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Descripcion del Producto</small>
    <input type="text" class="form-control" name="descripcionMarca" value=<?php echo $_smarty_tpl->tpl_vars['idMarca']->value->descripcion;?>
>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Descripcion del Producto</small>
    <input type="text" class="form-control" name="origenMarca" value=<?php echo $_smarty_tpl->tpl_vars['idMarca']->value->origen;?>
>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Presentacion del Producto</small>
    <input type="number" class="form-control" name="puntajeMarca" value=<?php echo $_smarty_tpl->tpl_vars['idMarca']->value->puntaje;?>
>
    </div>
    <button type="submit" class="btn btn-warning">Editar</button>
</form><?php }
}
