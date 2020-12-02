<form class="container" action="insertar" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <small class="form-text">Nombre del Producto</small>
    <input type="text" class="form-control" name="nombreProducto" placeholder='"Ejemplo, Final Touch"'>
  </div>
  <div class="form-group">
    <small class="form-text">Descripcion del Producto</small>
    <input type="text" class="form-control" name="detalleProducto" placeholder="Descripcion del producto...">
  </div>
  <div class="form-group">
    <small class="form-text">Presentacion del Producto</small>
    <input type="number" class="form-control" name="presentacionProducto" placeholder="Ejemplo, 500ml">
  </div>
  <div class="form-group">
    <small class="form-text">Precio del Producto</small>
    <input type="number" class="form-control" name="precioProducto" placeholder="Ejemplo, 1000">
  </div>
  <div class="form-group">
    <small class="form-text text-white">Marca del Producto</small>
    <select name="marcaProducto">
        {foreach from=$marcas item=marca key=key name=name}
            <option name="marcaProducto" value={$marca->id_marca}>{$marca->nombreMarca}</option>
        {/foreach}
    </select>
  </div>
  <div class="form-group">
    <small class="form-text">Adjuntar Imagen:</small>
    <input type="file" class="" name="imgProducto" id="imgUpload">
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>