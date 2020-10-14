<form class="container" action="editar" method="post">
    <div class="form-group">
    <small class="form-text text-muted">ID</small>
    <input type="hidden" class="form-control" name="idProducto" value={$producto->id}>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Nombre del Producto</small>
    <input type="text" class="form-control" name="nombreProducto" value="{$producto->nombre}">
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Descripcion del Producto</small>
    <input type="text" class="form-control" name="detalleProducto" value="{$producto->detalle}">
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Presentacion del Producto</small>
    <input type="number" class="form-control" name="presentacionProducto" value="{$producto->presentacion}">
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Precio del Producto</small>
    <input type="number" class="form-control" name="precioProducto" value="{$producto->precio}">
    </div>
    <div class="form-group">
    <small class="form-text text-white">Marca del Producto</small>
    <select name="marcaProducto">
        {foreach from=$marcas item=marca key=key name=name}
            <option name="marcaProducto" value="{$producto->nombreMarca}"</option>
        {/foreach}
    </select>
    </div>
    <button type="submit" class="btn btn-warning">Editar</button>
</form>