{include file="header.tpl"}

<h1 class="text-center">Productos</h1>

<table class="table container">
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
                    {foreach from=$marcas item=marca}
                        <a class="dropdown-item" href="marcas/{$marca->id_marca}">{$marca->nombreMarca}</a>
                    {/foreach}
                </div>
            </div>
            </th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=producto}
        {if $filtro==null || $filtro=="todas"}
            <tr class="text-center">
                <th scope="row">{$producto->id}</th>
                <td><a href="producto/{$producto->id}">{$producto->nombre}</a></td>
                <td>{$producto->detalle|truncate:80}</td>
                <td>{$producto->presentacion}ml</td>
                <td>${$producto->precio}</td>
                <td>{$producto->nombreMarca}</td>
                {if $user&&$user->admin==1}
                    <td><a href="editar/{$producto->id}"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                    <a href="borrar/{$producto->id}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                {/if}
            </tr>
        {else}
        {if $producto->id_marca == $filtro}
            <tr class="text-center">
                <th scope="row">{$producto->id}</th>
                <td><a href="producto/{$producto->id}">{$producto->nombre}</a></td>
                <td>{$producto->detalle|truncate:80}</td>
                <td>{$producto->presentacion}ml</td>
                <td>${$producto->precio}</td>
                <td>{$producto->nombreMarca}</td>
                {if $user&&$user->admin==1}
                    <td><a href="editar/{$producto->id}"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                    <a href="borrar/{$producto->id}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                {/if}
            </tr>
        {/if}
        {/if}
        {/foreach}
    </tbody>
</table>

{if $user&&$user->admin==1}
    {include file="formAddProducto.tpl"}
{/if}

{include file="footer.tpl"}