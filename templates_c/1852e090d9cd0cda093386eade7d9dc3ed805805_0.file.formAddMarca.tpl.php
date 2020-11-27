<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-13 00:43:36
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\formAddMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fadc8a8ec1019_97379180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1852e090d9cd0cda093386eade7d9dc3ed805805' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\formAddMarca.tpl',
      1 => 1605118594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fadc8a8ec1019_97379180 (Smarty_Internal_Template $_smarty_tpl) {
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
