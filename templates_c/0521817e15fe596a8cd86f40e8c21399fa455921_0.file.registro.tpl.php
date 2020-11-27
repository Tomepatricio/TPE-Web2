<?php
<<<<<<< HEAD
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 23:12:41
=======
/* Smarty version 3.1.34-dev-7, created on 2020-11-13 03:54:47
>>>>>>> develop
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
<<<<<<< HEAD
  'unifunc' => 'content_5fadb359415151_97455534',
=======
  'unifunc' => 'content_5fadf5778abcc6_73570617',
>>>>>>> develop
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0521817e15fe596a8cd86f40e8c21399fa455921' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\registro.tpl',
<<<<<<< HEAD
      1 => 1605219159,
=======
      1 => 1605236085,
>>>>>>> develop
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
<<<<<<< HEAD
function content_5fadb359415151_97455534 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5fadf5778abcc6_73570617 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> develop
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
<<<<<<< HEAD
    <form class="container" action="registroAdd" method="post">
=======
>>>>>>> develop
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
<<<<<<< HEAD
                            <td class="text-center">Es administrador:<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['u']->value->admin == 1) {?>checked="checked"<?php }?>></td>
                            <td class="text-center"><a href="registro/eliminar"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
=======
                            <?php if ($_smarty_tpl->tpl_vars['u']->value->admin == 1) {?>
                                <td class="text-center bg-success">Es administrador<a href="update/<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
"><button type="submit" class="btn btn-outline-danger ml-3">Unset Admin</button></a></td>
                            <?php } else { ?>
                                <td class="text-center bg-secondary">No es administrador <a href="update/<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
"><button type="submit" class="btn btn-outline-danger ml-3">Set Admin</button></a></td>
                            <?php }?>
                            <td class="text-center"><a href="registroEliminar/<?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
>>>>>>> develop
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
<<<<<<< HEAD
        <div class="d-flex justify-content-center"><button type="submit" class=" btn-sm btn-success mb-2">Enviar</button></div>
    </form>    
=======
>>>>>>> develop
    <?php }
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tablaRegistro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
