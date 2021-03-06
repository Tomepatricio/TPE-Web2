<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 18:17:27
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\descripcionProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7cc270e7229_29016024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256270254f5f679cd129371ee3631a8d788ecafc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\descripcionProducto.tpl',
      1 => 1606929373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/comment.vue' => 1,
    'file:formEditProducto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc7cc270e7229_29016024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>

<div class="row container">
  <div class="col-6 text-center">
    <img style="width: 10rem;" src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" class="card-img-top" alt="...">
  </div>
  <div class="col-6">
  <div class="card text-center container" style="width: 40rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->detalle;?>
</li>
      <li class="list-group-item">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreMarca;?>
</li>
    </ul>
    <a href="productos">Volver</a>
  </div>
  </div>
</div>

<h3 class="container text-center border border-info mt-3">Comentarios</h3>
<input id="prodId" type="hidden" name="idProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">
<?php $_smarty_tpl->_subTemplateRender("file:vue/comment.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
<form class="container text-center" id="formComment">
  <div>
    <textarea class="border border-info text-success" name="comment" id="comment" cols="50" rows="5" placeholder="Dejanos tu comentario..."></textarea>
    <input id="prodId" type="hidden" name="idProducto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">
  </div>
  <div>
    <label for="vol">Valoracion:</label>
  </div>
  <div>
    <input type="range" id="valoracion" name="valoracion" min="0" max="5">
  </div>
    <button class="btn btn-dark rounded-pill" type="submit">Enviar</button>
  </form>
<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
  <div class="container mt-3">
    <h3 class="text-center border border-info">Editar Producto</h3>
    <?php $_smarty_tpl->_subTemplateRender("file:formEditProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
<?php }?>

<div class="d-flex justify-content-center">
<nav aria-label="Page navigation example">
  <ul class="pagination text">
    <li class="page-item"><a class="page-link" href="productoant/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Previous</a></li>
    <li class="page-item"><a class="page-link" href="productosig/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Next</a></li>
  </ul>
</nav>
</div>


<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/commentsAPI.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
