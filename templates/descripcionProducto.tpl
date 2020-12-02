{include file="header.tpl"}

<h1 class="text-center">{$producto->nombre}</h1>

<div class="row container">
  <div class="col-6 text-center">
    <img style="width: 10rem;" src="{$producto->imagen}" class="card-img-top" alt="...">
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

<h3 class="container text-center border border-info mt-3">Comentarios</h3>
<input id="prodId" type="hidden" name="idProducto" value="{$producto->id}">
{include file="vue/comment.vue"}

{if $user}
<form class="container text-center" id="formComment">
  <div>
    <textarea class="border border-info text-success" name="comment" id="comment" cols="50" rows="5" placeholder="Dejanos tu comentario..."></textarea>
    <input id="prodId" type="hidden" name="idProducto" value="{$producto->id}">
  </div>
  <div>
    <label for="vol">Valoracion:</label>
  </div>
  <div>
    <input type="range" id="valoracion" name="valoracion" min="0" max="5">
  </div>
    <button class="btn btn-dark rounded-pill" type="submit">Enviar</button>
  </form>
{/if} 

{if $user&&$user->admin==1}
  <div class="container mt-3">
    <h3 class="text-center border border-info">Editar Producto</h3>
    {include file="formEditProducto.tpl"}
  </div>
{/if}

<div class="d-flex justify-content-center">
<nav aria-label="Page navigation example">
  <ul class="pagination text">
    <li class="page-item"><a class="page-link" href="productoant/{$producto->id}">Previous</a></li>
    <li class="page-item"><a class="page-link" href="productosig/{$producto->id}">Next</a></li>
  </ul>
</nav>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="js/commentsAPI.js"></script>

{include file="footer.tpl"}