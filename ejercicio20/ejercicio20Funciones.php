<?php
    function asignaClase($clase){
        switch ($clase){
            case 'profesor':
                echo "img/logo-profesor.png";
                break;
            case 'alumno':
                echo "img/logo-alumno.png";
                break;
            case 'unknown':
                echo "img/unknown.jpg";
                break;
        }
    }


    function asignaGenero($genero){
        switch ($genero){
            case 'masculino':
                echo "img/logo-masculino.png";
                break;
            case 'femenino':
                echo "img/logo-femenino.png";
                break;
            case 'otro':
                echo "img/logo-otrogen.png";
                break;
            }
    }
?>