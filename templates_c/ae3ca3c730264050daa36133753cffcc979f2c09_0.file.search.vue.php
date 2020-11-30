<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 04:12:16
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\vue\search.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc46310726e70_90835452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae3ca3c730264050daa36133753cffcc979f2c09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\vue\\search.vue',
      1 => 1606705903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc46310726e70_90835452 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <div id="vue-search">
    <input type="text" id="inputSearch" v-on:keyup="search">
</div> -->

<div id ="vue-search" class="container">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <input id="checkInput" type="checkbox" aria-label="Checkbox for following text input">
      </div>
    </div>
    <input type="text" id="inputSearch" v-on:keyup="search" class="form-control" aria-label="Text input with checkbox">
  </div>
</div>
<?php }
}
