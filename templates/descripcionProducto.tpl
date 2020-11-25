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
  <h3 class="container text-center border border-info mt-3">Comentarios</h3><!--Ver esto, hacer la API-->
  {include file="vue/comment.vue"}
  <form class="container text-center" action="api/comment" method="POST">
    <div>
      <textarea class="border border-info text-success" name="comment" id="" cols="50" rows="5" placeholder="Dejanos tu comentario..."></textarea>
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
    <h3 class="text-center border border-info">Agregar Producto</h3>
    {include file="formEditProducto.tpl"}
  </div>
{/if}


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="js/commentsAPI.js"></script>

{include file="footer.tpl"}