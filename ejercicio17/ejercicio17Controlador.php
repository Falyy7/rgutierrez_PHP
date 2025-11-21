<?php
#Incluimos el modelo
include ("ejercicio17Modelo.php");

#Incluimos las funcionalidades
function enumerarTareas(){
    $listaTareas = recuperarTareas();
    foreach($listaTareas as $tarea){
        echo "<li>" . $tarea . "</li>";
    }
}
#Ahora deberemos comprobar si se trata de añadir
#una nueva tarea mediante: 

if(isset($_POST['nuevaTarea'])){
    guardarTarea($_POST['nuevaTarea']);
    header("Location: ejercicio17Vista.php");
}
?>