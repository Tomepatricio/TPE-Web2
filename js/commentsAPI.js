"use strict"

let comentarios= new Vue({
    el:'#vue-comentarios',
    data: {
        id:0,
        comments:[],
        admin: 0
    },
    methods: {
        deleteComment:function(id){
            fetch('api/comment/'+id, {
                method:'DELETE'
            })
            //.then(response => getComment())
            .then(response=>{
                let comentario=this.comments.findIndex(comment=>id===comment.id);
                if(comentario>=0)
                    this.comments.splice(comentario,1);
            })
            .catch(error=>console.log(error))
        }
    }
});

document.addEventListener("DOMContentLoaded", function(){
    comentarios.id=document.querySelector("#prodId").value;
    comentarios.admin=document.querySelector("#admin").value;
    getComment();
})

function getComment(){
    fetch('api/comment')
    .then(response => response.json())
    .then(comment => {
        comentarios.comments = comment;})
        .catch(error=>console.log(error))
}
//Tengo que ver que cuando cargo un comentario hago refresh de toda la pagina, 
//y tengo que agregar una user story y tengo que mostrar los comentarios siempre
//solo los users pueden agregar y los admin pueden borrar