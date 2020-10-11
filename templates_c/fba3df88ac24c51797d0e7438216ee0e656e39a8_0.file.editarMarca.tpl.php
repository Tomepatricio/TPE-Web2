<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 22:25:08
  from 'C:\xampp\htdocs\web2\TPE\templates\editarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f75a481faa7_12122187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fba3df88ac24c51797d0e7438216ee0e656e39a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\editarMarca.tpl',
      1 => 1602188700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f75a481faa7_12122187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TPE\\libs\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Origen</th>
            <th scope="col">Puntaje</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->id_marca;?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->nombre;?>
</td>
            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['idMarca']->value->descripcion,100);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->origen;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->puntaje;?>
ml</td>
        </tr>
    </tbody>
</table>

    <form class="container" action="marcaseditar" method="post">
      <div class="form-group">
        <input type="hidden" class="form-control" name="idMarca" value=<?php echo $_smarty_tpl->tpl_vars['idMarca']->value->id_marca;?>
>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Nombre del Producto</small>
        <input type="text" class="form-control" name="nombreMarca" value=<?php echo $_smarty_tpl->tpl_vars['idMarca']->value->nombre;?>
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
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
