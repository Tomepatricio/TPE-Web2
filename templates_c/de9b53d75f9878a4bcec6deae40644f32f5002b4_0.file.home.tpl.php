<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 18:53:50
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc531aeba8200_49809341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9b53d75f9878a4bcec6deae40644f32f5002b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\home.tpl',
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
function content_5fc531aeba8200_49809341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <section class="text-dark text-center">
            <p class="font-weight-bold">Somos una empresa dedicada al cuidado estetico de tu vehiculo, 
                realizamos todo tipo de tratamiento para embellecer y darle
                a tu vehiculo un aspecto personalizado. <br>
                Podes encontrarnos en: <br>Av Espora 1075 o enviarnos tu consulta al
                2494-554773.
            </p>
        </section>

        <aside class="text-center">
            <form>
                <p>Introduce Nombre y Apellido:</p>
                <input type="text" placeholder="Ej. Juan">
                <p>Direccion de mail:</p>
                <input type="text" placeholder="Ej. asdfg@hotmail.com">
                <p>Numero de Tel:</p>
                <input type="tel" placeholder="Ej. 249-4111111">
                <p>Consulta:</p>
                <textarea name="Consulta" id="" cols="30" rows="10" placeholder="Deja tu consulta"></textarea>
                <div class="captcha">
                    <p>Complete el codigo de validacion:</p>
                    <p id="validacion"></p>
                    <input type="text" id="input_validacion"><br>
                </div>
                <p id="result_captcha"></p>   
            </form>
            <button id="boton_form">Enviar</button>
        </aside>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
