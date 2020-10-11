document.addEventListener("DOMContentLoaded",function iniciar_pagina(){

    document.getElementById("navegacion").classList.add ("oculta");
    document.getElementById("menu").addEventListener("click",desplegar_menu);
    
    
    
    function desplegar_menu(){
        if (document.getElementById("navegacion").className == "oculta"){
            document.getElementById("navegacion").classList.remove ("oculta");
            document.getElementById("navegacion").classList.toggle ("visible");
        } else{
            document.getElementById("navegacion").classList.remove ("visible");
            document.getElementById("navegacion").classList.toggle ("oculta");
        }
    };


});