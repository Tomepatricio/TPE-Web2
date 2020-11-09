{include file="header.tpl"}

{if $user!=null}
    {if $user->admin==1}
    <form class="container" action="registroAdd" method="post">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$users item=u}
                        <tr>
                            <td>{$u->username}</td>
                            <td>Es administrador:<input type="checkbox" {if $u->admin == 1}checked="checked"{/if}></td>
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

{if $message!=""}<!--ver esto-->
    <div class="container pd-10">
        <div class="p-3 mb-2 bg-info text-white">{$message}</div>
    </div>
{/if}
    

{include file="footer.tpl"}