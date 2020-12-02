<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 19:11:07
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc535bb78e395_62300514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c4a0ec151f21b575e74afb20314a69bdc84ad3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\registro.tpl',
      1 => 1606758316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tablaRegistro.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc535bb78e395_62300514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?><!--ver esto-->
    <div class="container pd-10">
        <div class="p-3 mb-2 bg-info text-white"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user']->value != null) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                        <tr>
                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['u']->value->admin == 1) {?>
                                <td class="text-center bg-success">Es administrador<a href="update/<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
"><button type="submit" class="btn btn-outline-danger ml-3">Unset Admin</button></a></td>
                            <?php } else { ?>
                                <td class="text-center bg-secondary">No es administrador <a href="update/<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
"><button type="submit" class="btn btn-outline-danger ml-3">Set Admin</button></a></td>
                            <?php }?>
                            <td class="text-center"><a href="registroEliminar/<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tablaRegistro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
