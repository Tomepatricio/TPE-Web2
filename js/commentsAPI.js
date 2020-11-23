"use strict"

document.addEventListener ("DOMContentLoaded",()=>{
    getComment();
});


let comentarios= new Vue({
    el:'#vue-comentarios',
    data: {
        comments:['hola', 'chau','holafachitaquerido']
    }
});


function getComment(){
    fetch('api/comment')
    .then(response => response.json())
    .then(comment => {
            comentarios.comments = comment;})
    .catch(error=>console.log(error))
}
