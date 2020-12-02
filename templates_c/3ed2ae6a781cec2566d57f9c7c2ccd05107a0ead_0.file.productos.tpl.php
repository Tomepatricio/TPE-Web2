<?php
<<<<<<< HEAD
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 21:17:06
=======
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 03:12:17
>>>>>>> develop
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
<<<<<<< HEAD
  'unifunc' => 'content_5fac46c254b9a8_00220900',
=======
  'unifunc' => 'content_5fc45501913b46_02144784',
>>>>>>> develop
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed2ae6a781cec2566d57f9c7c2ccd05107a0ead' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\productos.tpl',
<<<<<<< HEAD
      1 => 1605118594,
=======
      1 => 1606702335,
>>>>>>> develop
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
<<<<<<< HEAD
=======
    'file:vue/search.vue' => 1,
>>>>>>> develop
    'file:formAddProducto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_5fac46c254b9a8_00220900 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5fc45501913b46_02144784 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> develop
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\libs\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center">Productos</h1>

<<<<<<< HEAD
<table class="table container">
=======
<?php $_smarty_tpl->_subTemplateRender("file:vue/search.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table id="table-products" class="table container">
>>>>>>> develop
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Detalle</th>
            <th scope="col">Presentacion</th>
            <th scope="col">Precio</th>
            <th scope="col">
            <div class="dropdown">
                <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Marcas</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item bg-success text-white" href="marcas">Listado de Marcas</a>
                    <a class="dropdown-item" href="marcas/todas">Todas</a>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                        <a class="dropdown-item" href="marcas/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombreMarca;?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            </th>
        </tr>
    </thead>
<<<<<<< HEAD
    <tbody>
=======
    <tbody id="product-row">
>>>>>>> develop
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['filtro']->value == null || $_smarty_tpl->tpl_vars['filtro']->value == "todas") {?>
<<<<<<< HEAD
            <tr class="text-center">
=======
            <tr id="product-row" class="text-center">
>>>>>>> develop
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</th>
                <td><a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a></td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->detalle,80);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->presentacion;?>
ml</td>
                <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreMarca;?>
</td>
<<<<<<< HEAD
                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
=======
                <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
>>>>>>> develop
                    <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                    <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                <?php }?>
            </tr>
        <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['producto']->value->id_marca == $_smarty_tpl->tpl_vars['filtro']->value) {?>
<<<<<<< HEAD
            <tr class="text-center">
=======
            <tr id="product-row" class="text-center">
>>>>>>> develop
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</th>
                <td><a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a></td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->detalle,80);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->presentacion;?>
ml</td>
                <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreMarca;?>
</td>
<<<<<<< HEAD
                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
=======
                <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
>>>>>>> develop
                    <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                    <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                <?php }?>
            </tr>
        <?php }?>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<<<<<<< HEAD
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formAddProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

=======
<?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formAddProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/search.js"><?php echo '</script'; ?>
>

>>>>>>> develop
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
