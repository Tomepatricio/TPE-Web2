<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 18:17:22
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7cc226dbb98_71005208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0224cc5c7afb2243a58707e0e09f402ddedd7660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\productos.tpl',
      1 => 1606929434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/search.vue' => 1,
    'file:formAddProducto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc7cc226dbb98_71005208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\libs\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center">Productos</h1>

<?php $_smarty_tpl->_subTemplateRender("file:vue/search.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table id="table-products" class="table container">
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
    <tbody id="product-row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['filtro']->value == null || $_smarty_tpl->tpl_vars['filtro']->value == "todas") {?>
            <tr id="product-row" class="text-center">
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
                <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
                    <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                    <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                <?php }?>
            </tr>
        <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['producto']->value->id_marca == $_smarty_tpl->tpl_vars['filtro']->value) {?>
            <tr id="product-row" class="text-center">
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
                <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
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

<?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
    <div class="container mt-3">
        <h3 class="text-center border border-info">Agregar Producto</h3>
        <?php $_smarty_tpl->_subTemplateRender("file:formAddProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }?>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/search.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
