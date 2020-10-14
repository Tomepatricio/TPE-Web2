{include file="header.tpl"}

<h1 class="text-center">Editar Marca</h1>

<table class="table container">
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
        <tr class="text-center bg-warning font-weight-bold">
            <th scope="row">{$idMarca->id_marca}</th>
            <td>{$idMarca->nombreMarca}</td>
            <td>{$idMarca->descripcion}</td>
            <td>{$idMarca->origen}</td>
            <td>{$idMarca->puntaje}ml</td>
        </tr>
    </tbody>
</table>

{include file="formEditMarca.tpl"}

{include file="footer.tpl"}