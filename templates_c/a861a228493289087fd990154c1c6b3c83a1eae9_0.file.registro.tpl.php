<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-05 22:13:08
  from 'C:\xampp\htdocs\web2\TPE git\TPE-Web2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa46ae47ca276_87584386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a861a228493289087fd990154c1c6b3c83a1eae9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE git\\TPE-Web2\\templates\\registro.tpl',
      1 => 1604610785,
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
function content_5fa46ae47ca276_87584386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['user']->value != null) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
    <form class="container" action="registroAdd" method="post">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
</td>
                            <td>Es administrador:<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['u']->value->admin == 1) {?>checked="checked"<?php }?>></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center"><button type="submit" class=" btn-sm btn-success mb-2">Enviar</button></div>
    </form>    
    <?php }
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tablaRegistro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
    <div class="container pd-10">
        <div class="p-3 mb-2 bg-info text-white"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    </div>
<?php }?>
    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
