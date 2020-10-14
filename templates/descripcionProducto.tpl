{include file="header.tpl"}

<h1 class="text-center">{$producto->nombre}</h1>

<div class="card text-center container" style="width: 40rem;">
  <img src="..." class="card-img-top" alt="...">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{$producto->detalle}</li>
    <li class="list-group-item">${$producto->precio}</li>
    <li class="list-group-item">{$producto->nombreMarca}</li>
  </ul>
  <a href="productos">Volver</a>
</div>

{if $user}
    {include file="formEditProducto.tpl"}
{/if}

{include file="footer.tpl"}