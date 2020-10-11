<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 19:32:35
  from 'C:\xampp\htdocs\web2\TEST TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8341b3166965_05061469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a20ea2b173268e4d2fb3bf7c59122cf1db28a0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TEST TPE\\templates\\header.tpl',
      1 => 1602437549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8341b3166965_05061469 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="js/captcha.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/navegacion.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/servicios.js"><?php echo '</script'; ?>
>
    <style>
        /*body  {
        background-image: url("images/gif.gif");
        background-size:100%;
        }*/
        .carousel-inner img {
            max-width: 100%;
            max-height: 660px;
         }

        .carousel-inner{
            height: 600px;
        }
        .table thead th {
            vertical-align: text-top;
            border-bottom: 2px solid #dee2e6;
        }
        </style>
</head>
<body>
    <article>
        <header class="text-center p-3 mb-2 bg-dark">
            <div class="row">
                <div class="col-7">
                    <h1 class="text-success"> <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value, 'UTF-8');?>
</h1>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>       
                    <div class="col">
                        <div class="row">
                            <h3 class="text-white"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h3>
                            <a href="logout"><small>Logout</small></a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col">
                        <small class="form-text text-white"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</small>
                        <form action="login" method="post" class="form-inline">
                            <div class="form-group mb-2">
                            <div class="admin"> 
                                <label for="user" class="sr-only">Usuario</label>
                                <input type="text" class="form-control" name="user" id="user" placeholder='"Usuario"'>
                            </div>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 admin">
                                <label for="password" class="sr-only">Contraseña</label>
                                <input type="password" class="form-control" name="password"id="password" placeholder='"Contraseña"'>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                        </form>
                    </div>    
                <?php }?>
            </div>

            <nav class="navbar-center">
                <a class="btn btn-outline-success font-weight-bold" href="home">HOME</a>
                <a class="btn btn-outline-success font-weight-bold" href="servicios">SERVICIOS</a>
                <a class="btn btn-outline-success font-weight-bold" href="galeria">GALERIA</a>
                <a class="btn btn-outline-success font-weight-bold" href="productos">PRODUCTOS</a>
            </nav>
        </header>
<?php }
}
