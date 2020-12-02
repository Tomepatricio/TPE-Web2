<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 00:35:17
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\galeria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc581b563f477_05482949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3223e7bd8302b95ce59f5a0dafc2aaad28293133' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\galeria.tpl',
      1 => 1606758210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc581b563f477_05482949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container col-md-6">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/foto1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Chevrolet Agile</h5>
        <p>Pulido de Opticas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/foto2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Volkswagen Amarok</h5>
        <p>Tratamiento Acrilico</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/foto3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Volkswagen Amarok</h5>
        <p>Limpieza de Interior</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/foto4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mercedes Benz</h5>
        <p>Tratamiento Ceramico</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
