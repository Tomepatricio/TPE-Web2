<form class="container" action="marcas/insertar" method="post">
  <div class="form-group">
    <small class="form-text">Nombre de la Marca</small>
    <input type="text" class="form-control" name="nombreMarca" placeholder='"Ejemplo, Menzerna"'>
  </div>
  <div class="form-group">
    <small class="form-text">Descripcion de la Marca</small>
    <input type="text" class="form-control" name="descripcionMarca" placeholder="Descripcion de la Marca...">
  </div>
  <div class="form-group">
    <small class="form-text">Origen de la Marca</small>
    <input type="text" class="form-control" name="origenMarca" placeholder="Ejemplo, Alemania">
  </div>
  <div class="form-group">
    <small class="form-text">Puntaje</small>
    <input type="number" class="form-control" name="puntajeMarca" placeholder="Ejemplo, 99">
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>