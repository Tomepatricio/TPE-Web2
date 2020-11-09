<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-05 05:49:30
  from 'C:\xampp\htdocs\web2\TPE git\TPE-Web2\templates\tablaRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa3845a1b7467_68175945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5009ac728a8d99215b50da6bae7e4981cc19c347' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE git\\TPE-Web2\\templates\\tablaRegistro.tpl',
      1 => 1604545674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa3845a1b7467_68175945 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="container" action="registro/addUser" method="post">
  <div class="form-group">
    <small class="form-text">Nombre Usuario</small>
    <input type="text" class="form-control" name="user" placeholder='"Ejemplo, Juan"'>
  </div>
  <div class="form-group">
    <small class="form-text">Contraseña</small>
    <input type="text" class="form-control" name="password" placeholder='"Ejemplo, 123456"'>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form><?php }
}
