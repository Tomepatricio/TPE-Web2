{literal}
<!-- <div id="vue-search">
    <input type="text" id="inputSearch" v-on:keyup="search">
</div> -->

<div id ="vue-search" class="container">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <span>Filtro:</span>
      </div>
    </div>
    <input type="text" id="inputSearch" v-on:keyup="search" class="form-control" aria-label="Text input with checkbox">
  </div>
</div>
{/literal}