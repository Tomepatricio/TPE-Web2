<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 19:14:41
  from 'C:\xampp\htdocs\Web2\TPE\TPE-Web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc53691c12f71_83425644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57b1abb9d084a22e188a3ea7f09261f0cefd39eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\TPE-Web2\\templates\\header.tpl',
      1 => 1606760074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc53691c12f71_83425644 (Smarty_Internal_Template $_smarty_tpl) {
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
        .page-link{
            background-color: rgb(13, 133, 163);
            color:white;
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
                            <h3 class="text-white"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</h3>
                            <input id="admin" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->admin;?>
">
                            <div class="m-2">
                                <a href="logout"><small>Logout</small></a>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
                                    <a class="text-white text-center ml-2" href="registro"><span class="badge badge-warning">Administrar Usuarios</span></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <input id="admin" type="hidden" value="2">
                    <div class="col">
                        <small class="form-text text-white"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</small>
                        <form action="login" method="post" class="form-inline">
                            <div class="form-group mb-2">
                            <div class="admin"> 
                                <label for="user" class="sr-only">Usuario</label>
                                <input type="text" class="form-control" name="username" id="user" placeholder='"Usuario"'>
                            </div>
                            </div>
                            <div class="form-group mx-sm-3 mb-2 admin">
                                <label for="password" class="sr-only">Contraseña</label>
                                <input type="password" class="form-control" name="password"id="password" placeholder='"Contraseña"'>
                            </div>
                            <div class="btn-group-vertical">
                                <button type="submit" class="btn-sm btn-success mb-2">Confirmar</button>
                                <a class="text-white text-center" href="registro"><span class="badge badge-warning">Registro</span></a>
                            </div>
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
