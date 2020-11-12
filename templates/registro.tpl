{include file="header.tpl"}

{if $message!=""}<!--ver esto-->
    <div class="container pd-10">
        <div class="p-3 mb-2 bg-info text-white">{$message}</div>
    </div>
{/if}

{if $user!=null}
    {if $user->admin==1}
    <form class="container" action="registroUpdate" method="post">
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
                            <td class="text-center">Es administrador:<input type="checkbox" {if $u->admin == 1}checked="checked"{/if}></td>
                            <td class="text-center"><a href="registro/eliminar/{$u->username}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center"><button type="submit" class=" btn-sm btn-success mb-2">Enviar</button></div>
    </form>    
    {/if}
{else}
    {include file="tablaRegistro.tpl"}
{/if}
    

{include file="footer.tpl"}