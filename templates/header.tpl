<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="js/captcha.js"></script>
    <script src="js/navegacion.js"></script>
    <script src="js/servicios.js"></script>
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
                    <h1 class="text-success"> {$titulo|upper}</h1>
                </div>

                {if $user}       
                    <div class="col">
                        <div class="row">
                            <h3 class="text-white">{$user}</h3>
                            <a href="logout"><small>Logout</small></a>
                        </div>
                    </div>
                {else}
                    <div class="col">
                        <small class="form-text text-white">{$message}</small>
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
                {/if}
            </div>

            <nav class="navbar-center">
                <a class="btn btn-outline-success font-weight-bold" href="home">HOME</a>
                <a class="btn btn-outline-success font-weight-bold" href="servicios">SERVICIOS</a>
                <a class="btn btn-outline-success font-weight-bold" href="galeria">GALERIA</a>
                <a class="btn btn-outline-success font-weight-bold" href="productos">PRODUCTOS</a>
            </nav>
        </header>