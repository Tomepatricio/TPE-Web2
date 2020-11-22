"use strict";

document.addEventListener("DOMContentLoaded",()=>{
    let data=getComment();
    console.log(data);
    die();
});


const comentarios= new Vue({
    el:'#vue-comentarios',
    data: {
        comments:[]
    }
});


function getComment(){
    fetch('api/comment')
    .then(response => response.json())
    .then(comment => comentarios.comments = comment)
    .catch(error=>console.log(error))
}
