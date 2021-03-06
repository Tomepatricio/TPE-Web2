{include file="header.tpl"}

<h1 class="text-center">Marcas</h1>

<table class="table container">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Origen</th>
            <th scope="col">Puntaje</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$marcas item=marca}
            <tr class="text-center">
                <th scope="row">{$marca->id_marca}</th>
                <td>{$marca->nombreMarca}</td>
                <td>{$marca->descripcion|truncate:100}</td>
                <td>{$marca->origen}</td>
                <td>{$marca->puntaje}</td>
                {if $user&&$user->admin==1}
                    <td><a href="marcaseditar/{$marca->id_marca}"><button type="button" class="btn btn-outline-warning">Editar</button></a>
                    <a href="marcasborrar/{$marca->id_marca}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>

{if $user&&$user->admin==1}
    <div class="container mt-3">
        <h3 class="text-center border border-info">Agregar Marca</h3>
        {include file="formAddMarca.tpl"}
    </div>    
{/if}

{include file="footer.tpl"}