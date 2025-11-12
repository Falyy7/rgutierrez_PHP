<?php

if(isset($_COOKIE['eleccion']))

    if( $_COOKIE["eleccion"] == "Carne"){

        echo "Hay ternera";

    } else if (  $_COOKIE["eleccion"] == "Pescado"){

        echo "Hay merluza";

    } else{

        echo "Hay menestra de verduras";
        
    }
    
?>