{include file="header.tpl"}

<h1 class="text-center">{$producto->nombre}</h1>

<div class="card text-center container" style="width: 40rem;">
  <img src="..." class="card-img-top" alt="...">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{$producto->detalle}</li>
    <li class="list-group-item">${$producto->precio}</li>
    {foreach from=$marcas item=marca}
            {if $marca->id_marca == $producto->id_marca}
                <li class="list-group-item">{$marca->nombre}</li>
            {/if}
    {/foreach}
  </ul>
</div>

{if $user}
    <form class="container" action="editar" method="post">
      <div class="form-group">
        <small class="form-text text-muted">ID</small>
        <input type="hidden" class="form-control" name="idProducto" value={$producto->id}>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Nombre del Producto</small>
        <input type="text" class="form-control" name="nombreProducto" value={$producto->nombre}>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Descripcion del Producto</small>
        <input type="text" class="form-control" name="detalleProducto" value={$producto->detalle}>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Presentacion del Producto</small>
        <input type="number" class="form-control" name="presentacionProducto" value={$producto->presentacion}>
      </div>
      <div class="form-group">
        <small class="form-text text-muted">Precio del Producto</small>
        <input type="number" class="form-control" name="precioProducto" value={$producto->precio}>
      </div>
      <div class="form-group">
      <small class="form-text text-white">Marca del Producto</small>
      <select name="marcaProducto">
          {foreach from=$marcas item=marca key=key name=name}
              <option name="marcaProducto" value={$marca->id_marca}>{$marca->nombre}</option>
          {/foreach}
      </select>
      </div>
      <button type="submit" class="btn btn-warning">Editar</button>
    </form>
{/if}

{include file="footer.tpl"}