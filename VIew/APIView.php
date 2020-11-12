<?php

Class APIView {

    function productosJSON($productos){
        header("Content-Type: application/json");
        echo json_encode($productos);
    }

}