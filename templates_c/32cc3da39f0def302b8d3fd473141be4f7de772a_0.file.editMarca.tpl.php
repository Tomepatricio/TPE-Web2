<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-14 03:33:46
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\editMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faf420a5b66a9_04458811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32cc3da39f0def302b8d3fd473141be4f7de772a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\editMarca.tpl',
      1 => 1605118594,
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
function content_5faf420a5b66a9_04458811 (Smarty_Internal_Template $_smarty_tpl) {
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
