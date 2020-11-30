<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 19:09:36
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\vue\search.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc53560b2eeb1_65831480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19f8857b2c1ebfb1224f6a507afa42d25b2a25f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\vue\\search.vue',
      1 => 1606759068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc53560b2eeb1_65831480 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <div id="vue-search">
    <input type="text" id="inputSearch" v-on:keyup="search">
</div> -->

<div id ="vue-search" class="container">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <span>Filtro:</span>
      </div>
    </div>
    <input type="text" id="inputSearch" v-on:keyup="search" class="form-control" aria-label="Text input with checkbox">
  </div>
</div>
<?php }
}
