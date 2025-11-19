<?php
function mostrarCiudad(){

    if(isset ($_GET['ciudad'])){
        $ciudad = $_GET['ciudad'];
    }else{
        $ciudad = "NO SE HA DEFINIDO";
    }

    return $ciudad;
}

function mostrarFecha(){

    if(isset ($_GET['fecha'])){
        if($_GET['fecha'] == "Pendiente"){#En este caso vendríamos de forzar el get a través del formulario
            $fechaFormateada = "Le avisaremos cuando haya disponibilidad <br>";
        }else{
                $fecha = $_GET['fecha'];
                $tiempo = strtotime($fecha);
                $fechaFormateada = date ("l, d F Y", $tiempo);

            }
        
    }else{
        $fechaFormateada = "NO SE HA ELEGIDO FECHA"; #Habríamos accedido a esta página sin haber rellenado el formulario
    }
    return $fechaFormateada;
}

?>