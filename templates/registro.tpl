{include file="header.tpl"}

{if $message!=""}<!--ver esto-->
    <div class="container pd-10">
        <div class="p-3 mb-2 bg-info text-white">{$message}</div>
    </div>
{/if}

{if $user!=null}
    {if $user->admin==1}
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$users item=u}
                        <tr>
                            <td class="text-center">{$u->username}</td>
                            {if $u->admin==1}
                                <td class="text-center bg-success">Es administrador<a href="update/{$u->username}"><button type="submit" class="btn btn-outline-danger ml-3">Unset Admin</button></a></td>
                            {else}
                                <td class="text-center bg-secondary">No es administrador <a href="update/{$u->username}"><button type="submit" class="btn btn-outline-danger ml-3">Set Admin</button></a></td>
                            {/if}
                            <td class="text-center"><a href="registroEliminar/{$u->username}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    {/if}
{else}
    {include file="tablaRegistro.tpl"}
{/if}
    

{include file="footer.tpl"}