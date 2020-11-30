"use strict"

let busqueda= new Vue({
    el:'#vue-search',
    data: {
        products:[],
    },
    methods: {
        search:function(e){
            e.preventDefault();
            busqueda.products=[];
            let valor=document.querySelector('#inputSearch').value;
            fetch('api/productos')
            .then(response => response.json())
            .then(product => {
                for (const pp of product) {
                    if(pp.nombre.includes(valor))
                        busqueda.products.push(pp);
                }
                renderProductosfiltrados();
            })
            .catch(error=>console.log(error))
        }
    }
});

function renderProductosfiltrados(){
    document.querySelector('tbody').innerHTML="";
    console.log(busqueda.products);
    let user=document.querySelector('#admin').value;
    for (let index = 0; index < busqueda.products.length; index++){
        console.log("aaaaaaa"+index);
        if(user!=1){
            document.querySelector("#product-row").innerHTML+="<tr><th scope='row'>"+busqueda.products[index].id+"</th><td><a href='producto/"+busqueda.products[index].id+"'>"
            +busqueda.products[index].nombre+"</a></td><td>"+truncateString(busqueda.products[index].detalle)+"</td><td>"
            +busqueda.products[index].presentacion+"ml</td><td>$"+busqueda.products[index].precio+
            "</td><td>"+busqueda.products[index].nombreMarca+"</td></tr>"
        }else{
            document.querySelector("#product-row").innerHTML+="<tr><th scope='row'>"+busqueda.products[index].id+"</th><td><a href='producto/"+busqueda.products[index].id+"'>"
            +busqueda.products[index].nombre+"</a></td><td>"+truncateString(busqueda.products[index].detalle)+"</td><td>"
            +busqueda.products[index].presentacion+"ml</td><td>$"+busqueda.products[index].precio+
            "</td><td>"+busqueda.products[index].nombreMarca+"</td><td><a href=editar/"+busqueda.products[index].id+
            "><button type='button' class='btn btn-outline-warning'>Editar</button></a><a href=borrar/"+busqueda.products[index].id+
            "><button type='button' class='btn btn-outline-danger'>Borrar</button></a></td></tr>"
        }
    }
    return busqueda.products;
}

function truncateString(str) {
    return str.slice(0,77);
}

function getProducts() {
    fetch('api/productos')
    .then(response=>response.json())
    .then(product=>busqueda.products=product)
    .catch(error=>console.log(error))
}

