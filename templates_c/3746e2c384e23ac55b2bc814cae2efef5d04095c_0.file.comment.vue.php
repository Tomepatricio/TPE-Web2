<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-22 03:36:20
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\vue\comment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb9cea49ffe67_59477564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3746e2c384e23ac55b2bc814cae2efef5d04095c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\vue\\comment.vue',
      1 => 1606012527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb9cea49ffe67_59477564 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="vue-comentarios">
        <ul>
            <li 
                v-for="comment in comments" class="list-group"
                v-if="comment.id_producto == {$producto->id}">
                {{ comment.comentario }}
            </li>
        </ul>
    </div>
<?php }
}
