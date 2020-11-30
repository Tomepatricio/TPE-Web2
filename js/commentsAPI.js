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
    if(comentarios.admin==1 || comentarios.admin==0){
        console.log("hola");
        document.querySelector('#formComment').addEventListener('submit',e=>addComment(e));
    }
    else    
        console.log("chau");
})

function getComment(){
    fetch('api/comment')
    .then(response => response.json())
    .then(comment => {
        comentarios.comments = comment;})
    .catch(error=>console.log(error))
}

function addComment(e){//VER QUE PASA QUE NO ESTA ENTRANDO POR ACA
    e.preventDefault();
    let cc={
        comentario: document.querySelector('#comment').value,
        id_producto: comentarios.id,
        valoracion: document.querySelector('#valoracion').value
    }
    fetch('api/comment', {
        method:'POST',
        headers:{"Content-Type":"application/json"},
        body:JSON.stringify(cc)
    })
    .then(response=>response.json())
    .then(comment=>{
        comentarios.comments.push(comment);
    })
    .catch(error=>console.log(error))
 }

//Tengo que ver que cuando cargo un comentario hago refresh de toda la pagina, 
//y tengo que agregar una user story y tengo que mostrar los comentarios siempre
//solo los users pueden agregar y los admin pueden borrar