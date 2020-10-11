{include file="header.tpl"}

<table class="table">
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
                {if $user}
                    <td><a href="marcaseditar/{$marca->id_marca}"><button type="button" class="btn btn-outline-warning">Editar</button></a></td>
                    <td><a href="marcasborrar/{$marca->id_marca}"><button type="button" class="btn btn-outline-danger">Borrar</button></a></td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>

{if $user}
    {include file="tablaMarcas.tpl"}
{/if}

{include file="footer.tpl"}