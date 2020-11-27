<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 03:13:42
  from 'C:\xampp\htdocs\web2\TPE-API\git\test\templates\servicios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc6c56392961_89888819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9788e3210ef888e18ca282b92e36c9030fe46b21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-API\\git\\test\\templates\\servicios.tpl',
      1 => 1605118595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbc6c56392961_89888819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <label>Filtrar por Servicio:<input type="text" id="filtro"></label>

        <table class="tabla">
            <thead>
                <tr>
                    <th>Sercicios</th>
                    <th>Detalles</th>
                    <th>Costo</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody id="body_tabla"></tbody>
        </table>

        <section id="input_tabla">
            <label>Ingrese Servicio: <input type="text" id="input_servicio"></label>
            <label>Ingrese Etapas: <input type="text" id="input_etapa"></label>
            <label>Ingrese Precio: <input type="number" id="input_precio"></label>
        </section>

        <button id="btn-agregar-tabla">Agregar</button>
        <button id="btn-borrar-tabla">Limpiar Tabla</button>
        <button id="btn-cargar-tres-tabla">Agregar 3 Elementos</button>
        <button id="btn-cargar">Cargar API</button>

        <ol id="lista_servicios">
            <li>Limpieza y Desinfección del interior del Vehículo</li>
            <li>Pulido en 1 Etapa</li>
            <li>Pulido en 2 Etapas</li>
            <li>Pulido en 3 Etapas</li>
            <li>Sin Sellado</li>
            <li>Sellado Acrílico</li>
            <li>Sellado Céramico</li>
            <li>Sin Protección</li>
            <li>Protección de 6 meses</li>
            <li>Protección de 3 años</li>
            <li>Nutrido de Plasticos y Cuero</li>
            <li>Siliconado de Alfombras y Burletes</li>
        </ol>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
