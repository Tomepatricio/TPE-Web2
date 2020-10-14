<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 03:21:43
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\editMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83afa7545144_10171858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2813d6e715560b2a0049202ebd70c7eed68f22d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\editMarca.tpl',
      1 => 1602465698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formEditMarca.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f83afa7545144_10171858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center">Editar Marca</h1>

<table class="table container">
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
        <tr class="text-center bg-warning font-weight-bold">
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->id_marca;?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->nombreMarca;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->origen;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['idMarca']->value->puntaje;?>
ml</td>
        </tr>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:formEditMarca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
