<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 15:46:43
  from 'C:\xampp\htdocs\web2\TPE\templates\productosFiltrados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f75ddc38a8018_69012667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5d22320b68b1c76e92072e0135b1b143e96478' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\productosFiltrados.tpl',
      1 => 1601559999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tablaAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f75ddc38a8018_69012667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TPE\\libs\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center">Productos</h1>

<table class="table">
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
                    <a class="dropdown-item" href="ir a Marcas">Ir a Marcas</a>
                    <a class="dropdown-item" href="marcas/todas">Todas</a>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                        <a class="dropdown-item" href="marcas/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            </th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['filtro']->value == null || $_smarty_tpl->tpl_vars['filtro']->value == "todas") {?>
            <tr class="text-center">
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->detalle,100);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->presentacion;?>
ml</td>
                <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['marca']->value->id_marca == $_smarty_tpl->tpl_vars['producto']->value->id_marca) {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</td>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
            </tr>
        <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['producto']->value->id_marca == $_smarty_tpl->tpl_vars['filtro']->value) {?>
            <tr class="text-center">
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->detalle,100);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->presentacion;?>
ml</td>
                <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['marca']->value->id_marca == $_smarty_tpl->tpl_vars['producto']->value->id_marca) {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</td>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
            </tr>
        <?php }?>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:tablaAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
