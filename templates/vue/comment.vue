{literal}
    <div id="vue-comentarios">
        <ul>
            <li 
                v-for="comment in comments" class="list-group"
                v-if="comment.id_producto == {$producto->id}">
                {{ comment.comentario }}
            </li>
        </ul>
    </div>
{/literal}