<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 03:02:57
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\formAddMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83ab41888c50_70525554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cf53dc3a8ae7996420baad256e1635dc209b4df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\formAddMarca.tpl',
      1 => 1602464509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f83ab41888c50_70525554 (Smarty_Internal_Template $_smarty_tpl) {
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
