{include file="header.tpl"}

<h1 class="text-center">{$producto->nombre}</h1>

<div class="row container">
  <div class="col-6 text-center">
    <img style="width: 10rem;" src="images/{$producto->id}.jpg" class="card-img-top" alt="...">
  </div>
  <div class="col-6">
  <div class="card text-center container" style="width: 40rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{$producto->detalle}</li>
      <li class="list-group-item">${$producto->precio}</li>
      <li class="list-group-item">{$producto->nombreMarca}</li>
    </ul>
    <a href="productos">Volver</a>
  </div>
  </div>
</div>

{if $user}
    {include file="formEditProducto.tpl"}
{/if}

{include file="footer.tpl"}