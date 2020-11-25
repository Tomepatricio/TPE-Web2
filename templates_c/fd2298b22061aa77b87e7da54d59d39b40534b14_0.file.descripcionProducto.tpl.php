<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 00:33:49
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\descripcionProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd985d4519f1_15376134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2298b22061aa77b87e7da54d59d39b40534b14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\descripcionProducto.tpl',
      1 => 1606260828,
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
function content_5fbd985d4519f1_15376134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h1>

<div class="row container">
  <div class="col-6 text-center">
    <img style="width: 10rem;" src="images/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
.jpg" class="card-img-top" alt="...">
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

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>  
  <h3 class="container text-center border border-info mt-3">Comentarios</h3><!--Ver esto, hacer la API-->
  <?php $_smarty_tpl->_subTemplateRender("file:vue/comment.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <form class="container text-center" action="api/comment" method="POST">
    <div>
      <textarea class="border border-info text-success" name="comment" id="" cols="50" rows="5" placeholder="Dejanos tu comentario..."></textarea>
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
    <h3 class="text-center border border-info">Agregar Producto</h3>
    <?php $_smarty_tpl->_subTemplateRender("file:formEditProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
<?php }?>


<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/commentsAPI.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
