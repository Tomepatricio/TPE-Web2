<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 16:24:21
  from 'C:\xampp\htdocs\web2\TPE\templates\tablaMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75e6956d5332_47892612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e691374c3d616ca3b591fd452c3263e2b88f76f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\tablaMarcas.tpl',
      1 => 1601562257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f75e6956d5332_47892612 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="container" action="marcas/insertar" method="post">
  <div class="form-group">
    <small class="form-text">Nombre de la Marca</small>
    <input type="text" class="form-control" name="nombreMarca" placeholder='"Ejemplo, Menzerna"'>
  </div>
  <div class="form-group">
    <small class="form-text">Descripcion de la Marca</small>
    <input type="text" class="form-control" name="descripcionMarca" placeholder="Descripcion de la Marca...">
  </div>
  <div class="form-group">
    <small class="form-text">Origen de la Marca</small>
    <input type="text" class="form-control" name="origenMarca" placeholder="Ejemplo, Alemania">
  </div>
  <div class="form-group">
    <small class="form-text">Puntaje</small>
    <input type="number" class="form-control" name="puntajeMarca" placeholder="Ejemplo, 99">
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form><?php }
}
