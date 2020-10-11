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
        <tr class="text-center">
            <th scope="row">{$idMarca->id_marca}</th>
            <td>{$idMarca->nombreMarca}</td>
            <td>{$idMarca->descripcion|truncate:100}</td>
            <td>{$idMarca->origen}</td>
            <td>{$idMarca->puntaje}ml</td>
        </tr>
    </tbody>
</table>

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

{include file="footer.tpl"}