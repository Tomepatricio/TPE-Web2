<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 21:14:05
  from 'C:\xampp\htdocs\web2\TPE git\TPE-Web2\templates\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83597d33a464_08065829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10395501775072fb7fe1c705194d00b88482e9f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE git\\TPE-Web2\\templates\\marcas.tpl',
      1 => 1602199325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tablaMarcas.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f83597d33a464_08065829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TPEgit\\TPE-Web2\\libs\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <tr class="text-center">
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['marca']->value->descripcion,100);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->origen;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->puntaje;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                    <td><a href="marcaseditar/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><button type="button" class="btn btn-outline-warning">Editar</button></a></td>
                    <td><a href="marcasborrar/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tablaMarcas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
