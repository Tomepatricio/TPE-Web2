<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-17 23:51:54
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb4540abbe258_13817220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f40b3cdc6e666f6a48a72ef3b873c2abdfbcf41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\comment.tpl',
      1 => 1605300464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb4540abbe258_13817220 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'comentario', 'coment');
$_smarty_tpl->tpl_vars['coment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coment']->value) {
$_smarty_tpl->tpl_vars['coment']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['coment']->value->descripcion;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
