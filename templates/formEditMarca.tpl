<form class="container" action="marcaseditar" method="post">
    <div class="form-group">
    <input type="hidden" class="form-control" name="idMarca" value={$idMarca->id_marca}>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Nombre del Producto</small>
    <input type="text" class="form-control" name="nombreMarca" value={$idMarca->nombreMarca}>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Descripcion del Producto</small>
    <input type="text" class="form-control" name="descripcionMarca" value={$idMarca->descripcion}>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Descripcion del Producto</small>
    <input type="text" class="form-control" name="origenMarca" value={$idMarca->origen}>
    </div>
    <div class="form-group">
    <small class="form-text text-muted">Presentacion del Producto</small>
    <input type="number" class="form-control" name="puntajeMarca" value={$idMarca->puntaje}>
    </div>
    <button type="submit" class="btn btn-warning">Editar</button>
</form>