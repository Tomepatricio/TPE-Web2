<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 18:59:58
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\vue\comment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc13e9eeafec4_38242060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3746e2c384e23ac55b2bc814cae2efef5d04095c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\vue\\comment.vue',
      1 => 1606499990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc13e9eeafec4_38242060 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="vue-comentarios">
        <ul class="container">
            <li class="list-group-item borden-3 d-flex justify-content-between"
                v-for="comment in comments" class="list-group"
                v-if="comment.id_producto == id">
                <small class="badge badge-info d-flex align-items-center">valoracion: {{ comment.valoracion}} </small>
                <span class="text-success text-monospace font-weight-bolder p-3">{{ comment.comentario }} </span>
                <span class="d-flex align-items-center" v-if="admin==1"><button class="badge badge-danger" v-on:click="deleteComment(comment.id)"><small>Eliminar</small></button></span>
            </li>
        </ul>
    </div>
<?php }
}
