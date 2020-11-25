{literal}
    <div id="vue-comentarios">
        <ul class="container">
            <li class="list-group-item borden-3 d-flex justify-content-between"
                v-for="comment in comments" class="list-group"
                v-if="comment.id_producto == id">
                <small class="badge badge-info d-flex align-items-center">valoracion: {{ comment.valoracion}} </small>
                <span class="text-success text-monospace font-weight-bolder p-3">{{ comment.comentario }} </span>
                <span class="d-flex align-items-center" v-if="admin==1"><button class="badge badge-danger" v-on:click="deleteComment(comment.id)"><small>Eliminar</small></button></span>
            </li>
        </ul>
    </div>
{/literal}