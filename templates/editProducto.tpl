{include file="header.tpl"}

<table class="table container">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Detalle</th>
            <th scope="col">Presentacion</th>
            <th scope="col">Precio</th>
            <th scope="col">Marca</th>
        </tr>
    </thead>
    <tbody>
          <tr class="text-center bg-warning font-weight-bold">
              <th scope="row">{$producto->id}</th>
              <td>{$producto->nombre}</td>
              <td>{$producto->detalle}</td>
              <td>{$producto->presentacion}ml</td>
              <td>${$producto->precio}</td>
              <td>{$producto->nombreMarca}</td>
          </tr>
    </tbody>
</table>


{include file="formEditProducto.tpl"}


{include file="footer.tpl"}