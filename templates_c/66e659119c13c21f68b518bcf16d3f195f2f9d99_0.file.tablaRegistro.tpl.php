<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 22:28:46
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\tablaRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fada90e486277_99636402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66e659119c13c21f68b518bcf16d3f195f2f9d99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\tablaRegistro.tpl',
      1 => 1605216524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fada90e486277_99636402 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="container" action="registro/addUser" method="post">
  <div class="form-group">
    <small class="form-text">Nombre Usuario</small>
    <input type="text" class="form-control" name="user" placeholder='"Ejemplo, Juan"'>
  </div>
  <div class="form-group">
    <small class="form-text">Contraseña</small>
    <input type="password" class="form-control" name="password" placeholder='"Ejemplo, 123456"'>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form><?php }
}
