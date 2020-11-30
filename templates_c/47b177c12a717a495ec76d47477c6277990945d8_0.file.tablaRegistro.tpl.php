<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 19:11:07
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\tablaRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc535bb98c0d7_35245632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b177c12a717a495ec76d47477c6277990945d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\tablaRegistro.tpl',
      1 => 1606758316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc535bb98c0d7_35245632 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <h3 class="text-center text-light bg-dark">Registro</h3>
</div>

<form class="container" action="registro/addUser" method="post">
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
